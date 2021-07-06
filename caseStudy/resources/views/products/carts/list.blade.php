<!-- Shopping Cart -->
<div class="shopping-cart section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Shopping Summery -->
{{--                <table class="table shopping-summery delete_cart_url" data-url="{{route('cartDelete')}}">--}}
                <table class="table shopping-summery delete_cart_item">
                    <thead>
                    <tr class="main-hading">
                        <th>{{__('language.Image')}}</th>
                        <th>{{__('language.Name')}}</th>
                        <th>{{__('language.Price')}}</th>
                        <th>{{__('language.quantity')}}</th>
                        <th>{{__('language.total')}}</th>
                        <th><i class="ti-trash remove-icon"></i></th>
                    </tr>
                    </thead>
                    <tbody>

                    @if(isset($cart))
                        @forelse($cart->items as $item)
                            <tr>
                                <td><img style="width: 100px" src="{{$item['product']->image}}"
                                         alt="#">
                                </td>
                                <td><span>{{ $item['product']->name }} </span></td>
                                <td class="price" ><span>{{ number_format($item['product']->price) }}VNĐ </span></td>
                                <td><input type="number" id="quantity-{{$item['product']->id}}" name="quant[1]" class="update-quantity quantity" min="1"
                                           data-id="{{$item['product']->id}}"
                                           max="100"
                                           value="{{ $item['quantity'] }}">
                                </td>
                                <!--/ End Input Order -->
                                <td class="total-amount" id="price-{{$item['product']->id}}" data-title="Total"><span>{{ number_format($item['money']*$item['quantity'])}}VNĐ</span></td>
                                <td class="delete-item-cart"><a class="btn btn-danger delete-item" href="" data-id="{{$item['product']->id}}">
                                        {{__('language.Delete')}}</a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">{{__('language.nodata')}}</td>
                            </tr>
                        @endforelse
                    @else
                        <tr>
                            <td colspan="4">{{__('language.nodata')}}</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                <a class="btn btn-success" href="">Delete All Cart</a>
                <hr>
                <!--/ End Shopping Summery -->
            </div>
        </div>
        @if(isset($cart))

            <div class="right">
                <h3>{{__('language.Total Money')}}: <span id="cart-subtotal">{{ number_format($cart->totalPrice) }}VNĐ</span></h3>
            </div>
        @endif
        <div>
            <a class="btn btn-primary">{{__('language.payment')}}</a>
            <a href="{{route('cart.index')}}" class="btn btn-primary">{{__('language.Update')}}</a>
        </div>
    </div>
</div>
<hr>
<!--/ End Shopping Cart -->
