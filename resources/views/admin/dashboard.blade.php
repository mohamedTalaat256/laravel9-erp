@extends('layouts.admin')
@section('title')
الرئيسية
@endsection



@section('contentheaderlink')
<a href="{{ route('admin.dashboard') }}"> الرئيسية </a>
@endsection

@section('contentheaderactive')
عرض
@endsection



@section('content')
<div class="row mb-3 pb-3">
    <input type="hidden" id="ajax_get_sales_per_year"
                value="{{ route('admin.SalesInvoices.get_sales_per_year') }}">

    <div class="col-md-3">
        <a href="{{ route('admin.customer.index') }}">
            <div class="m-1 rounded-counter clients-counter text-center ">
                <h1><i class="fas fa-user"></i></h1>
                <h4>العملاء</h4>
                <h5>{{$clients_number}}</h5>
            </div>
        </a>

    </div>
    <div class="col-md-3">
        <a href="">
            <div class="m-1 rounded-counter balance-counter text-center">
                <h1><i class="fas fa-money-check-alt"></i></h1>
                <h4>الرصيد</h4>
                <h5>{{$balance}}</h5>
            </div>
        </a>

    </div>
    <div class="col-md-3">
        <a href="{{ route('admin.SalesInvoices.index') }}">
            <div class="m-1 rounded-counter sales-counter text-center">
                <h1><i class="fas fa-file-invoice"></i></h1>
                <h4>المبيعات</h4>
                <h5>{{$sales_number}}</h5>
            </div>
        </a>

    </div>
    <div class="col-md-3">
        <a href="{{ route('admin.suppliers_orders.index') }}">
            <div class="m-1 rounded-counter burchases-counter text-center">
                <h1><i class="fas  fa-shopping-cart"></i></h1>
                <h4>المشتريات</h4>
                <h5>{{$purchases_number}}</h5>
            </div>
        </a>
    </div>



</div>
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <h3>حالة المبيعات</h3>
        <div id="chart_sales"></div>
        <!--end::Card-->
    </div>
   {{--  <div class="col-lg-4">
        <h3 class="card-label mb-3">
            أرصدة العملاء
        </h3>
        <div id="chart_balance" class="d-flex justify-content-center mt-4"></div>
    </div> --}}
</div>
<div class="row">
    <div class="col">
        <h3 class="mb-3">الأكثر مبيعا</h3>
        <table class="table table-hover mt-3">
            <thead class="custom_thead">
                <th width="50"><h4>الصنف</h4></th>
                <th></th>
                <th>الكميات المباعة</th>
            </thead>
            <tbody>
                @foreach ($best_sales as $best_sale )
                <tr>
                    <td>
                        @if ($best_sale->image)
                            <img src="{{ asset('assets/admin/uploads/'.$best_sale->image)}}}">
                        @else
                        <img class="prod-image" src="{{ asset('assets/admin/uploads/product_placeholder.jpg')}}">
                        @endif
                        </td>
                    <td>{{ $best_sale->name }}</td>
                    <td>{{ $best_sale->item_count }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
