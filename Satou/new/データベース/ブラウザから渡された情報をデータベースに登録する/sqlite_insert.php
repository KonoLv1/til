<body>
<?php
    $db = new SQLite3('db_date');
    $query = "INSERT INTO tbl_date(id,title,info,upload)". "VALUES(1,'TEST','HelloWorld','2019/12/15')";
    $result = $db->exec($query);
    print "db_dateにデータを登録しました";
    $db->close();

?>
</body>

<!-- © Junichi Koyama @Twitter@KonoLv1 / https://github.com/KonoLv1 -->