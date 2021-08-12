@extends('layout.app')

@section('content')
    
<div class="content">
    <div class="container-fluid">
        <div class="row my-3">
            <div class="offset-3 col-3"><h4 class="text-orange">Students Records</h4>
                @if (Session::has('success'))
                <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('success') }}</p>
                @endif
                @if ($errors->has('firstName'))
                        <p style="color:red;">{{ $errors->first('firstName') }}</p>
                    @endif
                    @if ($errors->has('lastName'))
                        <p style="color:red;">{{ $errors->first('lastName') }}</p>
                    @endif
                    @if ($errors->has('course'))
                        <p style="color:red;">{{ $errors->first('course') }}</p>
                    @endif
            </div>
            <div class="offset-1"> 
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#student">
                    Add New Student
                  </button>    
            </div>
       </div>

        <div class="row">
            <div class="offset-3 col-6">
                <div class="card-box">
                        <table id="datatable" class="table table-bordered table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Student Name</th>
                                <th scope="col">Total Courses</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>

                        </table>
                </div>
            </div>
        </div> <!-- end row -->

    </div> <!-- container -->

</div> <!-- content -->

<div class="modal fade" id="student" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route('addStudent')}}">
            <div class="form-row p-1">
                <input type="text" name="firstName" class="form-control col-6" placeholder="Enter Student First Name" required>
                <input type="text" name="lastName" class="form-control col-6" placeholder="Enter Student Last Name" required>
            </div>
            <div class="form-group">
                <select class="js-example-basic-multiple" name="course[]" multiple="multiple">
                    <option selected disabled> Select Course </option>
                    @foreach ($courses as $course)
                        <option value="{{$course->id}}"> {{$course->name}} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
      </div>
    </div>
  </div>

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
            {data: 'student', name: 'student'},
            {data: 'course', name: 'course'},
            {data: 'action', name: 'action'},
        ]
    });
});
</script>

<script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>

@endsection