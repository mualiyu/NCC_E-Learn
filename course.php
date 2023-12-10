<?php
if (!isset($_GET['c'])) {
    header("Location: /index.php");
}

if($_GET['c'] != "audio" && $_GET['c'] != "video") {
    header("Location: index.php");
}

require("layouts/header1.php");

if($_GET['c'] == "video"){
    $title = "Video Books";
    $desc = "Vid";
    $short = "Video";

    // Vid
    $arrFiles = array();
    $dirPath = __DIR__."/videos";

    $directories = glob($dirPath . '/*' , GLOB_ONLYDIR);

}elseif($_GET['c'] == "audio"){   //Audio section
    $title = "Audio Books";
    $desc = "Aud";
    $short = "Audio";


    // Audi
    $arrFiles = array();
    $dirPath = __DIR__."/audios";

    $directories = glob($dirPath . '/*' , GLOB_ONLYDIR);

}

?>


<!-- Breadcrumb -->
<div class="breadcrumb-bar">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-12">
							<div class="breadcrumb-list">
								<nav aria-label="breadcrumb" class="page-breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.php">Home</a></li>
										<li class="breadcrumb-item" aria-current="page">Courses</li>
										<li class="breadcrumb-item" aria-current="page"><a href="courses.php">All Courses</a></li>
										<li class="breadcrumb-item" aria-current="page"><?php echo $title; ?></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Inner Banner -->
			<div class="inner-banner">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<h2><?php echo $title; ?></h2>
							<p><?php echo $desc; ?></p>
							<div class="course-info d-flex align-items-center border-bottom-0 m-0 p-0">
								<div class="cou-info">
									<img src="assets/img/icon/icon-01.svg" alt="">
									<p>12+ Lesson</p>
								</div>
								<!-- <div class="cou-info">
									<img src="assets/img/icon/timer-icon.svg" alt="">
									<p>9hr 30min</p>
								</div> -->
							</div>							
						</div>
					</div>
				</div>
			</div>
			<!-- /Inner Banner -->
			
			<!-- Course Content -->
			<section class="page-content course-sec">
				<div class="container">
				
					<div class="row">
						<div class="col-lg-8">
							
							<!-- Course Content -->
							<div class="card content-sec">
								<div class="card-body">
									<div class="row">
										<div class="col-sm-6">
											<h5 class="subs-title"><?php echo $short; ?> Contents</h5>
										</div>
										<div class="col-sm-6 text-sm-end">
											<h6><?php echo count($directories);?> courses</h6>
										</div>
									</div>
                                    <?php 
                                    if (count($directories)<1) {
                                        ?>
                                        <h6 class="cou-title">
											<a class="collapsed">No Courses Found Try Again </a>
										</h6>
                                        <?php
                                    }
                                    foreach ($directories as $key => $file) {
                                        $f = explode("/", $file);
                                        $f = end($f);
                                        
                                    ?>
                                    
									<div class="course-card">
										<h6 class="cou-title">
											<a class="collapsed" data-bs-toggle="collapse" href="course-details.html#collapse<?php echo $key;?>" aria-expanded="false"><?php echo $f;?></a>
										</h6>
										<div id="collapse<?php echo $key;?>" class="card-collapse collapse" style="">
											<ul>
                                                <?php 
                                                $dir = $dirPath."/".$f;
                                                $files = scandir($dir);
                                                if (count($files)<3) {
                                                    ?>
                                                        <li>
												        	<div>
												        		<span>No Content Found!</span>
												        	</div>
												        </li>
                                                        <?php
                                                }
                                                $j = 1;
                                                foreach ($files as $fi) {
                                                    $j++;
                                                    $filePath = $dir . '/' . $fi;
                                                    if (is_file($filePath)) {
                                                        ?>
                                                        <li>
												        	<p><img src="assets/img/icon/play.svg" alt="" class="me-2"><?php echo $fi;?></p>
												        	<div>
												        		<a href="<?php echo ($short=='Video' ? "videos":"audios") ."/".$f."/".$fi; ?>" target="_blank" >Preview</a>
												        		<!-- <span>02:53</span> -->
												        	</div>
												        </li>
                                                       
                                                        <?php
                                                    }
                                                }
                                                ?>
												<!-- <li>
													<p><img src="assets/img/icon/play.svg" alt="" class="me-2">Lecture1.1 Introduction to the User Experience Course</p>
													<div>
														<a href="javascript:void(0);">Preview</a>
														<span>02:53</span>
													</div>
												</li> -->
											</ul>
										</div>
									</div>
                                    <?php
                                    }
                                    ?>
									
								</div>
							</div>
							<!-- /Course Content -->
						
							
						</div>	
						
						<div class="col-lg-4">
							<div class="sidebar-sec">
							
								<div class="video-sec vid-bg">
									<div class="card">
										<div class="card-body">
											<!-- <a href="https://www.youtube.com/embed/WW6dn7f1jzs?si=zVnffNrKHFuybdLa" class="video-thumbnail" data-fancybox="">
												<div class="play-icon">
													<i class="fa-solid fa-play"></i>
												</div>
												<img class="" src="assets/img/videonn.png" alt="">
											</a> -->
											<iframe class="video-thumbnail"  width="auto" height="200" src="https://www.youtube.com/embed/JifEV9HU6OQ?si=CS87LOIppT1Pwj2u" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
											<!-- <div class="video-details">
												<div class="course-fee">
												<h2>FREE</h2>
												<p><span>$99.00</span> 50% off</p>
												</div>
												<div class="row gx-2">
													<div class="col-md-6">
														<a href="course-wishlist.html" class="btn btn-wish w-100"><i class="feather-heart"></i> Add to Wishlist</a>
													</div>
													<div class="col-md-6">
														<a href="javascript:void(0);" class="btn btn-wish w-100"><i class="feather-share-2"></i> Share</a>
													</div>
												</div>
												<a href="checkout.html" class="btn btn-enroll w-100">Enroll Now</a>
											</div> -->
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>	
				</div>
			</section>
			<!-- /Pricing Plan -->

<?php require("layouts/footer.php")?>