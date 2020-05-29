@extends('layouts.app')

@section('content')
   
    <div class="container">
        <h3 class="hh" >Search Employee</h3> <hr>
        <form class="form-horizontal" role="form" name="form"action="/searchEmployee" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label class="col-md-4 control-label ">Name</label>
                <div class="col-md-4 ">
                    <input class="form-control" type="text" name="name" required>
                </div>
            </div>

            <br><br>
            <div class="form-group">
                <div class="col-md-4 ">
                    <input class="btn btn-primary btn-block" type="submit" value="Search" />
                </div>
            </div>
        </form>
    <br>
@endsection

