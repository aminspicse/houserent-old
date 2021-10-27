@extends('guest.layout')

@section('slider')
<div class="hero-wrap" style="background-image: url('{{asset('public/users/images/bg_1.jpg')}}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Property</span></p>
                <h1 class="mb-3 bread">Property</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')

<!--
	https://www.youtube.com/watch?v=1lPuwnPTOJw
-->
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            @foreach($property as $pro)
            <div class="col-md-4 ftco-animate">
                <div class="properties">
                    <a href="{{url('property-single')}}"
                        class="img img-2 d-flex justify-content-center align-items-center"
                        style="background-image: url({{url('public/storage/image'.$pro->image)}});">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <span class="status sale">Sale</span>
                        <div class="d-flex">
                            <div class="one">
                                <h3><a href="property-single.html">{{substr($pro->title,0,24)}}</a></h3>
                                <p>Apartment</p>
                            </div>
                            <div class="two">
                                <span class="price">$20,000</span>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries</p>
                        <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="flaticon-selection"></i> 250sqft</span>
                            <span class="ml-auto"><i class="flaticon-bathtub"></i> 3</span>
                            <span><i class="flaticon-bed"></i> 4</span>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- {{-- Pagination --}} -->
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        {!! $property->links() !!}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection