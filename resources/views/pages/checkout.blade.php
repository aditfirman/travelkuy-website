@extends('layouts.checkout')

@section('title')
    Checkout
@endsection

@section('content')
  <main>
    <section class="section-checkout">
      <div class="container">
        <!-- breadcrumb -->
        <div class="row pl-2">
          <div class="col">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Paket Travel</a></li>
                <li class="breadcrumb-item"><a href="#">Detail</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
              </ol>
            </nav>
          </div>
        </div>
        <!-- akhir breadcrumb -->
        <div class="row mb-2">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details mb-3">
              <h1>Who is Going?</h1>
              <p style="font-weight: 300">
                Liburan Ke {{$item->travel_package->title}} - {{$item->travel_package->location}}
              </p>
              <div class="attendee">
                <table class="table table-responsive-sm text-center">
                  <thead>
                    <tr>
                      <td scope="col">Picture</td>
                      <td scope="col">Name</td>
                      <td scope="col">Nationality</td>
                      <td scope="col">Visa</td>
                      <td scope="col">Passport</td>
                      <td scope="col"></td>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($item->details as $detail)
                      <tr>
                          <td>
                              <img src="https://ui-avatars.com/api/?name={{ $detail->username }}" height="60" class="rounded-circle"/>
                          </td>
                          <td class="align-middle" style="width: 20%">
                              {{ $detail->username }}
                          </td>
                          <td class="align-middle" style="width: 20%">
                              {{ $detail->nationality }}
                          </td>
                          <td class="align-middle">
                              {{ $detail->is_visa ? '30 Days' : 'N/A' }}
                          </td>
                          <td class="align-middle">
                              {{ \Carbon\Carbon::createFromDate($detail->doe_passport) > \Carbon\Carbon::now() ? 'Active' : 'Inactive' }}
                          </td>
                          <td class="align-middle">
                              <a href="{{ route('checkout-remove', $detail->id) }}">
                                  <img src="{{ url('frontend/images/icon/ic_remove.svg') }}" alt="" />
                              </a>
                          </td>
                      </tr>
                  @empty
                      <tr>
                          <td colspan="6" class="text-center">
                              No Visitor
                          </td>
                      </tr>
                  @endforelse
                  </tbody>
                </table>
              </div>
              <div class="member mt-3">
                <h2>Add Member</h2>
                <form class="form-inline" method="post" action="{{ route('checkout-create', $item->id) }}">
                  @csrf
                  <label for="username" class="sr-only">Name</label>
                  <input
                    type="text"
                    name="username"
                    class="form-control mb-2 mr-sm-2"
                    id="inputUsername"
                    placeholder="Username"
                    style="width: 20%"
                  />
  
                <label for="nationality" class="sr-only">Nationality</label>
                <input
                    type="text"
                    name="nationality"
                    class="form-control mb-2 mr-sm-2"
                    style="width: 50px;"
                    id="nationality"
                    placeholder="Nationality"
                    required
                />
  
                  <label for="is_visa" class="sr-only">Visa</label>
                  <select
                    name="is_visa"
                    id="is_visa"
                    class="custom-select mb-2 mr-sm-2"
                    required
                  >
                    <option value="" selected>VISA</option>
                    <option value="1">30 Days</option>
                    <option value="0">N/A</option>
                  </select>
  
                  <label for="doe_passport" class="sr-only"
                    >DOE Passport</label
                  >
                  <div class="input-group mb-2 mr-sm-2" style="width: 32%">
                    <input
                      type="text"
                      name="doe_passport"
                      class="form-control datepicker"
                      id="doePassport"
                      placeholder="DOE Passport"
                      style="width: 100%"
                    />
                  </div>
  
                  <button type="submit" class="btn btn-add-now mb-2 px-4">
                    Add Now
                  </button>
                </form>
                <h3 class="mt-2 mb-0">Note</h3>
                <p class="disclaimer mb-0">
                  You are only able to invite member that has registered in
                  Travelkuy.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-details card-right text-detail">
              <h2 class="mb-3">Checkout Information</h2>
              <table class="trip-informations">
                <tr>
                  <th width="50%">Members</th>
                  <td width="50%" class="text-right">
                    {{ $item->details->count() }} org
                  </td>
                </tr>
                <tr>
                  <th width="50%">Additional VISA</th>
                  <td width="50%" class="text-right">
                    Rp. {{ $item->additional_visa }}
                  </td>
                </tr>
                <tr>
                  <th width="50%">Trip Price</th>
                  <td width="50%" class="text-right">
                    Rp. {{ $item->travel_package->price }}/ org
                  </td>
                </tr>
                <tr>
                  <th width="50%">Sub Total</th>
                  <td width="50%" class="text-right">
                    Rp. {{ $item->transaction_total }}
                  </td>
                </tr>
                <tr>
                  <th width="50%">Total (+Unique)</th>
                  <td width="50%" class="text-right text-total">
                    <span class="text-blue">Rp. {{ $item->transaction_total }},</span
                    ><span class="text-orange">{{ mt_rand(0,99) }}</span>
                  </td>
                </tr>
              </table>

              <hr />
              <h2>Payment Instructions</h2>
              <p class="payment-instructions">
                Please complete your payment before to continue the wonderful
                trip
              </p>
              <div class="bank">
                <div class="bank-item pb-3">
                  <img src="{{ url('frontend/images/icon/ic_bank.svg') }}" alt="" class="bank-image" />
                  <div class="description">
                    <h3>PT Travelkuy ID</h3>
                    <p>
                      082140777545
                      <br />
                      Bank Central Asia
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="bank-item">
                  <img src="{{ url('frontend/images/icon/ic_bank.svg') }}" alt="" class="bank-image" />
                  <div class="description">
                    <h3>PT Travelkuy ID</h3>
                    <p>
                      0899 8501 7888
                      <br />
                      Bank HSBC
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <div class="join-container">
              <a href="{{route('checkout-success',$item->id)}}" class="btn btn-block btn-join-now mt-3 py-2">I Have Made Payment</a>
            </div>
            <div class="text-center">
              <a href="{{route('detail',$item->travel_package->slug)}}" class="btn btn-link text-muted">Cancel Booking</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection

@push('addon-style')
    <!-- gijgo -->
  <link rel="stylesheet" href="{{url('frontend/libraries/gijgo/css/gijgo.min.css')}}" />
@endpush

@push('addon-script')
  <script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
  <script>
    $(document).ready(function() {
      $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        uiLibrary: 'bootstrap4',
        icons: {
          rightIcon: '<img src="{{ url('frontend/images/icon/ic_doe.svg') }}" />'
        }
      });
    });
  </script>
@endpush