<?php    include_once "database.php";        $result = mysql_query("select * from weiboid;");    while($row = mysql_fetch_assoc($result)){        echo json_encode($row);    }?>