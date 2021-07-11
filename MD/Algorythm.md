# Algorythm of v1.2.2

* algorytm helps to know how this code works.

## Style

* `head.php` is including navigaton style.
* `Product/PD.php` in including procuct view style.

## File map

```txt
assest/         # for assest like css and images
page/           # including all pages which are proper links
page/head.php   # head for page folder links
head.php        # head for root index.php
page/footer.php # footer for all pages
Product/        # product data
Product/PD.php  # product pages style
sitemap.xml     # website pages information for search engines
```

## Adding new product on Product folder

* Adding product details are quite simple and one time job.
* go to `Product/year/type` creat `procuct_name.php` file.

write:

```php
<?php
$PD_text = "Product Name";
$PD_detail = "Product Details";
$PD_price = 'Price';
$PD_img = 'product_image.jpg'; 
$PD_link = 'redirection_link'; 

include '../../Product/PD.php';
```

* just save file.
* Now, You need to show that on TopDeals and product typ page.
* copy your created file location ex: `Product/2020/Mobile/abc_model.php`
* edit `page/TopDeals/index.php` .
* Paste your directry like

    ../../Product/2020/Mobile/abc_model.php
* save file also same do with type of product, exp: this product is mobile so I edit page/Mobile/index.php
