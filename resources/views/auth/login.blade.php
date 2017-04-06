@extends('app')
@section('content')
    <div class="col-md-4 col-md-offset-4">
        {!! Form::open(['url'=>'/auth/login']) !!}
        <!---  Field --->
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>
        <!---  Field --->
        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
        <div>
            {!! Form::submit('登入',['class'=>'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@stop