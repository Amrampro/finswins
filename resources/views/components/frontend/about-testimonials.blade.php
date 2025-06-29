@props(['testimonial'])
@php
    /**
* @var \App\Models\Testimonial $testimonial
*/
@endphp
<div {{ $attributes->class(['swiper-slide']) }}>
    <div class="testimonial__slider-single">
        <div class="review">
            <i class="icon-star"></i>
            <i class="icon-star"></i>
            <i class="icon-star"></i>
            <i class="icon-star"></i>
            <i class="icon-star"></i>
        </div>
        <div class="content">
            <blockquote>{{str($testimonial->message)->toHtmlString()}}</blockquote>
        </div>
        <div class="author-info">
            <div class="author-thumb">
                <img src="{{$testimonial->getImageUrl()}}" alt="Image">
            </div>
            <div class="author-content">
                <h6>{{$testimonial->name}}</h6>
                <p>{{$testimonial->title}}</p>
            </div>
        </div>
        <div class="quote">
            <img src="{{asset('assets/images/quote.png')}}" alt="Image">
        </div>
    </div>
</div>
