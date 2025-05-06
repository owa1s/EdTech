-- create_db_and_table.sql

-- 1. Create the database (if not existing)
CREATE DATABASE IF NOT EXISTS education_site;
USE education_site;

-- 2. Create the contacts table
CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    mobile VARCHAR(15) NOT NULL
);
