@extends('layouts.admin')

@section('title')
    Travelkuy Admin
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
         
        <!-- btn create -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Paket Travel</h1>
          <a href="{{route('travel-package.create')}}" class="btn btn-sm btn-primary shadow-sm"><i class="fas fa fa-plus fa-sm text-white-500"></i>Tambah Paket Travel</a>
        </div>
        
        <div class="row">
            <div class="col">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Location</th>
                                <th>Durasi Perjalanan</th>
                                <th>Tanggal Keberangkatan</th>
                                <th>Type</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                            <tr>
                                <td>{{$item -> id}}</td>
                                <td>{{$item -> title}}</td>
                                <td>{{$item -> location}}</td>
                                <td>{{$item -> duration}}</td>
                                <td>{{$item -> departure_date}}</td>
                                <td>{{$item -> type}}</td>
                                <td>
                                {{-- update --}}
                                <a href="{{route('travel-package.edit', $item->id)}}" class="btn btn-info">
                                <i class="fa fa-pencil-alt"></i>
                                </a>
                                {{-- delete --}}
                                <form action="{{route('travel-package.destroy',$item->id)}}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                                </form>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">
                                        Data Kosong
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

      </div>
      <!-- /.container-fluid -->
@endsection