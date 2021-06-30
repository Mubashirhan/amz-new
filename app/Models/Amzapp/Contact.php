<?php

namespace App\Models\Amzapp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact_us';

    public function submitForm($request, $customer_id){
        $contact = new Contact;
        
        $contact->name = $request->name ? $request->name : null;
        $contact->email = $request->email;
        $contact->asin = $request->asin;
        $contact->message = $request->message;
        $contact->customer_id = $customer_id;
        $contact->page_id = $request->page_id;

        $contact->save();

        return $contact->id;

    }
}
