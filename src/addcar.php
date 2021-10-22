<?php
    include 'header.php';
?>
<div class="add">
    <br><br>
    <h1 class="text-center">Add Car</h1>


    <form action="" method="POST" class="text-center">
        Mã Phương Tiện: <br>
        <input type="text" name="vehicle_id" placeholder="Enter ID"><br><br>

        Biển số xe: <br>
        <input type="text" name="license_no" placeholder="Enter license_no"><br><br>

        Model: <br>
        <input type="text" name="model" placeholder="Enter Model"><br><br>

        Năm sản xuất: <br>
        <input type="text" name="year" placeholder="Enter Year"><br><br>

        Kiểu ôtô: <br>
        <input type="text" name="ctype" placeholder="Enter Car Type"><br><br>

        Giá cho thuê theo ngày: <br>
        <input type="text" name="drate" placeholder="Enter date rate"><br><br>

        Giá cho thuê theo tuần: <br>
        <input type="text" name="wrate" placeholder="Enter week rate"><br><br>

        Trạng thái: <br>
        <input type="text" name="status" placeholder="Enter status"><br><br>

        <input type="submit" name="submit" value="Add" class="btn-primary">
        <br><br>
    </form>
</div>

<?php
  include 'config.php';
   if(isset($_POST['submit']))
   {

    $ID = $_POST['vehicle_id'];
    $license = ($_POST['license_no']);
    $model = ($_POST['model']);
    $year = ($_POST['year']);
    $ctype = ($_POST['ctype']);
    $drate = ($_POST['drate']);
    $wrate = ($_POST['wrate']);
    $status = ($_POST['status']);

    $sql = "INSERT INTO cars values 
    ('$ID','$license','$model','$year','$ctype','$drate','$wrate','$status')";
    $res = mysqli_query($conn, $sql) ;
    if($res==true)
   {
       header('location:index.php');
   }else
   {
       echo"thất bại";
   }
   }


?>
</body>

</html>