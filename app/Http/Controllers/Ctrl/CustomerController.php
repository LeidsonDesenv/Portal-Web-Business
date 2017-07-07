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
    
    public function edit($valor){
        $edit = $this->customer->find($valor);
        $submitedit = "Atualizar Dados";
        if($edit){                       
            return view('cad',  compact('edit','submitedit'));
        }
        else {
            return "Erro ao acessar";
        }
    }
    
    public function show(){
        $showtable = $this->customer->all();
     
        return view('customerlist',  compact('showtable'));
    }
    
    public function saveedit(Request $request, $id){
        
        $result = $this->customer->find($id);
        $result2 = $result->update([
                        'customer_name' =>$request->customer_name,
                         'email'        =>$request->email,
                         'phone'         =>$request->phone,
                         'address'       =>$request->address,
                         'UF'            =>$request->UF
                    ]);
        if($result2){
            return  redirect()->route('showcustomers');
        }  else {
            return "Erro total";
        }
    }
    
    public function deletar(Request $request, $id){
        $result = $this->customer->find($id);        
        if($result){
            $result->delete();      
              return  redirect()->route('showcustomers');
        }
        
    }
    
    
}
