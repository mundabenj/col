<?php
require_once '../ClassAutoLoad.php';

// Drop users table if it exists
$drop_users = $SQL->dropTable('users');
if ($drop_users === TRUE) {
    echo "Existing 'users' table dropped successfully.<br>";
} else {
    echo "Error dropping 'users' table: " . $drop_users . " | ";
}

// Create users table
$create_users = $SQL->createTable('users', [
  'userId' => 'BIGINT(10) AUTO_INCREMENT PRIMARY KEY',
  'fullname' => 'VARCHAR(50) NOT NULL',
  'email' => 'VARCHAR(50) NOT NULL UNIQUE',
  'password' => 'VARCHAR(60) NOT NULL',
  'verify_code' => 'VARCHAR(10) DEFAULT NULL',
  'code_expiry_time' => 'DATETIME DEFAULT NULL',
  'mustchange' => 'tinyint(1) DEFAULT 0',
  'status' => "ENUM('active', 'inactive', 'suspended', 'Pending', 'Deleted') DEFAULT 'Pending'",
  'created' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
  'updated' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
  'roleId' => 'tinyint(1) DEFAULT 1', // 1=User, 2=Admin
  'genderId' => 'tinyint(1) DEFAULT 1'
]);
if ($create_users === TRUE) {
    echo "Users table created successfully. | ";
} else {
    echo "Error creating users table: " . $create_users . " | ";
}

// Drop roles table if it exists
$drop_roles = $SQL->dropTable('roles');

// Create roles table
$create_roles = $SQL->createTable('roles', [
  'roleId' => 'tinyint(1) AUTO_INCREMENT PRIMARY KEY',
  'roleName' => 'VARCHAR(20) NOT NULL',
  'created' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
  'updated' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
]);

if ($create_roles === TRUE) {
    echo "Roles table created successfully. | ";
} else {
    echo "Error creating roles table: " . $create_roles . " | ";
}

// Drop genders table if it exists
$drop_genders = $SQL->dropTable('genders');

// Create genders table if it doesn't exist
$create_genders = $SQL->createTable('genders', [
  'genderId' => 'tinyint(1) AUTO_INCREMENT PRIMARY KEY',
  'genderName' => 'VARCHAR(20) NOT NULL',
  'created' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
  'updated' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
]);

if ($create_genders === TRUE) {
    echo "Genders table created successfully. | ";
} else {
    echo "Error creating genders table: " . $create_genders . " | ";
}

// Alter table to add foreign key constraints
$alter_table_user = $SQL->addConstraint('users', 'roles', 'roleId', 'CASCADE', 'CASCADE');
$alter_table_user = $SQL->addConstraint('users', 'genders', 'genderId', 'CASCADE', 'CASCADE');