<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function showService()
    {
        $services = Services::query()
            ->where('status', 'Active')
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('frontend.pages.service.service', compact('services'));
    }

    public function showServiceInside($lang=null, $id)
    {

        $service = Services::query()
            ->where('status', 'Active')
            ->orderBy('created_at', 'DESC')
            ->findOrFail($id);

        $services = Services::query()
            ->where('status', 'Active')
            ->orderBy('created_at', 'DESC')
            ->get();


        return view('frontend.pages.service.service-inside', compact('service', 'services'));
    }
}
