@extends('layouts.layout')
@section('content')

    <section class="banner">
        <div class="row m-0 p-5 justify-content-center mt-5">
            <!--  form login -->
            <div class="col-md-8 p-3">
                <form class="text-center text-white p-5 "  action="{{ route('customer.order')}}" method="POST"   style="background-color: #000000d1;">
                    @csrf
                    {{$errors}}
                    <p class="">New Order</p>
                    <!-- Email -->
                    <input type="number" name="mobile" id="defaultLoginFormEmail" class="form-control text-black mb-4 para" placeholder="Customer Mobile">
                    <!-- Password -->
                    <input type="text" name="address" id="defaultLoginFormAddress" class="form-control text-black para mb-4" placeholder="Address">

                    <div class="col-md-8 p-3">
                        <div class="form-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>

                            <input type="date" name="date" class="form-control" id="datepicker" placeholder="Date">
                        </div>
                    </div>

                    <div class="form-group">
                        <input placeholder="Selected time"  name="time_window" type="text" id="" class="form-control timepicker">
                    </div>
                    <!-- Sign in button -->
                    <button class="btn btn-danger btn-md  my-4" type="submit">Order Now</button>
                </form>
                <!-- form login -->
            </div>
        </div>
    </section>
@endsection
