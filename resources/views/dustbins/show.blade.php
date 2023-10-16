@extends('Backend.Layout.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dustbin management system</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Dustbin</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('dustbins.index') }}"> Back </a>
        </div>
    </div>
</div>

@foreach($dustbin as $dustbin)
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Dustbin ID:</strong>
            {{ $dustbin->Dustbin_id}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Type:</strong>
            {{ $dustbin->Type }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Block Name:</strong>
            {{ $dustbin->Block_name }}
        </div>
    </div>
   
</div>
@endforeach
@endsection