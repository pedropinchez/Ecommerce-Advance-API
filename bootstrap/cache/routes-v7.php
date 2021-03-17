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
            '_route' => 'generated::p3HqGi12Otvsv4BK',
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
            '_route' => 'generated::2rKF0B6gkdgmmq4y',
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
            '_route' => 'generated::fK8gaxVI0AfAwdnE',
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
            '_route' => 'generated::L24EftIaonK9w4wC',
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
            '_route' => 'generated::O2FrrCz57eySMvbt',
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
            '_route' => 'generated::Yji6YGeufzuErLq3',
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
            '_route' => 'generated::zgevZRDmyDaQJMRX',
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
            '_route' => 'generated::HZhnQfwhhLmFAoYe',
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
            '_route' => 'generated::MFkwIpy8kwp0KqKq',
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
            '_route' => 'generated::Ho9rhIgQxdaX47Or',
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
      '/api/v1/roles/getModulePermissionByUserTypeID' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HZ9v0Kmh6lNMZa6S',
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
            '_route' => 'generated::zj73ErDgjazig7BZ',
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
            '_route' => 'generated::eHMLsENvPkGxIEdQ',
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
            '_route' => 'generated::VlyldsafzQwOLura',
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
            '_route' => 'generated::wcEn2ypLe1EUOvdy',
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
            '_route' => 'generated::SjyZqIDtejWo8jQa',
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
            '_route' => 'generated::DcZ5RNEUXJAaNGYv',
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
            '_route' => 'generated::pK9HWXzA9g2AUn3H',
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
            '_route' => 'generated::8pTWtUmFrvN5MwTA',
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
            '_route' => 'generated::N4JvmlOTiW7esM2k',
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
            '_route' => 'generated::oGaaB0RavZ3zpLtG',
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
            '_route' => 'generated::a37z1CXh2i7Z680h',
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
            '_route' => 'generated::MXF8GmQEugN1rymo',
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
            '_route' => 'generated::w4B8QCa0daDsA7j5',
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
            '_route' => 'generated::GXWodpybL16FDPm9',
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
            '_route' => 'generated::93PRxqxEfmNrfO3a',
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
            '_route' => 'generated::KJRFD3MGzezqAAAr',
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
            '_route' => 'generated::2iDZzabXiZRZQk6m',
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
            '_route' => 'generated::yv3Dp03ytLo2YmHK',
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
            '_route' => 'generated::lnK8lCjIorYnGz87',
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
            '_route' => 'generated::WDljwnyPKc0PZEwa',
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
            '_route' => 'generated::yvcWnrs1Ijd01IZr',
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
            '_route' => 'generated::1sEpE49oSKFevPex',
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
            '_route' => 'generated::4MTuE14jw36NxPWI',
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
            '_route' => 'generated::OJ2SNc0xA6WKQJTL',
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
            '_route' => 'generated::3XFuXB2xC0RXcpxZ',
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
            '_route' => 'generated::afzfPfRsJ7DK77tO',
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
            '_route' => 'generated::EqrGOVZQYCms8N4o',
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
            '_route' => 'generated::ghpLlArmgmtJMslt',
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
            '_route' => 'generated::ZLBVUNoHrY9KAY5M',
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
            '_route' => 'generated::LYpVYDu5hkd4wtoV',
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
    ),
    2 => 
    array (
      0 => '{^(?|/laravel\\-websockets/api/([^/]++)/statistics(*:51)|/docs(?|(?:/([^/]++))?(*:80)|/asset/([^/]++)(*:102))|/oauth/(?|tokens/([^/]++)(*:136)|clients/([^/]++)(?|(*:163))|personal\\-access\\-tokens/([^/]++)(*:205))|/api/v1/(?|vouchers/(?|([^/]++)(?|(*:248))|transactions(*:269)|user/([^/]++)(*:290))|g(?|ift(?|\\-cards/([^/]++)(?|(*:328))|cards/(?|transactions/([^/]++)(*:367)|user/([^/]++)(*:388)))|et\\-(?|item\\-detail/([^/]++)(*:426)|flash\\-sale\\-items/([^/]++)(*:461)|category\\-products/([^/]++)(*:496)))|poll(?|s/(?|([^/]++)(?|(*:529))|customer/([^/]++)(*:555))|\\-options/([^/]++)(?|(*:585)))|s(?|upplier(?|/([^/]++)(?|(*:621))|s/business/([^/]++)(*:649))|ales/(?|([^/]++)(?|(*:677))|business/([^/]++)(*:703)|order\\-lifecycle/([^/]++)(*:736)|invoice\\-lifecycle/([^/]++)(*:771))|liders/([^/]++)(?|(*:798)))|discount\\-types/(?|([^/]++)(?|(*:838))|business/([^/]++)(*:864))|i(?|nvoices/([^/]++)(?|(*:896))|tems/(?|([^/]++)(?|(*:924))|b(?|usiness/([^/]++)(*:953)|rand/([^/]++)(*:974))|category/([^/]++)(*:1000)|subcategory/([^/]++)(*:1029)|attribute/([^/]++)(*:1056)|([^/]++)/upload(*:1080)|image/([^/]++)/delete(*:1110)))|r(?|oles/(?|editUser/([^/]++)(*:1150)|userDetails/([^/]++)(*:1179)|getAllPermissionByRole/([^/]++)(*:1219)|multipleUserRoleUpdate/([^/]++)(*:1259))|eferrals/([^/]++)(?|(*:1289)))|b(?|rands/([^/]++)(?|(*:1321))|usiness/(?|([^/]++)(?|(*:1353))|bin/([^/]++)(*:1375)))|c(?|ategories/(?|([^/]++)(?|(*:1414))|business/([^/]++)(*:1441)|sub\\-categories/([^/]++)(*:1474))|u(?|stomer/([^/]++)(?|(*:1506))|rrencies/([^/]++)(?|(*:1536)))|oupons/([^/]++)(?|(*:1565)))|units/(?|([^/]++)(?|(*:1596))|business/([^/]++)(*:1623))|attribute(?|s/(?|([^/]++)(?|(*:1661))|business/([^/]++)(*:1688)|category/([^/]++)(*:1714)|([^/]++)/([^/]++)(*:1740))|/(?|values/([^/]++)(?|(*:1772))|by\\-attribute/([^/]++)/values(*:1811)))|tax/(?|([^/]++)(?|(*:1840))|business/([^/]++)(*:1867))|locations/(?|([^/]++)(?|(*:1901))|business/([^/]++)(*:1928))|wishlist/([^/]++)(?|(*:1958))))/?$}sDu',
    ),
    3 => 
    array (
      51 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::X64t6ksoFU44XUej',
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
            '_route' => 'generated::ZYByLlMMTbdX0Uep',
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
            '_route' => 'generated::Kke9S0ACLvuh95Bz',
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
            '_route' => 'generated::HpHhRImhoKgVkVtA',
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
            '_route' => 'generated::3fcLst4mZOCfm0Nn',
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
            '_route' => 'generated::bLkNmTekIAdbyAep',
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
            '_route' => 'generated::pxJo4t1hnsaayukD',
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
            '_route' => 'generated::KgcQLJtzEPYtW9uV',
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
            '_route' => 'generated::VhLALKfv31Bf9vK4',
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
      621 => 
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
      649 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lb72QfRiJuAMmydr',
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
      677 => 
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
      703 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hygIl7xCZlqZ1zhE',
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
      736 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i7zx2B8QcPEF7UXr',
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
      771 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AV6PveFeIqw82k47',
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
      798 => 
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
      838 => 
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
      864 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ujrxgmzp4KxX2DFl',
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
      896 => 
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
      924 => 
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
      953 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IEQC2DT8rXQK8YrX',
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
      974 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3i3Ahpaz93ZgXSH9',
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
      1000 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::03lMhSP8faSGEEZo',
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
      1029 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6bgmHh3JpYqmFmEa',
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
      1056 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xS3sTicVXwH18M7E',
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
      1080 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::y1OAIYx5quHj7fHJ',
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
      1110 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HMh27YD2GhvZYxOu',
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
      1150 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JcURG5gKrPwy83a7',
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
      1179 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WcjiGAIw8PIU81o4',
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
      1219 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VS7IxUGMXNBDgrQ9',
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
      1259 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vMZn4PDZEKWoDgZx',
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
      1289 => 
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
      1321 => 
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
      1353 => 
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
      1375 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pI7kC2Y72TLWm43i',
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
      1414 => 
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
      1441 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6aDYEQSCbMXno1JB',
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
      1474 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nzJcJkLVsqV9z1g3',
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
      1506 => 
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
      1536 => 
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
      1565 => 
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
      1596 => 
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
      1623 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0iYtNnK4keygPYtJ',
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
      1661 => 
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
      1688 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vdb133BJpecYJ0ye',
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
      1714 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gpUetytDgnepPryB',
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
      1740 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::21ZjtTmULf87YmUi',
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
      1772 => 
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
      1811 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bnsjCnvguKlxQAcV',
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
      1840 => 
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
      1867 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lzpGnNRZ6Dqr2ZqG',
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
      1901 => 
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
      1928 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Lwfp5C8SAnE8CVkr',
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
      1958 => 
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
    'generated::p3HqGi12Otvsv4BK' => 
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
        'as' => 'generated::p3HqGi12Otvsv4BK',
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
    'generated::X64t6ksoFU44XUej' => 
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
        'as' => 'generated::X64t6ksoFU44XUej',
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
    'generated::2rKF0B6gkdgmmq4y' => 
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
        'as' => 'generated::2rKF0B6gkdgmmq4y',
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
    'generated::fK8gaxVI0AfAwdnE' => 
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
        'as' => 'generated::fK8gaxVI0AfAwdnE',
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
    'generated::L24EftIaonK9w4wC' => 
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
        'as' => 'generated::L24EftIaonK9w4wC',
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
    'generated::O2FrrCz57eySMvbt' => 
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
        'as' => 'generated::O2FrrCz57eySMvbt',
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
    'generated::Yji6YGeufzuErLq3' => 
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
        'as' => 'generated::Yji6YGeufzuErLq3',
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
    'generated::zgevZRDmyDaQJMRX' => 
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
        'as' => 'generated::zgevZRDmyDaQJMRX',
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
    'generated::ZYByLlMMTbdX0Uep' => 
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
        'as' => 'generated::ZYByLlMMTbdX0Uep',
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
    'generated::HpHhRImhoKgVkVtA' => 
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
        'as' => 'generated::HpHhRImhoKgVkVtA',
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
    'generated::3fcLst4mZOCfm0Nn' => 
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
        'as' => 'generated::3fcLst4mZOCfm0Nn',
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
    'generated::Kke9S0ACLvuh95Bz' => 
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
        'as' => 'generated::Kke9S0ACLvuh95Bz',
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
    'generated::VhLALKfv31Bf9vK4' => 
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
        'as' => 'generated::VhLALKfv31Bf9vK4',
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
    'generated::HZhnQfwhhLmFAoYe' => 
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
        'as' => 'generated::HZhnQfwhhLmFAoYe',
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
    'generated::lb72QfRiJuAMmydr' => 
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
        'as' => 'generated::lb72QfRiJuAMmydr',
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
    'generated::MFkwIpy8kwp0KqKq' => 
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
        'as' => 'generated::MFkwIpy8kwp0KqKq',
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
    'generated::Ho9rhIgQxdaX47Or' => 
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
        'as' => 'generated::Ho9rhIgQxdaX47Or',
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
    'generated::ujrxgmzp4KxX2DFl' => 
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
        'as' => 'generated::ujrxgmzp4KxX2DFl',
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
    'generated::hygIl7xCZlqZ1zhE' => 
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
        'as' => 'generated::hygIl7xCZlqZ1zhE',
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
    'generated::i7zx2B8QcPEF7UXr' => 
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
        'as' => 'generated::i7zx2B8QcPEF7UXr',
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
    'generated::AV6PveFeIqw82k47' => 
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
        'as' => 'generated::AV6PveFeIqw82k47',
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
    'generated::HZ9v0Kmh6lNMZa6S' => 
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
        'as' => 'generated::HZ9v0Kmh6lNMZa6S',
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
    'generated::zj73ErDgjazig7BZ' => 
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
        'as' => 'generated::zj73ErDgjazig7BZ',
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
    'generated::eHMLsENvPkGxIEdQ' => 
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
        'as' => 'generated::eHMLsENvPkGxIEdQ',
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
    'generated::VlyldsafzQwOLura' => 
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
        'as' => 'generated::VlyldsafzQwOLura',
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
    'generated::wcEn2ypLe1EUOvdy' => 
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
        'as' => 'generated::wcEn2ypLe1EUOvdy',
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
    'generated::SjyZqIDtejWo8jQa' => 
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
        'as' => 'generated::SjyZqIDtejWo8jQa',
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
    'generated::DcZ5RNEUXJAaNGYv' => 
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
        'as' => 'generated::DcZ5RNEUXJAaNGYv',
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
    'generated::JcURG5gKrPwy83a7' => 
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
        'as' => 'generated::JcURG5gKrPwy83a7',
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
    'generated::WcjiGAIw8PIU81o4' => 
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
        'as' => 'generated::WcjiGAIw8PIU81o4',
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
    'generated::pK9HWXzA9g2AUn3H' => 
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
        'as' => 'generated::pK9HWXzA9g2AUn3H',
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
    'generated::8pTWtUmFrvN5MwTA' => 
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
        'as' => 'generated::8pTWtUmFrvN5MwTA',
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
    'generated::N4JvmlOTiW7esM2k' => 
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
        'as' => 'generated::N4JvmlOTiW7esM2k',
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
    'generated::oGaaB0RavZ3zpLtG' => 
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
        'as' => 'generated::oGaaB0RavZ3zpLtG',
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
    'generated::VS7IxUGMXNBDgrQ9' => 
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
        'as' => 'generated::VS7IxUGMXNBDgrQ9',
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
    'generated::a37z1CXh2i7Z680h' => 
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
        'as' => 'generated::a37z1CXh2i7Z680h',
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
    'generated::MXF8GmQEugN1rymo' => 
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
        'as' => 'generated::MXF8GmQEugN1rymo',
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
    'generated::vMZn4PDZEKWoDgZx' => 
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
        'as' => 'generated::vMZn4PDZEKWoDgZx',
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
    'generated::w4B8QCa0daDsA7j5' => 
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
        'as' => 'generated::w4B8QCa0daDsA7j5',
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
    'generated::GXWodpybL16FDPm9' => 
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
        'as' => 'generated::GXWodpybL16FDPm9',
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
    'generated::93PRxqxEfmNrfO3a' => 
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
        'as' => 'generated::93PRxqxEfmNrfO3a',
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
    'generated::6aDYEQSCbMXno1JB' => 
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
        'as' => 'generated::6aDYEQSCbMXno1JB',
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
    'generated::nzJcJkLVsqV9z1g3' => 
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
        'as' => 'generated::nzJcJkLVsqV9z1g3',
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
    'generated::0iYtNnK4keygPYtJ' => 
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
        'as' => 'generated::0iYtNnK4keygPYtJ',
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
    'generated::vdb133BJpecYJ0ye' => 
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
        'as' => 'generated::vdb133BJpecYJ0ye',
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
    'generated::gpUetytDgnepPryB' => 
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
        'as' => 'generated::gpUetytDgnepPryB',
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
    'generated::21ZjtTmULf87YmUi' => 
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
        'as' => 'generated::21ZjtTmULf87YmUi',
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
    'generated::bnsjCnvguKlxQAcV' => 
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
        'as' => 'generated::bnsjCnvguKlxQAcV',
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
    'generated::IEQC2DT8rXQK8YrX' => 
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
        'as' => 'generated::IEQC2DT8rXQK8YrX',
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
    'generated::03lMhSP8faSGEEZo' => 
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
        'as' => 'generated::03lMhSP8faSGEEZo',
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
    'generated::6bgmHh3JpYqmFmEa' => 
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
        'as' => 'generated::6bgmHh3JpYqmFmEa',
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
    'generated::3i3Ahpaz93ZgXSH9' => 
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
        'as' => 'generated::3i3Ahpaz93ZgXSH9',
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
    'generated::xS3sTicVXwH18M7E' => 
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
        'as' => 'generated::xS3sTicVXwH18M7E',
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
    'generated::y1OAIYx5quHj7fHJ' => 
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
        'as' => 'generated::y1OAIYx5quHj7fHJ',
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
    'generated::HMh27YD2GhvZYxOu' => 
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
        'as' => 'generated::HMh27YD2GhvZYxOu',
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
    'generated::KJRFD3MGzezqAAAr' => 
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
        'as' => 'generated::KJRFD3MGzezqAAAr',
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
    'generated::2iDZzabXiZRZQk6m' => 
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
        'as' => 'generated::2iDZzabXiZRZQk6m',
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
    'generated::bLkNmTekIAdbyAep' => 
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
        'as' => 'generated::bLkNmTekIAdbyAep',
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
    'generated::pxJo4t1hnsaayukD' => 
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
        'as' => 'generated::pxJo4t1hnsaayukD',
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
    'generated::KgcQLJtzEPYtW9uV' => 
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
        'as' => 'generated::KgcQLJtzEPYtW9uV',
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
    'generated::yv3Dp03ytLo2YmHK' => 
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
        'as' => 'generated::yv3Dp03ytLo2YmHK',
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
    'generated::lnK8lCjIorYnGz87' => 
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
        'as' => 'generated::lnK8lCjIorYnGz87',
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
    'generated::WDljwnyPKc0PZEwa' => 
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
        'as' => 'generated::WDljwnyPKc0PZEwa',
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
    'generated::yvcWnrs1Ijd01IZr' => 
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
        'as' => 'generated::yvcWnrs1Ijd01IZr',
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
    'generated::1sEpE49oSKFevPex' => 
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
        'as' => 'generated::1sEpE49oSKFevPex',
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
    'generated::pI7kC2Y72TLWm43i' => 
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
        'as' => 'generated::pI7kC2Y72TLWm43i',
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
    'generated::4MTuE14jw36NxPWI' => 
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
        'as' => 'generated::4MTuE14jw36NxPWI',
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
    'generated::lzpGnNRZ6Dqr2ZqG' => 
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
        'as' => 'generated::lzpGnNRZ6Dqr2ZqG',
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
    'generated::Lwfp5C8SAnE8CVkr' => 
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
        'as' => 'generated::Lwfp5C8SAnE8CVkr',
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
        'uses' => 'Modules\\Business\\Http\\Controllers\\CurrenciesController@index',
        'controller' => 'Modules\\Business\\Http\\Controllers\\CurrenciesController@index',
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
        'uses' => 'Modules\\Business\\Http\\Controllers\\CurrenciesController@store',
        'controller' => 'Modules\\Business\\Http\\Controllers\\CurrenciesController@store',
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
        'uses' => 'Modules\\Business\\Http\\Controllers\\CurrenciesController@show',
        'controller' => 'Modules\\Business\\Http\\Controllers\\CurrenciesController@show',
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
        'uses' => 'Modules\\Business\\Http\\Controllers\\CurrenciesController@update',
        'controller' => 'Modules\\Business\\Http\\Controllers\\CurrenciesController@update',
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
        'uses' => 'Modules\\Business\\Http\\Controllers\\CurrenciesController@destroy',
        'controller' => 'Modules\\Business\\Http\\Controllers\\CurrenciesController@destroy',
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
    'generated::OJ2SNc0xA6WKQJTL' => 
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
        'as' => 'generated::OJ2SNc0xA6WKQJTL',
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
    'generated::3XFuXB2xC0RXcpxZ' => 
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
        'as' => 'generated::3XFuXB2xC0RXcpxZ',
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
    'generated::afzfPfRsJ7DK77tO' => 
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
        'as' => 'generated::afzfPfRsJ7DK77tO',
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
    'generated::EqrGOVZQYCms8N4o' => 
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
        'as' => 'generated::EqrGOVZQYCms8N4o',
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
    'generated::ghpLlArmgmtJMslt' => 
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
        'as' => 'generated::ghpLlArmgmtJMslt',
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
    'generated::ZLBVUNoHrY9KAY5M' => 
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
        'as' => 'generated::ZLBVUNoHrY9KAY5M',
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
    'generated::LYpVYDu5hkd4wtoV' => 
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
        'as' => 'generated::LYpVYDu5hkd4wtoV',
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
