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
        $openapi = Generator::scan([env('SWAGGER_PATH')]);
        header('Content-Type: application/json');
        return $openapi->toJson();
    }
}
