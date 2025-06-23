<section class="blog-main blog cm-details">
    <div class="container">
        <div class="row gutter-60">
            <div class="col-12 col-xl-8">
                <div class="row gutter-30">
                    @foreach($blogs??[] as $blog)
                        <div class="col-12 col-lg-6">
                            <div class="blog__single-wrapper" data-aos="fade-up" data-aos-duration="1000">
                                <div class="blog__single van-tilt">
                                    <div class="blog__single-thumb">
                                        <a href="#">
                                            <img src="{{$blog->getPosterUrl()}}" alt="Image">
                                        </a>
                                        <div class="tag">
                                            <a href="#"><i class="fa-solid fa-tags"></i>{{$blog->blogCategory?->name}}</a>
                                        </div>
                                    </div>
                                    <div class="blog__single-inner">
                                        <div class="blog__single-meta">
                                            <p><i class="icon-user"></i># {{$blog->created_at->toFormattedDateString()}}</p>
                                            <p><i class="icon-message"></i>Comments (0)</p>
                                        </div>
                                        <div class="blog__single-content">
                                            <h5><a href="#">{{$blog->title}}</a>
                                            </h5>
                                        </div>
                                        <div class="blog__single-cta">
                                            <a href="{{$blog->getShowRoute()}}" aria-label="blog details" title="blog details">Read
                                                More<i class="fa-solid fa-circle-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <img src="assets/images/blog/spade.png" alt="Image" class="spade-two">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    {{$blogs?->links()}}
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="blog-main__sidebar">
                    <div class="cm-details__sidebar">
                        <div class="cm-sidebar-widget" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <div class="intro">
                                <h5>search here</h5>
                            </div>
                            <form action="#" method="post">
                                <input type="text" name="search-product" id="searchProduct" placeholder="Search Here..."
                                       required>
                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div>

                        <div class="cm-sidebar-widget" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <div class="intro">
                                <h5>Categories</h5>
                            </div>
                            <div class="cm-categories">
                                @foreach($blogCategories??[] as $blogCategory)
                                    <a href="{{route('frontend.blogs.index',['blogCategory'=>$blogCategory->id])}}">
                                        <span>{{$blogCategory->name}}</span>
                                        <span>{{$blogCategory->blogs_count}}</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
