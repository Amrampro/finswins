@php
/**
* @var \Illuminate\Database\Eloquent\Collection<\App\Models\Portrait> $portraits
 */
@endphp
<section class="team">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-6">
                <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                     {{-- <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                        people</span> --}}
                    <h2 class="title-animation">PORTRAITS DE FEMMES
                    </h2>
                </div>
            </div>
        </div>
        <div class="row gutter-30">
            @foreach($portraits as $portrait)
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000">
                        <div class="team__single van-tilt">
                            <div class="team__single-thumb">
                                <a href="{{route('frontend.portrait.show',['portraitId' => $portrait->id])}}">
                                    <img src="{{$portrait->getImageUrl()}}" alt="Image">
                                </a>
                            </div>
                            <div class="team__single-content">
                                <h6><a href="{{route('frontend.portrait.show',['portraitId' => $portrait->id])}}">{{{$portrait->name}}}</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col-12">
                <div class="pagination-wrapper" data-aos="fade-up" data-aos-duration="1000">
                    {{$portraits?->links()}}
                </div>
            </div>
        </div>
    </div>
    <div class="spade">
        <img src="assets/images/sprade-green.png" alt="Image">
    </div>
</section>
