@extends('layouts.master')
@section('title', 'Amar Jobs | All Company')

@section('content')
    <a class="btn btn-success badge" href="{{route('addCompany')}}">Add New Company</a>
    @if(count($companies))
        <table id="example2" class="table table-bordered table-hover" width="100%">

            <thead>
            <tr>
                <th>Company Name</th>
                <th>City</th>
                <th>District</th>
                <th>Post Code</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Website</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($companies as $company)
                <tr>
                    <td>{{$company->companyName}}</td>
                    <td>{{$company->city}}</td>
                    <td>{{$company->district}}</td>
                    <td>{{$company->postcode}}</td>
                    <td>{{$company->address}}</td>
                    <td>{{$company->phone}}</td>
                    <td>{{$company->email}}</td>
                    <td>{{$company->website}}</td>
                    <td><a class="btn btn-info badge" href="{{route('editCompany',$company->id)}}">Edit</a> | <a class="btn btn-danger badge" href="{{route('deleteCompany',$company->id)}}">Delete</a></td>
                </tr>

            @endforeach
            </tbody>
        </table>

        {{$companies->links()}}

    @endif

@endsection