<section class="award">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8">
                <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                     <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                        people</span>
                    <h2 class="title-animation">Our Global Awards <span>Winning</span>
                        Photo Gallery
                    </h2>
                </div>
            </div>
        </div>
        <div class="row gutter-24">
            @foreach($galleries as $gallery)
                @php
                    /** @var \App\Models\Gallery $gallery **/
                @endphp
                <div class="col-12 col-lg-5">
                    <div class="award__single" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <div class="thumb">
                            <a href="#">
                                <img src="{{asset($gallery->getFirstImageUrl())}}" alt="Image">
                            </a>
                        </div>
                        <div class="content">
                            <div class="award__content">
                                <h5><a href="#">{{$gallery->title}}</a></h5>
                                <p>{{$gallery->published_at->isoFormat('lll')}}</p>
                            </div>
                            <div class="award__thumb">
                                <a href="#">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col-12">
                <div class="section__cta cta text-center">
                    <a href="{{route('frontend.galleries')}}" aria-label="our events" title="our events" class="btn--primary">View
                        All <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="spade">
        <img src="assets/images/community/spade.png" alt="Image" class="base-img">
    </div>
</section>
