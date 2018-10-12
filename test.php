<?php
 require_once('../db.php');
?>
<html>
    <head>
        <title>
            web
        </title>
    </head>
    <body>
        
        <?php
        $query = "SELECT link, name ";
        $query .= "FROM web";
        
        $result = mysqli_query($connection, $query);
        
        if (!$result) {
            die("query is wrong");
        }
        ?>
        
        <?php
        while ($row = mysqli_fetch_array($result)) {
        ?>
        <a href="<?php echo $row["link"]; ?>"><?php echo $row["name"]; ?></a>
        <?php
        }
        ?>
    </body>
</html>
<?php
mysqli_free_result($result);

mysqli_close ($connection);
?>