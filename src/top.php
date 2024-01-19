<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'db-connect.php'; ?>

<?php
echo '<table>';
echo '<tr><th>お名前</th><th>　飼い主</th><th>　詳細</th><th>　ジャンルID</th><th>　種類</th></tr>';
$pdo=new PDO($connect,USER,PASS);

foreach ($pdo->query('select * from pet inner join genre where pet.genre_id = genre.genre_id') as $row) {
    echo '<tr>';
    echo '<td>', $row['name'], '</td>';
    echo '<td>　', $row['owner'], '</td>';
    echo '<td>　', $row['shosai'], '</td>';
    echo '<td>　', $row['genre_name'], '</td>';
    echo '<td>　', $row['animal_name'], '</td>';
    echo '</tr>';
}
echo '</table>';
?>
<?php require 'footer.php'; ?>