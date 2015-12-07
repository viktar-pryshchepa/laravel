<!-- for test only -->

<div class="form-group">
  {!! Form::label('title', 'Title:') !!}
  {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title...']) !!}
  @if ($errors->has('title'))
    <div class ='alert alert-danger'>
      {{ $errors->first('title') }}
    </div>
  @endif
</div>
<div class="form-group">
  {!! Form::label('body', 'Body:') !!}
  {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Body...']) !!}
  @if ($errors->has('body'))
    <div class ='alert alert-danger'>
      {{ $errors->first('body') }}
    </div>
  @endif

</div>
{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}