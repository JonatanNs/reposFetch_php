//import { addToCart } from './assets/js/cart.js';


document.addEventListener("DOMContentLoaded", () => {

    console.log("Le DOM est chargé.");

    function addToCart(product_id){
        console.log(`Add product ${product_id} to cart.`);
    }

    

    const buttons = document.querySelectorAll(".btn-add-to-cart");
    buttons.forEach(btn =>{
        btn.addEventListener("click", function(){
            let id = btn.getAttribute("data-product");
            addToCart(id);
            let formData = new FormData();
        formData.append('product_id', product_id);

        const options = {
            method: 'POST',
            body: formData
        };

        fetch('index.php?route=ajouter-au-panier', options)
            .then(response => response.json())
            .then(data => {
                console.log(data);
        });
        });
    });
});

