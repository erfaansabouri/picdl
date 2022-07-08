<div class="row">
    <div class="col-lg-12">
        <ul class="panel-menu d-flex align-items-center justify-content-center my-3">
            <li>
                <a href="{{ route('profile.dashboard') }}" class="panel-menu_link @if(\Illuminate\Support\Facades\Route::is('profile.dashboard')) active @endif d-flex align-items-center">
                    داشبورد
                    <span class="icon-chevron-thin-down"></span>
                </a>
            </li>
            <li>
                <a href="{{ route('profile.transactions') }}" class="panel-menu_link d-flex align-items-center">
                    تراکنش ها
                    <span class="icon-chevron-thin-down"></span>
                </a>
            </li>
            <li>
                <a href="{{ route('profile.downloads') }}" class="panel-menu_link d-flex align-items-center">
                    سوابق دانلود
                    <span class="icon-chevron-thin-down"></span>
                </a>
            </li>
            <li>
                <a href="{{ route('profile.tickets') }}" class="panel-menu_link d-flex align-items-center">
                    پشتیبانی
                    <span class="icon-chevron-thin-down"></span>
                </a>
            </li>
            <li>
                <a href="{{ route('profile.user-details') }}" class="panel-menu_link d-flex align-items-center">
                    مشخصات
                    <span class="icon-chevron-thin-down"></span>
                </a>
            </li>
            <li>
                <a href="{{ route('auth.logout') }}" class="panel-menu_link">خروج</a>
            </li>
        </ul>
    </div>
</div>
