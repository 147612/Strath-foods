
let carts = document.querySelectorAll('.add-cart');
let products =[
    {
        name:'BURGER',
        tag:'burger',
        price:600,
        inCart:0

    },
    {
        name:'SMALL-FRY',
        tag:'fish',
        price:450,
        inCart:0   
    },
    {
        name:'TACOS',
        tag:'tacos',
        price:250,
        inCart:0
    },
    {
        name:'CHIPS',
        tag:'chips',
        price:150,
        inCart:0
    }
];
for(let i = 0; i < carts.length;i++) {
    carts[i].addEventListener('click', () => {
       
        cartNumbers(products[i]);
        totalCost(products[i]);
    })
}
function onLoadCartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');
    
    

}
function cartNumbers(product){
    
    let productNumbers = localStorage.getItem('cartNumbers');
    productNumbers = parseInt(productNumbers);

    if(productNumbers){
    localStorage.setItem('cartNumbers', productNumbers + 1);
   
    }
else{
    localStorage.setItem('cartNumbers', 1);
   

}
 setItems(product)


}
function setItems(product){
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
    
    if(cartItems != null){
        if(cartItems[product.tag] == undefined){
cartItems= {
    ...cartItems,
    [product.tag]:product
}
        }
        cartItems[product.tag] .inCart += 1;
    }
    else{
        product.inCart = 1;
        cartItems = {
            [product.tag] : product
        }
    }
   
 
    localStorage.setItem('productsInCart', JSON.stringify(cartItems));

}
function totalCost(product){
    //console.log('total cost =',product.price);
    let cartCost = localStorage.getItem('totalCost');
    
    console.log('cartcost',cartCost);
console.log(typeof cartCost);

    if(cartCost != null){
        cartCost = parseInt(cartCost);
        localStorage.setItem("totalcost", cartCost + product.price);
      }  else{
    localStorage.setItem("totalcost", product.price);
        }
    }


function displayCart(){
let cartItems = localStorage.getItem("productsInCart");
cartItems = JSON.parse(cartItems);
let productContainer = document.querySelector(".products-container");
console.log(cartItems);
if(cartItems && productContainer){
    productContainer.innerHTML = ' ';
    Object.values(cartItems).map(item => {
        productContainer.innerHTML += `
        <div class="product">
        <i class="fa-solid fa-circle-minus"></i>
    <img src = "./fimg/${item.tag}.png"></img>
    <span>${item.name}</span>
    </div>
    <div class = 'price" >${item.price} </div>
    <div class = "quantity">
    <i class="fa-solid fa-minus"></i>
    <span>`
    });
    }

}
onLoadCartNumbers();
 displayCart();