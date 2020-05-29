@extends('layouts.app')

@section('content')


<div class="container">
    <h3>Company</h3>
    <table id="dtVerticalScrollExample" class="table table-striped table-bordered table-sm  edit" cellspacing="0" width="100%">
        <thead>
            <th class="th-sm">Name
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>                                
            <th class="th-sm">Email
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th class="th-sm">Website
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th class="th-sm">Created At
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th class="th-sm">Updated At
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
        </thead>
        <tbody>
            <tr>
                <td>
                    {{$company->name}}
                </td>
                <td>
                    {{$company->email}}
                </td>
                <td>
                    {{$company->website}}
                </td>
                <td>
                    {{$company->created_at}}
                </td>
                <td>
                    {{$company->updated_at}}
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection