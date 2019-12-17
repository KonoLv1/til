<body>
<?php
    $db = new SQLite3("db_date");
    
    // SELECT * で全てのデータを選択して FROM tbl_dateでtbl_dateを呼び出す
    $query = "SELECT * FROM tbl_date";
    $result = $db->query($query);

    // データベース「db_date」に存在するデータの全てを表示する
    while ($info = $result->fetchArray(SQLITE3_ASSOC)){
        print "id       : {$info['id']}<br>";
        print "title    : {$info['title']}<br>";
        print "info     : {$info['info']}<br>";
        print "upload   : {$info['upload']}<br><br>";
    }
    $db->close();
?>
</body>

<!-- © Junichi Koyama @Twitter@KonoLv1 / https://github.com/KonoLv1 -->