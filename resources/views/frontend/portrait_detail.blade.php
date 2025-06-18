@extends('layouts.charifund_template')

@section('body')
    <!-- ==== banner section start ==== -->
    @include('frontend.components.portrait_detail.banner')
    <!-- ==== / banner section end ==== -->
    <!-- ==== team section start ==== -->
    @include('frontend.components.portrait_detail.detail_item',['portrait' => $portrait])
    <!-- ==== / team section end ==== -->]
@endsection
