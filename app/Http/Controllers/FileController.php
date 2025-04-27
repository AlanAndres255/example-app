<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Storage;

class FileController extends Controller
{
    public function upload(Request $request){
    
        $archivo = $request->file('archivo');
        Storage::put('Imagenes',$archivo);
        dd($request);
    }
    public function download(Request $request){
        return Storage::download($request->path);
    }
}
