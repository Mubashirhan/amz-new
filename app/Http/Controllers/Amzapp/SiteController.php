<?php

namespace App\Http\Controllers\Amzapp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Models\Amzapp\Contact;
use App\Models\Amzapp\Customer;
use DB;

class SiteController extends Controller
{
    public $dir;

    // constructor function
    public function __construct(){

        $this->dir = Config::get('constants.dir');

    }

    // index function
    public function index(){
        return view($this->dir.'.'.__FUNCTION__);
    }

    // portfolio function
    public function portfolio(){
        return view($this->dir.'.'.__FUNCTION__);
    }

    // about us function
    public function aboutus(){
        return view($this->dir.'.'.__FUNCTION__);
    }

    // contact us function
    public function contact(){
        // if($request->do_post == '1'){
        //     return $this->_contact($request);
        // }
        return view($this->dir.'.'.__FUNCTION__);
    }

    // _contact function for contact form
    public function _contact(ContactRequest $request){

        // Customer create 
        $customer = new Customer;
        $customer_id = $customer->createCustomer($request);

        //if customer already exists
        if(!$customer_id){
            $customer = Customer::where('email', $request->email)->select('id')->first();
            $customer_id = $customer->id;
        }

        // form submit
        $contact = new Contact;
        $contact = $contact->submitForm($request, $customer_id);
        if($contact){

            // $details = [
            //     'title' => 'Mail from Dev',
            //     'body' => 'This is for testing'
            // ];
           
            Mail::to('mubashir.khan@amzonestep.com')->send(new \App\Mail\AmzMail2($request));
           
            return redirect()->back()->with('success', 'Email has been sent');
        }
    }

    // blog function
    public function blog(){
        return 'blog is on wordpress';
    }
}
