// // Goods
// var cart = {}; // Объект cart
// function init() { // Получение данных о товаре из фала goods.json
// 	$.getJSON('goods.json', goodsOut);
// } 

// function goodsOut(data) { // Вывод карточки товара
//     var exit= '';
// 	for (var key in data) {
// 		exit += '<div class="good wrap">';
// 		exit += '<p class="good__name">'+data[key].name+'</p>';
// 		exit += '<p class="good__size">Размер: '+data[key].size+'</p>';
// 		exit += '<img src="/images/categories/'+data[key].img+'" alt="card">';
// 		exit += '<button class="add-to-cart" data-id="'+data[key].name+'">Купить</button>';
//         exit += '</div>';
// 	}
//     $('.goods-list').html(exit);
// 	$('.add-to-cart').on('click', addToCard); //Вешаю событие на кнопку
// }

// function addToCard() { // Ф-ия добаления товара в корзину
// 	var id = $(this).attr('data-id');
// 	if (cart[id] == undefined) {
// 		cart[id] = 1;
// 	} else {
// 		cart[id]++;
// 	}
// 	console.log(cart);
// }

// $(document).ready(function() { //Запускаю ф-ию когда весь документ загрузился
// 	init();
// })
function addToCart(itemId) {
    
}