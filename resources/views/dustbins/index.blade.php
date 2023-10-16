@extends('Backend.Layout.app')

@section('main-content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="card-header justify-content-between bg-white text-center">
                    <h2>Dustbin management system</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="dropdown-items" href="{{ route('dustbins.create') }}"> Add Dustbin</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table id="example1" class="table table-bordered table-striped" >
            <thead>
                <tr> 
                    <th>Dustbin ID</th>
                    <th>Type</th>
                    <th>Block Name</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dustbins as $dustbin)
                    <tr>
                        <td>{{ $dustbin->Dustbin_id }}</td>
                        <td>{{ $dustbin->Type }}</td>
                        <td>{{ $dustbin->block_name  }}</td> 
                        <td>
                        <form action="{{ route('dustbins.destroy',$dustbin->Dustbin_id) }}" method="Post">
                                <a class="badge badge-success nav-icon fas fa-view bg-dark" href="{{ route('dustbins.show',$dustbin->Dustbin_id) }}">Show</a>
                                <a class="badge badge-success nav-icon fas fa-view bg-dark" href="{{ route('dustbins.edit',$dustbin->Dustbin_id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $dustbins->links() !!}
    </div>

@endsection
@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example3').DataTable({
            responsive: true,
            paging: true,
            pageLength: 10, // Adjust as needed
            ordering: true, // Enable column sorting
            searching: true, // Enable searching
            lengthChange: true, // Show page length options
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