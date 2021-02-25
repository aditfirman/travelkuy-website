@extends('layouts.app')

@section('title')
    Travelkuy
@endsection

@section('content')
     {{-- content --}}
    <!-- header -->
    <header>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-lg-6 mt-4 mb-4">
                    <img src="frontend/images/illustration.svg" alt="" style="width:100%">
                </div>
                <div class="col-lg-6 teks-header">
                    <h1>Pengen liburan tapi ga ada temennya...</h1><br>
                    <p class="text-justify">Travelkuy merupakan sebuah usaha travel agency yang melayani tour and travel terutama di indonesia. Travelkuy merupakan travel agency yang berbasis online. Travelkuy didirikan untuk memenuhi minat wisatawan baik lokal maupun mancanegara yang ingin melakukan perjalanan wisata mengelilingi indonesia. </p><br>
                    <div class="text-right">
                    <a href="{{route('about')}}" class="btn btn-more">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- akhir header -->

    <!-- section exclusive -->
    <section class="exclusive-trip" id="exclusivepackage">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Exclusive Trip</h1>
                </div>
            </div>
            <div class="row content">
                <div class="col-lg-6 col-12">
                    <!-- <h1>Exclusive Trip</h1> -->
                    <h2>liburan dirumah terus ? kuy travelling ke {{$items->firstWhere('id',1)->title}}</h2>
                    <p>{{$items->firstWhere('id',1)->description}}</p>
                    <div class="row mt-4 price">
                        <div class="col-6">
                            <img src="frontend/images/exclusive/ic_money_white.svg" alt="ic_money"><span
                                class="ml-2">Rp.{{number_format($items->firstWhere('id', 1)->price,0,',','.')}}</span>
                        </div>
                        <div class="col-6 text-right">
                            <img src="frontend/images/exclusive/star.svg" alt="">
                        </div>
                    </div>
                    <div class="row mt-4 ">
                        <div class="col text-right">
                            <a href="{{route('detail',$items->firstWhere('id', 1)->slug)}}" class="btn btn-join mb-4">Join kuy</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 img-content">
                    <div id="carouselExclusive" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($items->firstWhere('id', '1')->galleries as $slider)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <img src="{{Storage::url($slider->image)}}" class="d-block w-100" alt="...">
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExclusive" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExclusive" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir section exclusive -->

    <!-- another trips -->
    <section class="another-trips" id="travelpackage">
        <div class="container">
            <div class="row title">
                <div class="col-md-6">
                    <h1>Most Popular trips</h1>
                    <p>Kuy dapatkan teman baru dengan join ke trip paling populer bersama Travelkuy</p>
                </div>
            </div>
            <div class="row">
                    @foreach ($items as $item)
                    {{-- @continue($item->id == 0) --}}
                    <div class="col-md-6 col-12 col-lg-4">
                        <div class="card">
                            <div class="carousel slide carousel-fade" data-ride="carousel" id="carousel{{$item->id}}">
                                <div class="carousel-inner">
                                    @foreach ($item->galleries as $slider)
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <img src="{{Storage::url($slider->image)}}" class="d-block w-100" alt="...">
                                    </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carousel{{$item->id}}" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel{{$item->id}}" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{$item->title}}</h5>
                                <p class="location"><i class="fas fa-map-marker-alt mr-1" style="color:grey;"></i>{{$item->location}}</p>
                                <hr>
                                <p class="card-text">{{$item->description}}</p>
                                <p class="harga">Rp.{{number_format($item->price,0,',','.')}}</p>
                                <hr>
                                <div class="text-right">
                                    <a href="{{route('detail',$item->slug)}}" class="btn btn-detail">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- @break($item->id == 3) --}}
                    @endforeach 
            </div>
        </div>
    </section>
    <!-- another tips -->

    <!-- tesitmoni -->
    <section class="testimoni" id="testimoni">
        <div class="container">
            <div class="row title">
                <div class="col-md-6">
                    <h1>Testimoni</h1>
                    <p>Kuy lihat seberapa puas para traveller melakukan perjalanan liburan mereka bersama kami</p>
                </div>
            </div>
            <div class="row card-testimoni">
                <div class="col-md-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img src="frontend/images/Testimoni/1.jpg" class="rounded-circle">
                                </div>
                                <div class="col ml-5 ml-xl-4">
                                    <h4 class="nama-testi">Aditya Firmansyah</h4>
                                    <p class="pekerjaan">UI/UX Designer</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <img src="frontend/images/exclusive/star.svg" class="mb-2" alt="">
                            <p class="card-text">“ Sangat menyenangkan travelling bersama travelkuy, banyak teman baru
                                yang bisa diajak seru-seruan meskipun barusan kenal, jadi pengen ikut lagi. ”</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img src="frontend/images/Testimoni/1.jpg" class="rounded-circle">
                                </div>
                                <div class="col ml-5 ml-xl-4">
                                    <h4 class="nama-testi">Aditya Firmansyah</h4>
                                    <p class="pekerjaan">UI/UX Designer</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <img src="frontend/images/exclusive/star.svg" class="mb-2" alt="">
                            <p class="card-text">“ Sangat menyenangkan travelling bersama travelkuy, banyak teman baru
                                yang bisa diajak seru-seruan meskipun barusan kenal, jadi pengen ikut lagi. ”</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir testimoni -->

    <!-- section content have-fun -->
    <section class="content-fun">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-6">
                    <img src="frontend/images/Illustrasi2.svg" alt="" style="width:100%" class="p-3">
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <h1 class="title p-3">Kuy ikut join bersama yang lain, kita have fun bareng-bareng...</h1>  
                    @guest
                    <div class="text-right">
                    <button class="btn btn-daftar" type="button" onclick="event.preventDefault(); location.href='{{url('register')}}'">Daftar Kuy</button>
                    </div>
                    @endguest
                    @auth
                    <div class="text-right">
                    <button class="btn btn-daftar" type="button" onclick="event.preventDefault(); location.href='#exclusivepackage'">Lihat Paket</button>
                    </div>
                    @endauth
                </div>  
            </div>
        </div>
    </section>
    <!-- akhir section content daftar -->
    {{-- akhir content --}}
@endsection