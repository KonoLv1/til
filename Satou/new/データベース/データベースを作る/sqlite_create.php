<body>
<?php

    // データベースの生成 今回は「db_date」というデータベースを生成する
    $db = new SQLite3("db_date");

    // データベーステーブルの生成　id.title.info.uploadの項目を生成する
    $query = "CREATE TABLE tbl_date(
        id INTEGER, title VARCHAR(10), info VARCHAR(10), upload VARCHAR(10))";
    $result = $db->exec($query);
    
    // 生成したことを表示する
    echo "[db_date]を生成しました。";
    
    // データベースを切断する
    $db->close();

?>
</body>