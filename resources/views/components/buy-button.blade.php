<div>
    @php
        $product_credit_cost = getSourceCreditCostForSingleFile(1, @$product->media_type);
        $product_price_cost = getSourcePriceCostForSingleFile(1, @$product->media_type);
    @endphp
    @if(\Illuminate\Support\Facades\Auth::guard('web')->check() &&  auth()->user()->credit_count >= $product_credit_cost)
        <div class="d-flex align-items-center justify-content-evenly mt-4 hide-after-click">
            <div class="download-box d-flex flex-column align-items-center justify-content-center">
                <span class="residual-credit">دانلود {{ $product_credit_cost }} از {{ auth()->user()->credit_count }} اعتبار با قیمانده</span>
                <a style="cursor: pointer" wire:click.prevent="downloadViaCredit({{ $product->id }})" class="down-btn btn-green d-flex align-items-center justify-content-center hide-after-click">دانلود<span class="icon-download"></span></a>
            </div>
        </div>
    @else
        <div class="product_btns d-flex align-items-center justify-content-evenly mt-4">
            <a target="_blank" href="{{ route('credit-packages') }}" class="buy-btn btn-blue d-flex align-items-center justify-content-center">خرید بسته اعتباری</a>
            <a href="#"  class="single-purchase-btn btn-green d-flex align-items-center justify-content-center"> خرید تکی ، {{ number_format($product_price_cost) }} تومان</a>
        </div>
    @endif
</div>
