## Task 1

#### note

In order to use the ```php artisan test Tests/Feature/TaskOne``` command without applying a filter, you will need to
make some changes to the test files.

### Run the next commands to test the completion of the first task:

```
    php artisan test Tests/Feature/TaskOne --filter test_adding_product_inventory
```

```
    php artisan test Tests/Feature/TaskOne --filter test_inventory_1
```

```
    php artisan test Tests/Feature/TaskOne --filter test_inventory_2
```

```
    php artisan test Tests/Feature/TaskOne --filter test_get_quantity_by_unit
```

## Task 2

### Run the next command to test the completion of the second task:

```
    php artisan test Tests/Feature/TaskTwo
```
