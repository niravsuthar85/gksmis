@extends('modules.master')
    @section('content')
<section id="hero"
		class="d-flex justify-content-center align-items-center">
		<div class="container position-relative" data-aos="zoom-in"
			data-aos-delay="100">
			<h1>
				Gujarat Knowledge Society
			</h1>
			<h2>Directorate of Technical Education</h2>
				<div class="d-flex">
			<!--<a class="btn-get-started " style="color: #5b5993; background: #fff;padding-right: 60px;">Word of the Day</a>
			<a class="btn-get-started font-weight-bold" style="background: #5b5993; margin-left: -60px" id="tofday"></a>-->
			</div>
			<!-- <a class="btn-get-started " style="background: #5b5993;padding-right: 60px;">Word of the Day</a>
			<a class="btn-get-started font-weight-bold" style="color: #5b5993; background: #fff; margin-left: -60px" id="tofday"></a> -->
		 
			
			
		</div>
		<!-- <div class="icon-bar">
			<a href="https://www.facebook.com/gujscope" target="_blank"
				class="facebook1"><i class="fa fa-facebook"></i></a> <a
				href="https://twitter.com/home" target="_blank" class="twitter1"><i
				class="fa fa-twitter"></i></a> <a
				href="https://www.instagram.com/scopegujarat/" target="_blank"
				class="google1"><i class="fa fa-instagram"></i></a> <a
				href="https://www.linkedin.com/feed/" target="_blank"
				class="linkedin1"><i class="fa fa-linkedin"></i></a> <a
				href="https://www.youtube.com/channel/UCS9ncH35_6BUW_36RTLCtrQ"
				class="youtube1" target="_blank"><i class="fa fa-youtube"></i></a>
		</div> -->
		
	</section>
	<!-- End Hero -->
	<div class="pt-1 bg-warning">
