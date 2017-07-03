<?php include 'include/header.php'; 
	  
?>
<?php 
	$data_intercall = array();
    $data_intercall = getProductAll();
    //print_r($data_intercall);
?>
 <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
<?php include 'include/slider_menu.php'; ?>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                  
                  	<div class="row mtbox">
                  		<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                  			<div class="box1">
					  			<span class="li_heart"></span>
					  			<h3>933</h3>
                  			</div>
					  			<p>933 People liked your page the last 24hs. Whoohoo!</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_cloud"></span>
					  			<h3>+48</h3>
                  			</div>
					  			<p>48 New files were added in your cloud storage.</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_stack"></span>
					  			<h3>23</h3>
                  			</div>
					  			<p>You have 23 unread messages in your inbox.</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_news"></span>
					  			<h3>+10</h3>
                  			</div>
					  			<p>More than 10 news were added in your reader.</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_data"></span>
					  			<h3>OK!</h3>
                  			</div>
					  			<p>Your server is working perfectly. Relax & enjoy.</p>
                  		</div>
                  	
                  	</div><!-- /row mt -->	
		
					<div class="row">
						
					</div><!-- /row -->

					<div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                      <div class="col-md-2 col-sm-2"><button type="button" class="btn btn-round btn-info">+ เพิ่มข้อมูล</button></div>
                          <h4><i class="border-head"></i> Room List</h4>


                          <hr>

                          <table class="table table-striped table-advance table-hover">
	                  	  	  
	                  	  	  
                              <thead>
                              <tr>
                              	  <th><i class="fa fa-sort-numeric-asc"></i> เลขที่ห้อง</th>
                                  <th><i class="fa fa-bullhorn"></i> ผู้เช่า</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> รายละเอียด</th>
                                  <th><i class="fa fa-bookmark"></i> ราคา /  วัน</th>
                                  <th><i class="fa fa-bookmark"></i> ราคา /  เดือน</th>
                                  <th><i class=" fa fa-edit"></i> สถาณะ</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php for ($i = 0; $i < count($data_intercall); $i++) {?>
                              <tr>
                              	  <td><?php echo $data_intercall[$i]['Product_name']?></td>
                                  <td><a href="#"><?php echo $data_intercall[$i]['Users_first_name']." ".$data_intercall[$i]['Users_last_name']?></a></td>
                                  <td class="hidden-phone"><?php echo $data_intercall[$i]['Product_detail']?></td>

                                  <td><?php echo number_format($data_intercall[$i]['Product_price'], 2, '.', ',')." Baht"?></td>
                                  <td><?php echo number_format($data_intercall[$i]['Product_price_day'], 2, '.', ',')." Baht"?></td>
                                  <td><span class="label label-success"><?php echo $data_intercall[$i]['Status_name']?></span></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <?php } ?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div>
					
					<div class="row mt">
                      <!--CUSTOM CHART START -->
					</div><!-- /row -->	
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  <?php include 'include/right_slider_content.php'; ?>
                 
              </div><!-- row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - BackEnd
              <a href="index.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
<?php include 'include/footer.php'; ?>
