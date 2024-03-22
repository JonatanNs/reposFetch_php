<?php

class ProductManager extends AbstractManager{
    public function findAll() : array {
        $query = $this->db->prepare("SELECT * FROM products");
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);

        $products = [];

        foreach($results as $result){
            $newProduct = new Product($result["name"],  $result["description"],$result["picture_url"], $result["picture_alt"] , $result["price"] );
            $newProduct->setId($result["id"]);
            $products[] = $newProduct;
        }
        return $products;
    }

    public function findOne(int $id) : ? Product {
        $query = $this->db->prepare("SELECT * FROM products WHERE id = :id");
        $parameters = [
            'id' => $id
        ];
        $query->execute($parameters);
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if($result){
            $newProduct = new Product($result["name"],  $result["description"],$result["picture_url"], $result["picture_alt"] , $result["price"] );
            $newProduct->setId($result["id"]);
            
            return $newProduct;
        }
        return null ;
    }
}