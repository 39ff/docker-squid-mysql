<?php
echo "New UserName:";
$user = trim(fgets(STDIN));

echo "Password:";
$password = trim(fgets(STDIN));

$pdo = new PDO(
    'mysql:dbname=squid;host=172.17.0.1;port=13306;charset=utf8mb4',
    'root',
    'squid',
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]
);
$stmt = $pdo->prepare('INSERT INTO passwd(user,password) VALUES(?,?)');
$stmt->execute([
    $user,
    $password,
]);
echo "Done.".PHP_EOL;
