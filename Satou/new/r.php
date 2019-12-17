<body>
  <?php


$db = new SQLite3("db_date");
$query = "SELECT * FROM tbl_date";
$result = $db->query($query);
while($info = $result->fetchArray(SQLITE3_ASSOC)){
  print "file       : {$info['upfile']}<br>";
  print "title    : {$info['title']}<br>";
  print "info     : {$info['info']}<br>";
  print "upload   : {$info['upload']}<br><br>";
}
$db->close();
?>
</body>
