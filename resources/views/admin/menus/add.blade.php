@extends('layouts.app')

@section('content')
    <div class="row mt-2">
        <div class="col-md-10">
            <h3>Add Menu</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('menu.store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label class="col-md-2">Category</label>
                    <div class="col-md-4">
                        <select name="category_id" class="form-control">
                            <option value="" selected disabled>Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" @if(old('category_id') == $category->id) selected @endif>{{ $category->name }}</option>
                            @endforeach                            
                        </select>
                        @error('category_id')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Name</label>
                    <div class="col-md-4">
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                        @error('name')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Price</label>
                    <div class="col-md-4">
                        <input type="number" name="price" value="{{ old('price') }}" class="form-control">
                        @error('price')
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