# Q & A also HOWTO

## How to add new product on site?

- open /product/ folder
- choose category folder
- creat file and save you product information [like other pages on that directory] and save it.
  - file name must be in integer like below files
  - file name example: `3.php`
- Now goto /page/head.php file
  - scrool down and find PRODUCT QUANTITY comment
  - increse number with one for that category.
- refresh page.

## How to increse category when product added?

- open /page/head.php
- search for PRODUCT QUANTITY
- Increse with one that category number.

EXAMPLE:

- I added 1 product in laptop category.
- now for adding this file on head file.

head.php

```php
    // ----  PRODUCT QUANTITY -----
    $lap = 1;   // laptop products
    $mob = 3;   // Mobile products
    $men = 3;   // Men clothes products
    $oth = 1;   // Other products
    $wod = 1;   // Women dress
```

- after adding one in laptop:

```php
    // ----  PRODUCT QUANTITY -----
    $lap = 2;   // laptop products
    $mob = 3;   // Mobile products
    $men = 3;   // Men clothes products
    $oth = 1;   // Other products
    $wod = 1;   // Women dress
```

- that's how it works
