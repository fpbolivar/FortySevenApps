<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\AppInsertRequest;
use App\Models\App;
use App\Models\AppImage;
use App\Helper\FileUploadHelper;

class AppsController extends Controller
{
    public function Index(Request $request)
    {
        return view('admin.apps.index');
    }

    public function GetList(Request $request)
    {
        $draw = $request->draw; // Internal use
        $start = $request->start; // where to start next records for pagination
        $rowPerPage = $request->length; // How many recods needed per page for pagination
        $orderArray = $request->order; // It conatin sorting array
        $columnNameArray = $request->columns; // It will give us columns array    
        $searchArray = $request->search; // Contain search data
        $columnIndex = $orderArray[0]['column'];  // This will let us know, which column index should be sorted
        $columnName = $columnNameArray[$columnIndex]['data']; // Here we will get column name, Base on the index we get
        $columnSortOrder = $orderArray[0]['dir']; // This will get us order direction(ASC/DESC)
        $searchValue = $searchArray['value']; // This is search value 
        $app = App::query();
        $total = $app->where(['is_deleted'=>"0"])->count(); // Get Total Data Count
        // search
        if (!empty($searchValue)) {
            $app = $app->where(function ($query) use ($searchValue) {
                $query->where('name', 'like', '%' . $searchValue . '%')
                    ->orWhere('description', 'like', '%' . $searchValue . '%')
                    ->orWhere('play_store_link', 'like', '%' . $searchValue . '%')
                    ->orWhere('app_store_link', 'like', '%' . $searchValue . '%');
            });
        };
        $totalFilter = $app->where(['is_deleted'=>"0"])->count(); // After Filter Data Count
        $app = $app->select('id','logo','name','description','play_store_link','app_store_link','app_email','app_password','app_auth_url','ratings','no_of_reviews')->skip($start)->take($rowPerPage)->where(['is_deleted'=>"0"])->orderBy($columnName, $columnSortOrder)->get();
        $response = array(
            "draw" => intval($draw),
            "recordsTotal" => $total,
            "recordsFiltered" => $totalFilter,
            "data" => $app,
        );
        return response()->json($response);
    }


    public function Create()
    {
        return view('admin.apps.create');
    }

    public function Insert(AppInsertRequest $validatedRequest,FileUploadHelper $fileUploadHelper)
    {
        $encrypter = new \Illuminate\Encryption\Encrypter(env('ENCRYPTION_KEY_VALUE'), 'AES-128-CBC');
        $path = 'files-data/app-logo';
        $pathImages = 'files-data/app-images';
        $app = new App;
        $app->name = $validatedRequest->name;
        $app->description = $validatedRequest->description;
        $app->ratings = $validatedRequest->ratings ?? 0;
        $app->no_of_reviews = $validatedRequest->no_of_reviews ?? 0;
        $app->play_store_link = $validatedRequest->play_store_link ?? null;
        $app->app_store_link = $validatedRequest->app_store_link ?? null;  
        $app->app_email = $validatedRequest->app_email ? $encrypter->encrypt($validatedRequest->app_email) : null; 
        $app->app_password = $validatedRequest->app_password ? $encrypter->encrypt($validatedRequest->app_password) : null;
        $app->app_auth_url = $validatedRequest->app_auth_url ?? null; 
        $app->logo = $validatedRequest->has('logo') ? $fileUploadHelper->UploadFile($validatedRequest->logo,$path) : null;    
        if($app->save()){
            if($validatedRequest->has('images') && count($validatedRequest->images)){
                foreach ($validatedRequest->images as $image) {
                    $appImage = new AppImage;   
                    $appImage->app_id = $app->id; 
                    $appImage->image = $fileUploadHelper->UploadFile($image,$pathImages);    
                    $appImage->save();    
                }
            }
            return redirect()->route('admin.apps');
        }
        return back()->with('error', "something went wrong!");
    }

    public function Edit($id)
    {
        $encrypter = new \Illuminate\Encryption\Encrypter(env('ENCRYPTION_KEY_VALUE'), 'AES-128-CBC');
        $edit = App::whereid($id)->with('Images')->first();
        $edit->app_email = $edit->app_email ? $encrypter->decrypt($edit->app_email) : null; 
        $edit->app_password = $edit->app_password ? $encrypter->decrypt($edit->app_password) : null;
        return view('admin.apps.edit',compact('edit'));
    }

    public function update(AppInsertRequest $validatedRequest,FileUploadHelper $fileUploadHelper,$id)
    {
        $encrypter = new \Illuminate\Encryption\Encrypter(env('ENCRYPTION_KEY_VALUE'), 'AES-128-CBC');
        $path = 'files-data/app-logo';
        $pathImages = 'files-data/app-images';
        $update = App::where(['id'=>$id,'is_deleted'=>"0"])->first();
        $update->name = $validatedRequest->name;
        $update->description = $validatedRequest->description;
        $update->ratings = $validatedRequest->ratings ?? 0;
        $update->no_of_reviews = $validatedRequest->no_of_reviews ?? 0;
        $update->play_store_link = $validatedRequest->play_store_link ?? null;
        $update->app_store_link = $validatedRequest->app_store_link ?? null;
        $update->app_email = $validatedRequest->app_email ? $encrypter->encrypt($validatedRequest->app_email) : null; 
        $update->app_password = $validatedRequest->app_password ? $encrypter->encrypt($validatedRequest->app_password) : null;
        $update->app_auth_url = $validatedRequest->app_auth_url?? null; 
        $update->logo = $validatedRequest->has('logo') ? $fileUploadHelper->UploadFile($validatedRequest->logo,$path) : str_replace(env('BASE_URL_IMAGE'),"",$update->logo);    
        if($update->save()){
            if($validatedRequest->has('images') && count($validatedRequest->images)){
                foreach ($validatedRequest->images as $image) {
                    $appImage = new AppImage;
                    $appImage->app_id = $update->id; 
                    $appImage->image = $fileUploadHelper->UploadFile($image,$pathImages);    
                    $appImage->save();    
                }
            }
            return redirect()->route('admin.apps');
        }
        return back()->with('error', "something went wrong!");
    }

    public function View($id){
        $data = App::where(['id'=>$id,'is_deleted'=>"0"])->with('Images')->first();
        return view('admin.apps.view',compact('data'));
    }

    public function Delete($id){
        $data = App::where(['id'=>$id])->delete();
        $data = AppImage::where(['app_id'=>$id])->delete();
        return back()->with('success', "app deleted successfully.");
    }

    public function DeleteImage(Request $request){
        if($request->id && $request->type){
            if($request->type == 'logo'){
                $edit = App::whereid($request->id)->update(['logo'=>null]);
            }elseif($request->type == 'image'){
                $edit = AppImage::whereid($request->id)->update(['is_deleted'=>'1']);
            }
        }
        return response()->json(["status"=>200,'message'=> 'file deleted successfully.']);
    }


}
