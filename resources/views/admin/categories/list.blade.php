@extends('layouts.app')

@section('content')
    <div class="row mt-2">
        <div class="col-md-10">
            <h3>Category List</h3>
        </div>
        <div class="col-md-2">
            <a href="{{ route('categories.create') }}" class="btn btn-success">Add +</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Sr no</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $key => $cat)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $cat->name }}</td>
                            <td>
                                <a href="{{ route('categories.show', $cat->id) }}" class="btn btn-info">View</a>
                                <a href="{{ route('categories.edit', $cat->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('categories.destroy', $cat->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('headerClass', 'single-page reservation-page')

@section('banner')
<!--PAGE BARNER AREA-->
<div class="page-barner-area">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="barner-text">
                    <h1><span>Resrevation</span></h1>
                    <ul class="page-location">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li class="active"><a href="{{ route('dashboard') }}">Reservation</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--PAGE BARNER AREA END-->
@endsection