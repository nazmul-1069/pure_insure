<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageDetailList extends Model
{
    use HasFactory;

    protected $fillable = ['package_detail_id','package_id','title','price'];
}
