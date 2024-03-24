<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/promo' => [[['_route' => 'app_promo', '_controller' => 'App\\Controller\\AccueilController::promo'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\AccueilController::search'], null, null, null, false, false, null]],
        '/contact/submit' => [[['_route' => 'app_contact_submit', '_controller' => 'App\\Controller\\AccueilController::submitContact'], null, null, null, false, false, null]],
        '/adminproducts' => [
            [['_route' => 'app_adminproducts', '_controller' => 'App\\Controller\\AdminproductsController::index'], null, null, null, false, false, null],
            [['_route' => 'adminproducts', '_controller' => 'App\\Controller\\AdminproductsController::index'], null, null, null, false, false, null],
        ],
        '/adminajouterproducts' => [[['_route' => 'app_admin_add_products', '_controller' => 'App\\Controller\\AdminproductsController::addProducts'], null, null, null, false, false, null]],
        '/product/create' => [[['_route' => 'app_create_product', '_controller' => 'App\\Controller\\AdminproductsController::create'], null, null, null, false, false, null]],
        '/admindeleteproducts' => [[['_route' => 'app_admin_delete_products', '_controller' => 'App\\Controller\\AdminproductsController::deleteProducts'], null, null, null, false, false, null]],
        '/adminupdateproducts' => [[['_route' => 'app_admin_update_products', '_controller' => 'App\\Controller\\AdminproductsController::updateProducts'], null, null, null, false, false, null]],
        '/compte/admin' => [
            [['_route' => 'app_admin_compte', '_controller' => 'App\\Controller\\AdminproductsController::adminCompte'], null, null, null, false, false, null],
            [['_route' => 'compte_admin', '_controller' => 'App\\Controller\\AdminproductsController::profiladmin'], null, null, null, false, false, null],
        ],
        '/edit/admin/profile' => [[['_route' => 'edit_admin_profile', '_controller' => 'App\\Controller\\AdminproductsController::editUserProfile'], null, null, null, false, false, null]],
        '/search/admin' => [[['_route' => 'search_admin', '_controller' => 'App\\Controller\\AdminproductsController::search'], null, null, null, false, false, null]],
        '/adminvue' => [[['_route' => 'app_adminvue', '_controller' => 'App\\Controller\\AdminvueController::index'], null, null, null, false, false, null]],
        '/coupon' => [[['_route' => 'app_coupon_index', '_controller' => 'App\\Controller\\CouponController::index'], null, ['GET' => 0], null, true, false, null]],
        '/coupon/new' => [[['_route' => 'app_coupon_new', '_controller' => 'App\\Controller\\CouponController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/coupon/admin/loyalty_card/new' => [[['_route' => 'loyalty_card_new', '_controller' => 'App\\Controller\\CouponController::newCoupon'], null, null, null, false, false, null]],
        '/loyalty/card' => [[['_route' => 'app_loyalty_card_index', '_controller' => 'App\\Controller\\LoyaltyCardController::index'], null, ['GET' => 0], null, true, false, null]],
        '/loyalty/card/new' => [[['_route' => 'app_loyalty_card_new', '_controller' => 'App\\Controller\\LoyaltyCardController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/promo/admin' => [[['_route' => 'app_promo_admin_index', '_controller' => 'App\\Controller\\PromoAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/promo/admin/new' => [[['_route' => 'app_promo_admin_new', '_controller' => 'App\\Controller\\PromoAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/uservue' => [
            [['_route' => 'app_uservue', '_controller' => 'App\\Controller\\UservueController::index'], null, null, null, false, false, null],
            [['_route' => 'uservue', '_controller' => 'App\\Controller\\UservueController::index'], null, null, null, false, false, null],
        ],
        '/user/promo' => [[['_route' => 'app_user_promo', '_controller' => 'App\\Controller\\UservueController::promo'], null, null, null, false, false, null]],
        '/user/panier' => [
            [['_route' => 'user_panier', '_controller' => 'App\\Controller\\UservueController::getUserPanier'], null, null, null, false, false, null],
            [['_route' => 'panier_index', '_controller' => 'App\\Controller\\UserController::getUserPanier'], null, null, null, false, false, null],
        ],
        '/search/user' => [[['_route' => 'search_user', '_controller' => 'App\\Controller\\UservueController::search'], null, null, null, false, false, null]],
        '/user/profile' => [
            [['_route' => 'user_profile', '_controller' => 'App\\Controller\\UservueController::userProfile'], null, null, null, false, false, null],
            [['_route' => 'user_profile_view', '_controller' => 'App\\Controller\\UserController::viewProfile'], null, null, null, false, false, null],
        ],
        '/edit/user/profile' => [[['_route' => 'edit_user_profile', '_controller' => 'App\\Controller\\UservueController::editUserProfile'], null, null, null, false, false, null]],
        '/contact/user' => [[['_route' => 'app_contact_user', '_controller' => 'App\\Controller\\UservueController::indexcontact'], null, null, null, false, false, null]],
        '/product/new' => [[['_route' => 'adminajouterproducts', '_controller' => 'App\\Controller\\AdminproductsController::new'], null, null, null, false, false, null]],
        '/product/delete' => [[['_route' => 'admindeleteproducts', '_controller' => 'App\\Controller\\AdminproductsController::delete'], null, null, null, false, false, null]],
        '/product/update' => [[['_route' => 'adminupdateproducts', '_controller' => 'App\\Controller\\AdminupdateController::update'], null, null, null, false, false, null]],
        '/compteadmin' => [[['_route' => 'compteadmin', '_controller' => 'App\\Controller\\AdminproductsController::adminPage'], null, null, null, false, false, null]],
        '/api/user/panier' => [[['_route' => 'api_user_panier', '_controller' => 'App\\Controller\\UserController::getUserPanier'], null, null, null, false, false, null]],
        '/admin/products/list' => [[['_route' => 'admin_products_list', '_controller' => 'App\\Controller\\AdminproductsController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\AccueilController::indexcontact'], null, null, null, false, false, null]],
        '/contact/user/submit' => [[['_route' => 'app_contact_user_submit', '_controller' => 'App\\Controller\\UservueController::submitContact'], null, ['POST' => 0], null, false, false, null]],
        '/api/loyalty-card' => [[['_route' => 'api_loyalty_card', '_controller' => 'App\\Controller\\UservueController::getLoyaltyCard'], null, ['GET' => 0], null, false, false, null]],
        '/search-products' => [[['_route' => 'app_search_products', '_controller' => 'App\\Controller\\UservueController::searchProducts'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/de(?'
                    .'|leteproduct/([^/]++)(*:68)'
                    .'|tails\\-pro(?'
                        .'|duit/([^/]++)(*:101)'
                        .'|motion/([^/]++)(*:124)'
                    .')'
                .')'
                .'|/a(?'
                    .'|d(?'
                        .'|min(?'
                            .'|formedit/([^/]++)(*:166)'
                            .'|/(?'
                                .'|ad(?'
                                    .'|d_quantity(?'
                                        .'|_promo/([^/]++)(*:211)'
                                        .'|/([^/]++)(*:228)'
                                    .')'
                                    .'|minproducts/categorie/([^/]++)(*:267)'
                                .')'
                                .'|remove_quantity(?'
                                    .'|_promo/([^/]++)(*:309)'
                                    .'|/([^/]++)(*:326)'
                                .')'
                                .'|products/([^/]++)/(?'
                                    .'|add_quantity(?'
                                        .'|(*:371)'
                                        .'|_promo(*:385)'
                                    .')'
                                    .'|remove_quantity(?'
                                        .'|(*:412)'
                                        .'|_promo(*:426)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|d\\-to\\-cart/([^/]++)(*:458)'
                    .')'
                    .'|ccueil/categorie/([^/]++)(*:492)'
                .')'
                .'|/coupon/([^/]++)(?'
                    .'|(*:520)'
                    .'|/edit(*:533)'
                    .'|(*:541)'
                .')'
                .'|/loyalty/card/([^/]++)(?'
                    .'|(*:575)'
                    .'|/edit(*:588)'
                    .'|(*:596)'
                .')'
                .'|/promo/admin/([^/]++)(?'
                    .'|(*:629)'
                    .'|/edit(*:642)'
                    .'|(*:650)'
                .')'
                .'|/user/(?'
                    .'|loyalty\\-card/([^/]++)(*:690)'
                    .'|uservue/ca(?'
                        .'|rd/([^/]++)(*:722)'
                        .'|tegorie/([^/]++)(*:746)'
                    .')'
                .')'
                .'|/editproduct/([^/]++)(*:777)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        68 => [[['_route' => 'app_delete_product', '_controller' => 'App\\Controller\\AdminproductsController::deleteProduct'], ['id'], null, null, false, true, null]],
        101 => [[['_route' => 'details_produit', '_controller' => 'App\\Controller\\AccueilController::detailsProduit'], ['id'], null, null, false, true, null]],
        124 => [[['_route' => 'details_promotion', '_controller' => 'App\\Controller\\AccueilController::detailsPromotion'], ['id'], null, null, false, true, null]],
        166 => [[['_route' => 'app_admin_form_edit', '_controller' => 'App\\Controller\\AdminproductsController::editProductForm'], ['id'], null, null, false, true, null]],
        211 => [[['_route' => 'admin_add_quantity_promo', '_controller' => 'App\\Controller\\AdminproductsController::addQuantityPromo'], ['productId'], null, null, false, true, null]],
        228 => [[['_route' => 'admin_add_quantity', '_controller' => 'App\\Controller\\AdminproductsController::addQuantity'], ['productId'], null, null, false, true, null]],
        267 => [[['_route' => 'admin_category_products', '_controller' => 'App\\Controller\\AdminproductsController::showCategoryProductsAdmin'], ['category'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        309 => [[['_route' => 'admin_remove_quantity_promo', '_controller' => 'App\\Controller\\AdminproductsController::removeQuantityPromo'], ['productId'], null, null, false, true, null]],
        326 => [[['_route' => 'admin_remove_quantity', '_controller' => 'App\\Controller\\AdminproductsController::removeQuantity'], ['productId'], null, null, false, true, null]],
        371 => [[['_route' => 'add_quantity', '_controller' => 'App\\Controller\\AdminproductsController::addQuantity'], ['productId'], ['POST' => 0], null, false, false, null]],
        385 => [[['_route' => 'add_quantity_promo', '_controller' => 'App\\Controller\\AdminproductsController::addQuantityPromo'], ['promoId'], ['POST' => 0], null, false, false, null]],
        412 => [[['_route' => 'remove_quantity', '_controller' => 'App\\Controller\\AdminproductsController::removeQuantity'], ['productId'], ['POST' => 0], null, false, false, null]],
        426 => [[['_route' => 'remove_quantity_promo', '_controller' => 'App\\Controller\\AdminproductsController::removeQuantityPromo'], ['promoId'], ['POST' => 0], null, false, false, null]],
        458 => [[['_route' => 'add_to_cart', '_controller' => 'App\\Controller\\UservueController::addToCart'], ['id'], null, null, false, true, null]],
        492 => [[['_route' => 'accueil_category_products', '_controller' => 'App\\Controller\\AccueilController::showCategoryProductsAccueil'], ['category'], null, null, false, true, null]],
        520 => [[['_route' => 'app_coupon_show', '_controller' => 'App\\Controller\\CouponController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        533 => [[['_route' => 'app_coupon_edit', '_controller' => 'App\\Controller\\CouponController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        541 => [[['_route' => 'app_coupon_delete', '_controller' => 'App\\Controller\\CouponController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        575 => [[['_route' => 'app_loyalty_card_show', '_controller' => 'App\\Controller\\LoyaltyCardController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        588 => [[['_route' => 'app_loyalty_card_edit', '_controller' => 'App\\Controller\\LoyaltyCardController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        596 => [[['_route' => 'app_loyalty_card_delete', '_controller' => 'App\\Controller\\LoyaltyCardController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        629 => [[['_route' => 'app_promo_admin_show', '_controller' => 'App\\Controller\\PromoAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        642 => [[['_route' => 'app_promo_admin_edit', '_controller' => 'App\\Controller\\PromoAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        650 => [[['_route' => 'app_promo_admin_delete', '_controller' => 'App\\Controller\\PromoAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        690 => [[['_route' => 'user_loyalty_card', '_controller' => 'App\\Controller\\UservueController::redirectToUserLoyaltyCard'], ['id'], null, null, false, true, null]],
        722 => [[['_route' => 'user_loyalty_card_page', '_controller' => 'App\\Controller\\UservueController::showUserLoyaltyCardPage'], ['id'], null, null, false, true, null]],
        746 => [[['_route' => 'user_category_products', '_controller' => 'App\\Controller\\UservueController::showCategoryProducts'], ['category'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        777 => [
            [['_route' => 'app_edit_product', '_controller' => 'App\\Controller\\AdminproductsController::editProduct'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
