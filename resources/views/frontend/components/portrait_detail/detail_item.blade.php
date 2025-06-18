@php
    /**
    * @var \App\Models\Portrait $portrait
    */
@endphp
<!-- ==== team details section start ==== -->
<section class="team-details">
    <div class="container">
        <div class="row gutter-40 align-items-center">
            <div class="col-12 col-lg-6 col-xl-5">
                <div class="team-details__thumb" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="{{$portrait->getImageUrl()}}" alt="Image">
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-7">
                <div class="team-details__content" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="team-details__meta">
                        <h4 class="title-animation">{{$portrait->name}}</h4>

                    </div>

                </div>
            </div>
            <div class="col-12">
                <div class="about-me" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <h4 class="title-animation">A propos</h4>
                    <p>
                        {{str($portrait->description)->toHtmlString()}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== team details section end ==== -->
