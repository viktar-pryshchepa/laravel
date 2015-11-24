@extends('layouts.app')

@section('content')
  @if (!empty($data))
    @foreach($data as $item)
    <div>
      {{$item}}
    </div>
    @endforeach

  @endif
@endsection