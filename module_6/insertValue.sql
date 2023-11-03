INSERT INTO `customers` (`customer_id`, `name`, `email`, `location`) VALUES
(1, 'John Doe', 'w7rP0@example.com', 'New York'),
(2, 'Jane Smith', 'zT3gQ@example.com', 'Los Angeles'),
(3, 'Bob Johnson', 'YnQJU@example.com', 'Chicago'),
(4, 'Alice Lee', 'VJqzT@example.com', 'Houston'),
(5, 'Mike Johnson', 'YnQJU@example.com', 'Chicago')

--insert in to categories
INSERT INTO `categories` (`category_id`, `name`) VALUES
(1, 'Electronics'),
(2, 'Clothing'),
(3, 'Books'),
(4, 'Sports'),
(5, 'Home Decor')

-- INSERT INTO products
INSERT INTO `products` (`product_id`, `name`, `description`, `price`) VALUES
(1, 'iPhone 12', '6.1-inch display, 128GB storage', 999.99),
(2, 'Samsung Galaxy S21', '6.2-inch display, 128GB storage', 799.99),
(3, 'MacBook Pro', '13-inch display, 256GB storage', 1299.99),
(4, 'PlayStation 5', 'PS5 console', 499.99),
(5, 'Smart TV', '55-inch 4K display', 799.99)

-- INSERT INTO order
INSERT INTO `orders` (`order_id`, `customer_id`, `order_date`, `total_amount`) VALUES
(1, 1, '2022-01-01', 999.99),
(2, 2, '2022-01-02', 799.99),
(3, 3, '2022-01-03', 1299.99),
(4, 4, '2022-01-04', 499.99),
(5, 5, '2022-01-05', 799.99)

-- INSERT INTO order items
INSERT INTO `order_items` (`order_item_id`, `order_id`, `product_id`, `quantity`, `unit_price`) VALUES
(1, 1, 1, 1, 999.99),
(2, 2, 2, 1, 799.99),
(3, 3, 3, 1, 1299.99),
(4, 4, 4, 1, 499.99),
(5, 5, 5, 1, 799.99)