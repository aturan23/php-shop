<?php

class CatalogController
{
  public function actionIndex()
  {
    $categories = [];
    $categories = Category::getCategoriesList();

    $latestProduct = [];
    $latestProduct = Product::getLatestProducts(8);

    require_once(ROOT . '/views/catalog/index.php');

    return true;
  }

  public function actionCategory($categoryID, $page = 1)
  {
    $categories = [];
    $categories = Category::getCategoriesList();

    $categoryProduct = [];
    $categoryProduct = Product::getProductListByCategory($categoryID, $page);

    $total = Product::getTotalProductsInCategory($categoryID);

    $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

    require_once(ROOT . '/views/catalog/category.php');

    return true;
  }

}