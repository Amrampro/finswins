@props(['team'])
@php
    /**
     * @var \App\Models\Team $team
     */
@endphp
<div {{ $attributes->class(['col-12 col-sm-6 col-xl-3']) }}>
    <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000">
        <div class="team__single van-tilt">
            <div class="team__single-thumb">
                <a href="#">
                    {{--<img src="assets/images/team/one.png" alt="Image">--}}
                </a>
            </div>
            <div class="team__single-content">
                <h6><a href="#">{{$team->name}}</a></h6>
                <p class="mb-3">{{$team->role}}</p>
                <hr class="py-2">
                <div><i>{{$team->teamCategory->name}}</i></div>
            </div>
        </div>
    </div>
</div>
