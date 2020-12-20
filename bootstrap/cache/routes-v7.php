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
            '_route' => 'generated::3NgHy03YNnVnU6P5',
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
            '_route' => 'generated::4Ls2PenECcCwiHBY',
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
            '_route' => 'generated::FWFvWe0mWkYXZAci',
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
            '_route' => 'generated::S4Wv2TU4f22WSJ06',
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
            '_route' => 'generated::uqpAxEEsgidhP1Lx',
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
            '_route' => 'generated::u0Wr2BiJOAiksoJM',
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
      '/api/v1/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ytwNFRV789mMG1Zr',
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
            '_route' => 'generated::W9tJcmJ42ImXqyrx',
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
            '_route' => 'generated::7nr4VZsdXVvYY0WB',
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
            '_route' => 'generated::d5OIBRnshzDMlAuN',
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
            '_route' => 'generated::vRZWcCYRvcHLPvK8',
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
      '/api/v1/shops' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K72L2hOhWdzl39Tu',
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
      '/api/v1/get-items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2XIIKEVxwxFjCfAl',
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
      '/api/v1/giftcards' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'giftcards.index',
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
            '_route' => 'giftcards.store',
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
            '_route' => 'generated::KGXy7ykSRnddwm1o',
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
      '/api/v1/referral' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JVhNUJ0awsZtnU5B',
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
    ),
    2 => 
    array (
      0 => '{^(?|/laravel\\-websockets/api/([^/]++)/statistics(*:51)|/docs(?|(?:/([^/]++))?(*:80)|/asset/([^/]++)(*:102))|/oauth/(?|tokens/([^/]++)(*:136)|clients/([^/]++)(?|(*:163))|personal\\-access\\-tokens/([^/]++)(*:205))|/api/v1/(?|b(?|usiness/(?|([^/]++)(?|(*:251))|bin/([^/]++)(*:272))|rands/(?|([^/]++)(?|(*:301))|business/([^/]++)(*:327)))|tax/(?|([^/]++)(?|(*:355))|business/([^/]++)(*:381))|locations/(?|([^/]++)(?|(*:414))|business/([^/]++)(*:440))|c(?|u(?|rrencies/([^/]++)(?|(*:477))|stomer/([^/]++)(?|(*:504)))|ategories/(?|([^/]++)(?|(*:538))|business/([^/]++)(*:564)))|units/(?|([^/]++)(?|(*:594))|business/([^/]++)(*:620))|attribute(?|s/(?|([^/]++)(?|(*:657))|business/([^/]++)(*:683)|category/([^/]++)(*:708)|([^/]++)/([^/]++)(*:733))|/(?|values/([^/]++)(?|(*:764))|([^/]++)/values(*:788)))|items/(?|([^/]++)(?|(*:818))|b(?|usiness/([^/]++)(*:847)|rand/([^/]++)(*:868))|category/([^/]++)(*:894)|subcategory/([^/]++)(*:922)|attribute/([^/]++)(*:948)|([^/]++)/upload(*:971)|image/([^/]++)/delete(*:1000))|g(?|et\\-(?|item\\-detail/([^/]++)(*:1042)|flash\\-sale\\-items/([^/]++)(*:1078)|category\\-products/([^/]++)(*:1114))|ift(?|cards/(?|([^/]++)(?|(*:1150))|transactions(?|(*:1175)|/([^/]++)(*:1193))|user/([^/]++)(*:1216))|\\-cards/([^/]++)(?|(*:1245))))|vouchers/(?|([^/]++)(?|(*:1280))|transactions(*:1302)|user/([^/]++)(*:1324))|poll(?|s/(?|([^/]++)(?|(*:1357))|customer/([^/]++)(*:1384))|\\-options/([^/]++)(?|(*:1415)))|discount\\-types/(?|([^/]++)(?|(*:1456))|business/([^/]++)(*:1483))|s(?|ales/(?|([^/]++)(?|(*:1516))|business/([^/]++)(*:1543))|upplier(?|/([^/]++)(?|(*:1575))|s/business/([^/]++)(*:1604)))))/?$}sDu',
    ),
    3 => 
    array (
      51 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t1AOehj6dxHRYD90',
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
      251 => 
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
      272 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TETsj5iEZbdLDANL',
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
      301 => 
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
      327 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RL8VoPz7HYZBQbkK',
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
      355 => 
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
      381 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PB2dC1X2RkDjQWmY',
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
      414 => 
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
      440 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R06vGlDSdnNyVcBu',
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
      477 => 
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
      504 => 
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
      538 => 
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
      564 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lex2xUKh5LHu3kyy',
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
      594 => 
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
      620 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hYJYzYp88JE8UsCV',
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
      657 => 
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
      683 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u8EX19LE2xHWalCc',
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
      708 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pjE0lweo0EbdYD2h',
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
      733 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jfUmN0EhbEk5aCnG',
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
      764 => 
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
      788 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6JNBAJfoAqA7YeyJ',
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
      818 => 
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
      847 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j7E2UXvhzHViXjQK',
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
      868 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JcfOTL8MjT1Nq9Xp',
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
      894 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JCg9RoXB4rpfLvTA',
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
      922 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::z6wOvkapRO2a8MRO',
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
      948 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ibtaJibjjyCcBcGC',
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
      971 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e4CJJfGAcplmTgou',
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
      1000 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MrNb4usQWyAPdQV6',
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
      1042 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aOEmfwOTv8QpiZAk',
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
      1078 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Tl8i1YGclyoPMo8z',
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
      1114 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NKeSntM1fYiebHsN',
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
      1150 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'giftcards.show',
          ),
          1 => 
          array (
            0 => 'giftcard',
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
            '_route' => 'giftcards.update',
          ),
          1 => 
          array (
            0 => 'giftcard',
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
            '_route' => 'giftcards.destroy',
          ),
          1 => 
          array (
            0 => 'giftcard',
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
      1175 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0C1dkXL3F5yWCVxs',
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
      1193 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FxrrNIDnbIZBoTc5',
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
      1216 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oIwQ6BUbGSWsoqgQ',
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
      1245 => 
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
      1280 => 
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
      1302 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hUDT28iFAV7bKpWd',
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
      1324 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hZgDqVBe2iisepsM',
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
      1357 => 
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
      1384 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cC33GaxfLzEaP1LT',
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
      1415 => 
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
      1456 => 
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
      1483 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XCS614BJrQJxGMYK',
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
      1516 => 
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
      1543 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0xH5oz7UqaPSFVAl',
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
      1575 => 
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
      1604 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CpTk0lajEj4XRPvQ',
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
        1 => 
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
    'generated::3NgHy03YNnVnU6P5' => 
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
        'as' => 'generated::3NgHy03YNnVnU6P5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::t1AOehj6dxHRYD90' => 
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
        'as' => 'generated::t1AOehj6dxHRYD90',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4Ls2PenECcCwiHBY' => 
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
        'as' => 'generated::4Ls2PenECcCwiHBY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FWFvWe0mWkYXZAci' => 
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
        'as' => 'generated::FWFvWe0mWkYXZAci',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::S4Wv2TU4f22WSJ06' => 
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
        'as' => 'generated::S4Wv2TU4f22WSJ06',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
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
    'generated::uqpAxEEsgidhP1Lx' => 
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
        'as' => 'generated::uqpAxEEsgidhP1Lx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::u0Wr2BiJOAiksoJM' => 
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
        'as' => 'generated::u0Wr2BiJOAiksoJM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ytwNFRV789mMG1Zr' => 
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
        'as' => 'generated::ytwNFRV789mMG1Zr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::W9tJcmJ42ImXqyrx' => 
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
        'uses' => 'Modules\\Auth\\Http\\Controllers\\RegisterController@register',
        'controller' => 'Modules\\Auth\\Http\\Controllers\\RegisterController@register',
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'prefix' => 'api/v1/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::W9tJcmJ42ImXqyrx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::7nr4VZsdXVvYY0WB' => 
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
        'as' => 'generated::7nr4VZsdXVvYY0WB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::d5OIBRnshzDMlAuN' => 
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
        'as' => 'generated::d5OIBRnshzDMlAuN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vRZWcCYRvcHLPvK8' => 
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
        'as' => 'generated::vRZWcCYRvcHLPvK8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
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
    'generated::TETsj5iEZbdLDANL' => 
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
        'as' => 'generated::TETsj5iEZbdLDANL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::K72L2hOhWdzl39Tu' => 
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
        'as' => 'generated::K72L2hOhWdzl39Tu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
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
    'generated::PB2dC1X2RkDjQWmY' => 
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
        'as' => 'generated::PB2dC1X2RkDjQWmY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
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
    'generated::R06vGlDSdnNyVcBu' => 
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
        'as' => 'generated::R06vGlDSdnNyVcBu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
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
    'generated::RL8VoPz7HYZBQbkK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/brands/business/{business_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Item\\Http\\Controllers\\BusinessController@getBrandByBusiness',
        'controller' => 'Modules\\Item\\Http\\Controllers\\BusinessController@getBrandByBusiness',
        'namespace' => 'Modules\\Item\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::RL8VoPz7HYZBQbkK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
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
    'generated::lex2xUKh5LHu3kyy' => 
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
        'as' => 'generated::lex2xUKh5LHu3kyy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
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
    'generated::hYJYzYp88JE8UsCV' => 
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
        'as' => 'generated::hYJYzYp88JE8UsCV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
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
    'generated::u8EX19LE2xHWalCc' => 
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
        'as' => 'generated::u8EX19LE2xHWalCc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pjE0lweo0EbdYD2h' => 
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
        'as' => 'generated::pjE0lweo0EbdYD2h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jfUmN0EhbEk5aCnG' => 
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
        'as' => 'generated::jfUmN0EhbEk5aCnG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
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
    'generated::6JNBAJfoAqA7YeyJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/attribute/{attribute_id}/values',
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
        'as' => 'generated::6JNBAJfoAqA7YeyJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
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
    'generated::j7E2UXvhzHViXjQK' => 
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
        'as' => 'generated::j7E2UXvhzHViXjQK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::JCg9RoXB4rpfLvTA' => 
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
        'as' => 'generated::JCg9RoXB4rpfLvTA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::z6wOvkapRO2a8MRO' => 
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
        'as' => 'generated::z6wOvkapRO2a8MRO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::JcfOTL8MjT1Nq9Xp' => 
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
        'as' => 'generated::JcfOTL8MjT1Nq9Xp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ibtaJibjjyCcBcGC' => 
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
        'as' => 'generated::ibtaJibjjyCcBcGC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::e4CJJfGAcplmTgou' => 
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
        'as' => 'generated::e4CJJfGAcplmTgou',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MrNb4usQWyAPdQV6' => 
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
        'as' => 'generated::MrNb4usQWyAPdQV6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2XIIKEVxwxFjCfAl' => 
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
        'as' => 'generated::2XIIKEVxwxFjCfAl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::aOEmfwOTv8QpiZAk' => 
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
        'as' => 'generated::aOEmfwOTv8QpiZAk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Tl8i1YGclyoPMo8z' => 
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
        'as' => 'generated::Tl8i1YGclyoPMo8z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NKeSntM1fYiebHsN' => 
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
        'as' => 'generated::NKeSntM1fYiebHsN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'giftcards.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/giftcards',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'giftcards.index',
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
    'giftcards.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/giftcards',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'giftcards.store',
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
    'giftcards.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/giftcards/{giftcard}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'giftcards.show',
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
    'giftcards.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/giftcards/{giftcard}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'giftcards.update',
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
    'giftcards.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/giftcards/{giftcard}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'giftcards.destroy',
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
    'generated::0C1dkXL3F5yWCVxs' => 
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
        'as' => 'generated::0C1dkXL3F5yWCVxs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::hUDT28iFAV7bKpWd' => 
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
        'as' => 'generated::hUDT28iFAV7bKpWd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FxrrNIDnbIZBoTc5' => 
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
        'as' => 'generated::FxrrNIDnbIZBoTc5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::oIwQ6BUbGSWsoqgQ' => 
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
        'as' => 'generated::oIwQ6BUbGSWsoqgQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::hZgDqVBe2iisepsM' => 
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
        'as' => 'generated::hZgDqVBe2iisepsM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
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
    'generated::cC33GaxfLzEaP1LT' => 
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
        'as' => 'generated::cC33GaxfLzEaP1LT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
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
    'generated::KGXy7ykSRnddwm1o' => 
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
        'as' => 'generated::KGXy7ykSRnddwm1o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
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
    'generated::JVhNUJ0awsZtnU5B' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/referral',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Modules\\Referral\\Http\\Controllers\\ReferralController@index',
        'controller' => 'Modules\\Referral\\Http\\Controllers\\ReferralController@index',
        'namespace' => 'Modules\\Referral\\Http\\Controllers',
        'prefix' => 'api/v1/referral',
        'where' => 
        array (
        ),
        'as' => 'generated::JVhNUJ0awsZtnU5B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
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
    'generated::XCS614BJrQJxGMYK' => 
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
        'as' => 'generated::XCS614BJrQJxGMYK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
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
    'generated::0xH5oz7UqaPSFVAl' => 
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
        'as' => 'generated::0xH5oz7UqaPSFVAl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
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
    'generated::CpTk0lajEj4XRPvQ' => 
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
        'as' => 'generated::CpTk0lajEj4XRPvQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
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
