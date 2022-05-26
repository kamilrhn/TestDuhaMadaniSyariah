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
        @foreach($product as $p)
        <div class="col-md-4 col-lg-4 mb-3">
            <div class="card h-100">
            <img class="card-img-top" src="https://pixinvent.com/demo/frest-bootstrap-laravel-admin-dashboard-template/demo/assets/img/elements/2.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$p->product_name}}</h5>
                <p class="card-text">
                <strong>Rp. {{number_format($p->price)}},-</strong><br>
                <strong>Qty: {{$p->stock}} pcs left.</strong>
                </p>
                <a href="javascript:void(0)" class="btn btn-outline-primary">Add to Cart</a>
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
