$(document).ready(function () {
    $('.update-quantity').click(function () {
        let idProduct = $(this).attr('data-id');
        let newQuantity = $('#quantity-' + idProduct).val();
        let newPrice = $('#price-' + idProduct).val();
        let location = window.location.origin;
        console.log(location)

        $.ajax({
            url: location + '/cart/update/' + idProduct,
            data: {
                newQuantity: newQuantity,
                newPrice: newPrice
            },
            method: 'GET',
            success: function (res){
                $('#cart-subtotal').html(res.cart.totalPrice);
                $('#price-' + idProduct).html(res.cart.items[idProduct].price);
                alert.success('Add cart success');
            }
        })
    })

    $('.delete-item').on('click', 'delete-item-cart a', function () {
        $.ajax({
            url: 'cart/delete'+ $(this).attr('data-id'),
            type: 'GET',
        }).done(function (response) {
            $('.shopping-cart').empty();
            $('.shopping-cart').html(response);
            alertify.success('Delete success');
        })
    })
})

// $(document).ready(function () {
//     $('.delete-item').click(function () {
//         let idProduct = $(this).attr('data-id');
//         let location = window.location.origin;
//         console.log(location)
//
//         $.ajax({
//             url: location + '/cart/delete/' + idProduct,
//             data: {idProduct: idProduct},
//             method: 'GET',
//             success: function (res){
//                 $('#cart-subtotal').html(res.cart.totalPrice);
//             }
//         })
//     })
// })
// function cartDelete(event) {
//     event.preventDefault();
//     let urlDeleteCart = $('.delete_cart_url').data('url');
//     let idProduct = $(this).attr('data-id');
//     let id = $(this).data(idProduct);
//     $.ajax({
//         type: "GET",
//         url: urlDeleteCart,
//         data: {id: id},
//         success: function (data) {
//             if (data.code === 200) {
//                 $('.shopping-cart').html(data.list)
//                 alert('cap nhat thanh cong')
//             }
//         },
//         error: function () {
//
//         }
//     })
// }
// $(function () {
//     $(document).on('click', '.cart_delete', cartDelete)
// })
