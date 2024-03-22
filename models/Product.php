<?php

class Product {

    private ?int $id = null;

    public function __construct(
        private string $name, 
        private string $description,
        private string $picture_url, 
        private string $picture_alt, 
        private string $price 
    ) {
        
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function setId(?int $id): void {
        $this->id = $id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function setDescription(string $description): void {
        $this->description = $description;
    }

    public function getPictureUrl(): string {
        return $this->picture_url;
    }

    public function setPictureUrl(string $picture_url): void {
        $this->picture_url = $picture_url;
    }

    public function getPictureAlt(): string {
        return $this->picture_alt;
    }

    public function setPictureAlt(string $picture_alt): void {
        $this->picture_alt = $picture_alt;
    }


    public function getPrice(): string {
        return $this->price;
    }

    public function setPrice(string $price): void {
        $this->price = $price;
    }

    public function toArray() : array {
        return [
            "id" => $this->getId(),
            "name" => $this->getName(), 
            "description" => $this->getDescription(),
            "pictureUrl" => $this->getPictureUrl(),
            "pictureAlt" => $this->getPictureAlt(), 
            "price" => $this->getPrice()
        ];
    }

}