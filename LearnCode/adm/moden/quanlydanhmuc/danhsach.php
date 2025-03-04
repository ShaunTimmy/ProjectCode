<?php
  $sql_lietke="SELECT*FROM danhmuc ORDER BY iddm ASC";
  $query_lietke=  mysqli_query($mysqli,$sql_lietke);
?>
<h1 class="display-2">DANH SÁCH DANH MỤC</h1>
<table class="table table-striped">
  <thead>
  <tr class="table-dark">
    <th scope="col" class="table-dark">STT</th>
      <th scope="col">Tên Ngôn Ngữ </th>
      <th scope="col">Quản Lý</th>
    </tr>
    </tr>
  </thead>
  <?php
  $i=0;
  while($row=mysqli_fetch_array($query_lietke)){
    $i++;
  ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $i?></th>
      <td><?php echo $row['tendm']?></td>
      <td>
      <a href="?action=quanlydanhmuc&query=capnhat&iddm=<?php echo $row['iddm']?>" class="ql"><i class="fa-solid fa-pen-nib"></i></a> 
      <a href="moden/quanlydanhmuc/xoa.php?iddm=<?php echo $row['iddm']?>"class="ql1"><i class="fa-solid fa-trash"></i></a>
      </td>
    </tr>
  </tbody>
  <?php
  }
    ?>
</table>