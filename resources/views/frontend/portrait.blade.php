@extends('layouts.charifund_template')

@section('body')
    <!-- ==== banner section start ==== -->
    @include('frontend.components.portrait.banner')
    <!-- ==== / banner section end ==== -->
    <!-- ==== team section start ==== -->
    @include('frontend.components.portrait.list_items',['portraits' => $portraits])
    <!-- ==== / team section end ==== -->]
@endsection
