<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'db-connect.php'; ?>
<?php
$pdo=new PDO($connect,USER,PASS);
$sql=$pdo->prepare('select * from pet where pet_id=?');
$sql->execute([$_GET['pet_id']]);
foreach ($sql as $row) {
    echo '<p><img alt="img" src="img/', $row['pet_id'], '.jpg"></p>';
    echo '<p>お名前:',$row['name'],'</p>'; 
    echo '<p>飼い主:',$row['owner'],'</p>'; 
    echo '<p>詳細:',$row['shosai'],'</p>'; 
    
    echo '</select></p>';
    echo '<input type="hidden" name="id" value="',$row['name'], '">';
    echo '<input type="hidden" name="name" value="',$row['owner'], '">';
    echo '<input type="hidden" name="price" value="',$row['shosai'], '">';
}
?>
<?php require 'footer.php'; ?>