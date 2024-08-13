@extends('frontend.layouts.master')

@section('content')

    <!--============================
        BANNER PART 2 START
    ==============================-->
        @include('frontend.home.sections.banner-slider')
    <!--============================
        BANNER PART 2 END
    ==============================-->
    <!--============================
        BRAND SLIDER START
    ==============================-->
        @include('frontend.home.sections.brand-slider')
    <!--============================
        BRAND SLIDER END
    ==============================-->
    <!--============================
        HOT DEALS START
    ==============================-->
        @include('frontend.home.sections.hot-deals')
    <!--============================
        HOT DEALS END  
    ==============================-->

    <!--============================
        HOME BLOGS START
    ==============================-->
        @include('frontend.home.sections.blogs')
    <!--============================
        HOME BLOGS END
    ==============================-->

@endsection