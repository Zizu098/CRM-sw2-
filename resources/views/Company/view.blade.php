@extends('layouts.app')

@section('content')

    <div class="container">
    <h3>Companies</h3>
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
            <th class="th-sm">Detail
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th class="th-sm">Update
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th class="th-sm">Delete
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
        </thead>
        <tbody>
            <div class="company">
                @foreach($companies as $company)
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
                        <td>
                            <a href="../showCompany/{{$company->id}}">Detail</a>
                        </td>
                        <td>
                            <a href="../editCompany/{{$company->id}}">Update</a>
                        </td>
                        <td>
                            <a href="../destroyCompany/{{$company->id}}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </div>
            {{ $companies->links() }}
        </tbody>
    </table>
</div>
@endsection
