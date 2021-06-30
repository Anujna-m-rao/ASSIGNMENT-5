<?php
include 'con_db.php';
    if($_POST)
    {
        $passno  =$_POST['passno'];
        $q =mysqli_query($con, "select * from passport WHERE passno=$passno ");
        $row=mysqli_fetch_array($q);
    $sql = mysqli_query($con,"DELETE FROM  `passport`  WHERE passno='$passno'");
if($sql)
                    {
                        echo '<script>alert("Data deleted Successfully");window.location="view.php"</script>';
                    }
                    else
                    {
                       echo '<script>alert("Failed");</script>'; 
                    }
}
?>
</body>
</html>
