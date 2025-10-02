<?php
require_once '../ClassAutoLoad.php';

// Seeders for roles
$insert_roles = $SQL->insert('roles', ['roleName' => 'User']);
$insert_roles = $SQL->insert('roles', ['roleName' => 'Admin']);
$insert_roles = $SQL->insert('roles', ['roleName' => 'SuperAdmin']);

if($insert_roles === TRUE){
    echo "Roles seeded successfully. | ";
} else {
    echo "Error seeding roles: " . $insert_roles . " | ";
}

// Seeders for genders
$insert_genders = $SQL->insert('genders', ['genderName' => 'Male']);
$insert_genders = $SQL->insert('genders', ['genderName' => 'Female']);
$insert_genders = $SQL->insert('genders', ['genderName' => 'Other']);

if($insert_genders === TRUE){
    echo "Genders seeded successfully. | ";
} else {
    echo "Error seeding genders: " . $insert_genders . " | ";
}