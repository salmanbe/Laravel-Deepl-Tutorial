<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Salmanbe\Deepl\Deepl;

class DeeplController extends Controller
{
    public function index()
    {
        return view('deepl');
    }

    public function translate(Request $request)
    {
        $deepl = new Deepl();
        
        $translation = $deepl->get($request->text, $request->target_lang, $request->source_lang);

        return response()->json($translation);
    }
}