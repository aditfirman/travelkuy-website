@extends('layouts.detail')

@section('title')
    Detail
@endsection

@section('content')
    <!-- content -->
    <main>
        <section class="section-detail mb-5">
            <div class="container">
                <!-- breadcrumb -->
                <div class="row pl-2">
                    <div class="col">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Paket Travel</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Detail</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- akhir breadcrumb -->
                <div class="row pl-2">
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="card gallery shadow-sm mb-4">
                            <div class="xzoom-container">
                                <img class="xzoom" id="xzoom-default" src="{{Storage::url($item->galleries->first()->image)}}"
                                    xoriginal="{{Storage::url($item->galleries->first()->image)}}" style="width:100%"/>
                                <div class="xzoom-thumbs justify-content-center">
                                    @foreach ($item->galleries as $gallery)
                                    <a href="{{Storage::url($gallery->image)}}"><img class="xzoom-gallery"
                                        width="70px" height="50px" src="{{Storage::url($gallery->image)}}"
                                        xpreview="{{Storage::url($gallery->image)}}"/>
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-detail">
                        <div class="card border-0">
                            <h1>{{$item->title}}</h1>
                            <p><i class="fas fa-map-marker-alt mr-1 location" style="color:grey;"></i>{{$item->location}}</p>
                            <hr>
                            <h2>Deskripsi</h2>
                            <p class="mt-2 text-justify">{{$item->description}}</p>
                            <hr>
                            <h2 class="mb-3">Includes</h1>
                                <div class="row includes">
                                    <div class="col pt-2 pb-2 d-flex align-items-center">
                                        <img src="{{url('frontend/images/icon/ic_foods.svg')}}" alt="">
                                        <div class="text pl-2">
                                            <h4 class="d-inline m-0">Makan</h4>
                                            <!-- <p class="m-0">Pagi, Siang, Malam</p> -->
                                        </div>
                                    </div>
                                    <div class="col pt-2 pb-2 d-flex align-items-center">
                                        <img src="{{url('frontend/images/icon/ic_hotel.svg')}}" alt="">
                                        <div class="text pl-2">
                                            <h4 class="d-inline m-0">Hotel</h4>
                                            <!-- <p class="m-0">Pagi, Siang, Malam</p> -->
                                        </div>
                                    </div>
                                    <div class="col pt-2 pb-2 d-flex align-items-center">
                                        <img src="{{url('frontend/images/icon/ic_event.svg')}}" alt="">
                                        <div class="text mx-auto text-center text-lg-left">
                                            <h4 class="d-inline m-0">Tiket Wisata</h4>
                                            <!-- <p class="m-0">Pagi, Siang, Malam</p> -->
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h2 class="mb-3 pl-1">informasi trip</h2>
                                <table class="trip-informations" cellpadding="5" style="width: 100%">
                                    <tr>
                                        <th width="60%">Tanggal Keberangkatan</th>
                                        <td width="40%" class="text-lg-right">{{\Carbon\Carbon::create($item->departure_date)->format('d F Y')}}</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Durasi</th>
                                        <td width="50%" class="text-right">{{$item->duration}}</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Type</th>
                                        <td width="50%" class="text-right">{{$item->type}}</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Harga</th>
                                        <td width="50%" class="text-right">Rp. {{number_format($item->price,0,',','.')}}/Org</td>
                                    </tr>
                                </table>
                        </div>
                        <div class="join-container mb-3">
                            @auth
                            <form action="{{route('checkout_process',$item->id)}}" method="post">
                                @csrf
                                    <button class="btn btn-block btn-join-now mt-3 py-2" type="submit">Join Now</button>
                                </form>
                            @endauth
                            @guest
                            <a href="{{route('login')}}" class="btn btn-block btn-join-now mt-3 py-2">Login or Register to Join</a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </main>
    {{-- akhir content --}}
@endsection

@push('addon-style')
     <!-- xzoom -->
<link rel="stylesheet" href="{{url('frontend/libraries/xzoom/dist/xzoom.css')}}">
     <!-- font awesome -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
@endpush

@push('addon-script')
     <!-- xzoom -->
    <script src="{{url('frontend/libraries/xzoom/dist/xzoom.min.js')}}"></script>
     <script>
         $(document).ready(function () {
             $('.xzoom, .xzoom-gallery').xzoom({
                 zoomWidth: 500,
                 title: false,
                 tint: '#333',
                 Xoffset: 15
             });
         });
     </script>
@endpush