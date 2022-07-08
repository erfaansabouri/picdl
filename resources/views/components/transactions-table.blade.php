<div>
    <table class="table">
        <thead>
        <tr>
            <th>ردیف</th>
            <th>نام پکیج</th>
            <th>وضعیت تراکنش</th>
            <th>مبلغ (تومان)</th>
            <th>تاریخ ایجاد</th>
            <th>تاریخ پرداخت</th>
            <th>شناسه پرداخت</th>
        </tr>
        </thead>
        <tbody>
        @foreach($transactions ?? [] as $key => $transaction)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>
                    @if($transaction->credit_package_id)
                        بسته {{ ($transaction->creditPackage->count) }} تایی
                    @else
                        شارژ مستقیم مبلغ {{ $transaction->amount }}
                    @endif
                </td>
                <td>
                    {{ $transaction->status }}
                </td>
                <td>
                    {{ number_format($transaction->amount) }}
                </td>
                <td>
                    {{ $transaction->shamsi_created_at }}
                </td>
                <td>
                    {{ $transaction->shamsi_paid_at }}
                </td>
                <td>
                    {{ $transaction->authority }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
