<?php
namespace Dao\Products;
class  Products {
    public static function getFeaturedProducts() {
      return [
          [
            "productId" => 1,
            "productName" => "Producto 1",
            "productDescription" => "Descripción del producto 1",
            "productImgUrl" => "https://via.placeholder.com/150",
            "productPrice" => 100.00
          ],
          [
            "productId" => 2,
            "productName" => "Producto 2",
            "productDescription" => "Descripción del producto 2",
            "productImgUrl" => "https://via.placeholder.com/150",
            "productPrice" => 120.00
          ],
          [
            "productId" => 3,
            "productName" => "Producto 3",
            "productDescription" => "Descripción del producto 3",
            "productImgUrl" => "https://via.placeholder.com/150",
            "productPrice" => 70.00
          ]
        ];
    }
}
?>