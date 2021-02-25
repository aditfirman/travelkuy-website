@extends('layouts.admin')

@section('title')
    Travelkuy Admin
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
         
        <!-- btn create -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Tambah Paket Travel</h1>
        </div>
        
        {{-- error alert --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- input form --}}
        <div class="card shadow">
            <div class="card-body">
            <form action="{{route('travel-package.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input id="title" class="form-control" type="text" name="title" placeholder="Title" value="{{old('title')}}">
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input id="location" class="form-control" type="text" name="location" placeholder="Location" value="{{old('location')}}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" class="form-control d-block w-100" name="description" rows="10">{{old('description')}}</textarea>
            </div>
            <div class="form-group">
                <label for="departure_date">Departure Date</label>
                <input id="departure_date" class="form-control" type="date" name="departure_date" placeholder="Departure Date" value="{{old('departure_date')}}">
            </div>
            <div class="form-group">
                <label for="duration">Duration</label>
                <input id="duration" class="form-control" type="duration" name="duration" placeholder="Duration" value="{{old('duration')}}">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <input id="type" class="form-control" type="text" name="type" placeholder="Type" value="{{old('type')}}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input id="price" class="form-control" type="number" name="price" placeholder="Price" value="{{old('price')}}">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </form>
            </div>
        </div>

      </div>
      <!-- /.container-fluid -->
@endsection