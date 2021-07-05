<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        $path = resource_path() . "/data/services.json";

        $services = json_decode(file_get_contents($path));
        return view('pages.services', ['services' => $services]);
    }

    public function get($slug) {
        $path = resource_path() . "/data/services.json";
        $services = json_decode(file_get_contents($path));
        $service = NULL;

        foreach ($services as $item) {
            if ($item->slug === $slug) {
                $service = $item;
                break;
            }
        }
        if ($service === NULL) {
            abort(404);
        }

        return view('pages.service', ['service' => $service]);
    }
}
