<?php 
require("layouts/header1.php");

$arrFiles = array();
$dirPath = __DIR__."/ebooks";

$directories = glob($dirPath . '/*' , GLOB_ONLYDIR);

?>

<!-- Breadcrumb -->
<div class="breadcrumb-bar">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-12">
							<div class="breadcrumb-list">
								<nav aria-label="breadcrumb" class="page-breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="/index.php">Home</a></li>
										<li class="breadcrumb-item" aria-current="page">Courses</li>
										<li class="breadcrumb-item active" aria-current="page">E-Books</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Course -->
			<section class="course-content">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
						
							<!-- Filter -->
							<div class="showing-list">
								<div class="row">
									<div class="col-lg-6">
										<div class="d-flex align-items-center">
											<div class="view-icons">
												<a href="#" class="list-view active"><i class="feather-list"></i></a>
											</div> 
											 <div class="show-result">
												<h4>Showing <?php echo count($directories);?> results 👇🏽</h4>
											</div> 
										</div>
									</div>
									<div class="col-lg-6">	
										<div class="show-filter add-course-info ">
										</div>	
									</div>
								</div>
							</div>
							<!-- /Filter -->
							
							<div class="row">
                                <?php 
                                    if (count($directories)<1) {
                                        ?>
                                        <h6 class="cou-title">
											<a class="collapsed">No Courses Found Try Again </a>
										</h6>
                                        <?php
                                    }
                                    $i = 1;
                                    foreach ($directories as $key => $file) {
                                        $f = explode("/", $file);
                                        $f = end($f);
                                        
                                ?>
								<div class="col-lg-12 col-md-12 d-flex">
									<div class="course-box course-design list-course d-flex">
										<div class="product">
											<!-- <div class="product-img">
												<a href="ebook.php?e=<?php echo $i;?>">
													<img class="img-fluid" alt="" src="assets/img/vid.png">
												</a>
											</div> -->
											<div class="product-content">
												<div class="head-course-title">
													<h3 class="title"><a href="ebook.php?e=<?php echo $f;?>"><span style="color: #F56A62;">(<?php echo $i;?>) </span> <?php echo $f;?></a></h3>
													<div class="all-btn all-category d-flex align-items-center">
														<a href="ebook.php?e=<?php echo $f;?>" class="btn btn-primary mt-0">Open</a>
													</div>
												</div>
												<!-- <div class="course-info border-bottom-0 pb-0 d-flex align-items-center">
													<div class="rating-img d-flex align-items-center">
														<img src="assets/img/icon/icon-01.svg" alt="">
														<p>12+ Lesson</p>
													</div>
												</div>
												<div class="rating">							
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
												</div> -->
											</div>
										</div>
									</div>
								</div>

                                <?php
                                $i++;
                                    }
                                ?>
								
							</div>
							
							
							
						</div>
						
					</div>
				</div>
			</section>
			<!-- /Course -->

<?php require("layouts/footer.php")?>