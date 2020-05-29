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
        </thead>
        <tbody>
            <div class="company">
                @foreach($companys as $company)
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
                    </tr>
                @endforeach
            </div>
        </tbody>
    </table>
</div>
@endsection
