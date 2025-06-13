@extends('layouts.charifund_template')

@section('body')
    <!-- ==== banner section start ==== -->
    @include('frontend.components.blogs.index_banner')
    <!-- ==== / banner section end ==== -->
    <!-- ==== blog section start ==== -->
    @include('frontend.components.blogs.index_blog_section')
    <!-- ==== / blog section end ==== -->
@endsection
