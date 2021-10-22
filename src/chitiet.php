<?php
    include 'header.php';
?>
<h1 class="text-center">Danh Sách Xe Thuê</h1>
<br><br>
<main>
    <div class="container">

        <a href="#" class="btn btn-primary">Add Car</a>
        <br><br>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã Phương Tiện</th>
                    <th scope="col">Biển số xe</th>
                    <th scope="col">Model</th>
                    <th scope="col">Năm sản xuất</th>
                    <th scope="col">Kiểu ôtô</th>
                    <th scope="col">Giá cho thuê theo ngày</th>
                    <th scope="col">Giá cho thuê theo tuần</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Cập nhật</th>
                    <th scope="col">Xóa</th>

                </tr>
            </thead>
            <tbody>
                <?php
                include 'config.php';
                $sql = "SELECT * FROM cars ";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        echo '<tr>';
                        echo '<th scope="row">'.$row['vehicle_id'].'</th>';
                        echo '<td>'.$row['license_no'].'</td>';
                        echo '<td>'.$row['model'].'</td>';
                        echo '<td>'.$row['year'].'</td>';
                        echo '<td>'.$row['ctype'].'</td>';
                        echo '<td>'.$row['drate'].'</td>';
                        echo '<td>'.$row['wrate'].'</td>';
                        echo '<td>'.$row['status'].'</td>';
                        echo '<td> <a href="#" class="btn btn-primary">Update</a></td>';
                        echo '<td> <a href="#" class="btn btn-primary">Delete</a></td>';
                        echo '</tr>';
                    }
                }
                ?>
            </tbody>
        </table>


    </div>
</main>

</body>

</html>