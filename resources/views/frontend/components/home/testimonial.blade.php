<section class="testimonial-two">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9 col-xl-5">
                <div class="section__header" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <span class="sub-title"><i class="icon-donation"></i>Soutenez les Femmes, Changez des Vies</span>
                    <h2 class="title-animation">Ce que les gens
                        <span>disent</span> de nous
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="testimonial-two__inner" data-background="assets/images/testimonial-bg.png" data-aos="fade-up"
                data-aos-duration="1000" data-aos-delay="100">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-5 d-none d-lg-block">
                        <div class="testimonial-two__thumb">
                            <img src="{{$testimonials->first()->getImageUrl()}}" alt="Image">
                            <div class="quote-thumb">
                                <i class="fa-solid fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7 col-xl-6">
                        <div class="testimonial-two__content">
                            <div class="testimonial-two__slider swiper">
                                <div class="swiper-wrapper">
                                    @foreach($testimonials??[] as $testimonial)
                                        <div class="swiper-slide">
                                            <div class="testimonial-two__single">
                                                <div class="author-info">
                                                    <div class="author-thumb">
                                                        <img src="{{$testimonial->getImageUrl()}}" alt="Image">
                                                    </div>
                                                    <div class="author-content">
                                                        <h5>{{$testimonial->title}}</h5>
                                                        <p>{{$testimonial->name}}</p>
                                                    </div>
                                                </div>
                                                <div class="testimonial-two__single-content">
                                                    <h5>{{str($testimonial->message)->toHtmlString()}}
                                                    </h5>
                                                    <div class="review">
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="slider-navigation cta">
                                <button type="button" aria-label="prev slide" title="prev slide"
                                    class="prev-testimonial-two slider-btn">
                                    <i class="fa-solid fa-arrow-left"></i>
                                </button>
                                <button type="button" aria-label="next slide" title="next slide"
                                    class="next-testimonial-two slider-btn slider-btn-next">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                            <div class="quote">
                                <img src="assets/images/quote-two.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-bg">
        <img src="assets/images/blog/blog-bg.png" alt="Image">
    </div>
    <div class="spade">
        <img src="assets/images/community/spade.png" alt="Image" class="base-img">
    </div>
</section>
