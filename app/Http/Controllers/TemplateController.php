<?php

namespace App\Http\Controllers;
use App\Models\Template;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use DB;

class TemplateController extends Controller
{
    function template(Request $request, $id) {
        $template = Template::where("id", $id)->get();
        return $template;
    }

    function templates() {
        $templates = Template::all();
        return $templates;
    }

    function pages($name) {
        return Template::where("name", $name)->first()->pages;
    }
}
