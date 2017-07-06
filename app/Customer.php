<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $primaryKey = "idCustomer";
    
    protected $fillable = ['customer_name', 'email', 'phone','address','UF'];
    
    public $rules = [   'customer_name' => 'required|max:60',
                        'email' => 'required|max:60',
                        'phone' => 'required|max:16',
                        'address' => 'required|max:100'                        
                    ];
    
}
