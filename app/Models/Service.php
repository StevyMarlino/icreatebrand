<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'description',
        'type',
        'slug',
        'service_type'
    ];

    public static function getPoster()
    {
        return static::where('service_type','POSTER')
            ->where('type','PUBLISHED')
            ->get();
    }

    public static function getBrand()
    {
        return static::where('service_type','BRAND')
            ->where('type','PUBLISHED')
            ->get();
    }

    public static function getUi()
    {
        return static::where('service_type','UI')
            ->where('type','PUBLISHED')
            ->get();
    }

    public static function getPackage()
    {
        return static::where('service_type','PACKAGE')
            ->where('type','PUBLISHED')
            ->get();
    }

    public static function findBySlug($slug)
    {
        return static::where('slug',$slug)->get();
    }



}
