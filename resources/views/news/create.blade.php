@extends('layouts.app')

@section('content')
  <div class="container">
    {!! Form::open(array('url' => 'news')) !!}
    @include('news.partitials.form', ['submitButtonText' => 'Create'])
    {!! Form::close() !!}
  </div>
@endsection