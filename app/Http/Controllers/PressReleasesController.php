<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use \App\PressRelease;

class PressReleasesController extends Controller
{
    public function index() {
        $releases = PressRelease::all();
        return view('news.index', compact('releases'));
    }

    public function show($id) {
        $release = PressRelease::find($id);
        if (!$release) {
            abort('404');
        }


        return view('news.show', compact('release'));
    }

    public function create() {

        return view('news.create');
    }
}
