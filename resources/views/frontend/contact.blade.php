@extends('layouts.charifund_template')

@section('body')
    <!-- ==== banner section start ==== -->
    @include('frontend.components.contact.banner')
    <!-- ==== / banner section end ==== -->
    <!-- ==== contact section start ==== -->
    @include('frontend.components.contact.form')
    <!-- ==== / contact section end ==== -->
@endsection
