# iApps API Development

---

#### Run Project First:

---

#### 1) Clone Project

`git clone https://github.com/ManiruzzamanAkash/Ecommerce-Advance-API.git`

#### 2) Update Composer

`composer Update` [Install Composer first if it is not installed, then run this command]

#### 3) Connect Database [if not]

Open/create `.env` file by copying of `.env.example` file and fill the above values

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=DB_NAME
DB_USERNAME=DB_USERNAME
DB_PASSWORD=XXXXXX
```

#### 4) Migrate

Run migration command to migarte into database

```
php artisan migrate
```

#### 5) Clear the cache and update everything

Run migration command to migarte into database

```
composer dump-autoload
```

```
php artisan optimize
```

#### 6) Install Passport Cliend ID's

```
php artisan passport:install
```

#### 7) Run Seeder

```
php artisan db:seed
```

#### 8) Run Project

```
php artisan serve
```

Open browser the URL: http://127.0.0.1:8000/api/documentation

[A swagger will be open up, and check the API's :sunglasses: :sunglasses: :sunglasses: ]

---

#### Develop API From Zero:

---

#### What Technologies

> Please Install this Same Setup in your Local Machine to make a Quick Start...

1. PHP - `7.4.2` [Install Xampp - `7.4.7`]
1. Laravel Framework - `7.25`
1. VS Code Latest Version - Packages(To Code Faster)
    1. PHP Formatter
    1. Laravel intellisense
    1. Laravel Blade Snippets
    1. Laravel Extra Intellisense
    1. Laravel Blade Spacer
    1. Laravel Assist
    1. Prettier+
    1. Bracket Pair Colorizer
1. Composer Packages

#### Used 3rd Party Verfied Packages While Developement

1. Laravel Modules to Make Domain Driven Design: https://nwidart.com/laravel-modules/v6/introduction
1. Laravel Passport Authentication to make secured Oath2 Token Based Server Implementation - https://laravel.com/docs/7.x/passport#introduction
1. To Generate API Documentation Using Swagger - https://github.com/DarkaOnLine/L5-Swagger

#### Code of Conduct

1. Never Trust User. Never trust any of the values/requests from the user.
1. Always Maintain The Architecture, Never Violates. If there is proper suggestion, it's Welcomed.

# Feature Analysis

---

1. **Basic Ecommerce Website Features**
1. **Multivendor Ecommerce Design**
1. Product List, with Details View
1. Product Filtering throw Category, Brand, Price, Attributes
1. User Authentication -
    1. Email / Mobile Number Verified Registration
1. Cashback System
1. Voucher System
1. First purchase discount
1. Referral program
1. Make a wallet inside in website
1. Add Payment Gateway Visa, Master Card etc
1. After delivery Review product and Photo Ppload system for user

# API Development

---

#### User Account

-   [ ] **User Account** -
    -   [x] Register User Account
    -   [ ] Register User Account Email & Phone
    -   [x] Login
    -   [ ] Forget Password
    -   [x] Profile View
    -   [x] Authenticate API Route
    -   [x] Profile Update
    -   [ ] Social Authentication

#### Business

-   [] **Currencies** @Mahmud Hasan Shakkhor

    -   [x] Create Tax Rate
    -   [x] Edit Tax Rate
    -   [x] Details Tax Rate
    -   [x] Delete Tax Rate
    -   [ ] Data Import / Seeder For Currencies Table

-   [ ] **Tax Rate** @Mahmud Hasan Shakkhor

    -   [x] Create Tax Rate
    -   [x] Edit Tax Rate
    -   [x] Details Tax Rate
    -   [x] Delete Tax Rate
    -   [ ] Seeder For Business

-   [x] **Business** - @Maniruzzaman Akash

    -   [x] Create Business Account
    -   [x] Edit Business Account
    -   [x] Details Business Account
    -   [x] Delete Business Account
    -   [ ] Seeder For Business

-   [x] **Business Location (Multiple Store of a Business)** - BusinessLocation Model --> Business Module @Mahmud Hasan Shakkhor
    -   [x] Create Business Location
    -   [x] Edit Business Location
    -   [x] Details Business Location
    -   [x] Delete Business Location
    -   [ ] Seeder For Business

#### Role Permission & User Management System

-   [ ] **Role**

    -   [ ] Create Role with Permission
    -   [ ] Edit Role with Permission
    -   [ ] Details Role with Permission
    -   [ ] Delete Role
    -   [ ] Seeder Role

-   [ ] **User Management**
    -   [ ] Create User
    -   [ ] Edit User
    -   [ ] Details User
    -   [ ] Delete User
    -   [ ] Seeder User

#### Customer

-   [x] **Customer**

    -   [x] Create Customer
    -   [x] Edit Customer
    -   [x] Details Customer
    -   [x] Delete Customer
    -   [x] Seeder For Customers

#### Supplier

-   [ ] **Supplier** @Mahmud Hasan Shakkhor
    -   [x] Create Supplier
    -   [x] Edit Supplier
    -   [x] Details Supplier
    -   [x] Delete Supplier
    -   [x] Seeder For Suppliers

#### Item

-   [ ] **Brand** @Mahmud Hasan Shakkhor

    -   [x] Create Brand
    -   [x] Edit Brand
    -   [x] Details Brand
    -   [x] Delete Brand
    -   [ ] Seeder For Brands

-   [ ] **Category** @Mahmud Hasan Shakkhor

    -   [x] Create Category
    -   [x] Edit Category
    -   [x] Details Category
    -   [x] Delete Category
    -   [ ] Seeder For Categories

-   [ ] **Unit** @Mahmud Hasan Shakkhor

    -   [x] Create Unit
    -   [x] Edit Unit
    -   [x] Details Unit
    -   [x] Delete Unit
    -   [ ] Seeder For Units

-   [ ] **Item** @Mahmud Hasan Shakkhor

    -   [x] Create Item
    -   [x] Edit Item
    -   [x] Details Item
    -   [x] Delete Item
    -   [ ] Seeder For Items

-   [ ] **Item Attribute** @Mahmud Hasan Shakkhor
    -   [x] Create Item Attribute with Value
    -   [x] Edit Item Attribute with Value
    -   [x] Details Item Attribute with Value
    -   [x] Delete Item Attribute with Value
    -   [ ] Seeder For Items Attribute with Value

#### Sales

-   [x] **Discount Type** @Mahmud Hasan Shakkhor

    -   [x] Create Discount Type
    -   [x] Edit Discount Type
    -   [x] Details Discount Type
    -   [x] Delete Discount Type
    -   [ ] Seeder For Discount Type

*   [ ] **Sales** @Mahmud Hasan Shakkhor

    -   [x] Create New Sales Order --> transactions and transaction_sell_lines table -> Sales Module
    -   [ ] Edit Sales Order
    -   [x] Details Sales Order
    -   [x] Delete Sales Order
    -   [ ] Seeder For Sales Orders

#### Business Extra

-   [ ] **Slider**

    -   [ ] Create Slider
    -   [ ] Edit Slider
    -   [ ] Details Slider
    -   [ ] Delete Slider
    -   [ ] Seeder Slider

-   [ ] **Page**

    -   [ ] Create Page
    -   [ ] Edit Page
    -   [ ] Details Page
    -   [ ] Delete Page
    -   [ ] Seeder Page

## **New in 7 September 2020**

-   [ ] **Gift Card** (in Promotional module) @Mahmud Hasan Shakkhor

    -   [x] Gift Card CRUD Operation
    -   [x] Gift Card Purchase By Customer
    -   [x] Gift Card Transactions

-   [ ] **Vourchar** (in Promotional module) @Mahmud Hasan Shakkhor

    -   [x] Vourchar CRUD Operation
    -   [x] Vourchar Purchase By Customer
    -   [x] Vourchar Transactions

-   [x] **Poll / Voting System** (in Promotional module) @Mahmud Hasan Shakkhor

    -   [x] Poll System CRUD, multiple poll option, poll can be on items or normal values
    -   [x] Poll Response by customers -
        -   [x] Store Response,
        -   [x] View Response List,
        -   [x] View Response Details By Poll

-   [ ] **Transaction API** (for all types of transaction, `Copy the Sales Transaction Api`)
    -   [ ] Create Transaction [with title and type and all other data for any type of transaction]

# Notes For API Developer (New Fields May Needs to add in some tables)

-   [ ] Product wise Delivery system disable/enable ->> Like, In pen, there will be no cash in delivery, business has also that column in business table for globally by default
-   [ ] For Any User's Purchase, check he/she's referrel user, then add `1%` of any purchase to referres account
-   [ ] in transactions table
    1. Added one column - title
    2. more enum values has been added for `type` column -
    ```
    'purchase', 'sell', 'opening_stock', 'purchase_return', 'sell_return',
    'cashback', 'cashback_transfer_wallet', 'voucher', 'voucher_transfer_wallet',
    'gift_card', 'gift_card_transfer_wallet', 'referrel', 'referrel_transfer_wallet'
    ```
-   [ ]
