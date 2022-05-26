@extends('layouts.contentLayoutMaster')
{{-- page Title --}}
@section('title','Dashboard')
{{-- vendor css --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/charts/apexcharts.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/extensions/swiper.min.css')}}">
@endsection
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/dashboard-ecommerce.css')}}">
@endsection

@section('content')
<section id="product">
    <div class="row">
        @foreach($voucher as $v)
        <div class="col-md-4 col-lg-4 mb-3">
            <div class="card mb-0">
                <div class="card-body">
                    <img src="https://cdn.pixabay.com/photo/2014/04/02/16/19/barcode-306926_1280.png" alt="" width="60%" height="30%">
                    <h3 style="margin-bottom:-20px;"><strong>{{$v->voucher_code}}</strong></h3><br>
                    <p class="card-text mt-0">
                    {{$v->voucher_detail}}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection

@section('vendor-scripts')
<script src="{{asset('vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{asset('vendors/js/extensions/swiper.min.js')}}"></script>
@endsection

@section('page-scripts')
<script src="{{asset('js/scripts/pages/dashboard-ecommerce.js')}}"></script>
@endsection
