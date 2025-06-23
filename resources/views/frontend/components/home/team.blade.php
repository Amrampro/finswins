<section class="team" data-background="assets/images/bg-one.png">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-6">
                <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                     <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                        people</span>
                    <h2 class="title-animation">Meet Our Volunteer
                        <span>Team</span> members
                    </h2>
                </div>
            </div>
        </div>
        <div class="row gutter-40">
            @foreach($teams??[] as $team)
                <x-frontend.team-component :team="$team"/>
            @endforeach


        </div>
        <div class="row">
            <div class="col-12">
                <div class="section__cta cta text-center">
                    <a href="{{route('frontend.team')}}" aria-label="our team" title="our team" class="btn--primary">View All
                        <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="spade">
        <img src="assets/images/sprade-green.png" alt="Image">
    </div>
</section>
