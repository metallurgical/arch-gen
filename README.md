# laragendb

## Introduction

1. This Laravel 5 package will get all of your database **tables and columns** information in order to generate proper database relationship and migration

2. This package **DOES NOT GET YOUR DATABASE DATA!**

3. You can see the database structure information that was transmitted at 
````
http://yourdomain.com/dbstructure
````

## How to install

1. At terminal, run this command : 

```
composer require fathur/laragendb
```

2. Open Laravel config/app.php, add this line at the providers array

```
'providers' => [
        ...
         Fathur\Laragendb\LaragenDBServiceProvider::class,
    ],
```

3. Test the packages by visiting. You should see the list of table and table column that will be used by Laragen to generate your code

````
http://yourdomain.com/dbstructure
````

4. If the package not yet auto loaded, in your terminal, run 

````
composer dump-autoload
````