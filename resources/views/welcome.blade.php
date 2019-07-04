@extends('layouts.layout')
@section('content')
    <section class="banner py-5">
        <div class="container pt-5 ">
            <div class="row pt-5">
                <div class="col-md-8">
                    <h4 class="black-text pt-5 mt-5 ">Parlor Name Here</h4>
                    <h2 class="h2 h2-responsive black-text heading py-4 font-weight-bold">OUR HAIR STYLES <br>
                        ENHAGES YOUR SMILE    </h2>
                    <a href="#" class="btn btn-sm btn-rounded">Contact Us</a>
                </div>
                <!-- <div class="col-md-4">
                  <img src="img/hair-salon-png-hd-hairdressing-u0026-styling-services-hairdressing-hd-png-1295.png" class="img img-fluid">
                </div> -->
            </div>
        </div>
    </section>
    <!--services-->
    <!--services-->
    <section>
        <div class="container my-5">
            <h3 class="h3 h3-responsive ">Our Services</h3>
            <!-- Grid row -->
            <div class="row text-center my-5">
            @foreach(@App\Service::take(10)->get() as $row)
                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                    <!--Featured image-->
                    <div class="view overlay rounded z-depth-1">
                        <img src="{{ asset('../storage/app/service/'.$row->image)}}" class="img-fluid" alt="Sample project image" style="height: 220px;width: 100%;">
                        <a>
                            <div class="mask rgba-pink-slight"></div>
                        </a>
                    </div>
                    <!--Excerpt-->
                    <div class="card-body pb-0">
                        <h4 class="font-weight-bold my-3">{{$row->name}}</h4>
                        <p class="grey-text">{{$row->description}}
                        </p>
                        <a class="btn btn-rounded btn-sm"> View project</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--tag-->
    <section class="bg">
        <div class="container py-4 my-5">
            <h3 class="h3 h3-responsive text-center white-text my-5">It doesn’t have to cost<br> A lot to look good.</h3>
        </div>
    </section>
    <!--contactus-->
    <section>
        <div class="container my-5">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <div class="card p-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="h3 h3-responsive">Contact Us :</h3>
                                    <div class="md-form">
                                        <input type="text" id="form-name" class="form-control">
                                        <label for="form-name">Your name</label>
                                    </div>
                                    <div class="md-form">
                                        <input type="text" id="form-email" class="form-control">
                                        <label for="form-email">Your email</label>
                                    </div>
                                    <div class="md-form">
                                        <input type="text" id="form-Subject" class="form-control">
                                        <label for="form-Subject">Subject</label>
                                    </div>
                                    <div class="md-form">
                                        <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
                                        <label for="form-text">Send message</label>
                                    </div>
                                    <div class="text-center">
                                        <button class="btn  btn-sm btn-rounded">Submit Now</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="h3-responsive h3 pb-4">Address & Directions:</h3>
                                    <div class="row pb-3 pt-2">
                                        <div class="col-md-2 m-0 p-0 text-center">
                                            <i class="fa fa-map-marker fa-2x"></i>
                                        </div>
                                        <div class="col-md-10 m-0 p-0">
                                            <p class="text-justify">D. No. 7, Nandanwan Classic, Pension Nagar, Nagpur, MH-440013</p>
                                        </div>
                                    </div>
                                    <div class="row  pb-3">
                                        <div class="col-md-2 m-0 p-0 text-center">
                                            <i class="fa fa-phone fa-2x"></i>
                                        </div>
                                        <div class="col-md-10 m-0 p-0">
                                            <p class="text-justify">+91 9966887755</p>
                                        </div>
                                    </div>
                                    <div class="row  pb-3">
                                        <div class="col-md-2 m-0 p-0 text-center">
                                            <i class="fa fa-envelope fa-2x"></i>
                                        </div>
                                        <div class="col-md-10 m-0 p-0">
                                            <p class="text-justify">xyz.info@gmail.com</p>
                                        </div>
                                    </div>
                                    <div class="map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238130.1187777879!2d78.93242227492463!3d21.16102819643248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c0a5a31faf13%3A0x19b37d06d0bb3e2b!2sNagpur%2C+Maharashtra%2C+India!5e0!3m2!1sen!2sua!4v1561888750513!5m2!1sen!2sua" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
