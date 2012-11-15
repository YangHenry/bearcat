<html>
<body>

<?php
$db = sqlite_open("db.sqlite");

// 如果你还需创建表foo,请将下面一句的注释标志清除.
//sqlite_query($db , "CREATE TABLE foo (id INTEGER PRIMARY KEY, name CHAR(255))");

//插入示例数据
//sqlite_query($db, "INSERT INTO foo (name) VALUES ('Ilia4')");
//sqlite_query($db, "INSERT INTO foo (name) VALUES ('Ilia5')");
//sqlite_query($db, "INSERT INTO foo (name) VALUES ('Ilia6')");

// 执行查询
$result = sqlite_query($db, "SELECT * FROM foo");
// 迭代访问数据行
while ($row = sqlite_fetch_array($result)) {
    print_r($row);
    print "<br />";
    /*查询结果的每一行如下所示
     Array
     (
         [0] => 1
         [id] => 1
         [1] => Ilia
         [name] => Ilia
     )
*/
}

// 手动关闭数据连接
sqlite_close($db); 
?>

</body>
</html>