CREATE DATABASE IF NOT EXISTS sdc310_wk4pa DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE sdc310_wk4pa;

CREATE TABLE products (
    ProductNo int AUTO_INCREMENT PRIMARY KEY,
    Name varchar(50) NOT NULL,
    Type varchar(50) NOT NULL
);

INSERT INTO products (Name, Type) VALUES
("Maytag Washer", "Appliacnces"),
("Maytag Dryer", "Appliacnces"),
("Toshiba Laptop", "Electronics-Computers"),
("Sony LED TV", "Electronics-Televisions"),
("Nintendo Switch Game System", "Electronics-Games");

CREATE USER IF NOT EXISTS 'ecpi_user'@'%' IDENTIFIED VIA mysql_native_password USING '*7EE969BBE0A3985C8BFF9FA65A06345C67FE434A';
GRANT ALL PRIVILEGES ON sdc310_wk4pa.* TO 'ecpi_user'@'%';
