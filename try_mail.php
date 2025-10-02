 <?php
require_once 'ClassAutoLoad.php';

// prepare user data
$user_data = [
    'username' => 'Alex',
    'email' => 'Okama@example.com',
    'password' => '123456'
];

// function to insert user
$insert_user = $SQL->insert('users', $user_data);

// check if insertion was successful
if ($insert_user === TRUE) {
    echo "User inserted successfully";
} else {
    echo "Error inserting user";
}
