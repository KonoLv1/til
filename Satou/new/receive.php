<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="path/to/lightbox.css" rel="stylesheet" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
</head>

<body>

    <!-- method [通常はサイズ制限のない post]  enctype [ファイル転送のデータの種類] action [データ転送先] -->
    <form method="post" enctype="multipart/form-data" action="search.php">
      <p>タイトル検索文字：<input type="text" name ="search"></p>
      <p><input type="submit" value="検索"></p>
    </form>




  <?php
  $title=$_REQUEST['title'];
  $info=$_REQUEST['info'];
  $upload=$_REQUEST['upload'];


    if(move_uploaded_file($_FILES['upfile']['tmp_name'],"./images/".$_FILES['upfile']['name']) == FALSE){
      print "[ERROR]アップロードに失敗しました";
    }else{
    //  print "[Success]".($_FILES['upfile']['name'])."をアップロードしました。";
      $upfile = $_FILES['upfile']['name'];
      $db = new SQLite3('db_date');


      $query = "INSERT INTO tbl_date(upfile,title,info,upload)". "VALUES('$upfile','$title','$info','$upload')";
  //    $query = "INSERT INTO tbl_date(upfile,title,info,upload)". "VALUES('dd','cc','bb','aa')";
      $result = $db->exec($query);
      echo '<br><br>';
    //  echo $upfile.$title.$info.$upload.'<br>';
    //  print "db_dateにデータを登録しました";

      $db->close();

      $db = new SQLite3('db_date');
      // SELECT * で全てのデータを選択して FROM tbl_dateでtbl_dateを呼び出す
      $query = "SELECT * FROM tbl_date";
//      $query = "SELECT * FROM tbl_date";
      $result = $db->query($query);

      // データベース「db_date」に存在するデータの全てを表示する
      while ($info = $result->fetchArray(SQLITE3_ASSOC)){
        //  print "file       : {$info['upfile']}<br>";
          print "title    : {$info['title']}<br>";
      //    print "info     : {$info['info']}<br>";
      //    print "upload   : {$info['upload']}<br><br>";


        $upfile = $info['upfile'];
        echo "<img src='./images/$upfile'><br>";

        }


      $db->close();


    }


  ?>
  <!-- index.htmlに戻るリンク -->
  <p><a href="album.html">アップロード画面に戻る</a></p>
  <script src="path/to/lightbox.js"></script>
</body>

<!-- © Junichi Koyama @Twitter@KonoLv1 / https://github.com/KonoLv1 -->
