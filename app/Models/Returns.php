<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Returns extends Model
{
    use HasFactory;
        
    //table name
    protected $table = "returns";
    //fields
     protected $fillable = [

    'asset_id',
    'returned_by',
    'returned_by_contact',
    'quantity',
    'reason',
   

  
     ];        

}
