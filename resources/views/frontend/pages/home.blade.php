@extends('frontend.master')
@section('content')
<div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="float-end" height="560" src="{{asset('sliders/1.png')}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8 text-start">
                                    <p class="fs-4 text-primary">Train Management System with Scheduling</p>
                                    <h1 class="display-1 text-primary mb-5 animated slideInRight">Train Management System with Scheduling</h1>
                                    {{-- <a href="" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInRight">Explore More</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->




    <!-- About End -->


    <!-- Features Start -->




    <!-- Gallery Start -->

    {{-- <section>
        <h1 class="text-center"><strong>Cow Milks</strong></h1>
        <hr>
        <div class="container">
            <div class="row">
                @foreach($milks as $value)
                <div class="col-xl-3 my-2 col-lg-3 col-md-3 col-sm-6 colsm6">
                    <div class="card">
                        <div class="card-header border-0 p-3 m-0 text-center">
                                <img src="{{url('uploads/animal/',$value->animal->image)}}" height="250" class="p-0 w-100" alt="image" />

                        </div>
                        <div class="card-body">
                            <p class="">{{$value->animal->name}}</p>
                            <p class="">Type: {{$value->animal->type->name}}</p>
                            @if ($value->total_qty >0)
                                {{-- <p class="">Status: {{$value->status ==1 ? 'Available': 'No Available'}}</p> --}}
                                {{-- <p class="badge bg-danger p-2 fs-5">Milks: {{floor($value->total_qty)}} <span>Litters</span></p> --}}
                                {{-- <div class="ratings d-flex justify-content-between hidden-sm">
                                    <p class="badge bg-success fs-6 mx-3 p-2">{{$value->price}} <span>BDT.</span></p>
                                    <abbr title="Add to cart"><a href="{{route('addToCart',$value->id)}}" class="navbar-brand mx-2"><i class="price-text-color fa fa-2x fa-shopping-cart"></i></a></abbr>
                                    {{-- <abbr title="Add to Wishlist"><a href="#" class="navbar-brand mx-2"><i class="price-text-color fa fa-2x fa-heart"></i></a></abbr> --}}
                                {{-- </div>
                            @elseif ($value->total_qty <1 || $value->total_qty == 0)
                                <p class="text-danger text-bold">Out of Stock</p>
                            @endif
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section> --}}


<!-- cow category end -->

    <!-- Features End -->


    <!-- Banner Start -->






    <!-- Banner End -->


    <!-- Service Start -->




    <!-- Service End -->


    <!-- Gallery Start -->

    <!-- Gallery End -->


    <!-- Product Start -->




    <!-- Product End -->


    <!-- Team Start -->




    <!-- Team End -->


    <!-- Testimonial Start -->


    <!-- Testimonial End -->
    @endsection
