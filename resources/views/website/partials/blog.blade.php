@if(\App\Models\BlogPost::query()->count())
<section class="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="box-section bg-white p-3">
                    <div class="title-section">
                        <div class="d-flex align-items-center">
                            <h3 class="title__section d-flex align-items-center"><span class="icon-promotion"></span>وبلاگ</h3>
                        </div>
                    </div>
                    <div class="row">
                        @foreach(\App\Models\BlogPost::all() as $blogPost)
                            <div class="col-lg-3 mb-3">
                                <a href="{{ route('blog-posts.show', $blogPost->id) }}" class="blog-cart">
                                    <div class="blog-cart_img">
                                        <div class="blog-cart_img__inner">
                                            <img src="{{ getPublicImage($blogPost->file_path) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start justify-content-between flex-column">
                                        <p class="blog-cart_title d-flex align-items-center"><span class="icon-arrow"></span>{{ $blogPost->title }}</p>
                                        <p class="blog-cart_text">{{ $blogPost->small_description }}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
