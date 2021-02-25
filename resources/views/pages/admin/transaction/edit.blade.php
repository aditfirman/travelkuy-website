@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Update Status Transaksi {{$item->title}}</h1>
        </div>


        {{-- menampilkan jika terdapat error --}}
        @if ($errors -> any())
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
            <form action="{{route('transaction.update',$item->id)}}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="transasction_status">Status</label>
                <select id="transasction_status" class="form-control" name="transaction_status">
                <option value="{{$item->transaction_status}}">Jangan diubah({{$item->transaction_status}})</option>
                <option value="IN_CART">IN CART</option>
                <option value="PENDING">PENDING</option>
                <option value="SUCCESS">SUCCESS</option>
                <option value="FAILED">FAILED</option>
                <option value="CANCEL">CANCEL</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block">update</button>
            </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
