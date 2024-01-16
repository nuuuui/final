<?php session_start(); ?>
<?php require 'menu.php'; ?>
<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>

<?php
$pdo=new PDO($connect,USER,PASS);
$sql=$pdo->prepare('insert into pet values(null,?,?,?,?,?)');
if(empty($_POST['name'])) {
    echo 'ペットのお名前を入力して下さい。';
}else if(empty($_POST['owner'])) {
    echo '飼い主の名前を入力して下さい。';
}else if(empty($_POST['shosai'])) {
    echo '詳細を入力して下さい。';
}else if(empty($_POST['genre_id'])) {
    echo 'ジャンルIDを選択して下さい。';
}else if(empty($_POST['animal_name'])) {
    echo 'ペットの種類を入力して下さい。';
}else if($sql->execute([$_POST['owner'], $_POST['name'], $_POST['shosai'], $_POST['genre_id'], $_POST['animal_name']])){
    echo '登録しました';
}else{
    echo '登録に失敗しました';
}
?>
<?php require 'footer.php'; ?>