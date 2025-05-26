-- SQL to create the products table for the showcase site
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    short_description TEXT NOT NULL,
    full_description TEXT NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    specs_json JSON NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
