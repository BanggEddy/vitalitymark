<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_accueil' => [[], ['_controller' => 'App\\Controller\\AccueilController::index'], [], [['text', '/']], [], [], []],
    'app_promo' => [[], ['_controller' => 'App\\Controller\\AccueilController::promo'], [], [['text', '/promo']], [], [], []],
    'search' => [[], ['_controller' => 'App\\Controller\\AccueilController::search'], [], [['text', '/search']], [], [], []],
    'app_contact_submit' => [[], ['_controller' => 'App\\Controller\\AccueilController::submitContact'], [], [['text', '/contact/submit']], [], [], []],
    'app_adminproducts' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::index'], [], [['text', '/adminproducts']], [], [], []],
    'app_admin_add_products' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::addProducts'], [], [['text', '/adminajouterproducts']], [], [], []],
    'app_create_product' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::create'], [], [['text', '/product/create']], [], [], []],
    'app_admin_delete_products' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::deleteProducts'], [], [['text', '/admindeleteproducts']], [], [], []],
    'app_delete_product' => [['id'], ['_controller' => 'App\\Controller\\AdminproductsController::deleteProduct'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteproduct']], [], [], []],
    'app_admin_update_products' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::updateProducts'], [], [['text', '/adminupdateproducts']], [], [], []],
    'app_admin_form_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminproductsController::editProductForm'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/adminformedit']], [], [], []],
    'app_admin_compte' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::adminCompte'], [], [['text', '/compte/admin']], [], [], []],
    'edit_admin_profile' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::editUserProfile'], [], [['text', '/edit/admin/profile']], [], [], []],
    'admin_add_quantity_promo' => [['productId'], ['_controller' => 'App\\Controller\\AdminproductsController::addQuantityPromo'], [], [['variable', '/', '[^/]++', 'productId', true], ['text', '/admin/add_quantity_promo']], [], [], []],
    'admin_remove_quantity_promo' => [['productId'], ['_controller' => 'App\\Controller\\AdminproductsController::removeQuantityPromo'], [], [['variable', '/', '[^/]++', 'productId', true], ['text', '/admin/remove_quantity_promo']], [], [], []],
    'admin_add_quantity' => [['productId'], ['_controller' => 'App\\Controller\\AdminproductsController::addQuantity'], [], [['variable', '/', '[^/]++', 'productId', true], ['text', '/admin/add_quantity']], [], [], []],
    'admin_remove_quantity' => [['productId'], ['_controller' => 'App\\Controller\\AdminproductsController::removeQuantity'], [], [['variable', '/', '[^/]++', 'productId', true], ['text', '/admin/remove_quantity']], [], [], []],
    'compte_admin' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::profiladmin'], [], [['text', '/compte/admin']], [], [], []],
    'search_admin' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::search'], [], [['text', '/search/admin']], [], [], []],
    'app_adminvue' => [[], ['_controller' => 'App\\Controller\\AdminvueController::index'], [], [['text', '/adminvue']], [], [], []],
    'app_coupon_index' => [[], ['_controller' => 'App\\Controller\\CouponController::index'], [], [['text', '/coupon/']], [], [], []],
    'app_coupon_new' => [[], ['_controller' => 'App\\Controller\\CouponController::new'], [], [['text', '/coupon/new']], [], [], []],
    'app_coupon_show' => [['id'], ['_controller' => 'App\\Controller\\CouponController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/coupon']], [], [], []],
    'app_coupon_edit' => [['id'], ['_controller' => 'App\\Controller\\CouponController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/coupon']], [], [], []],
    'app_coupon_delete' => [['id'], ['_controller' => 'App\\Controller\\CouponController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/coupon']], [], [], []],
    'loyalty_card_new' => [[], ['_controller' => 'App\\Controller\\CouponController::newCoupon'], [], [['text', '/coupon/admin/loyalty_card/new']], [], [], []],
    'app_loyalty_card_index' => [[], ['_controller' => 'App\\Controller\\LoyaltyCardController::index'], [], [['text', '/loyalty/card/']], [], [], []],
    'app_loyalty_card_new' => [[], ['_controller' => 'App\\Controller\\LoyaltyCardController::new'], [], [['text', '/loyalty/card/new']], [], [], []],
    'app_loyalty_card_show' => [['id'], ['_controller' => 'App\\Controller\\LoyaltyCardController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/loyalty/card']], [], [], []],
    'app_loyalty_card_edit' => [['id'], ['_controller' => 'App\\Controller\\LoyaltyCardController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/loyalty/card']], [], [], []],
    'app_loyalty_card_delete' => [['id'], ['_controller' => 'App\\Controller\\LoyaltyCardController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/loyalty/card']], [], [], []],
    'app_promo_admin_index' => [[], ['_controller' => 'App\\Controller\\PromoAdminController::index'], [], [['text', '/promo/admin/']], [], [], []],
    'app_promo_admin_new' => [[], ['_controller' => 'App\\Controller\\PromoAdminController::new'], [], [['text', '/promo/admin/new']], [], [], []],
    'app_promo_admin_show' => [['id'], ['_controller' => 'App\\Controller\\PromoAdminController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/promo/admin']], [], [], []],
    'app_promo_admin_edit' => [['id'], ['_controller' => 'App\\Controller\\PromoAdminController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/promo/admin']], [], [], []],
    'app_promo_admin_delete' => [['id'], ['_controller' => 'App\\Controller\\PromoAdminController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/promo/admin']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_uservue' => [[], ['_controller' => 'App\\Controller\\UservueController::index'], [], [['text', '/uservue']], [], [], []],
    'app_user_promo' => [[], ['_controller' => 'App\\Controller\\UservueController::promo'], [], [['text', '/user/promo']], [], [], []],
    'add_to_cart' => [['id'], ['_controller' => 'App\\Controller\\UservueController::addToCart'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/add-to-cart']], [], [], []],
    'user_panier' => [[], ['_controller' => 'App\\Controller\\UservueController::getUserPanier'], [], [['text', '/user/panier']], [], [], []],
    'search_user' => [[], ['_controller' => 'App\\Controller\\UservueController::search'], [], [['text', '/search/user']], [], [], []],
    'user_loyalty_card' => [['id'], ['_controller' => 'App\\Controller\\UservueController::redirectToUserLoyaltyCard'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/loyalty-card']], [], [], []],
    'user_loyalty_card_page' => [['id'], ['_controller' => 'App\\Controller\\UservueController::showUserLoyaltyCardPage'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/uservue/card']], [], [], []],
    'user_profile' => [[], ['_controller' => 'App\\Controller\\UservueController::userProfile'], [], [['text', '/user/profile']], [], [], []],
    'edit_user_profile' => [[], ['_controller' => 'App\\Controller\\UservueController::editUserProfile'], [], [['text', '/edit/user/profile']], [], [], []],
    'app_contact_user' => [[], ['_controller' => 'App\\Controller\\UservueController::indexcontact'], [], [['text', '/contact/user']], [], [], []],
    'details_produit_user' => [['id'], ['_controller' => 'App\\Controller\\UservueController::detailsProduit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/details-produit/user']], [], [], []],
    'update_quantity' => [[], ['_controller' => 'App\\Controller\\UservueController::updateQuantity'], [], [['text', '/update-quantity']], [], [], []],
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
    'add_quantity_promo' => [['promoId'], ['_controller' => 'App\\Controller\\AdminproductsController::addQuantityPromo'], [], [['text', '/add_quantity_promo'], ['variable', '/', '[^/]++', 'promoId', true], ['text', '/admin/products']], [], [], []],
    'remove_quantity_promo' => [['promoId'], ['_controller' => 'App\\Controller\\AdminproductsController::removeQuantityPromo'], [], [['text', '/remove_quantity_promo'], ['variable', '/', '[^/]++', 'promoId', true], ['text', '/admin/products']], [], [], []],
    'details_produit' => [['id'], ['_controller' => 'App\\Controller\\AccueilController::detailsProduit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/details-produit']], [], [], []],
    'details_promotion' => [['id'], ['_controller' => 'App\\Controller\\AccueilController::detailsPromotion'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/details-promotion']], [], [], []],
    'app_contact' => [[], ['_controller' => 'App\\Controller\\AccueilController::indexcontact'], [], [['text', '/contact']], [], [], []],
    'app_contact_user_submit' => [[], ['_controller' => 'App\\Controller\\UservueController::submitContact'], [], [['text', '/contact/user/submit']], [], [], []],
    'api_loyalty_card' => [[], ['_controller' => 'App\\Controller\\UservueController::getLoyaltyCard'], [], [['text', '/api/loyalty-card']], [], [], []],
    'user_profile_view' => [[], ['_controller' => 'App\\Controller\\UserController::viewProfile'], [], [['text', '/user/profile']], [], [], []],
    'app_search_products' => [[], ['_controller' => 'App\\Controller\\UservueController::searchProducts'], [], [['text', '/search-products']], [], [], []],
    'accueil_category_products' => [['category'], ['_controller' => 'App\\Controller\\AccueilController::showCategoryProductsAccueil'], [], [['variable', '/', '[^/]++', 'category', true], ['text', '/accueil/categorie']], [], [], []],
    'admin_category_products' => [['category'], ['_controller' => 'App\\Controller\\AdminproductsController::showCategoryProductsAdmin'], [], [['variable', '/', '[^/]++', 'category', true], ['text', '/admin/adminproducts/categorie']], [], [], []],
    'user_category_products' => [['category'], ['_controller' => 'App\\Controller\\UservueController::showCategoryProducts'], [], [['variable', '/', '[^/]++', 'category', true], ['text', '/user/uservue/categorie']], [], [], []],
    'App\Controller\AccueilController::index' => [[], ['_controller' => 'App\\Controller\\AccueilController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\AccueilController::promo' => [[], ['_controller' => 'App\\Controller\\AccueilController::promo'], [], [['text', '/promo']], [], [], []],
    'App\Controller\AccueilController::detailsProduit' => [['id'], ['_controller' => 'App\\Controller\\AccueilController::detailsProduit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/details-produit']], [], [], []],
    'App\Controller\AccueilController::detailsPromotion' => [['id'], ['_controller' => 'App\\Controller\\AccueilController::detailsPromotion'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/details-promotion']], [], [], []],
    'App\Controller\AccueilController::search' => [[], ['_controller' => 'App\\Controller\\AccueilController::search'], [], [['text', '/search']], [], [], []],
    'App\Controller\AccueilController::indexcontact' => [[], ['_controller' => 'App\\Controller\\AccueilController::indexcontact'], [], [['text', '/contact']], [], [], []],
    'App\Controller\AccueilController::submitContact' => [[], ['_controller' => 'App\\Controller\\AccueilController::submitContact'], [], [['text', '/contact/submit']], [], [], []],
    'App\Controller\AccueilController::showCategoryProductsAccueil' => [['category'], ['_controller' => 'App\\Controller\\AccueilController::showCategoryProductsAccueil'], [], [['variable', '/', '[^/]++', 'category', true], ['text', '/accueil/categorie']], [], [], []],
    'App\Controller\AdminproductsController::index' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::index'], [], [['text', '/adminproducts']], [], [], []],
    'App\Controller\AdminproductsController::addProducts' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::addProducts'], [], [['text', '/adminajouterproducts']], [], [], []],
    'App\Controller\AdminproductsController::create' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::create'], [], [['text', '/product/create']], [], [], []],
    'App\Controller\AdminproductsController::deleteProducts' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::deleteProducts'], [], [['text', '/admindeleteproducts']], [], [], []],
    'App\Controller\AdminproductsController::deleteProduct' => [['id'], ['_controller' => 'App\\Controller\\AdminproductsController::deleteProduct'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteproduct']], [], [], []],
    'App\Controller\AdminproductsController::updateProducts' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::updateProducts'], [], [['text', '/adminupdateproducts']], [], [], []],
    'App\Controller\AdminproductsController::editProductForm' => [['id'], ['_controller' => 'App\\Controller\\AdminproductsController::editProductForm'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/adminformedit']], [], [], []],
    'App\Controller\AdminproductsController::adminCompte' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::adminCompte'], [], [['text', '/compte/admin']], [], [], []],
    'App\Controller\AdminproductsController::editUserProfile' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::editUserProfile'], [], [['text', '/edit/admin/profile']], [], [], []],
    'App\Controller\AdminproductsController::addQuantityPromo' => [['productId'], ['_controller' => 'App\\Controller\\AdminproductsController::addQuantityPromo'], [], [['variable', '/', '[^/]++', 'productId', true], ['text', '/admin/add_quantity_promo']], [], [], []],
    'App\Controller\AdminproductsController::removeQuantityPromo' => [['productId'], ['_controller' => 'App\\Controller\\AdminproductsController::removeQuantityPromo'], [], [['variable', '/', '[^/]++', 'productId', true], ['text', '/admin/remove_quantity_promo']], [], [], []],
    'App\Controller\AdminproductsController::addQuantity' => [['productId'], ['_controller' => 'App\\Controller\\AdminproductsController::addQuantity'], [], [['variable', '/', '[^/]++', 'productId', true], ['text', '/admin/add_quantity']], [], [], []],
    'App\Controller\AdminproductsController::removeQuantity' => [['productId'], ['_controller' => 'App\\Controller\\AdminproductsController::removeQuantity'], [], [['variable', '/', '[^/]++', 'productId', true], ['text', '/admin/remove_quantity']], [], [], []],
    'App\Controller\AdminproductsController::profiladmin' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::profiladmin'], [], [['text', '/compte/admin']], [], [], []],
    'App\Controller\AdminproductsController::search' => [[], ['_controller' => 'App\\Controller\\AdminproductsController::search'], [], [['text', '/search/admin']], [], [], []],
    'App\Controller\AdminproductsController::showCategoryProductsAdmin' => [['category'], ['_controller' => 'App\\Controller\\AdminproductsController::showCategoryProductsAdmin'], [], [['variable', '/', '[^/]++', 'category', true], ['text', '/admin/adminproducts/categorie']], [], [], []],
    'App\Controller\AdminvueController::index' => [[], ['_controller' => 'App\\Controller\\AdminvueController::index'], [], [['text', '/adminvue']], [], [], []],
    'App\Controller\CouponController::index' => [[], ['_controller' => 'App\\Controller\\CouponController::index'], [], [['text', '/coupon/']], [], [], []],
    'App\Controller\CouponController::new' => [[], ['_controller' => 'App\\Controller\\CouponController::new'], [], [['text', '/coupon/new']], [], [], []],
    'App\Controller\CouponController::show' => [['id'], ['_controller' => 'App\\Controller\\CouponController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/coupon']], [], [], []],
    'App\Controller\CouponController::edit' => [['id'], ['_controller' => 'App\\Controller\\CouponController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/coupon']], [], [], []],
    'App\Controller\CouponController::delete' => [['id'], ['_controller' => 'App\\Controller\\CouponController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/coupon']], [], [], []],
    'App\Controller\CouponController::newCoupon' => [[], ['_controller' => 'App\\Controller\\CouponController::newCoupon'], [], [['text', '/coupon/admin/loyalty_card/new']], [], [], []],
    'App\Controller\LoyaltyCardController::index' => [[], ['_controller' => 'App\\Controller\\LoyaltyCardController::index'], [], [['text', '/loyalty/card/']], [], [], []],
    'App\Controller\LoyaltyCardController::new' => [[], ['_controller' => 'App\\Controller\\LoyaltyCardController::new'], [], [['text', '/loyalty/card/new']], [], [], []],
    'App\Controller\LoyaltyCardController::show' => [['id'], ['_controller' => 'App\\Controller\\LoyaltyCardController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/loyalty/card']], [], [], []],
    'App\Controller\LoyaltyCardController::edit' => [['id'], ['_controller' => 'App\\Controller\\LoyaltyCardController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/loyalty/card']], [], [], []],
    'App\Controller\LoyaltyCardController::delete' => [['id'], ['_controller' => 'App\\Controller\\LoyaltyCardController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/loyalty/card']], [], [], []],
    'App\Controller\PromoAdminController::index' => [[], ['_controller' => 'App\\Controller\\PromoAdminController::index'], [], [['text', '/promo/admin/']], [], [], []],
    'App\Controller\PromoAdminController::new' => [[], ['_controller' => 'App\\Controller\\PromoAdminController::new'], [], [['text', '/promo/admin/new']], [], [], []],
    'App\Controller\PromoAdminController::show' => [['id'], ['_controller' => 'App\\Controller\\PromoAdminController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/promo/admin']], [], [], []],
    'App\Controller\PromoAdminController::edit' => [['id'], ['_controller' => 'App\\Controller\\PromoAdminController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/promo/admin']], [], [], []],
    'App\Controller\PromoAdminController::delete' => [['id'], ['_controller' => 'App\\Controller\\PromoAdminController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/promo/admin']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\UservueController::index' => [[], ['_controller' => 'App\\Controller\\UservueController::index'], [], [['text', '/uservue']], [], [], []],
    'App\Controller\UservueController::promo' => [[], ['_controller' => 'App\\Controller\\UservueController::promo'], [], [['text', '/user/promo']], [], [], []],
    'App\Controller\UservueController::addToCart' => [['id'], ['_controller' => 'App\\Controller\\UservueController::addToCart'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/add-to-cart']], [], [], []],
    'App\Controller\UservueController::getUserPanier' => [[], ['_controller' => 'App\\Controller\\UservueController::getUserPanier'], [], [['text', '/user/panier']], [], [], []],
    'App\Controller\UservueController::search' => [[], ['_controller' => 'App\\Controller\\UservueController::search'], [], [['text', '/search/user']], [], [], []],
    'App\Controller\UservueController::redirectToUserLoyaltyCard' => [['id'], ['_controller' => 'App\\Controller\\UservueController::redirectToUserLoyaltyCard'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/loyalty-card']], [], [], []],
    'App\Controller\UservueController::showUserLoyaltyCardPage' => [['id'], ['_controller' => 'App\\Controller\\UservueController::showUserLoyaltyCardPage'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/uservue/card']], [], [], []],
    'App\Controller\UservueController::userProfile' => [[], ['_controller' => 'App\\Controller\\UservueController::userProfile'], [], [['text', '/user/profile']], [], [], []],
    'App\Controller\UservueController::editUserProfile' => [[], ['_controller' => 'App\\Controller\\UservueController::editUserProfile'], [], [['text', '/edit/user/profile']], [], [], []],
    'App\Controller\UservueController::showCategoryProducts' => [['category'], ['_controller' => 'App\\Controller\\UservueController::showCategoryProducts'], [], [['variable', '/', '[^/]++', 'category', true], ['text', '/user/uservue/categorie']], [], [], []],
    'App\Controller\UservueController::indexcontact' => [[], ['_controller' => 'App\\Controller\\UservueController::indexcontact'], [], [['text', '/contact/user']], [], [], []],
    'App\Controller\UservueController::submitContact' => [[], ['_controller' => 'App\\Controller\\UservueController::submitContact'], [], [['text', '/contact/user/submit']], [], [], []],
    'App\Controller\UservueController::detailsProduit' => [['id'], ['_controller' => 'App\\Controller\\UservueController::detailsProduit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/details-produit/user']], [], [], []],
    'App\Controller\UservueController::updateQuantity' => [[], ['_controller' => 'App\\Controller\\UservueController::updateQuantity'], [], [['text', '/update-quantity']], [], [], []],
];
