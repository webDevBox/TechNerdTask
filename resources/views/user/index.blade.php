@extends('layout.app')

@section('content')
    
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="offset-3 col-6">
                <div class="card-box">
                    <div class="header-title mb-4 col-12">
                        <div class="pull-left"><h4 class="text-orange">User Data</h4></div>
                   </div>
                        <table id="datatable" class="table table-bordered table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">User Name</th>
                                <th scope="col">Total Images</th>
                            </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($users as $user)
                                   <tr>
                                       <td> {{$user->name}}
                                       <td> {{count($user->userData)}} </td>
                                    </tr> 
                                @endforeach  --}}
                            </tbody>

                        </table>
                </div>
            </div>
        </div> <!-- end row -->

    </div> <!-- container -->

</div> <!-- content -->

@endsection

@section('script')

<script>
    $(function () {
    $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        order: [],
        ajax: "{{ route('user_record') }}",
        columns: [
            {data: 'name', name: 'name'},
            {data: 'count', name: 'count'},
        ]
    });
});
</script>

@endsection