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