<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function poster()
    {
        $data = [
            'posters' => Service::getPoster()
        ];
        return view('services.poster',$data);
    }

    public function package()
    {
        $data = [
            'packages' => Service::getPackage(),
        ];
        return view('services.package',$data);
    }

    public function ui()
    {
        $data = [
            'uis' => Service::getUi()
        ];
        return view('services.ui-ux',$data);
    }

    public function brand()
    {
        $data = [
            'brands' => Service::getBrand()
        ];
        return view('services.brand',$data);
    }

    public function details($slug)
    {
        $data = [
            'details' => Service::findBySlug($slug)[0]
        ];
        return view('services.details',$data);
    }
}
