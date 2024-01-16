<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'db-connect.php'; ?>

<?php
$pdo=new PDO($connect,USER,PASS);
foreach ($pdo->query('select * from pet') as $row) {
    echo '<form action="update-output.php" method="post">';
    echo '<input type="hidden" name="pet_id" value="',$row['pet_id'], '">';
    echo '<div class="th0">お名前</div>';
    echo '<div class="td0">';
    echo '<input type="text" name="name" value="',$row['name'], '">';
    echo '</div>';
    echo '<div class="th1">飼い主</div>';
    echo '<div class="td1">';
    echo '<input type="text" name="owner" value="',$row['owner'], '">';
    echo '</div>';
    echo '<div class="th2">詳細</div>';
    echo '<div class="td2">';
    echo '<input type="text" name="shosai" value="',$row['shosai'], '">';
    echo '</div>';
    echo '<div class="th3">ジャンル</div>';
    echo '<div class="td3">';
    echo '<select name="genre_id" value="',$row['genre_id'], '">
        <option value="" disabled selected>ジャンルを選択してください</option>
        <option value="1">猫</option>
        <option value="2">犬</option>
        <option value="3">爬虫</option>
        <option value="4">魚</option>
        <option value="5">鳥</option>
        <option value="6">小動物</option>
        </select>';
    echo '</div>';
    echo '<div class="th4">種類</div>';
    echo '<div class="td4">';
    echo '<input type="text" name="animal_name" value="',$row['animal_name'], '">';
    echo '</div>';
    echo '<div class="td2"><input type="submit" value="更新"></div><br>';
    echo '</form>';
}
?>
<?php require 'footer.php'; ?>