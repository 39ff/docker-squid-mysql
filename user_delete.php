<?php
$pdo = new PDO(
    'mysql:dbname=squid;host=172.17.0.1;port=13306;charset=utf8mb4',
    'root',
    'squid',
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]
);
$data = $pdo->query('SELECT * FROM passwd ORDER BY user ASC')->fetchAll();
echo "UserName:Password".PHP_EOL;
foreach($data as $d){
    echo $d['user'].":".$d['password'].PHP_EOL;
}
echo "Total Users:".count($data).PHP_EOL;


echo "Delete UserName:";
$user = trim(fgets(STDIN));
$stmt = $pdo->prepare('DELETE FROM passwd WHERE user = ?');
$stmt->execute([$user]);
echo "Done.".PHP_EOL;
