<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];

    public function post()
    {
        return $this->hasMany(Post::class);
    }

    public function setEmailAttribute(string $value)
    {
        $this->attributes['email'] = strtolower($value);
    }


    protected function Name(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => ucwords($value),
            set: fn(string $value) => strtolower($value),
        );
    }




    // protected $fillable = [
    //     'name',
    //     'email',
    //     'phone',
    //     'address',
    //     'city',
    //     'country',
    //     'position',
    // ];
}
