@extends('layouts.layout')
@section('content')


<section class="service-banner" style="margin-top: 63px;">
    <div class="container pt-5 mt-5">
        <div class="row justify-content-md-center">
            <div class="col-md-5 ml-3">
                <h3 class="h3 h3-responsive  white-text pt-5 pb-2">Our Services</h3>

                <p class="text-justify white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci tenetur ad facere amet, rerum quisquam, temporibus harum nulla dolores quasi quae accusantium voluptas architecto beatae. Ad, maxime odit quod animi.</p>

            </div>
        </div>
    </div>
</section>
<!--services-->
<section class="">
    <div class="container my-5">
        <!-- Grid row -->
        <div class="row text-center my-5">
            @foreach($services as $row)
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
                    <a class="btn btn-rounded btn-sm"> Order Now</a>
                </div>
            </div>
                @endforeach
        </div>
</section>


@endsection
