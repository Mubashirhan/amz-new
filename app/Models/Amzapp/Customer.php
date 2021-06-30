<?php

namespace App\Models\Amzapp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Customer extends Model
{
    protected $guarded = [];
    protected $table = 'customers';

    public function createCustomer($request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:customers,email',
        ]);

        if (!$validator->fails()) {
            $customer = new Customer;
            $customer->first_name = $request->first? $request->last : $request->name;
            $customer->last_name = $request->last? $request->last : '';
            $customer->country = $request->country? $request->country : '';
            $customer->state = isset($request->state) ? $request->state:'';
            $customer->address = $request->address? $request->address : '';
            $customer->phone = $request->phone? $request->phone : '';
            $customer->email = $request->email;
            $customer->save();

            return $customer->id;
            }
        }
}
