<?php if(!defined('__CONTROLLER__')) return; ?>
<?php getTemplate("header", $viewParams); ?>
<link rel="stylesheet" type="text/css" href="assets/css/posts.css">
<body>
<?php getTemplate("topbar"); ?>
</section>

<!-- code -->
<section id="post-detail">
	<div class="row">
		<div class="col-sm-12 col-md-6 col-xl-6 col-lg-6 mb-4">
			<div class="post-detail-left">
		        <a href="#">
		        	<img src="assets/css/images/CTXH.jpg" alt="">
		        	<div class="mask rgba-white-slight"></div>
		    	</a>
		    </div>
		</div>
		<div class="col-sm-12 col-md-6 col-xl-6 col-lg-6 mb-4">
			<!-- <div class="row"> -->
			<a href="#">
				<h3 class="dark-grey-text pb-2 font-weight-bold">
	            	<strong>TP HCM dự kiến sáp nhập ba quận và 19 phường</strong>
	        	</h3>
	    	</a>
	        <p class="gold-text mb-4 text-uppercase font-weight-bold">Nguồn</p>
	        <hr>

	        <p class="dark-grey-text mt-4 text-justify">Phương án sắp xếp các đơn vị hành chính cấp huyện, xã lần này được hoàn chỉnh trên cơ sở nội dung buổi làm việc của Thủ tướng và các bộ ngành với TP HCM hôm 8/5.</p>

	        <!-- <h5 class="text-right font-weight-bold dark-grey-text mt-5">
	            <em>Tác giả</em>
	        </h5> -->
	        <!-- </div> -->
	        <div class="row">
		        <div class="card mb-4 col-lg-6 col-xl-6 col-md-6 col-sm-6">
		            <!--Card content-->
			            <div class="card-body">
			            	<!-- Card header -->
				            <div class="card-header text-center">
				              <span>Pie chart</span>
				            </div>
			            	<div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
			            		<div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
			            			<div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
			            			
			            			</div>
			            		</div>
				            	<div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
				            		<div style="position:absolute;width:200%;height:200%;left:0; top:0">
				            			
				            		</div>
				            	</div>
			            	</div>
			            </div>

		              <canvas id="pieChart" class="chartjs-render-monitor">
		              	
		              </canvas>
		              	<!-- <canvas id="pieChart"></canvas> -->
		              	
		        </div>
		        <div class="mb-4 col-lg-6 col-xl-6 col-md-6 col-sm-6 single-sidebar-widget editors-pick-widget">
		        	<div class="card-header text-center">
		              <span>Từ khóa</span>
		            </div>
					<div class="list-group mb-20">
						<a href="#" class="list-group-item list-group-item-action">Covid-19</a>
						<a href="#" class="list-group-item list-group-item-action">Corona virus</a>
						<a href="#" class="list-group-item list-group-item-action">Châu Âu</a>
						<a href="#" class="list-group-item list-group-item-action">Vũ Hán</a>
						<a href="#" class="list-group-item list-group-item-action">New York</a>
					</div>
				</div>
	    	</div>
		</div>
	</div>
</section>

<?php getTemplate("footer"); ?>
</html>