@extends('students.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Modify Student Details</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('students.index')}}"> Back </a>
        </div>

    </div>

</div>

@if ($errors->any())
 <div class="alert alert-danger">
    <strong>Whoops!</strong> There is a problem with your input.
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

 </div>
 @endif


 <form action="{{ route('students.update', $student.id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> First Name: </strong>
                <input type="text" name="firstName" value="{{ $student->firstName}}" class="form-control" placeholder="First Name">
            </div>
            <div class="form-group">
                <strong> Last Name: </strong>
                <input type="text" name="lastName" value="{{ $student->lastName}}" class="form-control" placeholder="Last Name">
            </div>
            <div class="form-group">
                <strong> Email Address: </strong>
                <input type="email" name="email" value="{{ $student->email}}" class="form-control" placeholder=" ...@gmail.com, ...@yahoo.com">
            </div>
            <div class="form-group">
                <strong> Country: </strong>
                <input type="text" name="country" value="{{ $student->country}}" class="form-control" placeholder=" Kenya, Sudan ....">
            </div>
            <div class="form-group">
                <strong> Gender: </strong>
                <input type="text" name="gender" value="{{ $student->gender}}" class="form-control" placeholder="Male, Female or Other">
            </div>
            <div class="form-group">
                <strong> ID Number: </strong>
                <input type="number" name="idNumber" value="{{ $student->idNumber}}" class="form-control" placeholder=" 137..., 3693....">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary"> Update </button>
            </div>
        </div>
    </div>
</form>