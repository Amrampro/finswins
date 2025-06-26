@php
    /***
 * @var \Illuminate\Pagination\LengthAwarePaginator<\App\Models\Team> $teams
 */
@endphp
<section class="team">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-6">
                <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                     <span class="sub-title"><i class="icon-donation"></i>Nos membres</span>
                    <h2 class="title-animation">Membres <span>Effectifs, d'Honneur, Associés</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row gutter-30">
            @foreach($teams??range(1,4) as $team)
                <div class="col-12 col-sm-6 col-xl-3">
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
            @endforeach

        </div>
        <div class="row">
            <div class="col-12">
                <div class="pagination-wrapper" data-aos="fade-up" data-aos-duration="1000">
                    {{$teams?->links()}}
                </div>
            </div>
        </div>
    </div>
    <div class="spade">
        <img src="assets/images/sprade-green.png" alt="Image">
    </div>
</section>
