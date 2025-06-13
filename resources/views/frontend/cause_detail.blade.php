@extends('layouts.charifund_template')

@section('body')
<!-- ==== banner section start ==== -->
@include('frontend.components.cause_detail.banner')
<!-- ==== / banner section end ==== -->
<!-- ==== cause details section start ==== -->
@include('frontend.components.cause_detail.list_items')
<!-- ==== / cause details section end ==== -->
@endsection
