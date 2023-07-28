<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
class AlbumsController extends Controller
{
    public function index(){
        $albums = Album::all();
        return view('albums.index', compact('albums'));
    }
}
