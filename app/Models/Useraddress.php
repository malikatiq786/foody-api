<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Useraddress extends Model
{
    protected $table='user_addresses';
    public $timestamps = false;
    use HasFactory;
}
