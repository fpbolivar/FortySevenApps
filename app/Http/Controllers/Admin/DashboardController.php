<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth,Exception;
use App\Models\App;
use App\Models\Contact;
use Illuminate\Http\Request;


class DashboardController extends Controller
{

    public function Dashboard()
    {
        $totalApps = App::where(['is_deleted'=>"0"])->count();
        $totalContact = Contact::count();
        return view('admin.dashboard',compact('totalApps','totalContact'));
    }

    public function Contacts()
    {
        return view('admin.contacts.index');
    }

    public function ContactList(Request $request)
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
        $contact = Contact::query();
        $total = $contact->count(); // Get Total Data Count
        // search
        if (!empty($searchValue)) {
            $contact = $contact->where(function ($query) use ($searchValue) {
                $query->where('name', 'like', '%' . $searchValue . '%')
                    ->orWhere('email', 'like', '%' . $searchValue . '%')
                    ->orWhere('mobile', 'like', '%' . $searchValue . '%')
                    ->orWhere('message', 'like', '%' . $searchValue . '%');
            });
        };
        $totalFilter = $contact->count(); // After Filter Data Count
        $contact = $contact->select('id','name','email','mobile','message')->skip($start)->take($rowPerPage)->orderBy($columnName, $columnSortOrder)->get();
        $response = array(
            "draw" => intval($draw),
            "recordsTotal" => $total,
            "recordsFiltered" => $totalFilter,
            "data" => $contact,
        );
        return response()->json($response);
    }

}
