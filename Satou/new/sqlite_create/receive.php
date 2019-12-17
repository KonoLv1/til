<body>
  <?php
  $title=$_REQUEST['title'];
  $info=$_REQUEST['info'];
  $upload=$_REQUEST['upload'];
  $search=$_REQUEST['search'];

    if(move_uploaded_file($_FILES['upfile']['tmp_name'],"./images/".$_FILES['upfile']['name']) == FALSE){
      print "[ERROR]アップロードに失敗しました";
    }else{
      print "[Success]".($_FILES['upfile']['name'])."をアップロードしました。";

      $db = new SQLite3('db_date');
      $upfile = $_FILES['upfile']['name'];

//      $query = "INSERT INTO tbl_date(upfile,title,info,upload)". "VALUES('$upfile','$title','$info','$upload')";
      $query = "INSERT INTO tbl_date(upfile,title,info,upload)". "VALUES('dd','cc','bb','aa')";
      $result = $db->exec($query);
      echo '<br><br>';
      echo $upfile.$title.$info.$upload.'<br>';
      print "db_dateにデータを登録しました";

      $db->close();

      $db = new SQLite3('db_date');
      // SELECT * で全てのデータを選択して FROM tbl_dateでtbl_dateを呼び出す
      $query = "SELECT * FROM tbl_date WHERE title LIKE '%$search%' ";
//      $query = "SELECT * FROM tbl_date";
      $result = $db->query($query);

      // データベース「db_date」に存在するデータの全てを表示する
      while ($info = $result->fetchArray(SQLITE3_ASSOC)){
          print "file       : {$info['upfile']}<br>";
          print "title    : {$info['title']}<br>";
          print "info     : {$info['info']}<br>";
          print "upload   : {$info['upload']}<br><br>";


        $upfile = $info['upfile'];
        echo "<img src='./images/$upfile'><br>";

        }



      $db->close();
      echo 'C';

    }


  ?>
  <!-- index.htmlに戻るリンク -->
  <p><a href="index.html">アップロード画面に戻る</a></p>
</body>

<!-- © Junichi Koyama @Twitter@KonoLv1 / https://github.com/KonoLv1 -->
