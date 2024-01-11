<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録</title>
</head>

<body>
    <form action="touroku-output.php" method="post">
        <label for="animal_name">動物名</label>
        <input type="text" id="animal_name" name="animal_name" required><br><br>

        <label for="name">名前</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="shosai">詳細</label>
        <input type="text" id="shosai" name="shosai" required><br><br>

        <label for="genre_id">ジャンル</label>
        <select id="genre_id" name="genre_id" required>
        <option value="" disabled selected>ジャンルを選択してください</option>
            <option value="1">犬</option>
            <option value="2">猫</option>
            <option value="3">爬虫類</option>
            <option value="4">魚</option>
            <option value="5">鳥</option>
            <option value="6">小動物</option>
        </select><br><br>

        <button type="submit" class="bottom-right">登録</button>
    </form>
</body>
</html>