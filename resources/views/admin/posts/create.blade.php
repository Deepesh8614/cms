@extends('layouts.admin')

@section('content')

    <h1> Create Posts </h1>


    {!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store',"files"=>true]) !!}

    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id','Category:') !!}
        {!! Form::select('category_id',array(""=>"Choose Options","1"=>"PHP","2"=>"JavaScript"),null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('content','Content:') !!}
        {!! Form::textarea('content',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id','Image:') !!}
        {!! Form::file('photo_id',['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    @include('includes.form_error')
@stop