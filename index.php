<?php require("layouts/header.php");?>

<!-- Home Banner -->
<section class="home-slide-five pt-3 pb-3"> 
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 col-12">
							<div class="home-slide-five-face" data-aos="fade-down">

								<!-- Banner Text -->
								<div class="home-slide-five-text">
									<h5>NCC Educational curriculum Contents </h5>
									<h2 style="color: white;">Easy Access To Millions of Offline & Online Educational Resources</h2>
									<p>Own your future by learning new skills</p>
								</div>
								<!-- /Banner Text -->

								<!-- banner Seach Category -->
								<div class="banner-content-five">
									<form class="form" method="GET" action="course.php">
										<div class="form-inner-five">
											<div class="input-group">
												<span class="drop-detail-five">
													<select class="form-select select" name="c">
														<option disabled>Select Courses</option>
														<option value="audio">Audio Books</option>
														<option value="ebooks">Ebooks</option>
														<option value="video">Videos</option>
														<option value="online">Online resources</option>
													</select>
												</span>	
												<input type="text" class="form-control" name="s" placeholder="Search Courses, Online eductional centers, etc">
												
												<button class="btn btn-primary sub-btn" type="submit"><span><i class="fa-solid fa-magnifying-glass"></i></span></button>
												
											</div>
										</div>
									</form>
								</div>
								<!-- /banner Seach Category -->

							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="banner-slider-img">								
								<div class="row">
									<div class="col-lg-6 align-self-end">
										<div class="slider-five-one" data-aos="fade-down">
											<img src="assets/img/slider/slider-01.png" alt="">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="slider-five-two aos" data-aos="fade-down">
											<img src="assets/img/slider/slider-02.png" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="vector-shapes-five">
						<img src="assets/img/bg/banner-vector.svg" alt="">
					</div>
				</div>
			</section>
			<!-- /Home Banner -->


            <!-- Leading Companies -->
			<!-- <section class="leading-section-five">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-4 col-md-6" data-aos="fade-down">
							<div class="leading-five-content course-count">
								<h2>Trusted By <span class="counterUp">500</span>+</h2>
							</div>
						</div>
						<div class="col-lg-8 col-md-6" data-aos="fade-down">
							<div class="lead-group-five">
								<div class="leading-slider-five owl-carousel owl-theme">
									<div class="item">
										<div class="lead-img">
											<img class="img-fluid" alt="" src="assets/img/client/client-01.svg">
										</div>
									</div>
									<div class="item">
										<div class="lead-img">
											<img class="img-fluid" alt="" src="assets/img/client/client-02.svg">
										</div>
									</div>
									<div class="item">
										<div class="lead-img">
											<img class="img-fluid" alt="" src="assets/img/client/client-03.svg">
										</div>
									</div>
									<div class="item">
										<div class="lead-img">
											<img class="img-fluid" alt="" src="assets/img/client/client-04.svg">
										</div>
									</div>
									<div class="item">
										<div class="lead-img">
											<img class="img-fluid" alt="" src="assets/img/client/client-05.svg">
										</div>
									</div>						
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> -->
			<!-- /Leading Companies -->

            <!-- Course Categories Five -->
			<section class="course-section-five">
				<div class="container">
					<div class="header-five-title text-center" data-aos="fade-down">						
						<h2>Course Categories</h2>
						<p>Pick Your Favourite Course</p>
					</div>
					<div class="owl-carousel home-five-course owl-theme aos">


						<!-- Carousel Item  -->
						<div class="carousel-five-item" data-aos="fade-down">
							<div class="course-five-item">
								<div class="course-five-grid">
									<div class="course-icon-five">
										<div class="icon-five-border">
											<a href="course.php?c=video">
												<img src="assets/img/vid.png" style="width: auto; height:70px;" alt="">
											</a>
										</div>
									</div>
									<div class="course-info-five">
										<a href="course.php?c=videol">
											<h3>Video</h3>
											<p>50+ Contents</p>
										</a>										
									</div>
									<div class="course-info-btn">
										<a href="course.php?c=video" class="btn-five"><i class="fas fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Carousel Item  -->

						<!-- Carousel Item  -->
						<div class="carousel-five-item" data-aos="fade-down">
							<div class="course-five-item">
								<div class="course-five-grid">
									<div class="course-icon-five">
										<div class="icon-five-border">
											<a href="/course.php?c=audio">
												<img src="assets/img/audio.png" style="width: auto; height:70px;" alt="">
											</a>
										</div>
									</div>
									<div class="course-info-five">
										<a href="/course.php?c=audio">
											<h3>Audio Books</h3>
											<p>50+ Contents</p>
										</a>										
									</div>
									<div class="course-info-btn">
										<a href="/course.php?c=audio" class="btn-five"><i class="fas fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Carousel Item  -->

						<!-- Carousel Item  -->
						<div class="carousel-five-item" data-aos="fade-down">
							<div class="course-five-item">
								<div class="course-five-grid">
									<div class="course-icon-five">
										<div class="icon-five-border">
											<a href="ebooks.php">
												<img src="assets/img/books.jpg" style="width: auto; height:85px;"  alt="">
											</a>
										</div>
									</div>
									<div class="course-info-five">
										<a href="ebooks.php">
											<h3>E-Bookss</h3>
											<p>50+ Contents</p>
										</a>										
									</div>
									<div class="course-info-btn">
										<a href="ebooks.php" class="btn-five"><i class="fas fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Carousel Item  -->

						<!-- Carousel Item  -->
						<!-- <div class="carousel-five-item" data-aos="fade-down">
							<div class="course-five-item">
								<div class="course-five-grid">
									<div class="course-icon-five">
										<div class="icon-five-border">
											<a href="job-category.html">
												<img src="assets/img/course/course-04.svg" alt="">
											</a>
										</div>
									</div>
									<div class="course-info-five">
										<a href="job-category.html">
											<h3>Docker</h3>
											<p>50 Contents</p>
										</a>										
									</div>
									<div class="course-info-btn">
										<a href="job-category.html" class="btn-five"><i class="fas fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div> -->
						<!-- /Carousel Item  -->

					</div>
				</div>
			</section>
			<!-- /Course Categories Five-->


            <!-- Master the skills Five --> 
			<section class="master-section-five">
				<div class="container">					
				<div class="master-five-vector">
					<img class="ellipse-right" src="assets/img/bg/master-vector-left.svg" alt="">
				</div>
					<div class="row">
						<div class="col-lg-6 col-sm-12" data-aos="fade-down">
							<div class="section-five-sub">
								<div class="header-five-title">						
									<h2>Master the skills to drive your career</h2>
									<p>Pick Your Favourite Course</p>
								</div>
								<div class="career-five-content">
									<p class="mb-0" data-aos="fade-down">Get certified, master modern tech skills, and level up your career — whether you’re starting out or a seasoned pro. 95% of eLearning learners report our hands-on content directly helped their careers.</p>
								</div>
								<!-- <a href="course-list.html" class="learn-more-five">Learn More</a> -->
							</div>
						</div>
						<div class="col-lg-6 col-sm-12">
							<div class="row">
								<div class="col-lg-6 col-sm-6" data-aos="fade-down">
									<div class="skill-five-item">
										<div class="skill-five-icon">
											<img src="assets/img/skills/skills-01.svg" class="bg-warning" alt="Stay motivated">
										</div>
										<div class="skill-five-content">
											<h3>Stay motivated with engaging instructors</h3>
											<p>eLearning learners report our hands-on content directly helped their careers.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-sm-6" data-aos="fade-down">
									<div class="skill-five-item">
										<div class="skill-five-icon">
											<img src="assets/img/skills/skills-02.svg" class="bg-info" alt="Stay motivated">
										</div>
										<div class="skill-five-content">
											<h3>Keep up with in the latest in cloud</h3>
											<p>eLearning learners report our hands-on content directly helped their careers.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-sm-6" data-aos="fade-down">
									<div class="skill-five-item">
										<div class="skill-five-icon">
											<img src="assets/img/skills/skills-03.svg" class="bg-danger" alt="Stay motivated">
										</div>
										<div class="skill-five-content">
											<h3>Get certified with 100+ certification courses</h3>
											<p>eLearning learners report our hands-on content directly helped their careers.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-sm-6" data-aos="fade-down">
									<div class="skill-five-item">
										<div class="skill-five-icon">
											<img src="assets/img/skills/skills-04.svg" class="bg-light-green" alt="Stay motivated">
										</div>
										<div class="skill-five-content">
											<h3>Build skills your way, from labs to courses</h3>
											<p>eLearning learners report our hands-on content directly helped their careers.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Master the skills Five -->

            <!-- Latest Blog -->
			<section class="section  course-section-five">
				<div class="container">

					<div class="lab-course">
						<div class="section-header aos" data-aos="fade-up">
							<div class="section-sub-head feature-head text-center">
								<h4>OTHER ONLINE EDUCATIONAL PLATFORMS</h4>
							</div>
						</div>
						<div class="icon-group aos" data-aos="fade-up">
							<div class="offset-lg-0 col-lg-12">
								<div class="row">
									<div class="col-lg-3 col-4">
										<div class="total-course d-flex align-items-center w-100">
											<div class="blur-border">
												<div class="enroll-img ">
												<a href="https://www.khanacademy.org/" target="_blank">
													<img src="assets/img/khan.png" style="width: auto; height:70px;" alt="" class="img-fluid">
												</a>
												</div>
                                                <p></p>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-4">
										<div class="total-course d-flex align-items-center w-100">
											<div class="blur-border">
												<div class="enroll-img ">
												<a href="https://www.coursera.org/" target="_blank">
													<img src="assets/img/coursera.png" style="width: auto; height:70px;" alt="" class="img-fluid">
												</a>
												</div>
                                                <p></p>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-4">
										<div class="total-course d-flex align-items-center w-100">
											<div class="blur-border">
												<div class="enroll-img ">
												<a href="https://www.udemy.com/" target="_blank">
													<img src="assets/img/udemy.png" style="width: auto; height:70px;" alt="" class="img-fluid">
												</a>
												</div>
                                                <p></p>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-4">
										<div class="total-course d-flex align-items-center w-100">
											<div class="blur-border">
												<div class="enroll-img ">
													<a href="https://www.netacad.com/" target="_blank">
														<img src="assets/img/cisco1.png" style="width: auto; height:80px;" alt="" class="img-fluid">
													</a>
												</div>
                                                <p></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>	
			<!-- /Latest Blog -->





<?php require("layouts/footer.php")?>