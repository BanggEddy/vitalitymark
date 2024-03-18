<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/adminproducts' => [
            [['_route' => 'app_adminproducts', '_controller' => 'App\\Controller\\AdminproductsController::index'], null, null, null, false, false, null],
            [['_route' => 'adminproducts', '_controller' => 'App\\Controller\\AdminproductsController::index'], null, null, null, false, false, null],
        ],
        '/adminajouterproducts' => [[['_route' => 'app_admin_add_products', '_controller' => 'App\\Controller\\AdminproductsController::addProducts'], null, null, null, false, false, null]],
        '/product/create' => [[['_route' => 'app_create_product', '_controller' => 'App\\Controller\\AdminproductsController::create'], null, null, null, false, false, null]],
        '/admindeleteproducts' => [[['_route' => 'app_admin_delete_products', '_controller' => 'App\\Controller\\AdminproductsController::deleteProducts'], null, null, null, false, false, null]],
        '/adminupdateproducts' => [[['_route' => 'app_admin_update_products', '_controller' => 'App\\Controller\\AdminproductsController::updateProducts'], null, null, null, false, false, null]],
        '/compteadmin' => [
            [['_route' => 'app_admin_compte', '_controller' => 'App\\Controller\\AdminproductsController::adminCompte'], null, null, null, false, false, null],
            [['_route' => 'compteadmin', '_controller' => 'App\\Controller\\AdminproductsController::adminPage'], null, null, null, false, false, null],
        ],
        '/adminvue' => [[['_route' => 'app_adminvue', '_controller' => 'App\\Controller\\AdminvueController::index'], null, null, null, false, false, null]],
        '/promo/admin' => [[['_route' => 'app_promo_admin_index', '_controller' => 'App\\Controller\\PromoAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/promo/admin/new' => [[['_route' => 'app_promo_admin_new', '_controller' => 'App\\Controller\\PromoAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/uservue' => [
            [['_route' => 'app_uservue', '_controller' => 'App\\Controller\\UservueController::index'], null, null, null, false, false, null],
            [['_route' => 'uservue', '_controller' => 'App\\Controller\\UservueController::index'], null, null, null, false, false, null],
        ],
        '/user/panier' => [
            [['_route' => 'user_panier', '_controller' => 'App\\Controller\\UservueController::getUserPanier'], null, null, null, false, false, null],
            [['_route' => 'panier_index', '_controller' => 'App\\Controller\\UserController::getUserPanier'], null, null, null, false, false, null],
        ],
        '/product/new' => [[['_route' => 'adminajouterproducts', '_controller' => 'App\\Controller\\AdminproductsController::new'], null, null, null, false, false, null]],
        '/product/delete' => [[['_route' => 'admindeleteproducts', '_controller' => 'App\\Controller\\AdminproductsController::delete'], null, null, null, false, false, null]],
        '/product/update' => [[['_route' => 'adminupdateproducts', '_controller' => 'App\\Controller\\AdminupdateController::update'], null, null, null, false, false, null]],
        '/api/user/panier' => [[['_route' => 'api_user_panier', '_controller' => 'App\\Controller\\UserController::getUserPanier'], null, null, null, false, false, null]],
        '/admin/products/list' => [[['_route' => 'admin_products_list', '_controller' => 'App\\Controller\\AdminproductsController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/deleteproduct/([^/]++)(*:65)'
                .'|/ad(?'
                    .'|min(?'
                        .'|formedit/([^/]++)(*:101)'
                        .'|/(?'
                            .'|add_quantity/([^/]++)(*:134)'
                            .'|remove_quantity/([^/]++)(*:166)'
                            .'|products/([^/]++)/(?'
                                .'|add_quantity(*:207)'
                                .'|remove_quantity(*:230)'
                            .')'
                        .')'
                    .')'
                    .'|d\\-to\\-cart/([^/]++)(*:261)'
                .')'
                .'|/promo/admin/([^/]++)(?'
                    .'|(*:294)'
                    .'|/edit(*:307)'
                    .'|(*:315)'
                .')'
                .'|/editproduct/([^/]++)(*:345)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        65 => [[['_route' => 'app_delete_product', '_controller' => 'App\\Controller\\AdminproductsController::deleteProduct'], ['id'], null, null, false, true, null]],
        101 => [[['_route' => 'app_admin_form_edit', '_controller' => 'App\\Controller\\AdminproductsController::editProductForm'], ['id'], null, null, false, true, null]],
        134 => [[['_route' => 'admin_add_quantity', '_controller' => 'App\\Controller\\AdminproductsController::addQuantity'], ['productId'], null, null, false, true, null]],
        166 => [[['_route' => 'admin_remove_quantity', '_controller' => 'App\\Controller\\AdminproductsController::removeQuantity'], ['productId'], null, null, false, true, null]],
        207 => [[['_route' => 'add_quantity', '_controller' => 'App\\Controller\\AdminproductsController::addQuantity'], ['productId'], ['POST' => 0], null, false, false, null]],
        230 => [[['_route' => 'remove_quantity', '_controller' => 'App\\Controller\\AdminproductsController::removeQuantity'], ['productId'], ['POST' => 0], null, false, false, null]],
        261 => [[['_route' => 'add_to_cart', '_controller' => 'App\\Controller\\UservueController::addToCart'], ['id'], null, null, false, true, null]],
        294 => [[['_route' => 'app_promo_admin_show', '_controller' => 'App\\Controller\\PromoAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        307 => [[['_route' => 'app_promo_admin_edit', '_controller' => 'App\\Controller\\PromoAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        315 => [[['_route' => 'app_promo_admin_delete', '_controller' => 'App\\Controller\\PromoAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        345 => [
            [['_route' => 'app_edit_product', '_controller' => 'App\\Controller\\AdminproductsController::editProduct'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
