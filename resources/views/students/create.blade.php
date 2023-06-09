@extends('students.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Add New Student</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('students.index')}}"> Back </a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong> Whoops!</strong> There is some problem with your input. <br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach    
        </ul>

    </div>
@endif

<form action="{{ route('students.store')}}" method="POST">
@csrf
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong> First Name: </strong>
            <input type="text" name="name" class="form-control" placeholder="First Name">
        </div>
        <div class="form-group">
            <strong> Last Name: </strong>
            <input type="text" name="name" class="form-control" placeholder="Last Name">
        </div>
        <div class="form-group">
            <strong> Email Address: </strong>
            <input type="text" name="name" class="form-control" placeholder="Email Address">
        </div>
        <div class="form-group">
            <strong> Country: </strong>
            <input type="text" name="name" class="form-control" placeholder="Country">
        </div>
        <div class="form-group">
            <strong> Gender: </strong>
            <input type="text" name="name" class="form-control" placeholder="Male, Female or Other">
        </div>
        <div class="form-group">
            <strong> ID Number: </strong>
            <input type="text" name="name" class="form-control" placeholder=" 137..., 3693....">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary"> Submit </button>
        </div>

    </div>

</div>

</form>

@endsection
