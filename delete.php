<?php
include("config.php");
if(isset($_GET["abc"]))

{
    echo "abc";

    $val=$_GET["abc"];
    $query = mysqli_query($con,"delete from addprd where prd_id = '$val'");
    if($query)
    {
        header("location:table.php");
    }
}

?>