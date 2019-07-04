@extends('layouts.app')

@section('content')
    <div class="row mt-2">
        <div class="col-md-10">
            <h3>Edit Category</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('categories.update', $category->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label class="col-md-2">Name</label>
                    <div class="col-md-4">
                        <input type="text" name="name" value="{{ old('name', $category->name) }}" class="form-control">
                        @error('name')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <button type="submit">Submit</button>
            </form>
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