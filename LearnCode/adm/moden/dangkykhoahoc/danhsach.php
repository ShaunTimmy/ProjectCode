<?php
$sqllke="SELECT*FROM dangky, khoahoc WHERE dangky.idkh=khoahoc.idkh ORDER BY iddk DESC";
$querylke=mysqli_query($mysqli,$sqllke);
?>
<h1 class="display-4">DANH SÁCH ĐĂNG KÝ CÁC KHÓA HỌC </h1>
<table class="table table-striped">
  <thead>
  <tr class="table-dark">
    <th scope="col" class="table-dark">STT</th>
    <th scope="col">Họ và Tên </th>
      <th scope="col">Số Điện Thoại</th>
      <th scope="col"> Tên Khóa Học </th>
      <th scope="col">Email</th>
      <th scope="col">Địa Chỉ  </th>
      <th scope="col"> Hình Thức Học </th>
      <th scope="col">Thời Gian Đăng Ký</th>
      <th scope="col">Quản Lý</th>
    </tr>
    </tr>
  </thead>
  <?php
  $i=0;
  while($row=mysqli_fetch_array($querylke)){
    $i++;
 ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $i?></th>
      <td><?php echo $row['hoten']?></td>
      <td><?php echo $row['sdt']?></td>
      <td><?php echo $row['tenkh']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['dchi']?></td>
      <td><?php if($row['hthuc']=='online'){
        echo 'Online';
      }else {
        echo 'Offline';
      }
     
      ?></td>
      <td><?php echo $row['tgian']?></td>
      <td>
        <a href="moden/dangkykhoahoc/xuly.php?iddk=<?php echo $row['iddk']?>"><i class="fa-solid fa-trash"></i></a>
       </td>
    </tr>
  </tbody>
  <?php
  }
    ?>
</table>