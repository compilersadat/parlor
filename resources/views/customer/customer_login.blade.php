@extends('layouts.layout')
@section('content')

    <section class="banner">
    <div class="row m-0 p-5 justify-content-center mt-5">
        <!--  form login -->
        <div class="col-md-4 p-3">
            <form class="text-center text-white p-5 "  action="{{ route('customer.login')}}" method="POST"   style="background-color: #000000d1;">
                @csrf
                {{$errors}}
                <p class="">Customer Login</p>
                <!-- Email -->
                <input type="text" name="email" id="defaultLoginFormEmail" class="form-control text-black mb-4 para" placeholder="Email">
                <!-- Password -->
                <input type="password" name="password" id="defaultLoginFormPassword" class="form-control text-black para mb-4" placeholder="Password">

                <!-- Sign in button -->
                <button class="btn btn-danger btn-md  my-4" type="submit">Login in</button>
            </form>
            <!-- form login -->
        </div>
    </div>
</section>

@endsection
