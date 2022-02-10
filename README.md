# Software Engineer - Coding challenge

<p align="center">
    <img alt="PHP" src="https://img.shields.io/badge/php-%23777BB4.svg?&style=for-the-badge&logo=php&logoColor=white"/> <img alt="MySQL" src="https://img.shields.io/badge/mysql-%2300f.svg?&style=for-the-badge&logo=mysql&logoColor=white"/> <img alt="Laravel" src="https://img.shields.io/badge/laravel%20-%23FF2D20.svg?&style=for-the-badge&logo=laravel&logoColor=white"/> <img alt="Vue.js" src="https://img.shields.io/badge/vuejs%20-%2335495e.svg?&style=for-the-badge&logo=vue.js&logoColor=%234FC08D"/>
</p>



## Table of Contents

- [About](#about)
- [Used technologies](#used-technologies)
- [Usage](#usage)
  - [Web Interface](#web-interface)
    - [Show Product List](#show-product-list)
        - [Sorting and filtering product list](#Sorting-and-filtering-product-list)
    - [Create a new product](#Create-a-new-product)
  - [Command Line](#command-line)
    - [Create Product](#create-product)
- [Contact](#contact)


## About

This application is a demo app for the coding challenge provided by Hsabati software company.

## Used technologies

- Laravel 8.75 / VueJs 2.6.12
- PHP 7.4 / MySQL 8


## Usage

## Web Interface:
### Show Product List
Start your server with the command :

```
php artisan serve
```
Now you can access the server at http://localhost:8000

#### Sorting and filtering product list
@ in the table of products you can sort products by price
- Click on the price header column to sort

@ in the right side field above the table you can filter the products by category.
- click on select box above products table and select the category you want to filter by.

### Create a new product
To create a new product click on the Add Product button in the top left above the table, a modal will pop up to fill the form and submitted.

## Command Line:
### Create a new Product.
@ To create a new product run this command:

```
php artisan product:create --name=NAME --description=DESCRIPTION --price=PRICE --category_id=CATEGORY_ID --image="/FULL/PATH/TO/IMAGE.EXT"
```


## Contact
If you have any questions please don't hesitate to contact me at : [bizmaounl2007@gmail.com](mailto:bizmaounl2007@gmail.com) I'll be glad to answer your questions.
