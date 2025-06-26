@extends('layouts.charifund_template')

@section('body')
    <!-- ==== banner section start ==== -->
    @include('frontend.components.team.banner')
    <!-- ==== / banner section end ==== -->
    <!-- ==== team section start ==== -->
    @include('frontend.components.team.list_items',['teams' => $teams])
    <!-- ==== / team section end ==== -->
@endsection
