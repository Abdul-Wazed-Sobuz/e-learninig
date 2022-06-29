<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $table = 'accounts';
    protected $primaryKey = 'account_id';
    public $timestamps = false;


     function teacher(){
         return $this->hasOne(Teacher::class, 'account_id', 'teacher_id');
     }

}
