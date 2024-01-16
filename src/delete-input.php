<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'db-connect.php'; ?>

<?php
    $pdo=new PDO($connect, USER, PASS);
    foreach ($pdo->query('select * from pet inner join genre where pet.genre_id = genre.genre_id') as $row) {
        echo '<tr>';
        echo '<td>', $row['owner'], '</td>';
        echo '<td>', $row['name'], '</td>';
        echo '<td>', $row['shosai'], '</td>';
        echo '<td>', $row['genre_name'], '</td>';
        echo '<td>', $row['animal_name'], '</td>';
        echo '<td>';
        echo '<a href="delete-output.php?pet_id=', $row['pet_id'], '">削除</a>';
        echo '<td>';
        echo '</tr>';
        echo "\n";
    }
?>

<?php require 'footer.php'; ?>