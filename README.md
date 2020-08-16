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

-   [ ] **Currencies**

    -   [ ] Data Import / Seeder For Currencies Table

-   [ ] **Tax Rate**

    -   [ ] Create Tax Rate
    -   [ ] Edit Tax Rate
    -   [ ] Details Tax Rate
    -   [ ] Delete Tax Rate
    -   [ ] Seeder For Business

-   [x] **Business** - @Maniruzzaman Akash

    -   [x] Create Business Account
    -   [x] Edit Business Account
    -   [x] Details Business Account
    -   [x] Delete Business Account
    -   [ ] Seeder For Business

-   [ ] **Business Location (Multiple Store of a Business)** - BusinessLocation Model --> Business Module
    -   [ ] Create Business Location
    -   [ ] Edit Business Location
    -   [ ] Details Business Location
    -   [ ] Delete Business Location
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
    -   [ ] Delete Role
    -   [ ] Seeder Role

#### Customer

-   [x] **Customer**

    -   [x] Create Customer
    -   [x] Edit Customer
    -   [x] Details Customer
    -   [x] Delete Customer
    -   [x] Seeder For Customers

#### Supplier

-   [ ] **Supplier**
    -   [ ] Create Supplier
    -   [ ] Edit Supplier
    -   [ ] Details Supplier
    -   [ ] Delete Supplier
    -   [ ] Seeder For Suppliers

#### Item

-   [ ] **Brand**

    -   [ ] Create Brand
    -   [ ] Edit Brand
    -   [ ] Details Brand
    -   [ ] Delete Brand
    -   [ ] Seeder For Brands

-   [ ] **Category**

    -   [ ] Create Category
    -   [ ] Edit Category
    -   [ ] Details Category
    -   [ ] Delete Category
    -   [ ] Seeder For Categories

-   [ ] **Unit**

    -   [ ] Create Unit
    -   [ ] Edit Unit
    -   [ ] Details Unit
    -   [ ] Delete Unit
    -   [ ] Seeder For Units

-   [ ] **Item**

    -   [ ] Create Item
    -   [ ] Edit Item
    -   [ ] Details Item
    -   [ ] Delete Item
    -   [ ] Seeder For Items

-   [ ] **Item Attribute**
    -   [ ] Create Item Attribute with Value
    -   [ ] Edit Item Attribute with Value
    -   [ ] Details Item Attribute with Value
    -   [ ] Delete Item Attribute with Value
    -   [ ] Seeder For Items Attribute with Value

#### Sales

-   [ ] **Discount Type**

    -   [ ] Create Discount Type
    -   [ ] Edit Discount Type
    -   [ ] Details Discount Type
    -   [ ] Delete Discount Type
    -   [ ] Seeder For Discount Type

*   [ ] **Sales**

    -   [ ] Create New Sales Order --> transactions and transaction_sell_lines table -> Sales Module
    -   [ ] Edit Sales Order
    -   [ ] Details Sales Order
    -   [ ] Delete Sales Order
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
