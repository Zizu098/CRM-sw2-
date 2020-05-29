@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Employees</h3>
        <table id="dtVerticalScrollExample" class="table table-striped table-bordered table-sm  edit" cellspacing="0" width="100%">
            <thead>
                <th class="th-sm">First Name
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Last Name
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Phone
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Email
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
            </thead>
            <tbody>
                <div class="Employee">
                    @foreach($employees as $employee)
                        <tr>
                            <td>
                                {{$employee->firstName}}
                            </td>
                            <td>
                                {{$employee->lastName}}
                            </td>
                            <td>
                                {{$employee->phone}}
                            </td>
                            <td>
                                {{$employee->email}}
                            </td>
                        </tr>
                    @endforeach
                </div>
            </tbody>
        </table>
    </div>
@endsection