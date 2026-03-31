<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;


    public function post()
    {
        return $this->hasMany(Post::class);
    }

    protected static function booted(): void
    {
        static::deleted(function ($employee) {
            $employee->post()->delete();
        });
    }


    public $timestamps = false;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'city',
        'country',
        'position',
    ];
}
