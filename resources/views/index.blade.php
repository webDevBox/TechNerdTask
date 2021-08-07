@extends('layout.app')

@section('content')
<div class="row">
    <div class="border border-warning offset-3 col-3 p-3">
        <h2 class="text-center">Task 1</h2>
        <h4> Create these tables:  </h4>
        <ul>
            <li>Students: First name, Last name</li>
            <li>Courses: Course name</li>
            <li>Student Course assoc: Student_id  Course_id</li>
        </ul>
        <p class="border border-danger">Note: Use Laravel Framework and Display the listing data in “jQuery DataTable”</p>
        <div class="d-grid gap-2 col-6 mx-auto">
            <a href="{{route('student_record_list')}}" class="btn btn-primary">Check Task   </a>
          </div>
    </div>
    <div class="border border-warning col-3 p-3">
        <h2 class="text-center">Task 2</h2>
        <p>Write a query that scenario is “ user has many images, get those images that have active status, and those users that have images, if any user didn’t have any images then skip those users through query.”</p>
        <p class="border border-danger">Note: Please write this query in pure ORM.</p>
        <div class="d-grid gap-2 col-6 mx-auto">
            <a href="" class="btn btn-primary">Check Task   </a>
          </div>
    </div>
</div>
@endsection