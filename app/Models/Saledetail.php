<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saledetail extends Model
{
    protected $table='tbl_sales_details';
    public $timestamps = false;
    use HasFactory;
}
