<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'db-connect.php'; ?>
<body>
    <h1>ペット登録</h1>
    <form action="toroku-output.php" method="post">
        <label for="name">お名前:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="owner">飼い主:</label>
        <input type="text" id="owner" name="owner"><br><br>

        <label for="shosai">詳細:</label>
        <input type="text" id="shosai" name="shosai"><br><br>

        <label for="genre_id">ジャンル:</label>
        <select id="genre_id" name="genre_id" required>
            <option value="" disabled selected>ジャンルを選択してください</option>
            <option value="1">猫</option>
            <option value="2">犬</option>
            <option value="3">爬虫</option>
            <option value="4">魚</option>
            <option value="5">鳥</option>
            <option value="6">小動物</option>
        </select><br><br>

        <label for="animal_name">種類:</label>
        <input type="text" id="animal_name" name="animal_name"><br><br>

        <button type="submit" class="bottom-right">登録</button>
    </form>
</body>
</html>