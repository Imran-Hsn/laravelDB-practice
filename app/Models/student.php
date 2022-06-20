<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    public $timestamps = false;

    // public function getNameAttribute($value) {
    //     $val = lcfirst($value);
        // $val1 = $value . ' Hossanin';
    //     return $val;
    // }

    public function setNameAttribute($value) {
        $this->attributes['name'] = "Mr " .$value;
    }
}
