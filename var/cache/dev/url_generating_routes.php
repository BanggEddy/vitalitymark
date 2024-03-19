<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_accueil' => [[], ['_controller' => 'App\\Controller\\AccueilController::index'], [], [['text', '/']], [], [], []],
    'app_adminproducts' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::index'], [], [['text', '/adminproducts']], [], [], []],
    'app_admin_add_products' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::addProducts'], [], [['text', '/adminajouterproducts']], [], [], []],
    'app_create_product' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::create'], [], [['text', '/product/create']], [], [], []],
    'app_admin_delete_products' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::deleteProducts'], [], [['text', '/admindeleteproducts']], [], [], []],
    'app_delete_product' => [['id'], ['_controller' => 'App\\Controller\\AdminproductsController::deleteProduct'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteproduct']], [], [], []],
    'app_admin_update_products' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::updateProducts'], [], [['text', '/adminupdateproducts']], [], [], []],
    'app_admin_form_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminproductsController::editProductForm'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/adminformedit']], [], [], []],
    'app_admin_compte' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::adminCompte'], [], [['text', '/compteadmin']], [], [], []],
    'admin_add_quantity' => [['productId'], ['_controller' => 'App\\Controller\\AdminproductsController::addQuantity'], [], [['variable', '/', '[^/]++', 'productId', true], ['text', '/admin/add_quantity']], [], [], []],
    'admin_remove_quantity' => [['productId'], ['_controller' => 'App\\Controller\\AdminproductsController::removeQuantity'], [], [['variable', '/', '[^/]++', 'productId', true], ['text', '/admin/remove_quantity']], [], [], []],
    'app_adminvue' => [[], ['_controller' => 'App\\Controller\\AdminvueController::index'], [], [['text', '/adminvue']], [], [], []],
    'app_promo_admin_index' => [[], ['_controller' => 'App\\Controller\\PromoAdminController::index'], [], [['text', '/promo/admin/']], [], [], []],
    'app_promo_admin_new' => [[], ['_controller' => 'App\\Controller\\PromoAdminController::new'], [], [['text', '/promo/admin/new']], [], [], []],
    'app_promo_admin_show' => [['id'], ['_controller' => 'App\\Controller\\PromoAdminController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/promo/admin']], [], [], []],
    'app_promo_admin_edit' => [['id'], ['_controller' => 'App\\Controller\\PromoAdminController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/promo/admin']], [], [], []],
    'app_promo_admin_delete' => [['id'], ['_controller' => 'App\\Controller\\PromoAdminController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/promo/admin']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_uservue' => [[], ['_controller' => 'App\\Controller\\UservueController::index'], [], [['text', '/uservue']], [], [], []],
    'add_to_cart' => [['id'], ['_controller' => 'App\\Controller\\UservueController::addToCart'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/add-to-cart']], [], [], []],
    'user_panier' => [[], ['_controller' => 'App\\Controller\\UservueController::getUserPanier'], [], [['text', '/user/panier']], [], [], []],
    'uservue' => [[], ['_controller' => 'App\\Controller\\UservueController::index'], [], [['text', '/uservue']], [], [], []],
    'adminproducts' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::index'], [], [['text', '/adminproducts']], [], [], []],
    'adminajouterproducts' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::new'], [], [['text', '/product/new']], [], [], []],
    'admindeleteproducts' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::delete'], [], [['text', '/product/delete']], [], [], []],
    'adminupdateproducts' => [[], ['_controller' => 'App\\Controller\\AdminupdateController::update'], [], [['text', '/product/update']], [], [], []],
    'app_edit_product' => [['id'], ['_controller' => 'App\\Controller\\AdminproductsController::editProduct'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/editproduct']], [], [], []],
    'compteadmin' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::adminPage'], [], [['text', '/compteadmin']], [], [], []],
    'api_user_panier' => [[], ['_controller' => 'App\\Controller\\UserController::getUserPanier'], [], [['text', '/api/user/panier']], [], [], []],
    'panier_index' => [[], ['_controller' => 'App\\Controller\\UserController::getUserPanier'], [], [['text', '/user/panier']], [], [], []],
    'add_quantity' => [['productId'], ['_controller' => 'App\\Controller\\AdminproductsController::addQuantity'], [], [['text', '/add_quantity'], ['variable', '/', '[^/]++', 'productId', true], ['text', '/admin/products']], [], [], []],
    'remove_quantity' => [['productId'], ['_controller' => 'App\\Controller\\AdminproductsController::removeQuantity'], [], [['text', '/remove_quantity'], ['variable', '/', '[^/]++', 'productId', true], ['text', '/admin/products']], [], [], []],
    'admin_products_list' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::index'], [], [['text', '/admin/products/list']], [], [], []],
    'details_produit' => [['id'], ['_controller' => 'App\\Controller\\AccueilController::detailsProduit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/details-produit']], [], [], []],
    'details_promotion' => [['id'], ['_controller' => 'App\\Controller\\AccueilController::detailsPromotion'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/details-promotion']], [], [], []],
    'App\Controller\AccueilController::index' => [[], ['_controller' => 'App\\Controller\\AccueilController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\AccueilController::detailsProduit' => [['id'], ['_controller' => 'App\\Controller\\AccueilController::detailsProduit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/details-produit']], [], [], []],
    'App\Controller\AccueilController::detailsPromotion' => [['id'], ['_controller' => 'App\\Controller\\AccueilController::detailsPromotion'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/details-promotion']], [], [], []],
    'App\Controller\AdminproductsController::index' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::index'], [], [['text', '/adminproducts']], [], [], []],
    'App\Controller\AdminproductsController::addProducts' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::addProducts'], [], [['text', '/adminajouterproducts']], [], [], []],
    'App\Controller\AdminproductsController::create' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::create'], [], [['text', '/product/create']], [], [], []],
    'App\Controller\AdminproductsController::deleteProducts' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::deleteProducts'], [], [['text', '/admindeleteproducts']], [], [], []],
    'App\Controller\AdminproductsController::deleteProduct' => [['id'], ['_controller' => 'App\\Controller\\AdminproductsController::deleteProduct'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteproduct']], [], [], []],
    'App\Controller\AdminproductsController::updateProducts' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::updateProducts'], [], [['text', '/adminupdateproducts']], [], [], []],
    'App\Controller\AdminproductsController::editProductForm' => [['id'], ['_controller' => 'App\\Controller\\AdminproductsController::editProductForm'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/adminformedit']], [], [], []],
    'App\Controller\AdminproductsController::adminCompte' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::adminCompte'], [], [['text', '/compteadmin']], [], [], []],
    'App\Controller\AdminproductsController::addQuantity' => [['productId'], ['_controller' => 'App\\Controller\\AdminproductsController::addQuantity'], [], [['variable', '/', '[^/]++', 'productId', true], ['text', '/admin/add_quantity']], [], [], []],
    'App\Controller\AdminproductsController::removeQuantity' => [['productId'], ['_controller' => 'App\\Controller\\AdminproductsController::removeQuantity'], [], [['variable', '/', '[^/]++', 'productId', true], ['text', '/admin/remove_quantity']], [], [], []],
    'App\Controller\AdminvueController::index' => [[], ['_controller' => 'App\\Controller\\AdminvueController::index'], [], [['text', '/adminvue']], [], [], []],
    'App\Controller\PromoAdminController::index' => [[], ['_controller' => 'App\\Controller\\PromoAdminController::index'], [], [['text', '/promo/admin/']], [], [], []],
    'App\Controller\PromoAdminController::new' => [[], ['_controller' => 'App\\Controller\\PromoAdminController::new'], [], [['text', '/promo/admin/new']], [], [], []],
    'App\Controller\PromoAdminController::show' => [['id'], ['_controller' => 'App\\Controller\\PromoAdminController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/promo/admin']], [], [], []],
    'App\Controller\PromoAdminController::edit' => [['id'], ['_controller' => 'App\\Controller\\PromoAdminController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/promo/admin']], [], [], []],
    'App\Controller\PromoAdminController::delete' => [['id'], ['_controller' => 'App\\Controller\\PromoAdminController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/promo/admin']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\UservueController::index' => [[], ['_controller' => 'App\\Controller\\UservueController::index'], [], [['text', '/uservue']], [], [], []],
    'App\Controller\UservueController::addToCart' => [['id'], ['_controller' => 'App\\Controller\\UservueController::addToCart'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/add-to-cart']], [], [], []],
    'App\Controller\UservueController::getUserPanier' => [[], ['_controller' => 'App\\Controller\\UservueController::getUserPanier'], [], [['text', '/user/panier']], [], [], []],
];
