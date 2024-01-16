<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'db-connect.php'; ?>

<?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('delete from pet where pet_id=?');
    if ($sql->execute([$_GET['pet_id']])) {
        echo '削除に成功しました。';
    } else {
        echo '削除に失敗しました';
    }
?>

<?php require 'footer.php'; ?>