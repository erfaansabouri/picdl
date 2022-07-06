<section class="panel mt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <div class="title-section">
                        <div class="d-flex align-items-end justify-content-between">
                            <h3 class="title__section d-flex align-items-center"><span class="icon-magnifying-glass icon__search"></span>نتایج جستجو </h3>
                            <form action="" class="d-flex align-items-center  flex-wrap justify-content-end">
                                <select name="" id="" class="select">
                                    <option value="" selected>نوع تصویر</option>
                                    <option value="">1 تصویر</option>
                                    <option value="">2 تصویر</option>
                                </select>
                                <select name="" id="" class="select">
                                    <option value="">جهت</option>
                                    <option value="">1جهت</option>
                                    <option value="">2جهت</option>
                                </select>
                                <select name="" id="" class="select">
                                    <option value="">رنگبندی </option>
                                    <option value="">1رنگبندی </option>
                                    <option value="">2رنگبندی </option>
                                </select>
                                <select name="" id="" class="select">
                                    <option value="">بیشتر </option>
                                    <option value="">1بیشتر </option>
                                    <option value="">2بیشتر </option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="d-flex align-items-center w-100 flex-column mb-5">
                        <div class="image-gallery mb-5">
                            <div id="photos">
                                @foreach(@$result->data ?? [] as $image)
                                    <a href="{{ route('sources.shutter-stock.show', $image->id) }}">
                                        <img src="{{ $image->assets->huge_thumb->url }}">
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <nav aria-label="Page navigation example">
                            @php
                                $previous_page = $result->page - 1 <= 1 ? 1 : $result->page - 1;
                                $next_page = $result->page + 1;
                            @endphp
                            <ul class="pagination">
                                <li class="page-item ">
                                    <a class="page-link p-0" href="{{ route('sources.shutter-stock.index', ['q' => $q, 'page' => $previous_page]) }}" aria-label="Previous">
                                        <span class="icon-chevron-right"></span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link active" href="#">{{ $result->page }}</a></li>
                                <li class="page-item">
                                    <a class="page-link p-0" href="{{ route('sources.shutter-stock.index', ['q' => $q, 'page' => $next_page]) }}" aria-label="Next">
                                        <span class="icon-chevron-left"></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
