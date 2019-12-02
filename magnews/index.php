<?php
  include_once("header.php");
  include_once("./model/entity/News.php");
?>
		<!-- Owl Carousel 1 -->
		<div id="owl-carousel-1" class="owl-carousel owl-theme center-owl-nav">
			<!-- ARTICLE -->
		
			<article class="article thumb-article">
				<div class="article-img">
					<img src="./img/img-lg-1.jpg" alt="">
				</div>
				<div class="article-body">
					<ul class="article-info">
						<li class="article-category"><a href="#">News</a></li>
						<li class="article-type"><i class="fa fa-camera"></i></li>
					</ul>
					<h2 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h2>
					<ul class="article-meta">
						<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
						<li><i class="fa fa-comments"></i> 33</li>
					</ul>
				</div>
			</article>
		
			<!-- /ARTICLE -->
			
			<!-- ARTICLE -->
			<article class="article thumb-article">
				<div class="article-img">
					<img src="./img/img-lg-2.jpg" alt="">
				</div>
				<div class="article-body">
					<ul class="article-info">
						<li class="article-category"><a href="#">News</a></li>
						<li class="article-type"><i class="fa fa-file-text"></i></li>
					</ul>
					<h2 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h2>
					<ul class="article-meta">
						<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
						<li><i class="fa fa-comments"></i> 33</li>
					</ul>
				</div>
			</article>
			<!-- /ARTICLE -->
			
			<!-- ARTICLE -->
			<article class="article thumb-article">
				<div class="article-img">
					<img src="./img/img-lg-3.jpg" alt="">
				</div>
				<div class="article-body">
					<ul class="article-info">
						<li class="article-category"><a href="#">News</a></li>
						<li class="article-type"><i class="fa fa-camera"></i></li>
					</ul>
					<h2 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h2>
					<ul class="article-meta">
						<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
						<li><i class="fa fa-comments"></i> 33</li>
					</ul>
				</div>
			</article>
			<!-- /ARTICLE -->
		</div>
		<!-- /Owl Carousel 1 -->
		
		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-12">
						
						
						<!-- Tab content -->
						<div class="tab-content">
							<!-- tab1 -->
							<div id="tab1" class="tab-pane fade in active">
								<!-- row -->
								<div class="row">
									<!-- Column 1 -->
									<?php
										$rsNews = News::getListFromDb();
										
										
										foreach($rsNews as $value){
											// var_dump($value->thumbnail);
											// die();
									?>
									<div class="col-md-6 col-sm-6">
										<!-- ARTICLE -->
										<article class="article">
											<div class="article-img">
												<a href="detail.php?id=<?php echo $value->id; ?> ">
													
													<img src='../././hinhanhsp/<?php echo $value->thumbnail; ?>' width='100px'/>
												</a>
												<ul class="article-info">
													<li class="article-type"><i class="fa fa-camera"></i></li>
												</ul>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#"><?php echo $value->name; ?></h4>
												
											</div>
										</article>
										<!-- /ARTICLE -->
									</div>
									<?php
									 }
									?>
									<!-- /Column 1 -->
									
									
									
									
								</div>
								<!-- /row -->
							
							</div>
							<!-- /tab1 -->
						</div>
						<!-- /tab content -->
					</div>
					<!-- /Main Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
			
<?php
 include_once("footer.php");
?>
