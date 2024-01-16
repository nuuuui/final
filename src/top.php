<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'db-connect.php'; ?>

<?php
echo '<table>';
echo '<tr><th>お名前</th><th>飼い主</th><th>詳細</th></tr>';
$pdo=new PDO($connect,USER,PASS);

foreach ($pdo->query('select * from pet') as $row) {
    echo '<tr>';
    echo '<td>',$row['name'],'</td>';
    echo '<td>',$row['owner'],'</td>';
    echo '<td>',$row['animal_name'],'</td>';
    echo '</tr>';
}
echo '</table>';
?>
<?php require 'footer.php'; ?>