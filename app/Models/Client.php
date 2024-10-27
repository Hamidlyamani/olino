<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class client extends User
{
    use HasFactory;
    public $fillable =['name','email','phone','adresse','password'];
   
    const ROLE_USER = 'user';
    const ROLE_ADMIN = 'admin';

    // ... other code ...

    public function isAdmin()
    {
        return $this->role === self::ROLE_ADMIN;
    }

}