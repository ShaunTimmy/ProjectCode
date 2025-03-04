
<?php
$sqllke="SELECT*FROM tuvan ORDER BY idtv DESC";
$querylke=mysqli_query($mysqli,$sqllke);
?>
<h1 class="display-2">DANH SÁCH ĐĂNG KÝ TƯ VẤN </h1>
<table class="table table-striped">
  <thead>
  <tr class="table-dark">
    <th scope="col" class="table-dark">STT</th>
    <th scope="col">Họ và Tên </th>
      <th scope="col">Số Điện Thoại</th>
      <th scope="col">Email</th>
      <th scope="col">Tình Trạng Công Việc</th>
      <th scope="col">Nội Dung Cần Tư Vấn </th>
      <th scope="col" width="15%">Thời Gian Đăng Ký</th>
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
      <td><?php echo $row['email']?></td>
      <td><?php if($row['cvc']=='st'){
        echo 'Học sinh THPT hoặc mới tốt nghiệp';
      }elseif($row['cvc']=='sv'){
        echo 'Sinh viên CNTT';
      }elseif($row['cvc']=='wk'){
        echo 'Người đi làm ngành CNTT';
      }elseif($row['cvc']=='other1'){
        echo 'Sinh viên ngành khác (NON-IT)';
      }elseif($row['cvc']=='nv'){
        echo 'Nhân viên văn phòng';
      }else {
        echo 'Khác';
      }
    
      ?></td>
      <td><?php echo $row['noidung']?></td>
      <td><?php echo $row['tgian']?></td>
      <td>
        <a href="moden/dangkytuvan/xuly.php?idtv=<?php echo $row['idtv']?>"><i class="fa-solid fa-trash"></i></a>
       </td>
    </tr>
  </tbody>
  <?php
  }
    ?>
</table>