--Customers: Contains information about the customers, such as customer ID, name, email, and location.
CREATE TABLE `Customers` (
    `customer_id` BIGINT(20) NOT NULL AUTO_INCREMENT  PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `location` VARCHAR(255) NOT NULL
)
--Orders: Contains information about the orders placed by customers, such as order ID, customer ID, order date, and total amount.
CREATE TABLE `Orders` (
    `order_id` BIGINT(20) NOT NULL AUTO_INCREMENT  PRIMARY KEY,
    `customer_id` INT NOT NULL,
    `order_date` TIMESTAMP NOT NULL,
    `total_amount` DECIMAL(10, 2) NOT NULL
)
--Products: Contains information about the products available for purchase, such as product ID, name, description, and price.
CREATE TABLE `Products` (
    `product_id` BIGINT(20) NOT NULL AUTO_INCREMENT  PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `description` TEXT NOT NULL,
    `price` DECIMAL(10, 2) NOT NULL
)
--Categories: Contains information about the different categories of products, such as category ID and name.
CREATE table `Categories`(
    `category_id` BIGINT(20) NOT NULL AUTO_INCREMENT  PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    
)
--Order_Items: Contains information about the individual items included in each order, such as order item ID, order ID, product ID, quantity, and unit price.
CREATE TABLE `Order_Items` (
    `order_item_id` BIGINT(20) NOT NULL AUTO_INCREMENT  PRIMARY KEY,
    `order_id` INT NOT NULL,
    `product_id` INT NOT NULL,
    `quantity` INT NOT NULL,
    `unit_price` DECIMAL(10, 2) NOT NULL
)