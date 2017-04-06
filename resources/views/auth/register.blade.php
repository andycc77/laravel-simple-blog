@extends('app')
@section('content')
    <div class="col-md-4 col-md-offset-4">
    {!! Form::open(['url'=>'/auth/register']) !!}
    <!---  Field --->
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>
        <!---  Field --->
        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
        <!---  Field --->
        <div class="form-group">
            {!! Form::label('password_confirmation', 'Password_confirmation:') !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
        </div>
        <div>
            {!! Form::submit('註冊',['class'=>'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@stop