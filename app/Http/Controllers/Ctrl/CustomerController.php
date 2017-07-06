<?php

namespace App\Http\Controllers\Ctrl;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;

class CustomerController extends Controller
{
    
    public function __construct() {
       $this->customer = new Customer();
    }
    public function addnew(Request $request){
        
        
       $this->validate($request, $this->customer->rules);
       
       $result = $this->customer->create([
            'customer_name' =>$request->customer_name,
             'email'        =>$request->email,
            'phone'         =>$request->phone,
            'address'       =>$request->address,
            'UF'            =>$request->UF
            ]);
        if($result){
            return redirect()->route('showcustomers');
        }else{
            return "Erro ao cadastrar";
        }            
    }
    
    public function show(){
        $showtable = $this->customer->all();
     
        return view('customerlist',  compact('showtable'));
    }
    
    
}
