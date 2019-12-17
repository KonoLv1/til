<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="path/to/lightbox.css" rel="stylesheet" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<title>検索画面</title>
</head>

<body>

    <!-- method [通常はサイズ制限のない post]  enctype [ファイル転送のデータの種類] action [データ転送先] -->
    <form method="post" enctype="multipart/form-data" action="search.php">
      <p>タイトル検索文字：<input type="text" name ="search"></p>
      <p><input type="submit" value="タイトル検索文字"></p>
    </form>

  <?php

  $search=$_REQUEST['search'];

      $db = new SQLite3('db_date');
      // SELECT * で全てのデータを選択して FROM tbl_dateでtbl_dateを呼び出す
      $query = "SELECT * FROM tbl_date WHERE title LIKE '%$search%' ";
//      $query = "SELECT * FROM tbl_date";
      $result = $db->query($query);

      // データベース「db_date」に存在するデータの全てを表示する
      while ($info = $result->fetchArray(SQLITE3_ASSOC)){

        //  print "file       : {$info['upfile']}<br>";
          print "title    : {$info['title']}<br>";
      //    print "info     : {$info['info']}<br>";
      //    print "upload   : {$info['upload']}<br><br>";


        $upfile = $info['upfile'];
        echo "<img src='./images/$upfile'>";
        
    //    echo "<a href="./images/$upfile" data-lightbox="roadtrip">Image #2</a>""

        }


      $db->close();





  ?>
  <!-- index.htmlに戻るリンク -->
  <p><a href="album.html">アップロード画面に戻る</a></p>
  <script src="path/to/lightbox.js"></script>
</body>

<!-- © Junichi Koyama @Twitter@KonoLv1 / https://github.com/KonoLv1 -->
