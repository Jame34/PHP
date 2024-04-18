<?php
session_start();


$users = [
    'chair' => ['username' => 'chair', 'password' => '123'],
    'reviewer' => ['username' => 'reviewer', 'password' => '234'],
    'author' => ['username' => 'author', 'password' => '345']
];


$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$role = $_POST['role'] ?? '';


if (isset($users[$role]) && $username === $users[$role]['username'] && $password === $users[$role]['password']) {
    
    $_SESSION['role'] = $role;

    
    setcookie('username', $username, time() + (7 * 24 * 60 * 60), '/');
    
    
    switch ($role) {
        case 'chair':
            header("Location: chair.php");
            exit;
        case 'reviewer':
            header("Location: reviewer.php");
            exit;
        case 'author':
            header("Location: author.php");
            exit;
    }
} else {
    
    header("Location: index.php");
    exit;
}
?>



