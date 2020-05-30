@extends('layouts.app')

@section('content')

    <div class="container">
        <h3 class="hh" >Create Employee</h3> <hr>
        <form class="form-horizontal" role="form" name="form"action="/storeEmployee" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label class="col-md-4 control-label ">firstName</label>
                <div class="col-md-4 ">
                    <input class="form-control" type="text" name="firstName" required>
                </div>    
            </div>
                        
            <div class="form-group">
                <label class="col-md-4 control-label ">lastName</label>
                <div class="col-md-4 ">
                    <input class="form-control" type="text" name="lastName" required>
               </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label ">Email</label>
                <div class="col-md-4 ">
                    <input class="form-control" type="email" name="email" >
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">phone</label>
                <div class="col-md-4 ">
                    <input class="form-control" type="number" name="phone" >
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-md-4 control-label">companies</label>
                <div class="col-md-4 edit">
                    <select class="form-control" name="company_id">
                        @foreach($companies as $c)
                            <option value="{{ $c->id }}">
                                {{ $c->name }}
                            </option>
                        @endforeach
                    </select>
                </div>                           
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Role</label>
                <div class="col-md-4 edit">
                    <select class="form-control" name="role">
                        <option value="1">
                            Eng
                        </option>
                        <option value="2">
                            senior
                        </option>
                        <option value="3">
                            Team Leader
                        </option>
                        <option value="4">
                            Manger
                        </option>
                    </select>
                </div>
            </div>
                        
            <br><br>
            <div class="form-group">
                <div class="col-md-4 ">
                    <input class="btn btn-primary btn-block" type="submit" value="Create" />
                </div>
            </div>
        </form>
    </div>
@endsection