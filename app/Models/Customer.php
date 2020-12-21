<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'age',
        'phone',
        'email',
        'address',
    ];
    public function usesTimestamps():bool
    {
        return false;
    }
}
