@extends('layout.app')

@section('content')
    
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <div class="header-title mb-4 col-12">
                        <h4 class="text-center text-success">{{$user->name}} Active Images</h4>
                   </div>
                        
                </div>
            </div>
            @foreach ($details as $detail)
                <div class="col-2">
                    <img src="{{asset('images/'.$detail->image)}}" width="100px" height="150px" />
                </div>
            @endforeach
        </div> <!-- end row -->

    </div> <!-- container -->

</div> <!-- content -->

@endsection

@section('script')

@endsection