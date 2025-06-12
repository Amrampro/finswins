@extends('layouts.charifund_template')

@section('body')
    <!-- ==== banner start ==== -->
    @include('frontend.components.home.banner')
    <!-- ==== / banner end ==== -->
    <!-- ==== help section start ==== -->
    @include('frontend.components.home.help_two')
    <!-- ==== / help section end ==== -->
    <!-- ==== cause slider section start ==== -->
    @include('frontend.components.home.caus_slider')
    <!-- ==== / cause slider section end ==== -->
    <!-- ==== cta section start ==== -->
    @include('frontend.components.home.cta')
    <!-- ==== / cta section end ==== -->
    <!-- ==== award section start ==== -->
    @include('frontend.components.home.award')
    <!-- ==== / award section end ==== -->
    <!-- ==== team section start ==== -->
    @include('frontend.components.home.team')
    <!-- ==== / team section end ==== -->
    <!-- ==== faq section start ==== -->
    @include('frontend.components.home.faq')
    <!-- ==== / faq section end ==== -->
    <!-- ==== partner section start ==== -->
    @include('frontend.components.home.partner')
    <!-- ==== / partner section end ==== -->
    <!-- ==== testimonial section start ==== -->
    @include('frontend.components.home.testimonial')
    <!-- ==== / testimonial two section end ==== -->
    <!-- ==== blog section start ==== -->
    @include('frontend.components.home.blog_section')
    <!-- ==== / blog section end ==== -->
    <!-- ==== image gallery section start ==== -->
    @include('frontend.components.gallery')
    <!-- ==== / image gallery section end ==== -->
@endsection