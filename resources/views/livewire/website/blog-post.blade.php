<div>
    <section class="rules mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box-section py-3 px-4 bg-white">
                        <div class="title-section">
                            <div class="d-flex align-items-center">
                                <h3 class="title__section d-flex align-items-center"><span class="icon-crystal-ball"></span>{{ $blogPost->title }}</h3>
                            </div>
                        </div>
                        <img class="img-fluid img-thumbnail w-100" src="{{ getPublicImage($blogPost->file_path) }}" alt="">
                        <hr>
                        <p>
                            {!! nl2br($blogPost->full_description) !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
