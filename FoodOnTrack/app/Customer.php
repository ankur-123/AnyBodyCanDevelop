<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    
   // protected $table ='customers';
 protected $guarded = [];
    protected $primaryKey = 'cust_id';
    public $timestamps = false;
    

    }
