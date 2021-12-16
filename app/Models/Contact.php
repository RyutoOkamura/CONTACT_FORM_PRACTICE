<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static $rules = array(
        'name'     => 'required|max:10',
        'email'    => 'required|email',
        'tel'      => 'nullable|numeric',
        'gender'   => 'required',
        'contents' => 'required'
    );
}
