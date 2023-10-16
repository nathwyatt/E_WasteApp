@extends('Backend.Layout.app')
@section('main-content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="card-header justify-content-between bg-white text-center">
                    <h2>Block Management</h2>
                </div>
                <div class="pull-right mb-2">
                    <div class="dropdown-item" href="{{ route('blocks.create') }}"> Add Block</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Block ID</th>
                    <th>Block Name</th>
                    <th>Block Supervisor</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blocks as $block)
                    <tr>
                        <td>{{ $block->block_id }}</td>
                        <td>{{ $block->block_name }}</td>
                        <td>{{ $block->name }}</td>
                        <td>
                            <form action="{{ route('blocks.destroy',$block->block_id) }}" method="Post">
                                <a class="badge badge-success nav-icon fas fa-view bg-dark" href="{{ route('blocks.show',$block->block_id) }}">Show</a>
                                <a class="badge badge-success nav-icon fas fa-view bg-dark" href="{{ route('blocks.edit',$block->block_id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $blocks->links() !!}
    </div>
@endsection
@push('custom-scripts')
  @endpush