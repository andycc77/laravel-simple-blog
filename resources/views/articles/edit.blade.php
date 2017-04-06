@extends('app')
@section('content')
    {!! Form::model($article,['url'=>'/articles/'.$article->id,'method'=>'PATCH']) !!}
    <h1>撰寫新文章</h1>
    <!---  Field --->
    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
    <!---  Field --->
    <div class="form-group">
        {!! Form::label('content', 'Content:') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>
    <!---  Field --->
    <div class="form-group">
        {!! Form::label('published_at', 'Published_at:') !!}
        {!! Form::input('date','published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
    </div>
    <div>
        {!! Form::submit('送出',['class'=>'btn btn-success form-control']) !!}
    </div>
    {!! Form::close() !!}
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li class="list-group-item list-group-item-danger">{{$error}}</li>
            @endforeach
        </ul>
    @endif
@stop
