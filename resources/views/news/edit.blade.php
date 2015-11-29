@extends('layouts.app')

@section('content')
  <div class="container">
    {!! Form::model($release, array('method' => 'PATCH', 'action' => ['PressReleasesController@update', $release->id])) !!}
      @include('news.partitials.form', ['submitButtonText' => 'Update'])
    {!! Form::close() !!}
  </div>
@endsection