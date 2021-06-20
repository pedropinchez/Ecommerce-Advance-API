<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/laravel-websockets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::B0E8s24bgJxXIh0o',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laravel-websockets/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R6QVvzpfYzTxJWKl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laravel-websockets/event' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::W0WectifySTgnOjH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laravel-websockets/statistics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SdWHc7yUg0PL4fT2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/documentation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'l5-swagger.api',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/oauth2-callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'l5-swagger.oauth2_callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/authorize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.authorize',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.approve',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.deny',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/token/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token.refresh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/clients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/scopes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.scopes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/personal-access-tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/broadcasting/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YbsCsjzx9gJ4zaxd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qkBUCt6IVY1bCIf5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/vouchers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vouchers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'vouchers.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/gift-cards' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gift-cards.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'gift-cards.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/giftcards/transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RA80vjAl5Cg9JeqY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/polls' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'polls.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'polls.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/poll-options' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'poll-options.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'poll-options.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/polls-response' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T8xGeaI1pEaKKPXE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/offers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'offers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'offers.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/supplier' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'supplier.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'supplier.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/statistics/get-dashboard-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::63lKwCblD2zB2ovA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/statistics/get-best-sale-products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vgc0LVMLKPXIqKH2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/discount-types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'discount-types.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'discount-types.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/sales' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sales.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sales.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'invoices.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'invoices.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/sales/sale-items/by-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zXKkJGNTtWyeqwxV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/sales/shipping-cost/by-cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pAxN03BUGTFq9ehJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/roles/getModulePermissionByUserTypeID' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ceEo15noEPcNfAqt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/roles/getModulePermissionByUser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ABISf8MKhLQPIS9q',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/roles/getUserTypeList' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TqGevEAguK9jfJEK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/roles/getModuleList' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lPRIEWGyEHynI3xc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/roles/appPermissionStore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AbeUHXCeOk0V5c0E',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/roles/multipleAppPermissionStore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RrmJgK6x909z8Mxp',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/roles/getAllUser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0ef9XGFx77VC7VSc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/roles/getAllRoles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::if3mB9ZGWeq2wcvx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/roles/check-permission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rTbU6wk8GRullXLI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/roles/give-permission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GQadElvyqqsHEPBI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/roles/getAllPermission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5aGPNn9uPvmDemGF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/roles/storePermission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::joiGTl41RzQUSKDX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/roles/multipleUserRoleStore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::h98ztSRI9O2L7fEx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/roles/getUserPermissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K2gKpKIiDJd20IP9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/roles/getUserRoles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EkovQHcnyRBdgn74',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/roles/getUserModules' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MmTzl3UzW3Ti90nE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/referrals' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'referrals.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'referrals.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/payments/methods/get-payment-methods' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CBfzSKgmf8zmCAGu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/payments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5QyVNdcgUck4Wx3K',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/countries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0AuvUq1pbPflJfSy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/countries/bulk-insert' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tHle2B68Ileh2AOv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/cities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IfL6BsH9deH4N9Gz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/cities/bulk-insert' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hH5ZKSsGwYKDeFVs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/areas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lX96122VgsaPFrLo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/areas/bulk-insert' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lYCPmmD5oZSYpmCe',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/brands' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brands.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'brands.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'categories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/units' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'units.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'units.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/items/featured/toggle' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::W0qeOaMJW68KETRO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/attributes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attributes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'attributes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/attribute/values' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'values.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'values.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'items.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'items.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/items/all/for-dropdown' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7hjRYcSv6C57BjMm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/get-items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w6XHIa7vagkfxfTx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/frontend-categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0Jci3DrZydzpb6y4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/get-items/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pWDwzg1Mj951b07X',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/item-review/get-by-item' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yLCUdHkK0jJqoMGr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/item-review/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cMWjSkvdgNvLzYeS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/item-review/update-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::X3SibAqb9YpxZgVj',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/item-review/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LVg6MKte0OjmOTuM',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/customer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'customer.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/address' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'address.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'address.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/coupons' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coupons.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'coupons.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/coupons/types/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::82hDmNqNmuDlmCch',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/coupons/check-by/code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VRtZ43ue3s4bEKbe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/business' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'business.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/sliders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sliders.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sliders.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/sliders-frontend' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4TjFQZfmCXyy6YZ9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/shops' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7uKtL0UwVH4ShJ6c',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/tax' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tax.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tax.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/locations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'locations.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'locations.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/wishlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wishlist.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'wishlist.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/currencies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'currencies.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'currencies.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::skS01DdHAhPAPR3q',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/auth/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UnI4VfLiIkqQbheM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/auth/register-next' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mTjkjDV0aSynbOzu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/auth/vendor-register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.register',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/auth/vendor-register-next' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.register.next',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/auth/check-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XFdXInRb20n0Uecy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/auth/getUserProfile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8HIPRLeoVMS5otpr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/auth/updateUserProfile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ee5RzgKMM8tOOKhl',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/auth/deleteUserAccount' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JtSO5xEQdHiK07nj',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/website/info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vmiZPHTQYfUqxsSG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/laravel\\-websockets/api/([^/]++)/statistics(*:51)|/docs(?|(?:/([^/]++))?(*:80)|/asset/([^/]++)(*:102))|/oauth/(?|tokens/([^/]++)(*:136)|clients/([^/]++)(?|(*:163))|personal\\-access\\-tokens/([^/]++)(*:205))|/api/v1/(?|vouchers/(?|([^/]++)(?|(*:248))|transactions(*:269)|user/([^/]++)(*:290))|g(?|ift(?|\\-cards/([^/]++)(?|(*:328))|cards/(?|transactions/([^/]++)(*:367)|user/([^/]++)(*:388)))|et\\-(?|item\\-detail/([^/]++)(*:426)|flash\\-sale\\-items/([^/]++)(*:461)|category\\-products/([^/]++)(*:496)))|poll(?|s/(?|([^/]++)(?|(*:529))|customer/([^/]++)(*:555))|\\-options/([^/]++)(?|(*:585)))|offers/([^/]++)(?|(*:613))|s(?|upplier(?|/([^/]++)(?|(*:648))|s/business/([^/]++)(*:676))|ales/(?|([^/]++)(?|(*:704))|business/([^/]++)(*:730)|order\\-lifecycle/([^/]++)(*:763)|invoice\\-lifecycle/([^/]++)(*:798))|liders/([^/]++)(?|(*:825)))|discount\\-types/(?|([^/]++)(?|(*:865))|business/([^/]++)(*:891))|i(?|nvoices/([^/]++)(?|(*:923))|tems/(?|([^/]++)(?|(*:951))|b(?|usiness/([^/]++)(*:980)|rand/([^/]++)(*:1001))|category/([^/]++)(*:1028)|subcategory/([^/]++)(*:1057)|attribute/([^/]++)(*:1084)|([^/]++)/upload(*:1108)|image/([^/]++)/delete(*:1138)))|r(?|oles/(?|editUser/([^/]++)(*:1178)|userDetails/([^/]++)(*:1207)|getAllPermissionByRole/([^/]++)(*:1247)|multipleUserRoleUpdate/([^/]++)(*:1287))|eferrals/([^/]++)(?|(*:1317)))|b(?|rands/([^/]++)(?|(*:1349))|usiness/(?|([^/]++)(?|(*:1381))|bin/([^/]++)(*:1403)))|c(?|ategories/(?|([^/]++)(?|(*:1442))|business/([^/]++)(*:1469)|sub\\-categories/([^/]++)(*:1502))|u(?|stomer/([^/]++)(?|(*:1534))|rrencies/([^/]++)(?|(*:1564)))|oupons/([^/]++)(?|(*:1593)))|units/(?|([^/]++)(?|(*:1624))|business/([^/]++)(*:1651))|a(?|ttribute(?|s/(?|([^/]++)(?|(*:1692))|business/([^/]++)(*:1719)|category/([^/]++)(*:1745)|([^/]++)/([^/]++)(*:1771))|/(?|values/([^/]++)(?|(*:1803))|by\\-attribute/([^/]++)/values(*:1842)))|ddress/([^/]++)(?|(*:1871)))|tax/(?|([^/]++)(?|(*:1900))|business/([^/]++)(*:1927))|locations/(?|([^/]++)(?|(*:1961))|business/([^/]++)(*:1988))|wishlist/([^/]++)(?|(*:2018))))/?$}sDu',
    ),
    3 => 
    array (
      51 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rUGRxJPTFkJEVQDh',
          ),
          1 => 
          array (
            0 => 'appId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      80 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'l5-swagger.docs',
            'jsonFile' => NULL,
          ),
          1 => 
          array (
            0 => 'jsonFile',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      102 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'l5-swagger.asset',
          ),
          1 => 
          array (
            0 => 'asset',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      136 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      163 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.update',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.destroy',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      205 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      248 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vouchers.show',
          ),
          1 => 
          array (
            0 => 'voucher',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'vouchers.update',
          ),
          1 => 
          array (
            0 => 'voucher',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'vouchers.destroy',
          ),
          1 => 
          array (
            0 => 'voucher',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      269 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0DkOzaA39vKImU3U',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      290 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uN8huR5JAxdsc5UG',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      328 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gift-cards.show',
          ),
          1 => 
          array (
            0 => 'gift_card',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'gift-cards.update',
          ),
          1 => 
          array (
            0 => 'gift_card',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'gift-cards.destroy',
          ),
          1 => 
          array (
            0 => 'gift_card',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      367 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nyZYXVbCMVKrUdg0',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      388 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r2JN1Lg5rdGIBTI2',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      426 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jhPWqg4C07r9fdfR',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      461 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WmD8kNerqwTfWAqV',
          ),
          1 => 
          array (
            0 => 'sortBy',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      496 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9tZWnuTNSE2VO8fR',
          ),
          1 => 
          array (
            0 => 'no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      529 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'polls.show',
          ),
          1 => 
          array (
            0 => 'poll',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'polls.update',
          ),
          1 => 
          array (
            0 => 'poll',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'polls.destroy',
          ),
          1 => 
          array (
            0 => 'poll',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      555 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7ptwQG24PvuYdAeJ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      585 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'poll-options.show',
          ),
          1 => 
          array (
            0 => 'poll_option',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'poll-options.update',
          ),
          1 => 
          array (
            0 => 'poll_option',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'poll-options.destroy',
          ),
          1 => 
          array (
            0 => 'poll_option',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      613 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'offers.show',
          ),
          1 => 
          array (
            0 => 'offer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'offers.update',
          ),
          1 => 
          array (
            0 => 'offer',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'offers.destroy',
          ),
          1 => 
          array (
            0 => 'offer',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      648 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'supplier.show',
          ),
          1 => 
          array (
            0 => 'supplier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'supplier.update',
          ),
          1 => 
          array (
            0 => 'supplier',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'supplier.destroy',
          ),
          1 => 
          array (
            0 => 'supplier',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      676 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mENTmq4G1KXjb4Id',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      704 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sales.show',
          ),
          1 => 
          array (
            0 => 'sale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sales.update',
          ),
          1 => 
          array (
            0 => 'sale',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'sales.destroy',
          ),
          1 => 
          array (
            0 => 'sale',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      730 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BG0XawFdfagzQeA9',
          ),
          1 => 
          array (
            0 => 'business_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      763 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4wE2NqJhR5PYUlGr',
          ),
          1 => 
          array (
            0 => 'transaction_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      798 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::E4VC6MqkYdodiE6C',
          ),
          1 => 
          array (
            0 => 'invoice_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      825 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sliders.show',
          ),
          1 => 
          array (
            0 => 'slider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sliders.update',
          ),
          1 => 
          array (
            0 => 'slider',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'sliders.destroy',
          ),
          1 => 
          array (
            0 => 'slider',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      865 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'discount-types.show',
          ),
          1 => 
          array (
            0 => 'discount_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'discount-types.update',
          ),
          1 => 
          array (
            0 => 'discount_type',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'discount-types.destroy',
          ),
          1 => 
          array (
            0 => 'discount_type',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      891 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p8Xkkovyy0jWXrsR',
          ),
          1 => 
          array (
            0 => 'business_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      923 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'invoices.show',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'invoices.update',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'invoices.destroy',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      951 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'items.show',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'items.update',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'items.destroy',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      980 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::duWUCKctHMKMv097',
          ),
          1 => 
          array (
            0 => 'business_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1001 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fA2XBpOOlh10regp',
          ),
          1 => 
          array (
            0 => 'brand_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1028 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HeQSYktr4fF7M5gz',
          ),
          1 => 
          array (
            0 => 'category_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1057 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pVehRSXJVSt4PL8n',
          ),
          1 => 
          array (
            0 => 'sub_category_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1084 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NsSM47G7rIcP4Ixr',
          ),
          1 => 
          array (
            0 => 'item_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1108 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8gH02546LzoALbUS',
          ),
          1 => 
          array (
            0 => 'item_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1138 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1kaY3fR05a4dGFIy',
          ),
          1 => 
          array (
            0 => 'image_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1178 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bK09StS35WpGQeZs',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1207 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0zCbj7wq4zaWm4gm',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1247 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Sx7qUv5Pw4CUlwBY',
          ),
          1 => 
          array (
            0 => 'role_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1287 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4C07T0I9Tdz2eoPI',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1317 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'referrals.show',
          ),
          1 => 
          array (
            0 => 'referral',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'referrals.update',
          ),
          1 => 
          array (
            0 => 'referral',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'referrals.destroy',
          ),
          1 => 
          array (
            0 => 'referral',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1349 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brands.show',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'brands.update',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'brands.destroy',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1381 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'business.show',
          ),
          1 => 
          array (
            0 => 'business',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'business.update',
          ),
          1 => 
          array (
            0 => 'business',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'business.destroy',
          ),
          1 => 
          array (
            0 => 'business',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1403 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pH7sZMBkUHCHy4Rr',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1442 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.show',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'categories.update',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'categories.destroy',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1469 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qetGH6zki00Nyj18',
          ),
          1 => 
          array (
            0 => 'business_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1502 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::px4c1YjzOZJwl7vC',
          ),
          1 => 
          array (
            0 => 'parent_category_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1534 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.show',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'customer.update',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'customer.destroy',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1564 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'currencies.show',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'currencies.update',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'currencies.destroy',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1593 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coupons.show',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'coupons.update',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'coupons.destroy',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1624 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'units.show',
          ),
          1 => 
          array (
            0 => 'unit',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'units.update',
          ),
          1 => 
          array (
            0 => 'unit',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'units.destroy',
          ),
          1 => 
          array (
            0 => 'unit',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1651 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QyyjEqaNl8BGMArw',
          ),
          1 => 
          array (
            0 => 'business_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1692 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attributes.show',
          ),
          1 => 
          array (
            0 => 'attribute',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'attributes.update',
          ),
          1 => 
          array (
            0 => 'attribute',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'attributes.destroy',
          ),
          1 => 
          array (
            0 => 'attribute',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1719 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2zAALtIkJieYrRoH',
          ),
          1 => 
          array (
            0 => 'business_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1745 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J2X6hDY41te8NIXH',
          ),
          1 => 
          array (
            0 => 'category_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1771 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cQSGCZ9SOFtGo4LY',
          ),
          1 => 
          array (
            0 => 'business_id',
            1 => 'category_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1803 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'values.show',
          ),
          1 => 
          array (
            0 => 'value',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'values.update',
          ),
          1 => 
          array (
            0 => 'value',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'values.destroy',
          ),
          1 => 
          array (
            0 => 'value',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1842 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sv656I9KKnuItP5n',
          ),
          1 => 
          array (
            0 => 'attribute_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1871 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'address.show',
          ),
          1 => 
          array (
            0 => 'address',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'address.update',
          ),
          1 => 
          array (
            0 => 'address',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'address.destroy',
          ),
          1 => 
          array (
            0 => 'address',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1900 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tax.show',
          ),
          1 => 
          array (
            0 => 'tax',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tax.update',
          ),
          1 => 
          array (
            0 => 'tax',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'tax.destroy',
          ),
          1 => 
          array (
            0 => 'tax',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1927 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4WOo1suv7UHX6mNP',
          ),
          1 => 
          array (
            0 => 'business_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1961 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'locations.show',
          ),
          1 => 
          array (
            0 => 'location',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'locations.update',
          ),
          1 => 
          array (
            0 => 'location',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'locations.destroy',
          ),
          1 => 
          array (
            0 => 'location',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1988 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g97TDh7U8rHUx4XB',
          ),
          1 => 
          array (
            0 => 'business_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2018 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wishlist.show',
          ),
          1 => 
          array (
            0 => 'wishlist',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'wishlist.update',
          ),
          1 => 
          array (
            0 => 'wishlist',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'wishlist.destroy',
          ),
          1 => 
          array (
            0 => 'wishlist',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        3 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::B0E8s24bgJxXIh0o' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laravel-websockets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Middleware\\Authorize',
        ),
        'uses' => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Controllers\\ShowDashboard@__invoke',
        'controller' => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Controllers\\ShowDashboard',
        'namespace' => NULL,
        'prefix' => 'laravel-websockets',
        'where' => 
        array (
        ),
        'as' => 'generated::B0E8s24bgJxXIh0o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::rUGRxJPTFkJEVQDh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laravel-websockets/api/{appId}/statistics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Middleware\\Authorize',
        ),
        'uses' => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Controllers\\DashboardApiController@getStatistics',
        'controller' => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Controllers\\DashboardApiController@getStatistics',
        'namespace' => NULL,
        'prefix' => 'laravel-websockets',
        'where' => 
        array (
        ),
        'as' => 'generated::rUGRxJPTFkJEVQDh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::R6QVvzpfYzTxJWKl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'laravel-websockets/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Middleware\\Authorize',
        ),
        'uses' => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Controllers\\AuthenticateDashboard@__invoke',
        'controller' => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Controllers\\AuthenticateDashboard',
        'namespace' => NULL,
        'prefix' => 'laravel-websockets',
        'where' => 
        array (
        ),
        'as' => 'generated::R6QVvzpfYzTxJWKl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::W0WectifySTgnOjH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'laravel-websockets/event',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Middleware\\Authorize',
        ),
        'uses' => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Controllers\\SendMessage@__invoke',
        'controller' => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Controllers\\SendMessage',
        'namespace' => NULL,
        'prefix' => 'laravel-websockets',
        'where' => 
        array (
        ),
        'as' => 'generated::W0WectifySTgnOjH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SdWHc7yUg0PL4fT2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'laravel-websockets/statistics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'BeyondCode\\LaravelWebSockets\\Statistics\\Http\\Middleware\\Authorize',
        ),
        'uses' => 'BeyondCode\\LaravelWebSockets\\Statistics\\Http\\Controllers\\WebSocketStatisticsEntriesController@store',
        'controller' => 'BeyondCode\\LaravelWebSockets\\Statistics\\Http\\Controllers\\WebSocketStatisticsEntriesController@store',
        'namespace' => NULL,
        'prefix' => 'laravel-websockets',
        'where' => 
        array (
        ),
        'as' => 'generated::SdWHc7yUg0PL4fT2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'l5-swagger.api' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/documentation',
      'action' => 
      array (
        'as' => 'l5-swagger.api',
        'middleware' => 
        array (
        ),
        'uses' => '\\L5Swagger\\Http\\Controllers\\SwaggerController@api',
        'controller' => '\\L5Swagger\\Http\\Controllers\\SwaggerController@api',
        'namespace' => 'L5Swagger',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'l5-swagger.docs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'docs/{jsonFile?}',
      'action' => 
      array (
        'as' => 'l5-swagger.docs',
        'middleware' => 
        array (
        ),
        'uses' => '\\L5Swagger\\Http\\Controllers\\SwaggerController@docs',
        'controller' => '\\L5Swagger\\Http\\Controllers\\SwaggerController@docs',
        'namespace' => 'L5Swagger',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'l5-swagger.asset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'docs/asset/{asset}',
      'action' => 
      array (
        'as' => 'l5-swagger.asset',
        'middleware' => 
        array (
        ),
        'uses' => '\\L5Swagger\\Http\\Controllers\\SwaggerAssetController@index',
        'controller' => '\\L5Swagger\\Http\\Controllers\\SwaggerAssetController@index',
        'namespace' => 'L5Swagger',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'l5-swagger.oauth2_callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/oauth2-callback',
      'action' => 
      array (
        'as' => 'l5-swagger.oauth2_callback',
        'middleware' => 
        array (
        ),
        'uses' => '\\L5Swagger\\Http\\Controllers\\SwaggerController@oauth2Callback',
        'controller' => '\\L5Swagger\\Http\\Controllers\\SwaggerController@oauth2Callback',
        'namespace' => 'L5Swagger',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.authorizations.authorize' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'as' => 'passport.authorizations.authorize',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.authorizations.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'as' => 'passport.authorizations.approve',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.authorizations.deny' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'as' => 'passport.authorizations.deny',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token',
      'action' => 
      array (
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'as' => 'passport.token',
        'middleware' => 'throttle',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'as' => 'passport.tokens.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'as' => 'passport.tokens.destroy',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.token.refresh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'as' => 'passport.token.refresh',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.clients.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'as' => 'passport.clients.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.clients.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'as' => 'passport.clients.store',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.clients.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'as' => 'passport.clients.update',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.clients.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'as' => 'passport.clients.destroy',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.scopes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/scopes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'as' => 'passport.scopes.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.personal.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'as' => 'passport.personal.tokens.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.personal.tokens.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'as' => 'passport.personal.tokens.store',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.personal.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/personal-access-tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'as' => 'passport.personal.tokens.destroy',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::YbsCsjzx9gJ4zaxd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'broadcasting/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Broadcasting\\BroadcastController@authenticate',
        'controller' => '\\Illuminate\\Broadcasting\\BroadcastController@authenticate',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::YbsCsjzx9gJ4zaxd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qkBUCt6IVY1bCIf5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::qkBUCt6IVY1bCIf5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'vouchers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/vouchers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'vouchers.index',
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\VoucherController@index',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\VoucherController@index',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'vouchers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/vouchers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'vouchers.store',
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\VoucherController@store',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\VoucherController@store',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'vouchers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/vouchers/{voucher}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'vouchers.show',
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\VoucherController@show',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\VoucherController@show',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'vouchers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/vouchers/{voucher}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'vouchers.update',
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\VoucherController@update',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\VoucherController@update',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'vouchers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/vouchers/{voucher}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'vouchers.destroy',
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\VoucherController@destroy',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\VoucherController@destroy',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gift-cards.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/gift-cards',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'gift-cards.index',
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\GiftCardController@index',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\GiftCardController@index',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gift-cards.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/gift-cards',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'gift-cards.store',
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\GiftCardController@store',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\GiftCardController@store',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gift-cards.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/gift-cards/{gift_card}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'gift-cards.show',
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\GiftCardController@show',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\GiftCardController@show',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gift-cards.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/gift-cards/{gift_card}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'gift-cards.update',
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\GiftCardController@update',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\GiftCardController@update',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gift-cards.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/gift-cards/{gift_card}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'gift-cards.destroy',
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\GiftCardController@destroy',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\GiftCardController@destroy',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RA80vjAl5Cg9JeqY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/giftcards/transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\TransactionDetailController@giftCardStore',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\TransactionDetailController@giftCardStore',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::RA80vjAl5Cg9JeqY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0DkOzaA39vKImU3U' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/vouchers/transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\TransactionDetailController@voucherStore',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\TransactionDetailController@voucherStore',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::0DkOzaA39vKImU3U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::nyZYXVbCMVKrUdg0' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/giftcards/transactions/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\TransactionDetailController@updatePaymentStatus',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\TransactionDetailController@updatePaymentStatus',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::nyZYXVbCMVKrUdg0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::r2JN1Lg5rdGIBTI2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/giftcards/user/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\TransactionDetailController@getGiftCardByCustomer',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\TransactionDetailController@getGiftCardByCustomer',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::r2JN1Lg5rdGIBTI2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::uN8huR5JAxdsc5UG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/vouchers/user/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\TransactionDetailController@getVoucherByCustomer',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\TransactionDetailController@getVoucherByCustomer',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::uN8huR5JAxdsc5UG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'polls.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/polls',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'polls.index',
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\PollController@index',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\PollController@index',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'polls.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/polls',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'polls.store',
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\PollController@store',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\PollController@store',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'polls.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/polls/{poll}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'polls.show',
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\PollController@show',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\PollController@show',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'polls.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/polls/{poll}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'polls.update',
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\PollController@update',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\PollController@update',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'polls.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/polls/{poll}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'polls.destroy',
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\PollController@destroy',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\PollController@destroy',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::7ptwQG24PvuYdAeJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/polls/customer/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\PollController@getByCustomerId',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\PollController@getByCustomerId',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::7ptwQG24PvuYdAeJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'poll-options.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/poll-options',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'poll-options.index',
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\PollOptionController@index',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\PollOptionController@index',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'poll-options.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/poll-options',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'poll-options.store',
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\PollOptionController@store',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\PollOptionController@store',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'poll-options.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/poll-options/{poll_option}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'poll-options.show',
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\PollOptionController@show',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\PollOptionController@show',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'poll-options.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/poll-options/{poll_option}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'poll-options.update',
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\PollOptionController@update',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\PollOptionController@update',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'poll-options.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/poll-options/{poll_option}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'poll-options.destroy',
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\PollOptionController@destroy',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\PollOptionController@destroy',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::T8xGeaI1pEaKKPXE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/polls-response',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\PollResponseController@store',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\PollResponseController@store',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::T8xGeaI1pEaKKPXE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'offers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/offers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'offers.index',
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\OfferItemsController@index',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\OfferItemsController@index',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'offers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/offers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'offers.store',
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\OfferItemsController@store',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\OfferItemsController@store',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'offers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/offers/{offer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'offers.show',
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\OfferItemsController@show',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\OfferItemsController@show',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'offers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/offers/{offer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'offers.update',
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\OfferItemsController@update',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\OfferItemsController@update',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'offers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/offers/{offer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'offers.destroy',
        'uses' => 'Modules\\Promotional\\Http\\Controllers\\OfferItemsController@destroy',
        'controller' => 'Modules\\Promotional\\Http\\Controllers\\OfferItemsController@destroy',
        'namespace' => 'Modules\\Promotional\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'supplier.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/supplier',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'supplier.index',
        'uses' => 'Modules\\Supplier\\Http\\Controllers\\SupplierController@index',
        'controller' => 'Modules\\Supplier\\Http\\Controllers\\SupplierController@index',
        'namespace' => 'Modules\\Supplier\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'supplier.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/supplier',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'supplier.store',
        'uses' => 'Modules\\Supplier\\Http\\Controllers\\SupplierController@store',
        'controller' => 'Modules\\Supplier\\Http\\Controllers\\SupplierController@store',
        'namespace' => 'Modules\\Supplier\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'supplier.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/supplier/{supplier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'supplier.show',
        'uses' => 'Modules\\Supplier\\Http\\Controllers\\SupplierController@show',
        'controller' => 'Modules\\Supplier\\Http\\Controllers\\SupplierController@show',
        'namespace' => 'Modules\\Supplier\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'supplier.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/supplier/{supplier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'supplier.update',
        'uses' => 'Modules\\Supplier\\Http\\Controllers\\SupplierController@update',
        'controller' => 'Modules\\Supplier\\Http\\Controllers\\SupplierController@update',
        'namespace' => 'Modules\\Supplier\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'supplier.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/supplier/{supplier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'supplier.destroy',
        'uses' => 'Modules\\Supplier\\Http\\Controllers\\SupplierController@destroy',
        'controller' => 'Modules\\Supplier\\Http\\Controllers\\SupplierController@destroy',
        'namespace' => 'Modules\\Supplier\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::mENTmq4G1KXjb4Id' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/suppliers/business/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Supplier\\Http\\Controllers\\SupplierController@getSupplierByBusiness',
        'controller' => 'Modules\\Supplier\\Http\\Controllers\\SupplierController@getSupplierByBusiness',
        'namespace' => 'Modules\\Supplier\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::mENTmq4G1KXjb4Id',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::63lKwCblD2zB2ovA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/statistics/get-dashboard-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Statistic\\Http\\Controllers\\DashboardDataController@getDashboardData',
        'controller' => 'Modules\\Statistic\\Http\\Controllers\\DashboardDataController@getDashboardData',
        'namespace' => 'Modules\\Statistic\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::63lKwCblD2zB2ovA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vgc0LVMLKPXIqKH2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/statistics/get-best-sale-products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Statistic\\Http\\Controllers\\DashboardDataController@getBestSellingProducts',
        'controller' => 'Modules\\Statistic\\Http\\Controllers\\DashboardDataController@getBestSellingProducts',
        'namespace' => 'Modules\\Statistic\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::vgc0LVMLKPXIqKH2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'discount-types.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/discount-types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'discount-types.index',
        'uses' => 'Modules\\Sales\\Http\\Controllers\\DiscountController@index',
        'controller' => 'Modules\\Sales\\Http\\Controllers\\DiscountController@index',
        'namespace' => 'Modules\\Sales\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'discount-types.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/discount-types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'discount-types.store',
        'uses' => 'Modules\\Sales\\Http\\Controllers\\DiscountController@store',
        'controller' => 'Modules\\Sales\\Http\\Controllers\\DiscountController@store',
        'namespace' => 'Modules\\Sales\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'discount-types.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/discount-types/{discount_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'discount-types.show',
        'uses' => 'Modules\\Sales\\Http\\Controllers\\DiscountController@show',
        'controller' => 'Modules\\Sales\\Http\\Controllers\\DiscountController@show',
        'namespace' => 'Modules\\Sales\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'discount-types.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/discount-types/{discount_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'discount-types.update',
        'uses' => 'Modules\\Sales\\Http\\Controllers\\DiscountController@update',
        'controller' => 'Modules\\Sales\\Http\\Controllers\\DiscountController@update',
        'namespace' => 'Modules\\Sales\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'discount-types.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/discount-types/{discount_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'discount-types.destroy',
        'uses' => 'Modules\\Sales\\Http\\Controllers\\DiscountController@destroy',
        'controller' => 'Modules\\Sales\\Http\\Controllers\\DiscountController@destroy',
        'namespace' => 'Modules\\Sales\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::p8Xkkovyy0jWXrsR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/discount-types/business/{business_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Sales\\Http\\Controllers\\DiscountController@getDiscountByBusiness',
        'controller' => 'Modules\\Sales\\Http\\Controllers\\DiscountController@getDiscountByBusiness',
        'namespace' => 'Modules\\Sales\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::p8Xkkovyy0jWXrsR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sales.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/sales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'sales.index',
        'uses' => 'Modules\\Sales\\Http\\Controllers\\SalesController@index',
        'controller' => 'Modules\\Sales\\Http\\Controllers\\SalesController@index',
        'namespace' => 'Modules\\Sales\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sales.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/sales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'sales.store',
        'uses' => 'Modules\\Sales\\Http\\Controllers\\SalesController@store',
        'controller' => 'Modules\\Sales\\Http\\Controllers\\SalesController@store',
        'namespace' => 'Modules\\Sales\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sales.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/sales/{sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'sales.show',
        'uses' => 'Modules\\Sales\\Http\\Controllers\\SalesController@show',
        'controller' => 'Modules\\Sales\\Http\\Controllers\\SalesController@show',
        'namespace' => 'Modules\\Sales\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sales.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/sales/{sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'sales.update',
        'uses' => 'Modules\\Sales\\Http\\Controllers\\SalesController@update',
        'controller' => 'Modules\\Sales\\Http\\Controllers\\SalesController@update',
        'namespace' => 'Modules\\Sales\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sales.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/sales/{sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'sales.destroy',
        'uses' => 'Modules\\Sales\\Http\\Controllers\\SalesController@destroy',
        'controller' => 'Modules\\Sales\\Http\\Controllers\\SalesController@destroy',
        'namespace' => 'Modules\\Sales\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'invoices.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'invoices.index',
        'uses' => 'Modules\\Sales\\Http\\Controllers\\InvoiceController@index',
        'controller' => 'Modules\\Sales\\Http\\Controllers\\InvoiceController@index',
        'namespace' => 'Modules\\Sales\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'invoices.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'invoices.store',
        'uses' => 'Modules\\Sales\\Http\\Controllers\\InvoiceController@store',
        'controller' => 'Modules\\Sales\\Http\\Controllers\\InvoiceController@store',
        'namespace' => 'Modules\\Sales\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'invoices.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/invoices/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'invoices.show',
        'uses' => 'Modules\\Sales\\Http\\Controllers\\InvoiceController@show',
        'controller' => 'Modules\\Sales\\Http\\Controllers\\InvoiceController@show',
        'namespace' => 'Modules\\Sales\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'invoices.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/invoices/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'invoices.update',
        'uses' => 'Modules\\Sales\\Http\\Controllers\\InvoiceController@update',
        'controller' => 'Modules\\Sales\\Http\\Controllers\\InvoiceController@update',
        'namespace' => 'Modules\\Sales\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'invoices.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/invoices/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'invoices.destroy',
        'uses' => 'Modules\\Sales\\Http\\Controllers\\InvoiceController@destroy',
        'controller' => 'Modules\\Sales\\Http\\Controllers\\InvoiceController@destroy',
        'namespace' => 'Modules\\Sales\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BG0XawFdfagzQeA9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/sales/business/{business_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Sales\\Http\\Controllers\\SalesController@getSaleByBusiness',
        'controller' => 'Modules\\Sales\\Http\\Controllers\\SalesController@getSaleByBusiness',
        'namespace' => 'Modules\\Sales\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::BG0XawFdfagzQeA9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4wE2NqJhR5PYUlGr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/sales/order-lifecycle/{transaction_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Sales\\Http\\Controllers\\OrderStatusController@getOrderStatusByTransactionID',
        'controller' => 'Modules\\Sales\\Http\\Controllers\\OrderStatusController@getOrderStatusByTransactionID',
        'namespace' => 'Modules\\Sales\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::4wE2NqJhR5PYUlGr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::E4VC6MqkYdodiE6C' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/sales/invoice-lifecycle/{invoice_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Sales\\Http\\Controllers\\OrderStatusController@getInvoiceStatusByInvoiceID',
        'controller' => 'Modules\\Sales\\Http\\Controllers\\OrderStatusController@getInvoiceStatusByInvoiceID',
        'namespace' => 'Modules\\Sales\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::E4VC6MqkYdodiE6C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::zXKkJGNTtWyeqwxV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/sales/sale-items/by-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Sales\\Http\\Controllers\\SalesController@saleItemsByUser',
        'controller' => 'Modules\\Sales\\Http\\Controllers\\SalesController@saleItemsByUser',
        'namespace' => 'Modules\\Sales\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::zXKkJGNTtWyeqwxV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pAxN03BUGTFq9ehJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/sales/shipping-cost/by-cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Sales\\Http\\Controllers\\ShippingCostController@getShippingCostByCarts',
        'controller' => 'Modules\\Sales\\Http\\Controllers\\ShippingCostController@getShippingCostByCarts',
        'namespace' => 'Modules\\Sales\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::pAxN03BUGTFq9ehJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ceEo15noEPcNfAqt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/roles/getModulePermissionByUserTypeID',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Role\\Http\\Controllers\\RoleController@getModulePermissionByUserTypeID',
        'controller' => 'Modules\\Role\\Http\\Controllers\\RoleController@getModulePermissionByUserTypeID',
        'namespace' => '',
        'prefix' => 'api/v1/roles',
        'where' => 
        array (
        ),
        'as' => 'generated::ceEo15noEPcNfAqt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ABISf8MKhLQPIS9q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/roles/getModulePermissionByUser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Role\\Http\\Controllers\\RoleController@getModulePermissionByUser',
        'controller' => 'Modules\\Role\\Http\\Controllers\\RoleController@getModulePermissionByUser',
        'namespace' => '',
        'prefix' => 'api/v1/roles',
        'where' => 
        array (
        ),
        'as' => 'generated::ABISf8MKhLQPIS9q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::TqGevEAguK9jfJEK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/roles/getUserTypeList',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Role\\Http\\Controllers\\RoleController@getUserTypeList',
        'controller' => 'Modules\\Role\\Http\\Controllers\\RoleController@getUserTypeList',
        'namespace' => '',
        'prefix' => 'api/v1/roles',
        'where' => 
        array (
        ),
        'as' => 'generated::TqGevEAguK9jfJEK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lPRIEWGyEHynI3xc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/roles/getModuleList',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Role\\Http\\Controllers\\RoleController@getModuleList',
        'controller' => 'Modules\\Role\\Http\\Controllers\\RoleController@getModuleList',
        'namespace' => '',
        'prefix' => 'api/v1/roles',
        'where' => 
        array (
        ),
        'as' => 'generated::lPRIEWGyEHynI3xc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::AbeUHXCeOk0V5c0E' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/roles/appPermissionStore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Role\\Http\\Controllers\\RoleController@appPermissionStore',
        'controller' => 'Modules\\Role\\Http\\Controllers\\RoleController@appPermissionStore',
        'namespace' => '',
        'prefix' => 'api/v1/roles',
        'where' => 
        array (
        ),
        'as' => 'generated::AbeUHXCeOk0V5c0E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RrmJgK6x909z8Mxp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/roles/multipleAppPermissionStore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Role\\Http\\Controllers\\RoleController@multipleAppPermissionStore',
        'controller' => 'Modules\\Role\\Http\\Controllers\\RoleController@multipleAppPermissionStore',
        'namespace' => '',
        'prefix' => 'api/v1/roles',
        'where' => 
        array (
        ),
        'as' => 'generated::RrmJgK6x909z8Mxp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0ef9XGFx77VC7VSc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/roles/getAllUser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Role\\Http\\Controllers\\UserController@getAllUser',
        'controller' => 'Modules\\Role\\Http\\Controllers\\UserController@getAllUser',
        'namespace' => '',
        'prefix' => 'api/v1/roles',
        'where' => 
        array (
        ),
        'as' => 'generated::0ef9XGFx77VC7VSc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bK09StS35WpGQeZs' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/roles/editUser/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Role\\Http\\Controllers\\UserController@editUser',
        'controller' => 'Modules\\Role\\Http\\Controllers\\UserController@editUser',
        'namespace' => '',
        'prefix' => 'api/v1/roles',
        'where' => 
        array (
        ),
        'as' => 'generated::bK09StS35WpGQeZs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0zCbj7wq4zaWm4gm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/roles/userDetails/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Role\\Http\\Controllers\\UserController@userDetails',
        'controller' => 'Modules\\Role\\Http\\Controllers\\UserController@userDetails',
        'namespace' => '',
        'prefix' => 'api/v1/roles',
        'where' => 
        array (
        ),
        'as' => 'generated::0zCbj7wq4zaWm4gm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::if3mB9ZGWeq2wcvx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/roles/getAllRoles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\Role\\Http\\Controllers\\RoleController@getAllRoles',
        'controller' => 'Modules\\Role\\Http\\Controllers\\RoleController@getAllRoles',
        'namespace' => '',
        'prefix' => 'api/v1/roles',
        'where' => 
        array (
        ),
        'as' => 'generated::if3mB9ZGWeq2wcvx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::rTbU6wk8GRullXLI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/roles/check-permission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\Role\\Http\\Controllers\\PermissionController@checkPermission',
        'controller' => 'Modules\\Role\\Http\\Controllers\\PermissionController@checkPermission',
        'namespace' => '',
        'prefix' => 'api/v1/roles',
        'where' => 
        array (
        ),
        'as' => 'generated::rTbU6wk8GRullXLI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GQadElvyqqsHEPBI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/roles/give-permission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\Role\\Http\\Controllers\\PermissionController@givePermission',
        'controller' => 'Modules\\Role\\Http\\Controllers\\PermissionController@givePermission',
        'namespace' => '',
        'prefix' => 'api/v1/roles',
        'where' => 
        array (
        ),
        'as' => 'generated::GQadElvyqqsHEPBI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5aGPNn9uPvmDemGF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/roles/getAllPermission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\Role\\Http\\Controllers\\PermissionController@getAllPermission',
        'controller' => 'Modules\\Role\\Http\\Controllers\\PermissionController@getAllPermission',
        'namespace' => '',
        'prefix' => 'api/v1/roles',
        'where' => 
        array (
        ),
        'as' => 'generated::5aGPNn9uPvmDemGF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Sx7qUv5Pw4CUlwBY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/roles/getAllPermissionByRole/{role_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\Role\\Http\\Controllers\\PermissionController@getAllPermissionByRole',
        'controller' => 'Modules\\Role\\Http\\Controllers\\PermissionController@getAllPermissionByRole',
        'namespace' => '',
        'prefix' => 'api/v1/roles',
        'where' => 
        array (
        ),
        'as' => 'generated::Sx7qUv5Pw4CUlwBY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::joiGTl41RzQUSKDX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/roles/storePermission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\Role\\Http\\Controllers\\PermissionController@storePermission',
        'controller' => 'Modules\\Role\\Http\\Controllers\\PermissionController@storePermission',
        'namespace' => '',
        'prefix' => 'api/v1/roles',
        'where' => 
        array (
        ),
        'as' => 'generated::joiGTl41RzQUSKDX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::h98ztSRI9O2L7fEx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/roles/multipleUserRoleStore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\Role\\Http\\Controllers\\UserController@multipleUserRoleStore',
        'controller' => 'Modules\\Role\\Http\\Controllers\\UserController@multipleUserRoleStore',
        'namespace' => '',
        'prefix' => 'api/v1/roles',
        'where' => 
        array (
        ),
        'as' => 'generated::h98ztSRI9O2L7fEx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4C07T0I9Tdz2eoPI' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/roles/multipleUserRoleUpdate/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\Role\\Http\\Controllers\\UserController@multipleUserRoleUpdate',
        'controller' => 'Modules\\Role\\Http\\Controllers\\UserController@multipleUserRoleUpdate',
        'namespace' => '',
        'prefix' => 'api/v1/roles',
        'where' => 
        array (
        ),
        'as' => 'generated::4C07T0I9Tdz2eoPI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::K2gKpKIiDJd20IP9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/roles/getUserPermissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\Role\\Http\\Controllers\\PermissionController@getUserPermissions',
        'controller' => 'Modules\\Role\\Http\\Controllers\\PermissionController@getUserPermissions',
        'namespace' => '',
        'prefix' => 'api/v1/roles',
        'where' => 
        array (
        ),
        'as' => 'generated::K2gKpKIiDJd20IP9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::EkovQHcnyRBdgn74' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/roles/getUserRoles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\Role\\Http\\Controllers\\RoleController@getUserRoles',
        'controller' => 'Modules\\Role\\Http\\Controllers\\RoleController@getUserRoles',
        'namespace' => '',
        'prefix' => 'api/v1/roles',
        'where' => 
        array (
        ),
        'as' => 'generated::EkovQHcnyRBdgn74',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MmTzl3UzW3Ti90nE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/roles/getUserModules',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\Role\\Http\\Controllers\\PermissionController@getUserModules',
        'controller' => 'Modules\\Role\\Http\\Controllers\\PermissionController@getUserModules',
        'namespace' => '',
        'prefix' => 'api/v1/roles',
        'where' => 
        array (
        ),
        'as' => 'generated::MmTzl3UzW3Ti90nE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'referrals.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/referrals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'referrals.index',
        'uses' => 'Modules\\Referral\\Http\\Controllers\\ReferralController@index',
        'controller' => 'Modules\\Referral\\Http\\Controllers\\ReferralController@index',
        'namespace' => 'Modules\\Referral\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'referrals.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/referrals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'referrals.store',
        'uses' => 'Modules\\Referral\\Http\\Controllers\\ReferralController@store',
        'controller' => 'Modules\\Referral\\Http\\Controllers\\ReferralController@store',
        'namespace' => 'Modules\\Referral\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'referrals.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/referrals/{referral}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'referrals.show',
        'uses' => 'Modules\\Referral\\Http\\Controllers\\ReferralController@show',
        'controller' => 'Modules\\Referral\\Http\\Controllers\\ReferralController@show',
        'namespace' => 'Modules\\Referral\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'referrals.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/referrals/{referral}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'referrals.update',
        'uses' => 'Modules\\Referral\\Http\\Controllers\\ReferralController@update',
        'controller' => 'Modules\\Referral\\Http\\Controllers\\ReferralController@update',
        'namespace' => 'Modules\\Referral\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'referrals.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/referrals/{referral}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'referrals.destroy',
        'uses' => 'Modules\\Referral\\Http\\Controllers\\ReferralController@destroy',
        'controller' => 'Modules\\Referral\\Http\\Controllers\\ReferralController@destroy',
        'namespace' => 'Modules\\Referral\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CBfzSKgmf8zmCAGu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/payments/methods/get-payment-methods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Payment\\Http\\Controllers\\PaymentController@getPaymentMethods',
        'controller' => 'Modules\\Payment\\Http\\Controllers\\PaymentController@getPaymentMethods',
        'namespace' => 'Modules\\Payment\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::CBfzSKgmf8zmCAGu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5QyVNdcgUck4Wx3K' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/payments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Payment\\Http\\Controllers\\PaymentController@store',
        'controller' => 'Modules\\Payment\\Http\\Controllers\\PaymentController@store',
        'namespace' => 'Modules\\Payment\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::5QyVNdcgUck4Wx3K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0AuvUq1pbPflJfSy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/countries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Analytics\\Http\\Controllers\\CountriesController@index',
        'controller' => 'Modules\\Analytics\\Http\\Controllers\\CountriesController@index',
        'namespace' => 'Modules\\Analytics\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::0AuvUq1pbPflJfSy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tHle2B68Ileh2AOv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/countries/bulk-insert',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Analytics\\Http\\Controllers\\CountriesController@insert_countries',
        'controller' => 'Modules\\Analytics\\Http\\Controllers\\CountriesController@insert_countries',
        'namespace' => 'Modules\\Analytics\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::tHle2B68Ileh2AOv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::IfL6BsH9deH4N9Gz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Analytics\\Http\\Controllers\\CitiesController@index',
        'controller' => 'Modules\\Analytics\\Http\\Controllers\\CitiesController@index',
        'namespace' => 'Modules\\Analytics\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::IfL6BsH9deH4N9Gz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::hH5ZKSsGwYKDeFVs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/cities/bulk-insert',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Analytics\\Http\\Controllers\\CitiesController@insert_cities_for_bangladesh',
        'controller' => 'Modules\\Analytics\\Http\\Controllers\\CitiesController@insert_cities_for_bangladesh',
        'namespace' => 'Modules\\Analytics\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::hH5ZKSsGwYKDeFVs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lX96122VgsaPFrLo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/areas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Analytics\\Http\\Controllers\\AreasController@index',
        'controller' => 'Modules\\Analytics\\Http\\Controllers\\AreasController@index',
        'namespace' => 'Modules\\Analytics\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::lX96122VgsaPFrLo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lYCPmmD5oZSYpmCe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/areas/bulk-insert',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Analytics\\Http\\Controllers\\AreasController@insert_areas_for_bangladesh',
        'controller' => 'Modules\\Analytics\\Http\\Controllers\\AreasController@insert_areas_for_bangladesh',
        'namespace' => 'Modules\\Analytics\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::lYCPmmD5oZSYpmCe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brands.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/brands',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'brands.index',
        'uses' => 'Modules\\Item\\Http\\Controllers\\BrandController@index',
        'controller' => 'Modules\\Item\\Http\\Controllers\\BrandController@index',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brands.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/brands',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'brands.store',
        'uses' => 'Modules\\Item\\Http\\Controllers\\BrandController@store',
        'controller' => 'Modules\\Item\\Http\\Controllers\\BrandController@store',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brands.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/brands/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'brands.show',
        'uses' => 'Modules\\Item\\Http\\Controllers\\BrandController@show',
        'controller' => 'Modules\\Item\\Http\\Controllers\\BrandController@show',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brands.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/brands/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'brands.update',
        'uses' => 'Modules\\Item\\Http\\Controllers\\BrandController@update',
        'controller' => 'Modules\\Item\\Http\\Controllers\\BrandController@update',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brands.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/brands/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'brands.destroy',
        'uses' => 'Modules\\Item\\Http\\Controllers\\BrandController@destroy',
        'controller' => 'Modules\\Item\\Http\\Controllers\\BrandController@destroy',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'categories.index',
        'uses' => 'Modules\\Item\\Http\\Controllers\\CategoryController@index',
        'controller' => 'Modules\\Item\\Http\\Controllers\\CategoryController@index',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'categories.store',
        'uses' => 'Modules\\Item\\Http\\Controllers\\CategoryController@store',
        'controller' => 'Modules\\Item\\Http\\Controllers\\CategoryController@store',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'categories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'categories.show',
        'uses' => 'Modules\\Item\\Http\\Controllers\\CategoryController@show',
        'controller' => 'Modules\\Item\\Http\\Controllers\\CategoryController@show',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'categories.update',
        'uses' => 'Modules\\Item\\Http\\Controllers\\CategoryController@update',
        'controller' => 'Modules\\Item\\Http\\Controllers\\CategoryController@update',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'categories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'categories.destroy',
        'uses' => 'Modules\\Item\\Http\\Controllers\\CategoryController@destroy',
        'controller' => 'Modules\\Item\\Http\\Controllers\\CategoryController@destroy',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qetGH6zki00Nyj18' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/categories/business/{business_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Item\\Http\\Controllers\\CategoryController@getCategoryByBusiness',
        'controller' => 'Modules\\Item\\Http\\Controllers\\CategoryController@getCategoryByBusiness',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::qetGH6zki00Nyj18',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::px4c1YjzOZJwl7vC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/categories/sub-categories/{parent_category_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Item\\Http\\Controllers\\CategoryController@getSubCategoriesByParentID',
        'controller' => 'Modules\\Item\\Http\\Controllers\\CategoryController@getSubCategoriesByParentID',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::px4c1YjzOZJwl7vC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'units.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/units',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'units.index',
        'uses' => 'Modules\\Item\\Http\\Controllers\\UnitController@index',
        'controller' => 'Modules\\Item\\Http\\Controllers\\UnitController@index',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'units.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/units',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'units.store',
        'uses' => 'Modules\\Item\\Http\\Controllers\\UnitController@store',
        'controller' => 'Modules\\Item\\Http\\Controllers\\UnitController@store',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'units.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/units/{unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'units.show',
        'uses' => 'Modules\\Item\\Http\\Controllers\\UnitController@show',
        'controller' => 'Modules\\Item\\Http\\Controllers\\UnitController@show',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'units.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/units/{unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'units.update',
        'uses' => 'Modules\\Item\\Http\\Controllers\\UnitController@update',
        'controller' => 'Modules\\Item\\Http\\Controllers\\UnitController@update',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'units.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/units/{unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'units.destroy',
        'uses' => 'Modules\\Item\\Http\\Controllers\\UnitController@destroy',
        'controller' => 'Modules\\Item\\Http\\Controllers\\UnitController@destroy',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::QyyjEqaNl8BGMArw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/units/business/{business_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Item\\Http\\Controllers\\UnitController@getUnitByBusiness',
        'controller' => 'Modules\\Item\\Http\\Controllers\\UnitController@getUnitByBusiness',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::QyyjEqaNl8BGMArw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::W0qeOaMJW68KETRO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/items/featured/toggle',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Item\\Http\\Controllers\\FeaturedItemsController@toggleFeaturedItem',
        'controller' => 'Modules\\Item\\Http\\Controllers\\FeaturedItemsController@toggleFeaturedItem',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::W0qeOaMJW68KETRO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'attributes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/attributes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'attributes.index',
        'uses' => 'Modules\\Item\\Http\\Controllers\\AttributeController@index',
        'controller' => 'Modules\\Item\\Http\\Controllers\\AttributeController@index',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'attributes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/attributes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'attributes.store',
        'uses' => 'Modules\\Item\\Http\\Controllers\\AttributeController@store',
        'controller' => 'Modules\\Item\\Http\\Controllers\\AttributeController@store',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'attributes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/attributes/{attribute}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'attributes.show',
        'uses' => 'Modules\\Item\\Http\\Controllers\\AttributeController@show',
        'controller' => 'Modules\\Item\\Http\\Controllers\\AttributeController@show',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'attributes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/attributes/{attribute}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'attributes.update',
        'uses' => 'Modules\\Item\\Http\\Controllers\\AttributeController@update',
        'controller' => 'Modules\\Item\\Http\\Controllers\\AttributeController@update',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'attributes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/attributes/{attribute}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'attributes.destroy',
        'uses' => 'Modules\\Item\\Http\\Controllers\\AttributeController@destroy',
        'controller' => 'Modules\\Item\\Http\\Controllers\\AttributeController@destroy',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2zAALtIkJieYrRoH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/attributes/business/{business_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Item\\Http\\Controllers\\AttributeController@getAttributeByBusiness',
        'controller' => 'Modules\\Item\\Http\\Controllers\\AttributeController@getAttributeByBusiness',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::2zAALtIkJieYrRoH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::J2X6hDY41te8NIXH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/attributes/category/{category_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Item\\Http\\Controllers\\AttributeController@getAttributeByCategory',
        'controller' => 'Modules\\Item\\Http\\Controllers\\AttributeController@getAttributeByCategory',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::J2X6hDY41te8NIXH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cQSGCZ9SOFtGo4LY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/attributes/{business_id}/{category_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Item\\Http\\Controllers\\AttributeController@getAttributeByCategoryAndBusiness',
        'controller' => 'Modules\\Item\\Http\\Controllers\\AttributeController@getAttributeByCategoryAndBusiness',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::cQSGCZ9SOFtGo4LY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'values.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/attribute/values',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'values.index',
        'uses' => 'Modules\\Item\\Http\\Controllers\\AttributeValueController@index',
        'controller' => 'Modules\\Item\\Http\\Controllers\\AttributeValueController@index',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1/attribute',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'values.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/attribute/values',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'values.store',
        'uses' => 'Modules\\Item\\Http\\Controllers\\AttributeValueController@store',
        'controller' => 'Modules\\Item\\Http\\Controllers\\AttributeValueController@store',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1/attribute',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'values.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/attribute/values/{value}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'values.show',
        'uses' => 'Modules\\Item\\Http\\Controllers\\AttributeValueController@show',
        'controller' => 'Modules\\Item\\Http\\Controllers\\AttributeValueController@show',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1/attribute',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'values.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/attribute/values/{value}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'values.update',
        'uses' => 'Modules\\Item\\Http\\Controllers\\AttributeValueController@update',
        'controller' => 'Modules\\Item\\Http\\Controllers\\AttributeValueController@update',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1/attribute',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'values.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/attribute/values/{value}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'values.destroy',
        'uses' => 'Modules\\Item\\Http\\Controllers\\AttributeValueController@destroy',
        'controller' => 'Modules\\Item\\Http\\Controllers\\AttributeValueController@destroy',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1/attribute',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::sv656I9KKnuItP5n' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/attribute/by-attribute/{attribute_id}/values',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Item\\Http\\Controllers\\AttributeValueController@getAttributeValueByAttribute',
        'controller' => 'Modules\\Item\\Http\\Controllers\\AttributeValueController@getAttributeValueByAttribute',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::sv656I9KKnuItP5n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'items.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'items.index',
        'uses' => 'Modules\\Item\\Http\\Controllers\\ItemController@index',
        'controller' => 'Modules\\Item\\Http\\Controllers\\ItemController@index',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'items.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'items.store',
        'uses' => 'Modules\\Item\\Http\\Controllers\\ItemController@store',
        'controller' => 'Modules\\Item\\Http\\Controllers\\ItemController@store',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'items.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/items/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'items.show',
        'uses' => 'Modules\\Item\\Http\\Controllers\\ItemController@show',
        'controller' => 'Modules\\Item\\Http\\Controllers\\ItemController@show',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'items.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/items/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'items.update',
        'uses' => 'Modules\\Item\\Http\\Controllers\\ItemController@update',
        'controller' => 'Modules\\Item\\Http\\Controllers\\ItemController@update',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'items.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/items/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'items.destroy',
        'uses' => 'Modules\\Item\\Http\\Controllers\\ItemController@destroy',
        'controller' => 'Modules\\Item\\Http\\Controllers\\ItemController@destroy',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::duWUCKctHMKMv097' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/items/business/{business_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Item\\Http\\Controllers\\ItemController@getItemByBusiness',
        'controller' => 'Modules\\Item\\Http\\Controllers\\ItemController@getItemByBusiness',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::duWUCKctHMKMv097',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HeQSYktr4fF7M5gz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/items/category/{category_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Item\\Http\\Controllers\\ItemController@getItemByCategory',
        'controller' => 'Modules\\Item\\Http\\Controllers\\ItemController@getItemByCategory',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::HeQSYktr4fF7M5gz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pVehRSXJVSt4PL8n' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/items/subcategory/{sub_category_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Item\\Http\\Controllers\\ItemController@getItemBySubCategory',
        'controller' => 'Modules\\Item\\Http\\Controllers\\ItemController@getItemBySubCategory',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::pVehRSXJVSt4PL8n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fA2XBpOOlh10regp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/items/brand/{brand_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Item\\Http\\Controllers\\ItemController@getItemByBrand',
        'controller' => 'Modules\\Item\\Http\\Controllers\\ItemController@getItemByBrand',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::fA2XBpOOlh10regp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NsSM47G7rIcP4Ixr' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/items/attribute/{item_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Item\\Http\\Controllers\\ItemController@updateItemAttribute',
        'controller' => 'Modules\\Item\\Http\\Controllers\\ItemController@updateItemAttribute',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::NsSM47G7rIcP4Ixr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::8gH02546LzoALbUS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/items/{item_id}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Item\\Http\\Controllers\\ItemController@uploadFile',
        'controller' => 'Modules\\Item\\Http\\Controllers\\ItemController@uploadFile',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::8gH02546LzoALbUS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::1kaY3fR05a4dGFIy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/items/image/{image_id}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Item\\Http\\Controllers\\ItemController@destroyImage',
        'controller' => 'Modules\\Item\\Http\\Controllers\\ItemController@destroyImage',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::1kaY3fR05a4dGFIy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::7hjRYcSv6C57BjMm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/items/all/for-dropdown',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Item\\Http\\Controllers\\ItemController@getItemsForDropdown',
        'controller' => 'Modules\\Item\\Http\\Controllers\\ItemController@getItemsForDropdown',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::7hjRYcSv6C57BjMm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::w6XHIa7vagkfxfTx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/get-items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Item\\Http\\Controllers\\ItemController@getProductList',
        'controller' => 'Modules\\Item\\Http\\Controllers\\ItemController@getProductList',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::w6XHIa7vagkfxfTx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jhPWqg4C07r9fdfR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/get-item-detail/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Item\\Http\\Controllers\\ItemController@getProductDetail',
        'controller' => 'Modules\\Item\\Http\\Controllers\\ItemController@getProductDetail',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::jhPWqg4C07r9fdfR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WmD8kNerqwTfWAqV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/get-flash-sale-items/{sortBy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Item\\Http\\Controllers\\ItemController@getFlashSaleItems',
        'controller' => 'Modules\\Item\\Http\\Controllers\\ItemController@getFlashSaleItems',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::WmD8kNerqwTfWAqV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9tZWnuTNSE2VO8fR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/get-category-products/{no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Item\\Http\\Controllers\\CategoryController@getCategoryByProductForHomePage',
        'controller' => 'Modules\\Item\\Http\\Controllers\\CategoryController@getCategoryByProductForHomePage',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::9tZWnuTNSE2VO8fR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0Jci3DrZydzpb6y4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/frontend-categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Item\\Http\\Controllers\\CategoryController@categoryListFrontend',
        'controller' => 'Modules\\Item\\Http\\Controllers\\CategoryController@categoryListFrontend',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::0Jci3DrZydzpb6y4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pWDwzg1Mj951b07X' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/get-items/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Item\\Http\\Controllers\\ItemController@searchItemFrontend',
        'controller' => 'Modules\\Item\\Http\\Controllers\\ItemController@searchItemFrontend',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::pWDwzg1Mj951b07X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yLCUdHkK0jJqoMGr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/item-review/get-by-item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Item\\Http\\Controllers\\ItemRatingsController@index',
        'controller' => 'Modules\\Item\\Http\\Controllers\\ItemRatingsController@index',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::yLCUdHkK0jJqoMGr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cMWjSkvdgNvLzYeS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/item-review/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Item\\Http\\Controllers\\ItemRatingsController@store',
        'controller' => 'Modules\\Item\\Http\\Controllers\\ItemRatingsController@store',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::cMWjSkvdgNvLzYeS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::X3SibAqb9YpxZgVj' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/item-review/update-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Item\\Http\\Controllers\\ItemRatingsController@updateStatus',
        'controller' => 'Modules\\Item\\Http\\Controllers\\ItemRatingsController@updateStatus',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::X3SibAqb9YpxZgVj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LVg6MKte0OjmOTuM' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/item-review/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Item\\Http\\Controllers\\ItemRatingsController@destroy',
        'controller' => 'Modules\\Item\\Http\\Controllers\\ItemRatingsController@destroy',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::LVg6MKte0OjmOTuM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/customer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'customer.index',
        'uses' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@index',
        'controller' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@index',
        'namespace' => 'Modules\\Customer\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/customer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'customer.store',
        'uses' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@store',
        'controller' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@store',
        'namespace' => 'Modules\\Customer\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/customer/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'customer.show',
        'uses' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@show',
        'controller' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@show',
        'namespace' => 'Modules\\Customer\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/customer/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'customer.update',
        'uses' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@update',
        'controller' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@update',
        'namespace' => 'Modules\\Customer\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/customer/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'customer.destroy',
        'uses' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@destroy',
        'controller' => 'Modules\\Customer\\Http\\Controllers\\CustomerController@destroy',
        'namespace' => 'Modules\\Customer\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'address.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'address.index',
        'uses' => 'Modules\\Customer\\Http\\Controllers\\AddressController@index',
        'controller' => 'Modules\\Customer\\Http\\Controllers\\AddressController@index',
        'namespace' => 'Modules\\Customer\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'address.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'address.store',
        'uses' => 'Modules\\Customer\\Http\\Controllers\\AddressController@store',
        'controller' => 'Modules\\Customer\\Http\\Controllers\\AddressController@store',
        'namespace' => 'Modules\\Customer\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'address.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/address/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'address.show',
        'uses' => 'Modules\\Customer\\Http\\Controllers\\AddressController@show',
        'controller' => 'Modules\\Customer\\Http\\Controllers\\AddressController@show',
        'namespace' => 'Modules\\Customer\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'address.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/address/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'address.update',
        'uses' => 'Modules\\Customer\\Http\\Controllers\\AddressController@update',
        'controller' => 'Modules\\Customer\\Http\\Controllers\\AddressController@update',
        'namespace' => 'Modules\\Customer\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'address.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/address/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'address.destroy',
        'uses' => 'Modules\\Customer\\Http\\Controllers\\AddressController@destroy',
        'controller' => 'Modules\\Customer\\Http\\Controllers\\AddressController@destroy',
        'namespace' => 'Modules\\Customer\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'coupons.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/coupons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'coupons.index',
        'uses' => 'Modules\\Coupon\\Http\\Controllers\\CouponController@index',
        'controller' => 'Modules\\Coupon\\Http\\Controllers\\CouponController@index',
        'namespace' => 'Modules\\Coupon\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'coupons.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/coupons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'coupons.store',
        'uses' => 'Modules\\Coupon\\Http\\Controllers\\CouponController@store',
        'controller' => 'Modules\\Coupon\\Http\\Controllers\\CouponController@store',
        'namespace' => 'Modules\\Coupon\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'coupons.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/coupons/{coupon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'coupons.show',
        'uses' => 'Modules\\Coupon\\Http\\Controllers\\CouponController@show',
        'controller' => 'Modules\\Coupon\\Http\\Controllers\\CouponController@show',
        'namespace' => 'Modules\\Coupon\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'coupons.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/coupons/{coupon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'coupons.update',
        'uses' => 'Modules\\Coupon\\Http\\Controllers\\CouponController@update',
        'controller' => 'Modules\\Coupon\\Http\\Controllers\\CouponController@update',
        'namespace' => 'Modules\\Coupon\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'coupons.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/coupons/{coupon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'coupons.destroy',
        'uses' => 'Modules\\Coupon\\Http\\Controllers\\CouponController@destroy',
        'controller' => 'Modules\\Coupon\\Http\\Controllers\\CouponController@destroy',
        'namespace' => 'Modules\\Coupon\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::82hDmNqNmuDlmCch' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/coupons/types/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Coupon\\Http\\Controllers\\CouponTypeController@getCouponTypes',
        'controller' => 'Modules\\Coupon\\Http\\Controllers\\CouponTypeController@getCouponTypes',
        'namespace' => 'Modules\\Coupon\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::82hDmNqNmuDlmCch',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::VRtZ43ue3s4bEKbe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/coupons/check-by/code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Coupon\\Http\\Controllers\\CouponController@checkCouponByCode',
        'controller' => 'Modules\\Coupon\\Http\\Controllers\\CouponController@checkCouponByCode',
        'namespace' => 'Modules\\Coupon\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::VRtZ43ue3s4bEKbe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'business.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/business',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'business.index',
        'uses' => 'Modules\\Business\\Http\\Controllers\\BusinessController@index',
        'controller' => 'Modules\\Business\\Http\\Controllers\\BusinessController@index',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'business.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/business',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'business.store',
        'uses' => 'Modules\\Business\\Http\\Controllers\\BusinessController@store',
        'controller' => 'Modules\\Business\\Http\\Controllers\\BusinessController@store',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'business.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/business/{business}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'business.show',
        'uses' => 'Modules\\Business\\Http\\Controllers\\BusinessController@show',
        'controller' => 'Modules\\Business\\Http\\Controllers\\BusinessController@show',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'business.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/business/{business}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'business.update',
        'uses' => 'Modules\\Business\\Http\\Controllers\\BusinessController@update',
        'controller' => 'Modules\\Business\\Http\\Controllers\\BusinessController@update',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'business.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/business/{business}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'business.destroy',
        'uses' => 'Modules\\Business\\Http\\Controllers\\BusinessController@destroy',
        'controller' => 'Modules\\Business\\Http\\Controllers\\BusinessController@destroy',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sliders.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/sliders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'sliders.index',
        'uses' => 'Modules\\Business\\Http\\Controllers\\SliderController@index',
        'controller' => 'Modules\\Business\\Http\\Controllers\\SliderController@index',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sliders.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/sliders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'sliders.store',
        'uses' => 'Modules\\Business\\Http\\Controllers\\SliderController@store',
        'controller' => 'Modules\\Business\\Http\\Controllers\\SliderController@store',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sliders.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/sliders/{slider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'sliders.show',
        'uses' => 'Modules\\Business\\Http\\Controllers\\SliderController@show',
        'controller' => 'Modules\\Business\\Http\\Controllers\\SliderController@show',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sliders.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/sliders/{slider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'sliders.update',
        'uses' => 'Modules\\Business\\Http\\Controllers\\SliderController@update',
        'controller' => 'Modules\\Business\\Http\\Controllers\\SliderController@update',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sliders.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/sliders/{slider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'sliders.destroy',
        'uses' => 'Modules\\Business\\Http\\Controllers\\SliderController@destroy',
        'controller' => 'Modules\\Business\\Http\\Controllers\\SliderController@destroy',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4TjFQZfmCXyy6YZ9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/sliders-frontend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Business\\Http\\Controllers\\SliderController@getAllSliderForFrontend',
        'controller' => 'Modules\\Business\\Http\\Controllers\\SliderController@getAllSliderForFrontend',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::4TjFQZfmCXyy6YZ9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pH7sZMBkUHCHy4Rr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/business/bin/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Business\\Http\\Controllers\\BusinessController@getBusinessByBin',
        'controller' => 'Modules\\Business\\Http\\Controllers\\BusinessController@getBusinessByBin',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::pH7sZMBkUHCHy4Rr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::7uKtL0UwVH4ShJ6c' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/shops',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Business\\Http\\Controllers\\BusinessController@getShopList',
        'controller' => 'Modules\\Business\\Http\\Controllers\\BusinessController@getShopList',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::7uKtL0UwVH4ShJ6c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'tax.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tax',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'tax.index',
        'uses' => 'Modules\\Business\\Http\\Controllers\\TaxController@index',
        'controller' => 'Modules\\Business\\Http\\Controllers\\TaxController@index',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'tax.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/tax',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'tax.store',
        'uses' => 'Modules\\Business\\Http\\Controllers\\TaxController@store',
        'controller' => 'Modules\\Business\\Http\\Controllers\\TaxController@store',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'tax.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tax/{tax}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'tax.show',
        'uses' => 'Modules\\Business\\Http\\Controllers\\TaxController@show',
        'controller' => 'Modules\\Business\\Http\\Controllers\\TaxController@show',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'tax.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/tax/{tax}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'tax.update',
        'uses' => 'Modules\\Business\\Http\\Controllers\\TaxController@update',
        'controller' => 'Modules\\Business\\Http\\Controllers\\TaxController@update',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'tax.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/tax/{tax}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'tax.destroy',
        'uses' => 'Modules\\Business\\Http\\Controllers\\TaxController@destroy',
        'controller' => 'Modules\\Business\\Http\\Controllers\\TaxController@destroy',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4WOo1suv7UHX6mNP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tax/business/{business_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Business\\Http\\Controllers\\TaxController@getTaxByBusiness',
        'controller' => 'Modules\\Business\\Http\\Controllers\\TaxController@getTaxByBusiness',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::4WOo1suv7UHX6mNP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'locations.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/locations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'locations.index',
        'uses' => 'Modules\\Business\\Http\\Controllers\\BusinessLocationController@index',
        'controller' => 'Modules\\Business\\Http\\Controllers\\BusinessLocationController@index',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'locations.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/locations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'locations.store',
        'uses' => 'Modules\\Business\\Http\\Controllers\\BusinessLocationController@store',
        'controller' => 'Modules\\Business\\Http\\Controllers\\BusinessLocationController@store',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'locations.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/locations/{location}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'locations.show',
        'uses' => 'Modules\\Business\\Http\\Controllers\\BusinessLocationController@show',
        'controller' => 'Modules\\Business\\Http\\Controllers\\BusinessLocationController@show',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'locations.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/locations/{location}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'locations.update',
        'uses' => 'Modules\\Business\\Http\\Controllers\\BusinessLocationController@update',
        'controller' => 'Modules\\Business\\Http\\Controllers\\BusinessLocationController@update',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'locations.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/locations/{location}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'locations.destroy',
        'uses' => 'Modules\\Business\\Http\\Controllers\\BusinessLocationController@destroy',
        'controller' => 'Modules\\Business\\Http\\Controllers\\BusinessLocationController@destroy',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::g97TDh7U8rHUx4XB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/locations/business/{business_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Business\\Http\\Controllers\\BusinessLocationController@findLocationByBusiness',
        'controller' => 'Modules\\Business\\Http\\Controllers\\BusinessLocationController@findLocationByBusiness',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::g97TDh7U8rHUx4XB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'wishlist.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/wishlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'wishlist.index',
        'uses' => 'Modules\\Business\\Http\\Controllers\\WishlistController@index',
        'controller' => 'Modules\\Business\\Http\\Controllers\\WishlistController@index',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'wishlist.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/wishlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'wishlist.store',
        'uses' => 'Modules\\Business\\Http\\Controllers\\WishlistController@store',
        'controller' => 'Modules\\Business\\Http\\Controllers\\WishlistController@store',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'wishlist.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/wishlist/{wishlist}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'wishlist.show',
        'uses' => 'Modules\\Business\\Http\\Controllers\\WishlistController@show',
        'controller' => 'Modules\\Business\\Http\\Controllers\\WishlistController@show',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'wishlist.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/wishlist/{wishlist}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'wishlist.update',
        'uses' => 'Modules\\Business\\Http\\Controllers\\WishlistController@update',
        'controller' => 'Modules\\Business\\Http\\Controllers\\WishlistController@update',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'wishlist.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/wishlist/{wishlist}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'wishlist.destroy',
        'uses' => 'Modules\\Business\\Http\\Controllers\\WishlistController@destroy',
        'controller' => 'Modules\\Business\\Http\\Controllers\\WishlistController@destroy',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'currencies.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/currencies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'currencies.index',
        'uses' => 'Modules\\Business\\Http\\Controllers\\CurrencyController@index',
        'controller' => 'Modules\\Business\\Http\\Controllers\\CurrencyController@index',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'currencies.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/currencies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'currencies.store',
        'uses' => 'Modules\\Business\\Http\\Controllers\\CurrencyController@store',
        'controller' => 'Modules\\Business\\Http\\Controllers\\CurrencyController@store',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'currencies.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/currencies/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'currencies.show',
        'uses' => 'Modules\\Business\\Http\\Controllers\\CurrencyController@show',
        'controller' => 'Modules\\Business\\Http\\Controllers\\CurrencyController@show',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'currencies.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/currencies/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'currencies.update',
        'uses' => 'Modules\\Business\\Http\\Controllers\\CurrencyController@update',
        'controller' => 'Modules\\Business\\Http\\Controllers\\CurrencyController@update',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'currencies.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/currencies/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'currencies.destroy',
        'uses' => 'Modules\\Business\\Http\\Controllers\\CurrencyController@destroy',
        'controller' => 'Modules\\Business\\Http\\Controllers\\CurrencyController@destroy',
        'namespace' => 'Modules\\Business\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::skS01DdHAhPAPR3q' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Auth\\Http\\Controllers\\LoginController@login',
        'controller' => 'Modules\\Auth\\Http\\Controllers\\LoginController@login',
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'prefix' => 'api/v1/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::skS01DdHAhPAPR3q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::UnI4VfLiIkqQbheM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Auth\\Http\\Controllers\\CustomerRegisterController@customerRegister',
        'controller' => 'Modules\\Auth\\Http\\Controllers\\CustomerRegisterController@customerRegister',
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'prefix' => 'api/v1/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::UnI4VfLiIkqQbheM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::mTjkjDV0aSynbOzu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/register-next',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Auth\\Http\\Controllers\\CustomerRegisterController@customerRegisterNext',
        'controller' => 'Modules\\Auth\\Http\\Controllers\\CustomerRegisterController@customerRegisterNext',
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'prefix' => 'api/v1/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::mTjkjDV0aSynbOzu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'vendor.register' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/vendor-register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Auth\\Http\\Controllers\\VendorRegisterController@vendorRegister',
        'controller' => 'Modules\\Auth\\Http\\Controllers\\VendorRegisterController@vendorRegister',
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'prefix' => 'api/v1/auth',
        'where' => 
        array (
        ),
        'as' => 'vendor.register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'vendor.register.next' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/vendor-register-next',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Auth\\Http\\Controllers\\VendorRegisterController@vendorRegisterNext',
        'controller' => 'Modules\\Auth\\Http\\Controllers\\VendorRegisterController@vendorRegisterNext',
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'prefix' => 'api/v1/auth',
        'where' => 
        array (
        ),
        'as' => 'vendor.register.next',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XFdXInRb20n0Uecy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/check-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Auth\\Http\\Controllers\\UserController@checkUserIsUnique',
        'controller' => 'Modules\\Auth\\Http\\Controllers\\UserController@checkUserIsUnique',
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'prefix' => 'api/v1/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::XFdXInRb20n0Uecy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::8HIPRLeoVMS5otpr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/auth/getUserProfile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\Auth\\Http\\Controllers\\AuthController@getUserProfile',
        'controller' => 'Modules\\Auth\\Http\\Controllers\\AuthController@getUserProfile',
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'prefix' => 'api/v1/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::8HIPRLeoVMS5otpr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Ee5RzgKMM8tOOKhl' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/auth/updateUserProfile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\Auth\\Http\\Controllers\\AuthController@updateUserProfile',
        'controller' => 'Modules\\Auth\\Http\\Controllers\\AuthController@updateUserProfile',
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'prefix' => 'api/v1/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::Ee5RzgKMM8tOOKhl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::JtSO5xEQdHiK07nj' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/auth/deleteUserAccount',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'Modules\\Auth\\Http\\Controllers\\AuthController@deleteUserAccount',
        'controller' => 'Modules\\Auth\\Http\\Controllers\\AuthController@deleteUserAccount',
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'prefix' => 'api/v1/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::JtSO5xEQdHiK07nj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vmiZPHTQYfUqxsSG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/website/info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Website\\Http\\Controllers\\WebsiteController@info',
        'controller' => 'Modules\\Website\\Http\\Controllers\\WebsiteController@info',
        'namespace' => 'Modules\\Website\\Http\\Controllers',
        'prefix' => 'api/v1/website',
        'where' => 
        array (
        ),
        'as' => 'generated::vmiZPHTQYfUqxsSG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
