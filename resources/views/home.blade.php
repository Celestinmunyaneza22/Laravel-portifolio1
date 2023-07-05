@extends('master')
@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- navbar begin -->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
		<div class="container flex-lg-column">
		  <a class="navbar-brand mb-lg-4 mx-lg-auto" href="#">
			<span class="h3 fw-bold d-block d-lg-none">Celestin</span>
			<img src="assets/img/cls.jpg" alt="Celestin" class="d-none d-lg-block rounded-circle">
		    <h6>Full-Stack Developer</h6>  
		</a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ms-auto flex-lg-column text-lg-center">
			  
			  <li class="nav-item">
				<a class="nav-link" href="#home">Home</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#services">Services</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#work">Work</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#about">About Me</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#review">Review</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#blog">Blog</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#contact">Contact Me</a>
			  </li>
			</ul>
		  </div>
		</div>
	  </nav>
	<!-- navbar end -->
    
	<!-- contents wrapper begin -->
    <div id="content-wrapper">
        <!-- home begin -->
        <section id="home" class="full-height  px-lg-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-10">
						<h1 class="display-4 fw-bold" data-aos="fade-up">I am <span class="text-brand" >a Software Developer in JavaScript And its Frameworks</span>(Vuejs,Nodejs) From MUHANGA</h1>
						<p class="lead mt-2 mb-4" data-aos="fade-up" data-aos-delay="300">I have a high performance and experience in html, css, JavaScript and its frameworks(VueJS and NodeJS), PHP and SQL,MongoDB,Git and GitHub, SAD.</p>
					    <div data-aos="fade-up" data-aos-delay="600">
							<a href="#work" class="btn btn-brand me-3">Details on my Work</a>
						<a href="#" class="link-custom">Call me on: (+250)789577093, (+250)787602802</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- home end -->
        <!-- services begin -->
        <section id="services" class="full-height px-lg-5">
			<div class="container">
				<div class="row pb-4" data-aos="fade-up" data-aos-delay="300">
					<div class="col-lg-8">
						<h6 class="text-brand">Services</h6>
						<h1>I provide the following services:</h1>
					</div>
				</div>
				
				<div class="row gy-4">

					<div class="col-md-4" data-aos="fade-up">
						<div class="service p-4 bg-base rounded-4 shadow-effect">
							<div class="iconbox rounded-4">
								<i class="las la-feather"></i>
							</div>
							<h4 class="mt-4 mb-2">UI/UX Design</h4>
							<p>I have a high performance and experience in Figma,html, css, JavaScript and its frameworks(VueJS and NodeJS), PHP and SQL, Git and GitHub, SAD.</p>
						    <a href="#" class="link-custom">Read More...</a>
						</div>
					</div>

					<div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
						<div class="service p-4 bg-base rounded-4 shadow-effect">
							<div class="iconbox rounded-4">
								<i class="las la-pencil-ruler"></i>
							</div>
							<h4 class="mt-4 mb-2">Frontend/Backend Dev.</h4>
							<p>I have a high performance and experience in Figma,html, css, JavaScript and its frameworks(VueJS and NodeJS), PHP and SQL, Git and GitHub, SAD.</p>
						    <a href="#" class="link-custom">Read More...</a>
						</div>
					</div>

					<div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
						<div class="service p-4 bg-base rounded-4 shadow-effect">
							<div class="iconbox rounded-4">
								<i class="las la-laptop-code"></i>
							</div>
							<h4 class="mt-4 mb-2">Web App Development</h4>
							<p>I have a high performance and experience in Figma, html, css, JavaScript and its frameworks(VueJS and NodeJS), PHP and SQL, Git and GitHub, SAD.</p>
						    <a href="#" class="link-custom">Read More...</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- services end -->
        <!-- work start -->
        <section id="work" class="full-height px-lg-5">
			<div class="container">
				<div class="row pb-4" data-aos="fade-up" data-aos-delay="300">
					<div class="col-lg-8">
						<h6 class="text-brand">Work</h6>
						<h1>My Most Recent Projects</h1>
					</div>
				</div>

				<div class="row gy-4">
					<div class="col-md-6" data-aos="fade-up" >
						<div class="card-custom rounded-4 bg-base shadow-effect">
							<div class="card-custom-image rounded-4">
								<img class="rounded-4" src="assets/img/Capture1.JPG" alt="">
							</div>
							<div class="card-custom-content p-4">
								<h4>Bill Tip Calculation</h4>
								<p>This is a javascript program that will calculate the amount of tip to leave in restaurent</p>
								<a href="#" class="link-custom">Read More</a>
							</div>
						</div>
					</div>

					<div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
						<div class="card-custom rounded-4 bg-base shadow-effect">
							<div class="card-custom-image rounded-4">
								<img class="rounded-4" src="assets/img/Capture1.JPG" alt="">
							</div>
							<div class="card-custom-content p-4">
								<h4>Bill Tip Calculation</h4>
								<p>This is a javascript program that will calculate the amount of tip to leave in restaurent</p>
								<a href="#" class="link-custom">Read More</a>
							</div>
						</div>
					</div>

					<div class="col-md-6" data-aos="fade-up" >
						<div class="card-custom rounded-4 bg-base shadow-effect">
							<div class="card-custom-image rounded-4">
								<img class="rounded-4" src="assets/img/Capture1.JPG" alt="">
							</div>
							<div class="card-custom-content p-4">
								<h4>Bill Tip Calculation</h4>
								<p>This is a javascript program that will calculate the amount of tip to leave in restaurent</p>
								<a href="#" class="link-custom">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
						<div class="card-custom rounded-4 bg-base shadow-effect">
							<div class="card-custom-image rounded-4">
								<img class="rounded-4" src="assets/img/Capture1.JPG" alt="">
							</div>
							<div class="card-custom-content p-4">
								<h4>Bill Tip Calculation</h4>
								<p>This is a javascript program that will calculate the amount of tip to leave in restaurent</p>
								<a href="#" class="link-custom">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- work end -->
        <!-- aboutus begin -->
        <section id="about" class="full-height px-lg-5">
		<div class="container">
			<div class="row pb-4" data-aos="fade-up" data-aos-delay="300">
				<div class="col-lg-8">
					<h6 class="text-brand">About Me</h6>
					<h1>My Education and Experience</h1>
				</div>
			</div>

			<div class="row gy-5">
				<div class="col-lg-6">

					<h3 class="mb-4"data-aos="fade-up" data-aos-delay="300">Education</h3>
					<div class="row gy-4">

                     <div class="col-12" data-aos="fade-up" data-aos-delay="600">
						<div class="bg-base p-4 rounded-4 shadow-effect">
                         <h5>Post-Graduate Diploma with Education in Computer science</h5>
						 <p class="text-brand mb-2">Catholic University of Rwanda, in 2019</p>
						 <p class="mb-0">Some modules including History of Education, Psychology,Sociology, Pedagogy,Teaching and Evaluation,Inclusive Education, Guidance and counsering,Ethics and Values,ICT in education and Teaching Computer Science.</p>
						</div>
					 </div>

					 <div class="col-12" data-aos="fade-up" data-aos-delay="600">
						<div class="bg-base p-4 rounded-4 shadow-effect">
                         <h5>Bachelor's degree in Computer science</h5>
						 <p class="text-brand mb-2">University of Rwanda, in 2017</p>
						 <p class="mb-0">All modules including networking,Operating system, unix/linux, human centerd design, Basic programming(c,c++,java),Database development,website development,software engeering,graphics and multimedia, Android programming,Internet of things, maintainance, data mining and warehouse, algorithm,SAD,probability,e-commerce,</p>
						</div>
					 </div>
                     
					 <div class="col-12" data-aos="fade-up" data-aos-delay="600">
						<div class="bg-base p-4 rounded-4 shadow-effect">
                         <h5>Training and internship</h5>
						 <p class="text-brand mb-2">CCNA and internship from CHUB in 2026</p>
						 <p class="mb-0">Training about configuration of switch and router, and other network tools. Internship on wireless network and maintainance of printer and computers.</p>
						</div>
					 </div>
					</div>

				</div>

				<div class="col-lg-6">
					<h3 class="mb-4"data-aos="fade-up" data-aos-delay="300">Experience</h3>
					<div class="row gy-4">

                     <div class="col-12" data-aos="fade-up" data-aos-delay="600">
						<div class="bg-base p-4 rounded-4 shadow-effect">
                         <h5>Software development Trainer</h5>
						 <p class="text-brand mb-2">KIYUMBA TSS/MUHANGA(12/2022-present)</p>
						 <p class="mb-0">Modules:JavaScript and its frameworks(nodejs), Vuejs(Develop simple game in vue), Conduct Version Control(Git and GitHub)</p>
						</div>
					 </div>

					 <div class="col-12" data-aos="fade-up" data-aos-delay="600">
						<div class="bg-base p-4 rounded-4 shadow-effect">
                         <h5>Computer application and software development Trainer</h5>
						 <p class="text-brand mb-2">ACODES MUSHISHIRO/MUHANGA(2020-2022)</p>
						 <p class="mb-0">Modules:Website development using Html,CSS, JavaScript, bootstrap.Web Application using PHP and its Framework including Laravel.SAD </p>
						</div>
					 </div>
                     
					 <div class="col-12" data-aos="fade-up" data-aos-delay="600">
						<div class="bg-base p-4 rounded-4 shadow-effect">
                         <h5>Teacher of Math and ICT</h5>
						 <p class="text-brand mb-2">School for Blind children, KIBEHO(2018-2019)</p>
						 <p class="mb-0">Teaching ICT Skills and Math.</p>
						</div>
					 </div>
					</div>

				</div>
			</div>
			</div>
	    </section>
		<!-- aboutus end -->
        <!-- review begin -->
        <section id="review" class="full-height px-lg-5">
			<div class="container">
				<div class="row pb-4" data-aos="fade-up" data-aos-delay="300">
					<div class="col-lg-8">
						<h6 class="text-brand">REVIEWS</h6>
						<h1>WHAT MY STUDENTS, SUPERVISOR AND EMPLOYER REACT ABOUT ME</h1>
					</div>
				</div>
				<div class="row gy-4">

					<div class="col-md-4 " data-aos="flip-left">

						<div class="review shadow-effect bg-base p-4 rounded-4">
                         <div class="text-brand h5">
							<i class="las la-star"></i>
							<i class="las la-star"></i>
							<i class="las la-star"></i>
							<i class="las la-star"></i>
							<i class="las la-star"></i>
						 </div>
						 <p class="my-4">This is the best Trainer, performer, website developer front-end and Back-end we met especially in Html,css,javascript,nodejs,vuejs,git and github and PHP.</p>
						 <div class="person">
							<h5 class="mb-0">Claude</h5>
							<p class="mb-0">Wathsapp</p>
						 </div>

						</div>
					</div>

					<div class="col-md-4 " data-aos="flip-left" data-aos-delay="300">

						<div class="review shadow-effect bg-base p-4 rounded-4">
                         <div class="text-brand h5">
							<i class="las la-star"></i>
							<i class="las la-star"></i>
							<i class="las la-star"></i>
							<i class="las la-star"></i>
							<i class="las la-star"></i>
						 </div>
						 <p class="my-4">This is the best Trainer, performer, website developer front-end and Back-end we met especially in Html,css,javascript,nodejs,vuejs,git and github and PHP.</p>
						 <div class="person">
							<h5 class="mb-0">Students</h5>
							<p class="mb-0">Wathsapp</p>
						 </div>

						</div>
					</div>

					<div class="col-md-4 " data-aos="flip-left" data-aos-delay="600">

						<div class="review shadow-effect bg-base p-4 rounded-4">
                         <div class="text-brand h5">
							<i class="las la-star"></i>
							<i class="las la-star"></i>
							<i class="las la-star"></i>
							<i class="las la-star"></i>
							<i class="las la-star"></i>
						 </div>
						 <p class="my-4">This is the best Trainer, performer, website developer front-end and Back-end we met especially in Html,css,javascript,nodejs,vuejs,git and github and PHP.</p>
						 <div class="person">
							<h5 class="mb-0">School Manager</h5>
							<p class="mb-0">Wathsapp</p>
						 </div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- review end -->
        <!-- blog begin -->
		<section id="blog" class="full-height px-lg-5">
			<div class="container">
				<div class="row pb-4" data-aos="fade-up" data-aos-delay="300">
					<div class="col-lg-8">
						<h6 class="text-brand">BLOGS</h6>
						<h1>MY BLOGS COMMENTS</h1>
					</div>
				</div>

				<div class="row gy-4">

					<div class="col-md-4" data-aos="fade-up">
						<div class="card-custom rounded-4 bg-base shadow-effect">
						<div class="card-custom-image rounded-4">
							<img class="rounded-4" src="assets/img/Capture2.JPG" alt="">
						</div>
						<div class="card-custom-content p-4">
							<p class="text-brand mb-2">25August,2017</p>
							<h4 class="mb-4">My Graduation Day</h4>
							<p>This is unforgottable date in my life where innovation and experience started. </p>
							<a href="#" class="link-custom">Read More</a>
						</div>
					</div>
					</div>

					<div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
						<div class="card-custom rounded-4 bg-base shadow-effect">
						<div class="card-custom-image rounded-4">
							<img class="rounded-4" src="assets/img/Capture2.JPG" alt="">
						</div>
						<div class="card-custom-content p-4">
							<p class="text-brand mb-2">25August,2017</p>
							<h4 class="mb-4">My Graduation Day</h4>
							<p>This is unforgottable date in my life where innovation and experience started. </p>
							<a href="#" class="link-custom">Read More</a>
						</div>
					</div>
					</div>

					<div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
						<div class="card-custom rounded-4 bg-base shadow-effect">
						<div class="card-custom-image rounded-4">
							<img class="rounded-4" src="assets/img/Capture2.JPG" alt="">
						</div>
						<div class="card-custom-content p-4">
							<p class="text-brand mb-2">25August,2017</p>
							<h4 class="mb-4">My Graduation Day</h4>
							<p>This is unforgottable date in my life where innovation and experience started. </p>
							<a href="#" class="link-custom">Read More</a>
						</div>
					</div>
					</div>
				</div>
			</div>
		</section>
		<!-- blog end -->
   <!-- contact me begin -->
		<section id="contact" class="full-height px-lg-5">
			<div class="container">
				<div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="300">
					<div class="col-lg-8  pb-4" data-aos="fade-up" >
						<h6 class="text-brand">CONTACT ME</h6>
						<h1>Want more information? Please! talk with me:</h1>
					</div>
					<div class="col-lg-8" data-aos="fade-up" data-aos-delay="300" >
						<form action="#" class="row g-lg-3 gy-3">
							<div class="form-group col-md-6">
								<input type="text" class="form-control" placeholder="Enter full name">
							</div>
							<div class="form-group col-md-6">
								<input type="email" class="form-control" placeholder="Enter your email">
							</div>
							<div class="form-group col-12">
								<input type="text" class="form-control" placeholder="Enter subject">
							</div>
							<div class="form-group col-12">
								<textarea name="" rows="4" class="form-control" placeholder="Enter your message"></textarea>
							</div>
							<div class="form-group col-12 d-grid">
								<button type="submit" class="btn btn-brand">SEND</button>
							</div>
						</form>
					</div>
				</div>

				
			</div>
		</section>
		<!-- contact me end -->
<!-- footer -->
<footer class="py-5 px-lg-5">
         <div class="container">
			<div class="row gy-4 justify-content-between">
				<div class="col-auto">
					<p class="mb-0">&copy2023  @Allright reserved</p>
				</div>
				<div class="col-auto">
					<div class="social-links">
						<a href="#"><i class="lab la-twitter"></i></a>
						<a href="#"><i class="lab la-instagram"></i></a>
						<a href="#"><i class="lab la-linkedin"></i></a>
						<a href="#"><i class="lab la-github"></i></a>
					</div>
				</div>
			</div>
		 </div>
</footer>
<!-- footer end -->
	</div>
	<!-- contents wrapper end -->
</body>
</html>
@endsection