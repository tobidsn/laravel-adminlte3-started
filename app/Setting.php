<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['key', 'value'];

    public static function find_key($key)
    {
    	return Setting::where('key', $key)->first()->value;
    }
}
