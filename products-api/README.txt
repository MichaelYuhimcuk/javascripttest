=== Інструкція ===

1. Створи базу даних через phpMyAdmin:

CREATE DATABASE shop_api;
USE shop_api;
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    quantity INT NOT NULL
);

2. Розмісти файли з архіву у теці, що доступна через localhost (наприклад, /htdocs/products-api/ у XAMPP).

3. Для тестування:

GET всі товари:
  curl http://localhost/products-api/api.php

POST (додати товар):
  curl -X POST -H "Content-Type: application/json" \
       -d '{"name":"Banana","price":8.5,"quantity":10}' \
       http://localhost/products-api/api.php

PUT (оновити товар з ID=1):
  curl -X PUT -H "Content-Type: application/json" \
       -d '{"price":9.99,"quantity":20}' \
       http://localhost/products-api/api.php/1

DELETE (видалити товар з ID=1):
  curl -X DELETE http://localhost/products-api/api.php/1

