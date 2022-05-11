<?php
include_once 'config.php';

$sql = "CREATE TABLE pages (id int unsigned auto_increment primary key, name varchar(100), text text, index(name));";

$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($db->connect_errno!==0){
    exit($db->connect_error);
}

$result = $db->query($sql);

echo 'db structure (user table): ' . ($result ? 'true' : 'false') . '</br>';



$sql = "CREATE TABLE users (id int unsigned auto_increment primary key, login varchar(80), email varchar(80) unique, password varchar(255));";

$result = $db->query($sql);

echo 'db structure (page table): ' . ($result ? 'true' : 'false'). '</br>';

$sql = "CREATE TABLE categories (id int unsigned auto_increment primary key, name varchar(100));";

$result = $db->query($sql);

echo 'db structure (categories table): ' . ($result ? 'true' : 'false'). '</br>';

$sql = "CREATE TABLE products (id int unsigned auto_increment primary key, name varchar(100), price decimal(5), description text, photo text, category_id int unsigned, index(name, category_id));";

$result = $db->query($sql);

echo 'db structure (product table): ' . ($result ? 'true' : 'false'). '</br>';

$sql = "ALTER TABLE products ADD FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE RESTRICT ON UPDATE RESTRICT;";

$result = $db->query($sql);

echo 'db structure (products and categories table linking ): ' . ($result ? 'true' : 'false'). '</br>';