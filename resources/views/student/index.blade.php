@extends('layout.app')

@section('content')
    
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="offset-3 col-6">
                <div class="card-box">
                    <div class="header-title mb-4 col-12">
                        <div class="pull-left"><h4 class="text-orange">Students Records</h4></div>
                   </div>
                        <table id="datatable" class="table table-bordered table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Course Name</th>
                                <th scope="col">Student Name</th>
                            </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($records as $record)
                                   <tr>
                                       <td> {{$record->student->name}} </td>
                                       <td> {{$record->course->name}} </td>
                                    </tr> 
                                @endforeach --}}
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
        ajax: "{{ route('student_record_list') }}",
        columns: [
            {data: 'course', name: 'course'},
            {data: 'student', name: 'student'},
        ]
    });
});
</script>

@endsection