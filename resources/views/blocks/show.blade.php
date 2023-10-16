@extends('Backend.Layout.app')

@section('main-content'')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Blocks</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('blocks.index') }}"> Back </a>
            </div>
        </div>
    </div>
    @foreach($block as $block)
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Block id:</strong>
                {{ $block->block_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Block Name:</strong>
                {{ $block->block_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Block Supervisor:</strong>
                {{ $block->User_id }}
            </div>
        </div>
    </div>
@endforeach
@endsection