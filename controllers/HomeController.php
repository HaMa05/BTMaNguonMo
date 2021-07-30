<?php
require_once 'controllers/Controller.php';
require_once 'models/Product.php';
require_once 'models/Category.php';

class HomeController extends Controller {
  public function index() {
    $product_model = new Product();
    $products = $product_model->getProductInHomePage();
    $categories_model = new Category();
    $categories = $categories_model->getAll();

    $this->content = $this->render('views/homes/index.php', [
      'products' => $products,
      'categories' => $categories
    ]);
    require_once 'views/layouts/main.php';
  }
    public function aophong() {
        $product_model = new Product();
        $products = $product_model->getProductInAoPhongPage();

        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->content = $this->render('views/homes/aophong.php', [
            'products' => $products,
            'categories' => $categories
        ]);
        require_once 'views/layouts/main.php';
    }

    public function polo() {
        $product_model = new Product();
        $products = $product_model->getProductInPoloPage();

        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->content = $this->render('views/homes/polo.php', [
            'products' => $products,
            'categories' => $categories
        ]);
        require_once 'views/layouts/main.php';
    }
    public function hoodie() {
        $product_model = new Product();
        $products = $product_model->getProductInhoodiePage();

        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->content = $this->render('views/homes/hoodie.php', [
            'products' => $products,
            'categories' => $categories
        ]);
        require_once 'views/layouts/main.php';
    }
    public function aolen() {
        $product_model = new Product();
        $products = $product_model->getProductInaolenPage();

        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->content = $this->render('views/homes/aolen.php', [
            'products' => $products,
            'categories' => $categories
        ]);
        require_once 'views/layouts/main.php';
    }
    public function somi() {
        $product_model = new Product();
        $products = $product_model->getProductInsomiPage();

        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->content = $this->render('views/homes/somi.php', [
            'products' => $products,
            'categories' => $categories
        ]);
        require_once 'views/layouts/main.php';
    }
    public function aokhoac() {
        $product_model = new Product();
        $products = $product_model->getProductInaokhoacPage();

        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->content = $this->render('views/homes/aokhoac.php', [
            'products' => $products,
            'categories' => $categories
        ]);
        require_once 'views/layouts/main.php';
    }
    public function quanjean() {
        $product_model = new Product();
        $products = $product_model->getProductInquanjeanPage();

        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->content = $this->render('views/homes/quanjean.php', [
            'products' => $products,
            'categories' => $categories
        ]);
        require_once 'views/layouts/main.php';
    }
    public function quankaki() {
        $product_model = new Product();
        $products = $product_model->getProductInquankakiPage();

        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->content = $this->render('views/homes/quankaki.php', [
            'products' => $products,
            'categories' => $categories
        ]);
        require_once 'views/layouts/main.php';
    }
    public function quanshorts() {
        $product_model = new Product();
        $products = $product_model->getProductInquanshortsPage();

        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->content = $this->render('views/homes/quanshorts.php', [
            'products' => $products,
            'categories' => $categories
        ]);
        require_once 'views/layouts/main.php';
    }
    public function quanvai() {
        $product_model = new Product();
        $products = $product_model->getProductInquanvaiPage();

        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->content = $this->render('views/homes/quanvai.php', [
            'products' => $products,
            'categories' => $categories
        ]);
        require_once 'views/layouts/main.php';
    }
    public function quanonha() {
        $product_model = new Product();
        $products = $product_model->getProductInquanonhaPage();

        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->content = $this->render('views/homes/quanonha.php', [
            'products' => $products,
            'categories' => $categories
        ]);
        require_once 'views/layouts/main.php';
    }

    public function category() {
        $categories_model = new Category();
        $categories = $categories_model->getAll();

        $this->content = $this->render('views/layout/header.php', [
          'categories' => $categories,
        ]);

        require_once 'views/layouts/main.php';
    }
}