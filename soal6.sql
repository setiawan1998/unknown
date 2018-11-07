CREATE TABLE product_categories ( id INT(3) PRIMARY KEY, name VARCHAR(255), created_date TIMESTAMP );
CREATE TABLE products ( id INT(3), name VARCHAR(255), category_id INT(3) PRIMARY KEY, created_date TIMESTAMP );
ALTER TABLE products ADD FOREIGN KEY (category_id) REFERENCES product_categories(id);

SELECT products.id, products.name AS name, product_categories.name AS kategori FROM products LEFT JOIN product_categories ON products.category_id=product_categories.id