@extends('website.master')
@section('content')
    <section class="panel mt-4">
        <div class="container">
            <x-profile-nav-items></x-profile-nav-items>
            <div class="row">
                <div class="col-lg-12">
                    <div class="bg-white p-3">
                        <div class="title-section">
                            <div class="d-flex align-items-center justify-content-between">
                                <h3 class="title__section d-flex align-items-center"><span class="icon-promotion"></span>پشتیبانی </h3>
                                <a style="cursor: pointer" data-toggle="modal" data-target="#add-ticket" class="ticket-submit-btn btn-green title-section-btn d-flex align-items-center"><span class="icon-plus"></span>تیکت جدید </a>
                            </div>
                        </div>
                        @if(count($tickets) == 0)
                        <div class="d-flex align-items-center w-100 flex-column py-5">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="73px" height="92px">
                                <image  x="0px" y="0px" width="73px" height="92px"  xlink:href="data:img/png;base64,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" />
                            </svg>
                            <h4 class="ticket-list">لیست تیکت خالی است</h4>
                            <button type="button" data-toggle="modal" data-target="#add-ticket" class="ticket-submit-btn btn-green d-flex align-items-center"><span class="icon-plus"></span> ارسال تیکت جدید</button>
                        </div>
                        @else
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>شناسه</th>
                                    <th>موضوع</th>
                                    <th>توضیحات</th>
                                    <th>وضعیت</th>
                                    <th>پاسخ مدیریت</th>
                                    <th>تاریخ ایجاد</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tickets as $ticket)
                                    <tr>
                                        <td>{{ $ticket->id }}</td>
                                        <td>{{ $ticket->subject }}</td>
                                        <td>{{ $ticket->description }}</td>
                                        <td>{{ $ticket->status }}</td>
                                        <td>{{ $ticket->admin_response ?? 'پاسخی ثبت نشده' }}</td>
                                        <td>{{ $ticket->shamsi_created_at }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- The Modal -->
    <div class="modal" id="add-ticket">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">ایجاد تیکت جدید</h4>
                </div>

                <div class="modal-body">
                    <form action="{{ route('profile.tickets.store') }}" method="post">
                        @csrf
                        @method('post')
                        <div class="form-group">
                            <label for="comment">موضوع:</label>
                            <input class="form-control" name="subject">
                        </div>

                        <div class="mt-3 form-group">
                            <label for="comment">توضیحات:</label>
                            <textarea class="form-control" rows="5" name="description"></textarea>
                        </div>

                        <button type="submit" class="mt-3 btn btn-success">ارسال</button>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">بستن</button>
                </div>

            </div>
        </div>
    </div>


@endsection
