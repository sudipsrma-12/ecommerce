CREATE DATABASE IF NOT EXISTS ecommerce;

USE ecommerce;

-- Users table
CREATE TABLE IF NOT EXISTS users (
    uid INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    gender ENUM("male","female","others"),
    role SET("admin","user") DEFAULT "user",
    image varchar(100),
    created_at datetime,
    updated_at datetime
);

-- Categories table
CREATE TABLE IF NOT EXISTS category (
    cid INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    created_at datetime,
    updated_at datetime
);

-- Products table
CREATE TABLE IF NOT EXISTS products (
    pid int AUTO_INCREMENT PRIMARY KEY,
    user_id int,
    category_id int,
    title varchar(255),
    slug varchar(255) UNIQUE,
    quantity int,
    price float,
    image varchar(100),
    description text,
    created_at datetime,
    updated_at datetime,
    FOREIGN KEY (user_id) REFERENCES users(uid) ON DELETE RESTRICT,
    FOREIGN KEY (category_id) REFERENCES category(cid) ON DELETE RESTRICT
);
