@extends('layouts.app')

@section('content')
    <div class="row mt-2">
        <div class="col-md-10">
            <h3>Category</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $category->name }}</td>
                    </tr>
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