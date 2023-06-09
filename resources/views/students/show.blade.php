@extends('students.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> View Student Details</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('students.index')}}"> Back </a>
        </div>

    </div>

</div>


 
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> First Name: </strong>
                    {{ $student->firstName}}
            </div>   
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Last Name: </strong>
                    {{ $student->lastName}}
            </div>   
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Country: </strong>
                    {{ $student->country}}
            </div>   
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Gender: </strong>
                    {{ $student->gender}}
            </div>   
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Email Address: </strong>
                    {{ $student->email}}
            </div>   
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> ID Number: </strong>
                    {{ $student->idNumber}}
            </div>   
        </div>
    </div>