@extends('layouts.charifund_template')

@section('body')
    <!-- ==== banner section start ==== -->
    @include('frontend.components.about.banner')
    <!-- ==== / banner section end ==== -->
    <!-- ==== about section start ==== -->
    @include('frontend.components.about.about')
    <!-- ==== / about section end ==== -->
    <!-- ==== help section start ==== -->
    @include('frontend.components.about.help')
    <!-- ==== / help section end ==== -->
    <!-- ==== cta section start ==== -->
    @include('frontend.components.about.cta')
    <!-- ==== / cta section end ==== -->
    <!-- ==== team section start ==== -->
    @include('frontend.components.about.team')
    <!-- ==== / team section end ==== -->
    <!-- ==== faq section start ==== -->
    @include('frontend.components.about.faq')
    <!-- ==== / faq section end ==== -->
    <!-- ==== testimonial section start ==== -->
    @include('frontend.components.about.testimonial')
    <!-- ==== / testimonial section end ==== -->
@endsection
