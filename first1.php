<html>
<body>

<?php

try {
	$db = new PDO('sqlite:test.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // 如果你还需创建表foo,请将下面一句的注释标志清除.
    $db->exec('DROP TABLE IF EXISTS foo');
    $db->exec('
    CREATE TABLE foo(     
    ID integer NOT NULL,
    name char(255) NOT NULL,
    PRIMARY KEY(ID)
    )');     
 } catch (PDOException $e) {
    die("Error: " . $e->getMessage() . "<br />");
    exit;     
 }

// 插入示例数据
echo $db->exec("INSERT INTO foo (name) VALUES ('Ilia1')");
echo $db->exec("INSERT INTO foo (name) VALUES ('Ilia2')");
echo $db->exec("INSERT INTO foo (name) VALUES ('Ilia3')");
echo $db->exec("INSERT INTO foo (name) VALUES ('Ilia4')");
echo $db->exec("INSERT INTO foo (name) VALUES ('Ilia5')");
echo $db->exec("INSERT INTO foo (name) VALUES ('Ilia6')");

// 执行查询
$result = $db->query("SELECT * FROM foo");
$result->setFetchMode(PDO::FETCH_ASSOC);

// 访问数据行
$result_arr = $result->fetchAll();
print_r($result_arr);

$result_arr = NULL;

// 手动关闭数据连接
$db = NULL;
?>

</body>
</html>