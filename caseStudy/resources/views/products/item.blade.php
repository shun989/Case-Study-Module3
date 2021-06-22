@extends('products.show-product')
@section('content')
<style>
    .auth-user{
        margin: 0 5px;
        text-decoration: none;
    }
</style>
<!-- Product section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{$dataProduct['image']}}" alt="..." /></div>
            <div class="col-md-6">
                <div class="small mb-1">{{$dataProduct['category']}}</div>
                <h1 class="display-5 fw-bolder">{{$dataProduct['name']}}</h1>
                <div class="fs-5 mb-5">
                    <span class="text-decoration-line-through"></span>
                    <span>{{number_format($dataProduct['price'])}} VNĐ</span>
                </div>
                <p class="lead">{{$dataProduct['description']}}</p>
                <div class="d-flex">
                    <input class="form-control text-center me-3" id="inputQuantity" type="number" min="1" style="max-width: 3rem" />
                    <button class="btn btn-outline-dark flex-shrink-0" type="button">
                        <i class="bi-cart-fill me-1"></i>
                        <a class="to-cart" href="{{ route('cart.addToCart', $dataProduct->id) }}">{{__('language.Add to cart')}}</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


