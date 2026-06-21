<?php
namespace Controllers;
use \Dao\Products\Products as ProductsDao;
use \Views\Renderer as Renderer;


class Index extends PublicController
{
    public function run() :void
    {
        $viewData = [];
        $viewData["productsOnSale"] = ProductsDao::getDailyDeals();
        $viewData["productsHighlighted"] = ProductsDao::getFeaturedProducts();
        $viewData["productsNew"] = ProductsDao::getNewProducts();
        Renderer::render("home", $viewData);
    }
}
?>