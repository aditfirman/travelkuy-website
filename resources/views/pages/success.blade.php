@extends('layouts.success')

@section('title','Checkout Success')

@push('addon-style')
    <link rel="stylesheet" href="{{url('frontend/libraries/gijgo/css/gijgo.min.css')}}" />
@endpush

@section('content')
<main>
    <div class="container">
        <section style="margin-top:120px">
        <div class="row">
            <div div class="col text-center  justify-content-center">
            <img src="{{url('frontend/images/success.svg')}}" alt="" width="50%">
                <h1>Yay! Success</h1>
                <p>
                    We've sent you email for trip instruction
                    <br>
                    please read it as well
                </p>
                <a href="{{route('home')}}" class="btn btn-primary mt-3 px-5">
                    Home Page
                </a>
            </div>
        </div>
    </section>
</div>
</main>

@endsection

@push('addon-script')
<script src="{{url('frontend/libraries/gijgo/js/gijgo.min.js')}}"></script>
    <script>
      $(document).ready(function() {
        $('.datepicker').datepicker({
          uiLibrary: 'bootstrap4',
          icons: {
            rightIcon: '<img src="frontend/images/ic_doe.png" alt="" />'
          }
        });
      });
    </script>
@endpush