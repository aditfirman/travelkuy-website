@extends('layouts.app')

@section('title')
    FAQ
@endsection

@section('content')
        <!-- FAQ -->
        <div class="container" style="margin-top: 140px;">
            <h1 class="text-center">Frequently Asked Questions</h1>
        </div>
    
        <section class="faq">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="accordion" id="accordionExample">
                            <div class="card shadow-lg">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Bagaimana cara memesan paket travel ?
                                        </button>
                                    </h2>
                                </div>
        
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        untuk memesan paket travel anda di wajibkan melakukan registrasi menggunakan akun email anda, lalu setelah itu anda dapat memilih paket travel yang akan anda beli di bagian paket travel di halaman utama dan mengikuti proses checkout.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Bagaimana cara melakukan pembayaran ?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                       untuk melakukan pembayaran anda dapat mengkonfirmasi pesanan anda lalu kemudian anda dapat melakukan pembayaran ke rekening yang terdapat dalam halaman checkout.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            apakah pembayaran sudah termasuk akomodasi penunjang seperti makan dan lain-lain ?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        pembayaran yang anda lakukan sudah termasuk akomodari penunjang seperti transport, makan, hotel dan tempat wisata.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- akhir FAQ -->
@endsection