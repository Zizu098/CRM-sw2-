@extends('layouts.app')

@section('content')
   
    <div class="container">
        <h3 class="hh" >Create Compny</h3> <hr>
        <form class="form-horizontal" role="form" name="form"action="/storeCompany" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label class="col-md-4 control-label ">Name</label>
                <div class="col-md-4 ">
                    <input class="form-control" type="text" name="name" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label ">Email</label>
                <div class="col-md-4 ">
                    <input class="form-control" type="email" name="email" >
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Website</label>
                <div class="col-md-4 ">
                    <input class="form-control" type="text" name="website" >
                </div>
            </div>
            <br><br>
            <div class="form-group">
                <div class="col-md-4 ">
                    <input class="btn btn-primary btn-block" type="submit" value="Create " />
                </div>
            </div>
        </form>
    <br>
@endsection

