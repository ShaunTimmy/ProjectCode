<div id="main-content">
    <?php
        if(isset($_GET['action'])&& $_GET['query']){
            $tam=$_GET['action'];
            $query=$_GET['query'];
        }else{
            $tam='';
            $query='';
        }if($tam=='quanlydanhmuc'&& $query='them'){
            include("moden/quanlydanhmuc/danhsach.php");
            include("moden/quanlydanhmuc/them.php");
            include("moden/quanlydanhmuc/sua.php");
            
        }elseif($tam=='intro'&& $query='them'){
            include("moden/dashboard.php");
        }elseif($tam=='dangkytuvan'&& $query='them'){
            include("moden/dangkytuvan/danhsach.php");
        }elseif($tam=='quanlybaihoc'&& $query='them'){
            include("moden/quanlybaihoc/them.php");
           include("moden/quanlybaihoc/danhsach.php");
           include("moden/quanlybaihoc/sua.php");
        }elseif($tam=='login'&& $query='them'){
            include("moden/dangxuat.php");
        }elseif($tam=='quanlykhoahoc'&& $query='them'){
            include("moden/quanlykhoahoc/them.php");
           include("moden/quanlykhoahoc/danhsach.php");
           include("moden/quanlykhoahoc/sua.php");
        }elseif($tam=='dangkykhoahoc'&& $query='them'){
            include("moden/dangkykhoahoc/danhsach.php");
        }elseif($tam=='video'&& $query='them'){
            include("moden/quanlyvideo/them.php");
           include("moden/quanlyvideo/danhsach.php");
           include("moden/quanlyvideo/sua.php");
        }elseif($tam=='blog'&& $query='them'){
            include("moden/blog/them.php");
           include("moden/blog/danhsach.php");
           include("moden/blog/sua.php");
        }
        elseif($tam=='question'&& $query='them'){
            include("moden/question/them.php");
           include("moden/question/danhsach.php");
           include("moden/question/sua.php");
        }
        else{
            include("moden/intro.php");
        }
    ?>
</div>