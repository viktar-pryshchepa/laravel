<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PressReleaseRequest;
use \App\PressRelease;
use Illuminate\Support\Facades\Auth;

class PressReleasesController extends Controller
{

    public function __construct() {

      $this->middleware('auth', ['only' => 'create']);
    }

    public function index() {
        $releases = PressRelease::latest()->simplePaginate(5);
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

    public function store(PressReleaseRequest $request) {
        $release = new PressRelease($request->all());
        Auth::user()->news()->save($release);
        return redirect('news');
    }

    public function edit($id) {
        $release = PressRelease::findOrFail($id);
        return view('news.edit', compact('release'));
    }

    public function update(PressReleaseRequest $request, $id) {
        $release = PressRelease::findOrFail($id);
        $release->update($request->all());
        return redirect(action('PressReleasesController@show', $id));
    }
}
