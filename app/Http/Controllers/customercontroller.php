<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class customercontroller extends Controller
{
    public function login(){
        $customers = customer::get();
        return view('login',['customers' => $customers]);
    }
    public function save(Request $request){
        $customer = new customer;
        $customer->name = $request->name;
        $customer->save();
       
        
    }
    public function Edit(Request $request,$id){
        $user = customer::find($id);
        return view('edit',['user' => $user]);
    }
    public function update(Request $request){
        $customer = customer::find($request->id);
        $customer->name = $request->name;
        $customer->save();
       
    }
    public function delete(Request $request,$id){
        $user = customer::find($id);
        $user->delete();
    }
}
