@if(\App\Models\Slider::query()->count())
<header class="header">
    <div class="container-fluid bg-dark p-0">
        <div class="col-lg-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                </div>
                <div class="carousel-inner h-100">
                    <div class="carousel-item active h-100">
                        <div class="carousel-item-inner">
                            <img src="{{ getPublicImage(\App\Models\Slider::query()->first()->file_path) }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@endif
