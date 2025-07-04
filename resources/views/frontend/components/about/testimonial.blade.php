<section class="testimonial testimonial-alter" data-background="assets/images/bg-one.png">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-xl-7">
                <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                     <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                        people</span>
                    <h2 class="title-animation">Our valueable <span>customer</span>
                        Awesome Feedback
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial__inner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial__slider swiper">
                        <div class="swiper-wrapper">
                            @foreach($testimonials??[] as $testimonial)
                                <x-frontend.about-testimonials :testimonial="$testimonial"/>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-navigation">
            <button type="button" aria-label="prev slide" title="prev slide" class="prev-testimonial slider-btn">
                <i class="fa-solid fa-arrow-left"></i>
            </button>
            <button type="button" aria-label="next slide" title="next slide"
                    class="next-testimonial slider-btn slider-btn-next">
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </div>
    </div>
</section>
