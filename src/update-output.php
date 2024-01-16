<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'db-connect.php'; ?>

<?php
$pdo=new PDO($connect,USER,PASS);
$sql=$pdo->prepare('update pet set owner=?, name=? ,shosai=?, genre_id=?, animal_name=? where pet_id=?');
if(empty($_POST['name'])) {
    echo 'ペットの名前を入力して下さい。';
}else if(empty($_POST['owner'])){
    echo '飼い主の名前を入力して下さい';
}else if(empty($_POST['shosai'])){
    echo '詳細を入力して下さい';
}else if(empty($_POST['genre_id'])){
    echo 'ジャンルを選択して下さい';
}else if(empty($_POST['animal_name'])){
    echo '種類を入力して下さい';
}

if($sql->execute([$_POST['owner'], $_POST['name'], $_POST['shosai'], $_POST['genre_id'], $_POST['animal_name'], $_POST['pet_id'],])){
    echo '更新しました。';
}else{
    echo '更新に失敗しました。';
}
?>
<?php require 'footer.php'; ?>