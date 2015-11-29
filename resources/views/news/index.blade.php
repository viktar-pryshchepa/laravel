@extends('layouts.app')

@section('content')
  <div class="container">
  @if(!empty($releases))
    @foreach($releases as $item)
    <div class="lead">
      <h2>
        <a href="{{ action('PressReleasesController@show', [$item->id]) }}">{{$item->title}}</a>
      </h2>
      <p>
        {{ $item->body  }}
      </p>
    </div>
    @endforeach
      {!! $releases->render() !!}
  @else
    <div class="lead">
      No data available
    </div>
  @endif
  </div>
@endsection

@section('navbar')
  <ul>
    <li><a href="{{ action('PressReleasesController@create') }}">Create</a></li>
  </ul>
@endsection