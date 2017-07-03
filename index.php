<?php include 'include/header.php'; 

    //$data_intercall = array();
    $data_intercall = getProductAll();
?>
    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>ยินดีต้องรับ !</h1>
            <p>VK. House &nbsp;ห้องพักรายวัน - รายเดือน &nbsp;อุปกรณ์อำนวยความสะดวกพร้อม เฟอร์นิเจอร์ พัดลม แอร์ เครื่องทำน้ำอุ่น wifi เคเบิ้ลทีวี 400 ช่อง ตู้เย็น ทีวี พร้อมอยู่ และระบบความปลอดภัย คีย์การ์ด และ กล้องวงจรปิด ในราคาเริ่มต้นที่ 2,500-3,500 เท่านั้น &nbsp; &nbsp;อยู่ตรงข้ามตำรวจทางหลวง เข้าซอยมา 100เมตร ห้องพักใกล้ตลาดและสถานที่ราชการ สะดวกปลอดภัย ติดต่อ : 081-9753931, 089-7095711</p>
            <p><a class="btn btn-primary btn-large">ติดต่อ</a>
            </p>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>ห้องพัก</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">
            <?php for ($i = 0; $i < count($data_intercall); $i++) {?>
            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <!-- <img src=<?php echo "/image/Rooms/".$data_intercall[$i]['Product_thumbnail']?> alt=""> -->
                    <img src="https://scontent-kul1-1.xx.fbcdn.net/hphotos-xpt1/v/t1.0-9/11205159_357405141135453_8707019552052550264_n.jpg?oh=284a3d20546adb39eea5d2312ee5f5bf&oe=56D54EB8" alt="">
                    <div class="caption">
                        <h3><?php echo "ห้อง"." ".$data_intercall[$i]['Product_name']?></h3>
                        <p><?php echo $data_intercall[$i]['Product_detail']?></p>
                        <p>
                            <a href="#" class="btn btn-primary">จอง!</a> <a href="#" class="btn btn-default">รายละเอียด</a>
                        </p>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
        <!-- /.row -->

        <hr>
<?php include 'include/footer.php'; ?>


