<?php

namespace App\Http\Controllers;

use OpenApi\Generator;

class SwaggerController extends Controller
{
    public function getTemplate(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('main');
    }

    public function getSwaggerSchema(): string
    {
        $openapi = Generator::scan(['D:\xamp\htdocs\example-app\routes']);
        header('Content-Type: application/json');
        return $openapi->toJson();
    }
}
