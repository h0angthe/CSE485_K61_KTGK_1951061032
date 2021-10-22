<?php
    include 'header.php';
?>
<h1 class="text-center">Danh Sách Xe Thuê</h1>
<br><br>
<main>
    <div class="container">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã Phương Tiện</th>
                    <th scope="col">Model</th>
                    <th scope="col">Kiểu ôtô</th>
                    <th scope="col">Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config.php';
                $sql = "SELECT vehicle_id,model,ctype,status FROM cars ";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        echo '<tr>';
                        echo '<th scope="row">'.$row['vehicle_id'].'</th>';
                        echo '<td>'.$row['model'].'</td>';
                        echo '<td>'.$row['ctype'].'</td>';
                        echo '<td>'.$row['status'].'</td>';
                        echo '</tr>';
                    }
                }
                ?>
            </tbody>
        </table>
        <br><br>
        <a href="chitiet.php" class="btn btn-primary">Chi tiết</a>

    </div>
</main>

</body>

</html>