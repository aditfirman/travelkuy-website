@extends('layouts.app')

@section('title')
    Travelkuy
@endsection

@section('content')
    <!-- header -->
    <header class="title">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-4">
                    <h1 class="text-center">About Us</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-4 p-2">
                    <p class="text-center">
                    <img src="frontend/images/logo.svg" class="mx-auto" alt="">
                </p>
                </div>
            </div>
        </div>
    </header>
<!-- akhir header -->

<!-- Deskription -->
    <section class="description">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <p class="text-justify" style="text-indent: 50px;">Travelkuy merupakan sebuah usaha travel agency yang melayani tour and travel terutama di indonesia. Travelkuy merupakan travel agency yang berbasis online. Travelkuy didirikan untuk memenuhi minat wisatawan baik lokal maupun mancanegara yang ingin melakukan perjalanan wisata mengelilingi indonesia. 
                    </p>
                    <p class="text-justify" style="text-indent: 50px;">Kami melayani perjalanan wisata ke berbagai daerah terutama yang berada di pulau jawa. pulau jawa mempunyai banyak wisata alam seperti gunung, pantai dan tempat-tempat bersejarah. Travelkuy memberikan pengalaman perjalanan yang membuat anda dapat memiliki banyak teman meski anda melakukan perjalanan seorang diri.</p>
                </div>
            </div>
        </div>
    </section>
<!-- akhir description -->

<!-- Contact -->
<section class="section-contact">
    <div class="container">
        <div class="row justify-content-center mb-2">
            <div class="col-12 col-md-4 ">
                <p style="font-size: 32px;" class="text-center">
                    Contact Me
                </p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                <p class="font-weight-bold">Phone</p>
                <p>081240777545</p>
                <p class="font-weight-bold">Email</p>
                <p>travelkuyadmin@travelkuy.com</p>
                <p class="font-weight-bold">Alamat</p>
                <p>Jalan Beringin F-10 Perum. Pertamina Rawabadak, Koja - Jakarta Utara</p>
            </div>
            <div class="col-12 col-md">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.070935796172!2d106.9006399153826!3d-6.12115476172928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1ff0607d7ec3%3A0xeaabca74c99f166b!2sJl.%20Beringin%2C%20Rawabadak%20Utara%2C%20Kec.%20Koja%2C%20Kota%20Jkt%20Utara%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2014230!5e0!3m2!1sid!2sid!4v1593157525839!5m2!1sid!2sid" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</section>
<!-- akhir Contact -->
@endsection