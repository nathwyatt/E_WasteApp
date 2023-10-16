@extends('Backend.Layout.app')

@section('main-content')
<div class="card card-table-border-none bg-white dt-responsive nowrap" style="width:100%" id="recent-orders">
            <div class="card-header justify-content-between bg-white text-center">
                <h2>Roles Management</h2>
                <div class="date-range-report">
                    <span></span>
                </div>
            </div>
<div class="pull-left">
                <a href="{{ route('roles.create') }}" class="dropdown-item">
                    <i class="nav-icon fas fa-user-plus"></i> Add role
                </a>
            </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="table-responsive">
    <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th width="280px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $key => $role)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                            <a class="badge badge-success nav-icon fas fa-view bg-dark" href="{{ route('roles.show', $role->id) }}">Show</a>
                            @can('role-edit')
                                <a class="badge badge-success nav-icon fas fa-view bg-dark" href="{{ route('roles.edit', $role->id) }}">Edit</a>
                            @endcan
                            @can('role-delete')
                                {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example2').DataTable({
                responsive: true,
                paging: true,
                pageLength: 10,
                ordering: true,
                searching: true,
                lengthChange: true,
                language: {
                    paginate: {
                        next: 'Next',
                        previous: 'Previous'
                    }
                }
            });
        });
    </script>
@endpush
