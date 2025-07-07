<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = ['service_id','subscription_id','person','package_name','image','details','duration','price','status'];

    public function service()
    {
        return $this->belongsTo(service::class);
    }

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }
}
