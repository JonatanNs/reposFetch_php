<?php

class ShopController extends AbstractController {
    public function shop() : void{

        $productManager = new ProductManager();
        $products = $productManager->findAll();

        $this->render("shop/shop.html.twig", [
            "title" => "Boutique",
            "products" => $products
        ]);
    }
    public function addToCart() : void{
        var_dump($_POST);
        if(isset($_POST["productId"])){

           $productId = htmlspecialchars($_POST["productId"]);

            $productManager = new ProductManager();
            $product = $productManager->findOne($productId);
            
            $_SESSION["cart"] = $product->toArray();
            var_dump($_SESSION["cart"]);
            header("Location: index.php?route=boutique");
            exit();
        }
    }
    public function cart() : void{
        $products = isset($_SESSION["cart"]) ? $_SESSION["cart"] : null;

        $this->render("shop/cart.html.twig", [
            "title" => "Panier",
            "products" => $products
        ]);
    }
}