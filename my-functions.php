<?php
// my-functions.php

function getProducts(): array
{
    return [
        "iPhone 16" => [
            "name" => "iPhone 16",
            "price" => 150099,
            "weight" => 150,
            "discount" => 10,
            "picture_url" => "iphone16.jpg"
        ],
        "iPad Pro" => [
            "name" => "iPad Pro",
            "price" => 14099,
            "weight" => 300,
            "discount" => null,
            "picture_url" => "ipad.jpg"
        ],
        "iMac pro" => [
            "name" => "iMac pro",
            "price" => 2999,
            "weight" => 500,
            "discount" => 5,
            "picture_url" => "imac.jpg"
        ]
    ];
}

function formatPrice(int $priceInCents): string
{
    return number_format($priceInCents / 100, 2, ',', ' ') . " €";
}

function getDiscountLabel(?int $discount): string
{
    if ($discount === null) {
        return "<span class='no-discount'>Aucune</span>";
    }
    return "<span class='discount'>{$discount}%</span>";
}
