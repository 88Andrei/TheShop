<?php

class ProductListController extends BaseController
{
  public static function productList()
  {
    $products = ProductRepo::getAll();
    require_once Config::TEMPLATE_PATH . '/admin/product_list.php';
  }
}
