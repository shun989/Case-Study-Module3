@extends('products.show-product')
@section('content')
<div class="title-image">
        <div class="title-text">
            <h1 class="display-4 fw-bolder">{{__('language.fresh fruit')}}</h1>
            <p class="lead fw-normal fw-bolder mb-0">{{__('language.slogan')}}</p>
        </div>
</div>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            @foreach($products as $product)
            <div class="col mb-5">
                <div class="card h-100">
                    <a href="{{route('users.item',$product['id'])}}"><img class="card-img-top" src="{{$product['image']}}" style="height: 185px" alt="..." /></a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder text-primary">{{$product['name']}}</h5>
                            <!-- Product price-->
                            <span class="text-danger">{{number_format($product['price'])}} VNĐ</span>
                        </div>
                    </div>
                    <div class="text-center">
                        <h5 class="fw-bolder">{{$product['created_at']}}</h5>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-warning mt-auto " style="background-color: green" href="{{ route('cart.addToCart', $product->id) }}">{{__('Add to cart')}}</a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection


