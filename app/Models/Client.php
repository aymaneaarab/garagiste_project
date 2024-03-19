<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstName',
        'lastName',
        'address',
        'phoneNumber',
    ];
    public function User()
    {
        return $this->hasOne(User::class);
    }
}
