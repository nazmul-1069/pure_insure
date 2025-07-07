<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
//class FrontUser extends Model
class FrontUser extends Authenticatable
{
    use HasFactory;
    protected $table = 'front_users';

    protected $fillable = ['name','email','password'];
}
