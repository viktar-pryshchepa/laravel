@extends('layouts.app')

@section('content')
  <div class="container">

        <div class="lead">
          <h2>
            {{$release->title}}
          </h2>
          <p>
            {{ $release->body  }}
          </p>
        </div>
  </div>
@endsection


@section('navbar')
  <ul>
    <li><a href="{{ action('PressReleasesController@index') }}">All</a></li>
    <li><a href="{{ action('PressReleasesController@edit', $release->id) }}">Edit</a></li>
  </ul>
@endsection