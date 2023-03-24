<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\App;
use App\Models\AppImage;
use App\Models\Contact;
use App\Http\Requests\Web\ContactRequest; 
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;


class MainController extends Controller
{
    public function Index(Request $request)
    {
        $getProducts = App::where(['is_deleted'=>"0"])->orderBy('id','DESC');
        $products = $getProducts->limit(4)->get();
        $count = $getProducts->count();
        return view('web.home',compact('products','count'));
    }

    public function Contact(Request $request)
    {
        return view('web.contact');
    }

    public function About(Request $request)
    {
        return view('web.about');
    }

    public function Products(Request $request)
    {
        $products = App::where(['is_deleted'=>"0"])->orderBy('id','DESC')->get();
        return view('web.products',compact('products'));
    }

    public function SingleProduct(Request $request,$id)
    {
        $data = App::where(['id'=>$id,'is_deleted'=>"0"])->with('Images')->first();
        return view('web.single-product',compact('data'));
    }

    public function ContactEmail(ContactRequest $validatedRequest)
    {
        $contact = new Contact;
        $contact->name = $validatedRequest->name;
        $contact->email = $validatedRequest->email;
        $contact->mobile = $validatedRequest->mobile;
        $contact->message = $validatedRequest->message;
        if($contact->save()){
            // Mail::to(env('CONTACT_EMAIL'))->send(new ContactMail($validatedRequest->all()));
            return back()->with('success', "Email sent successfully.");
        }else{
            return back()->with('error', "something went wrong.");

        }
    }

    public function AuthanticateRequestUrl(Request $request,$email,$password)
    {
        try {
            $encrypter = new \Illuminate\Encryption\Encrypter(env('ENCRYPTION_KEY_VALUE'), 'AES-128-CBC');
            $email = $email ? $encrypter->decrypt($email) : null; 
            $password = $password ? $encrypter->decrypt($password) : null;
            $response = array(
                "status" => 200,
                "message" => "success",
                "email" => $email,
                "password" => $password
            );
            return response()->json($response);
        } catch (\Throwable $th) {
            $response = array(
                "status" => 403,
                "message" => "something went wrong"
            );
            return response()->json($response);
        }
    }

    
}