<marquee class="" onmouseover="this.stop();" onmouseout="this.start();"><a href="https://easypay.axisbank.co.in/easyPay/makePayment?mid=MzM2MjY%3D" target="_blank" style="color: #000;">To Fill Details, Register & Online Payment of GKS Courses</a> </marquee>
</div>
<!-- ======= About Section ======= -->
	<section id="about" class="about">
		<div class="container" data-aos="fade-up">



			<div class="row">
				<div class="col-lg-8 pt-4 pt-lg-0 content">
					<div class="section-title">
						<h2>About</h2>
					</div>
					<h3 class="mb-4">Gujarat Knowledge Society</h3>

					<p class="text-justify">
						<i class="icofont-check-circled mr-2 font-weight-bold"
							style="color: #37357bf5;"></i>Birth of a child is often a celebration in India. Dreams are nurtured for a lifetime since the birth. Education is very much an important part of individual's upbringing and fulfilling of these dreams. Unfortunately the present day education system is yet to achieve that perfect state. There is a big void in the present day education system and the demands of the job market.The education system lacks and does not encompass the industrial demands and subject that are relevantly required to meet today's job requirements. Moreover the system also lacks upgradation of course module and practical training to master requirements of the job world. This is one of the major reasons why confidence of the educated youth and the unemployed is seriously dented.
					</p>
					<!--<p class="text-justify">
						<i class="icofont-check-circled mr-2 font-weight-bold"
							style="color: #37357bf5;"></i>n order to overcome this situation, Government of Gujarat came up with a revolutionary measure to bridge the gap between requirements of educational system and industries. Here, specially customized short term courses are prepared that can be easily provided to the common man at a nominal rate. To implement and take these specially customized programmes to every corner of the state of Gujarat, the Gujarat Knowledge Society is instituted.
					</p>-->
					<p class="text-justify">
						<i class="icofont-check-circled mr-2 font-weight-bold"
							style="color: #37357bf5;"></i>Gujarat Knowledge Society aims to empower the youth for accessing better employment opportunities in the age of knowledge based economy.
					</p>

				</div>
				<div class="col-md-4 col-lg-4 align-items-stretch shadow-sm"
					data-aos="fade-up" data-aos-delay="100">
					<div class="icon-box">
						<h4 class="title text-center">
							<a href="">NOTICE</a>
						</h4>
						<hr />
						<marquee direction="up" onmouseover="this.stop();"
							onmouseout="this.start();" style="height: 170px;">
							<!--<p><i class="fa fa-chevron-circle-right mr-1"></i><a href="https://easypay.axisbank.co.in/easyPay/makePayment?mid=MzM2MjY%3D" target="_blank"> To Fill Details, Register & Online Payment of GKS Courses</a><i class="badge badge-danger badge-pill ml-2"></i></p>-->
							<p><i class="fa fa-chevron-circle-right mr-1"></i><a href="{{asset('public/assetsanyar/datafile/SSIP_Education_Policy.pdf')}}" target="_blank"> Student Startup and Innovation Policy</a></p>
							<p><i class="fa fa-chevron-circle-right mr-1"></i><a href="{{asset('public/assetsanyar/datafile/MOUPolicy.pdf')}}" target="_blank"> MOU POLICY OF GKS</a></p>
							<p><i class="fa fa-chevron-circle-right mr-1"></i><a href="{{asset('public/assetsanyar/datafile/EOIGKSTrainingPartner.pdf')}}" target="_blank"> EXPRESSION OF INTEREST BECOME GKS TRAINING PARTNER</a></p>
							<p><i class="fa fa-chevron-circle-right mr-1"></i><a href="{{asset('public/assetsanyar/datafile/EligibilityCriteria.pdf')}}" target="_blank"> ELIGIBILITY CRITERIA FOR TRAINING PARTNER <span class="text-warning"></span></a></p>
         					<p><i class="fa fa-chevron-circle-right mr-1"></i><a href="{{asset('public/assetsanyar/datafile/MoUofGujaratKnowledgeSociety.pdf')}}" target="_blank"> MOU OF GKS<span class="text-warning"></span></a></p>
						</marquee>
						<div class="text-center mt-5">
							<a href="#" class="btnmore btn"
								style="background: #37357bf5; color: #fff;">More</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- End About Section -->



	<section id="counts" class="counts section-bg">
		<div class="container">

			<div class="row counters">

				<div class="col-md-4 text-center">
					<span data-toggle="counter-up">2563+</span>
					<p>Students Enrolled</p>
				</div>


				<div class="col-md-4 text-center">
					<span data-toggle="counter-up">1125+</span>
					<p>Open Assessment Scheme</p>
				</div>

				<div class="col-md-4 text-center">
					<span data-toggle="counter-up">1112+</span>
					<p>Students Trained</p>
				</div>

			</div>

		</div>
	</section>
	<!-- End Counts Section -->
	<section id="team" class="team">
		<div class="container">

			<div class="section-title">
				<h2 data-aos="fade-up">Dignitaries</h2>

			</div>

			<div class="row">
				
				<div class="col-md d-flex align-items-stretch" data-aos="fade-up"
					data-aos-delay="100">
					<div class="member">
						<div class="member-img">
							<img src="{{asset('public/assetsanyar/img/team/sbp_cm.jpg')}}" class="img-fluid r"
								alt="" style="height: 200px; width: 198px;">
						</div>
						<div class="member-info">
							<h4>Shri Bhupendrabhai Patel</h4>
							<br /> <span><b>Chief Minister</b><br /></span> <span>Government
								of Gujarat</span>
						</div>

					</div>
				</div>
				<div class="col-md d-flex align-items-stretch" data-aos="fade-up"
					data-aos-delay="200">
					<div class="member">
						<div class="member-img">
							<img src="{{asset('public/assetsanyar/img/team/j_vaghani.png')}}" class="img-fluid c"
								alt="" style="height: 200px; width: 198px;">

						</div>
						<div class="member-info">
							<h4>Shri Jitubhai Vaghani</h4>
							<br /> <span><b>Education Minister</b><br /></span> <span>Government
								of Gujarat</span>
						</div>

					</div>
				</div>
				<div class="col-md d-flex align-items-stretch" data-aos="fade-up"
					data-aos-delay="100">
					<div class="member">
						<div class="member-img">
							<img src="{{asset('public/assetsanyar/img/team/sj_haider_IAS.png')}}" class="img-fluid"
								alt="" style="height: 200px; width: 198px;">
						</div>
						<div class="member-info">
							<h4>Shri S.J. Haider, IAS</h4>
							<br /> <span><b>Principal Secretary</b><br /></span> <span>Education
								Department</span> <span>Government of Gujarat</span>
						</div>

					</div>
				</div>

				<div class="col-md d-flex align-items-stretch" data-aos="fade-up"
					data-aos-delay="100">
					<div class="member">
						<div class="member-img">
							<img src="{{asset('public/assetsanyar/img/team/gksceo.jpg')}}" class="img-fluid"
								alt="" style="height: 200px; width: 198px;">
						</div>
						<div class="member-info">
							<h4>Shri G.T. Pandya, IAS</h4>
							<br /> <span><b>Director</b><br />Technical Education</span> <span>Gujarat State & CEO, GKS</span>
						</div>

					</div>
				</div>

				<div class="col-md d-flex align-items-stretch" data-aos="fade-up"
					data-aos-delay="200">
					<div class="member">

						<div class="member-img">
							<img src="{{asset('public/assetsanyar/img/team/hceo.jpg')}}" class="img-fluid" alt=""
								style="height: 200px; width: 198px;">

						</div>
						<div class="member-info">
							<h4>Shri M. Nagarajan, IAS</h4>
							<br /> <span><b>Director</b> <br />Higher Education</span> <span>Government
								of Gujarat</span>
						</div>

					</div>
				</div>
			</div>

		</div>
	</section>
	<section id="events" class="events section-bg">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>Courses Offered</h2>
			</div>
			<div class="row">
				<div class="col-md-4 d-flex align-items-stretch">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">
								<a href="">Indo-German tool room(A Govt. of India Society)</a>
							</h5>
							<p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<div class="text-right">
								<a href="impact_offered_courses">See More <i class="fa fa-angle-right"></i><i
									class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>

				</div>
				<div class="col-md-4 d-flex align-items-stretch">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">
								<a href="">National Small Industry Corporation Technical Services Center</a>
							</h5>
							<p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<div class="text-right">
								<a href="impact_offered_courses">See More <i
									class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex align-items-stretch">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">
								<a href="">CIPET -Central Institute of Plastics Engineering & Technology</a>
							</h5>
							<p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<div class="text-right">
								<a href="impact_offered_courses">See More <i class="fa fa-angle-right"></i><i
									class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>

				</div>


				<div class="col-md-4 d-flex align-items-stretch">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">
								<a href="">Spoken Tutorial (IIT Bombay)</a>
							</h5>
							<p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<div class="text-right">
								<a href="#">See More <i class="fa fa-angle-right"></i><i
									class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>

				</div>
				<div class="col-md-4 d-flex align-items-stretch">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">
								<a href="">TATA Consultancy Services Ltd</a>
							</h5>
							<p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<div class="text-right">
								<a href="#">See More <i class="fa fa-angle-right"></i><i
									class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>

				</div>
				<div class="col-md-4 d-flex align-items-stretch">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">
								<a href="">U.S. Institute of 3D Printing Technology(USI3DT)</a>
							</h5>
							<p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<div class="text-right">
								<a href="#">See More <i class="fa fa-angle-right"></i><i
									class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>

				</div>

			</div>

		</div>
	</section>
	<!--<section id="events" class="events">
		<div class="container" data-aos="zoom-in">
			<div class="section-title">
				<h2>in Association with</h2>
			</div>
			<div class="row">
				<div class="col-md text-center">
					<a href="assetsanyar/document/MOU/gtu.pdf" target="_blank"><img src="{{asset('public/assetsanyar/img/association/gtu.jpg')}}"></a>
				</div>
				<div class="col-md text-center">
					<img src="{{asset('public/assetsanyar/img/association/cam.jpg')}}">
				</div>
				<div class="col-md text-center">
					<a href="assetsanyar/document/MOU/kutch.pdf" target="_blank"><img src="{{asset('public/assetsanyar/img/association/kskvku.jpg')}}"></a>
				</div>
			</div>
		</div>
	</section>-->
	<!-- End Events Section -->
	<!--<section id="clients" class="clients section-bg">
		<div class="container" data-aos="zoom-in">
			<div class="section-title">
				<h2>Student Testimonials</h2>
			</div>
			<div id="carouselExampleIndicators" class="carousel slide"
				data-ride="carousel" data-interval="2000">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0"
						class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
					<!-- <li data-target="#carouselExampleIndicators" data-slide-to="4"></li> -->
				<!--</ol>
				<div class="carousel-inner pb-5">
					<div class="carousel-item active text-center">
						<img src="{{asset('public/assetsanyar/img/testimonials/st1.jpg')}}" style="border-radius: 50%; width:130px; height:130px; border:6px solid #37357bf5;">
						<h4 class="text-center font-weight-bold">Singh Krishna Vishnudev</h4>
						<p class="col-md-10 m-auto"><small>I am thankful to scope for organizing ingenious essay writing competition. 
						Students get benefits by such competitions in this current COVID-19 pandemic.
						 I have selected the topic of my favorite book.
						  SCOPE is platform where students can improve their English language skills in many ways.
						   Before this essay writing competition SCOPE was organized Quiz, Webinar and many other activities.
						    Again I would like to thank SCOPE to give as opportunity.
						     We hope that SCOPE will arrange many more activities in future.</small></p>
					</div>
					<div class="carousel-item text-center">
						<img src="{{asset('public/assetsanyar/img/testimonials/st1.jpg')}}" style="border-radius: 50%; width:130px; height:130px; border:6px solid #37357bf5;">
						<h4 class="text-center font-weight-bold">Vishwa Ketan Shah</h4>
						<p class="col-md-10 m-auto"><small>Competition was held on 14<sup>th</sup> of December 2020, which is an initiative by the Government Of Gujarat. 
						This competition was online due to the pandemic but was conducted very smoothly and i received all the details on the stipulated time and the instruction were very clear and the topics were very interesting as well. 
						This essay writing competition is a very good idea to know about the views and the thoughts of the people and it gives an opportunity to express oneself.
						 I chose the topic Mobile Phones: Boon or bane because personally i like argumentative essays, but the topics they provided covered all types so that the person is able to write freely and comfortably. </small></p>
					</div>
					<div class="carousel-item text-center">
						<img src="{{asset('public/assetsanyar/img/testimonials/st1.jpg')}}" style="border-radius: 50%; width:130px; height:130px; border:6px solid #37357bf5;">
						<h4 class="text-center font-weight-bold">Mahmood Furkan Topiwala</h4>
						<p class="col-md-10 m-auto"><small>I would like to thank SCOPE (Society for Creation of Opportunity through Proficiency in English) for organizing such an amazing competition.
						 It was worth participating in this ingenious essay writing competition.
						  The topics that event had were very relevant and it is a great platform for the one endearing to showcase their talent in the essay writing field
						   My topic was "The impact of COVID-19 pandemic" which i thought was really a good topic and helped me to gain a clear perspective on the current happening for the same.
						    Again thanking SCOPE for this wonderful opportunity!!</small></p>
					</div>
					<div class="carousel-item text-center">
						<a href="https://youtu.be/2_g79ZcVVys" target="_blank"><i class="fa fa-youtube fa-5x pt-3" style="border-radius: 50%; width:130px; height:130px; border:6px solid #37357bf5;"></i></a>
						<h4 class="text-center font-weight-bold">SCOPE STUDENT Review</h4>
						<p class="col-md-10 m-auto"><small>SCOPE (Society for Creation of Opportunity through Proficiency in English), 
						established in 2007 by the education department, Government of Gujarat. 
						SCOPE has been functioning since 13 years in association with Cambridge English, 
						part of the University of Cambridge, UK for providing assessment, evaluation and 
						international certification. To improve fluency in English and improve ability of 
						students to communicate effectively in English SCOPE has introduced Online Rapid English Speaking Course. 
						Review of students for Online Rapid English Speaking Course.</small></p>
						<a href="https://youtu.be/2_g79ZcVVys" target="_blank" class="text-decoration-underline">See Video on Youtube <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
					</div>
					<div class="carousel-item text-center">
						<img src="{{asset('public/assetsanyar/img/testimonials/st1.jpg')}}" style="border-radius: 50%; width:130px; height:130px; border:6px solid #37357bf5;">
						<h4 class="text-center font-weight-bold">Dhruvi Vora - 1<sup>st</sup> Winner</h4>
						<p class="col-md-10 m-auto"><small>Hello everyone, Fm Dhruvi Vora from Christ College Rajkot.
							Thank you Scope for giving this wonderful platform through
							Harmony Poetry Competition on which we can show our
							talent and make ourselves better with it. Due to this
							pandemic situation it’s been very hard to do any such
							activities personally and Scope gave such a bright
							opportunity Virtually, thank you so much. It's very helpful
							to polish our skills and become more and more confident.
							Once again Thank You Scope for Wonderful Opportunity.
						</small></p>						
					</div>
					<div class="carousel-item text-center">
						<img src="{{asset('public/assetsanyar/img/testimonials/st1.jpg')}}" style="border-radius: 50%; width:130px; height:130px; border:6px solid #37357bf5;">
						<h4 class="text-center font-weight-bold">Eeshan Rand - 2<sup>nd</sup> Winner</h4>
						<p class="col-md-10 m-auto"><small>I'm very thankful to the SCOPE team for giving me such a
							wonderful opportunity. It was for the first time ever I
							imparted any public competition so initially I was very
							nervous but as i observed other participants my confidence
							grew and I was able to put my poem. I selected my poem
							with the help of my school teacher. He suggested some
							poems and I found Taper Boats' very feisty and touchy. So
							overall my experience was dazzling and I really appreciate
							this event.
						</small></p>						
					</div>
					<div class="carousel-item text-center">
						<img src="{{asset('public/assetsanyar/img/testimonials/st1.jpg')}}" style="border-radius: 50%; width:130px; height:130px; border:6px solid #37357bf5;">
						<h4 class="text-center font-weight-bold">Twara Mankad - 3<sup>rd</sup> Winner</h4>
						<p class="col-md-10 m-auto"><small>On 25th March 2021, a poetry recitation competition titled the
								"Harmony Poetry Recitation Competition" was held by the
								SCOPE team for students of the age group 15 years to 25
								years. The topics were given to us which covered almost all the
								fields for exploration of the students.The management done
								by the entire team was very efficient and well appreciated.
								There was a student-centered approach shown by them. All
								these efforts were truly beneficial to the students for their
								career and their future.) look forward to participating in many
								such more competitions held by the team.
						</small></p>						
					</div>
					<div class="carousel-item text-center">
						<img src="{{asset('public/assetsanyar/img/testimonials/st1.jpg')}}" style="border-radius: 50%; width:130px; height:130px; border:6px solid #37357bf5;">
						<h4 class="text-center font-weight-bold">Vinay Sheth  - 3<sup>rd</sup> Winner</h4>
						<p class="col-md-10 m-auto"><small>It was an amazing experience taking part in the Harmony
							Poetry Recitation Competition organized by SCOPE, Govt. of
							Gujarat. It is rightly said that poetry is the rhythmical
							creation of beauty in words; and to reiterate this, SCOPE
							encouraged all the participants to recite a poem using all
							the skills of a good dramatic presentation. I am glad that I
							won the 3rd prize. I eagerly await for more such events
							which provide an opportunity to the participants to
							enhance their language proficiency.
						</small></p>						
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators"
					role="button" data-slide="prev"> <span
					class="carousel-control-prev-icon" aria-hidden="true"></span> <span
					class="sr-only text-info">Previous</span>
				</a> <a class="carousel-control-next" href="#carouselExampleIndicators"
					role="button" data-slide="next"> <span
					class="carousel-control-next-icon" aria-hidden="true"></span> <span
					class="sr-only text-info">Next</span>
				</a>
			</div>

		</div>
	</section>-->
	<!-- End Clients Section -->
	<!-- ======= Clients Section ======= -->
	<section id="clients" class="clients">
		<div class="container" data-aos="zoom-in">

			<div class="owl-carousel clients-carousel">
				<img src="{{asset('public/assetsanyar/img/clients/u1.jpg')}}" alt=""> <img
					src="{{asset('public/assetsanyar/img/clients/u2.png')}}" alt=""> <img
					src="{{asset('public/assetsanyar/img/clients/u3.jpg')}}" alt=""> <img
					src="{{asset('public/assetsanyar/img/clients/u44.jpg')}}" alt=""> <img
					src="{{asset('public/assetsanyar/img/clients/u5.png')}}" alt=""> <img
					src="{{asset('public/assetsanyar/img/clients/u6.jpg')}}" alt=""> <img
					src="{{asset('public/assetsanyar/img/clients/u7.png')}}" alt=""><img
					src="{{asset('public/assetsanyar/img/clients/u8.png')}}" alt="">
			</div>

		</div>
	</section>
	<!-- End Clients Section -->
	</main>
	<!-- End #main -->

  @endsection
