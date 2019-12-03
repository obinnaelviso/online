@extends('master')

@section('content')

        <div class="row " id="overlay">
            <div id="homeSlider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#homeSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#homeSlider" data-slide-to="1"></li>
					<li data-target="#homeSlider" data-slide-to="2"></li>
					<li data-target="#homeSlider" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active ">
                        <img src="assets/img/slider/tech3.jpg" class="navy" alt="slide">
                        <div class="carousel-caption">
							<!--<h4><i class="fa fa-star-o"></i>WE EMPOWER YOU TO CREATE<i class="fa fa-star-o"></i></h4>-->
                            <h2 style="text-shadow: 2px 2px 2px black">EDUCATE <span><i class="fa fa-graduation-cap"></i>ILLUMINATE</span> <span> <i class="fa fa-graduation-cap"></i> </span> CREATE</h2>
                  <!--            <p>We here at <strong>UNIVERSITI MALAYA</strong> provides best education <br />  </p>-->
                        <!--    <a href="#"><i class="fa fa-paper-plane"></i>KNOW MORE</a>-->
                        </div>
                    </div>

                    <div class="item">
                        <img src="assets/img/slider/tech2.jpg" class="navy"  alt="slide">
                        <div class="carousel-caption">
						<!--	<h4><i class="fa fa-star-o"></i>WE EMPOWER YOU TO CREATE<i class="fa fa-star-o"></i></h4>-->
                            <h2 style="text-shadow: 2px 2px 2px black">EDUCATE <span><i class="fa fa-graduation-cap"></i>ILLUMINATE</span> <span> <i class="fa fa-graduation-cap"></i> </span> CREATE</h2>
                        <!--      <p>We here at <strong>UNIVERSITI MALAYA</strong> provides best education <br />  </p>-->
                          <!--    <a href="#"><i class="fa fa-paper-plane"></i>KNOW MORE</a>-->
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/img/slider/tech4.jpg" class="navy" alt="slide2">
                        <div class="carousel-caption">
						<!--	<h4><i class="fa fa-star-o"></i>WE EMPOWER YOU TO CREATE<i class="fa fa-star-o"></i></h4>-->
                           <h2 style="text-shadow: 2px 2px 2px black">EDUCATE <span><i class="fa fa-graduation-cap"></i>ILLUMINATE</span> <span> <i class="fa fa-graduation-cap"></i> </span> CREATE</h2>
                      <!--      <p>We here at <strong>UNIVERSITI MALAYA</strong> provides best education <br />  </p>-->
                            <!--    <a href="#"><i class="fa fa-paper-plane"></i>KNOW MORE</a>-->
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/img/slider/tech5.jpg" class="navy" alt="slide2">
                        <div class="carousel-caption">
						<!--	<h4><i class="fa fa-star-o"></i>WE EMPOWER YOU TO CREATE<i class="fa fa-star-o"></i></h4>-->
                           <h2 style="text-shadow: 2px 2px 2px black">EDUCATE <span><i class="fa fa-graduation-cap"></i>ILLUMINATE</span> <span> <i class="fa fa-graduation-cap"></i> </span> CREATE</h2>
                      <!--      <p>We here at <strong>UNIVERSITI MALAYA</strong> provides best education <br />  </p>-->
                            <!--    <a href="#"><i class="fa fa-paper-plane"></i>KNOW MORE</a>-->
                        </div>
                    </div>
                </div>

                <!-- Slide Controls -->
                <a class="left carousel-control" href="#homeSlider" role="button" data-slide="prev">
                    <span class="fa fa-arrow-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#homeSlider" role="button" data-slide="next">
                    <span class="fa fa-arrow-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

		<!-- Principal Intro Section -->
		<div class="row principal-intro-row">
			<div class="container">
				<div class="col-sm-5">
					<br/><br/><br/><br/>
					<img src="assets/img/once.png" alt="OnCE"/>
				</div>
				<div class="col-sm-7 principal-intro">
					<!--<h6><i class="fa fa-star-o"></i><span>MEET OUR FOUNDER</span><i class="fa fa-star-o"></i></h6>-->
					<h3>ABOUT OnCE</h3>
					<p>OnCE (Online-Based Community Ecosystem) is an ecosystem for higher learning students to enhance their depth of knowledge in their field of study, interconnectedness of their methods of
            learning and give them an expanded exposure. <br/><br/><br/>
            It is a learning community of educators and their knowledge, students eager to learn, potential clients who need the innovations
            student’s research and develop should have a domain that can be related to as an ecosystem, thereby creating a culture,
            a way of life that is structured and well managed for effective learning and not just confined to the walls of a classroom,
            lecture notes, assessments, assignments and examinations. This is for the perpetual demand in Educating to be accessible at one stop point.
 <br/><br/><br/>
This ecosystem is developed to create better-evolved graduates with experience not just confined to lectures, lecture notes, assessments,
assignments and examinations, and also cub data redundancy which is a current issue in universities.

				</div>
			</div>
		</div>

		<!-- Events Section -->

		<div class="row section-row evets-row">
			<div class="container">
				<div class="section-row-header-center">
					<h6><i class="fa fa-star-o"></i>WE EMPOWER YOU TO CREATE<i class="fa fa-star-o"></i></h6>
					<h1>UPCOMING EVENTS - OnCE</h1>
					<p>Register for any upcoming events before they get filled and watch our production team</p>
				</div>
				<div class="col-sm-12">
					<div class="event-tab-link-box">
						<div class="pull-center">
							<ul class="nav nav-tabs">
								<li class="active">
									<a  href="#1" data-toggle="tab"><i class="fa fa-building"></i><span>SEMINARS</span></a>
								</li>
								<li>
									<a href="#2" data-toggle="tab"><i class="fa fa-users"></i><span>TECHNOSPHERE</span></a>
								</li>
								<li>
									<a href="#3" data-toggle="tab"><i class="fa fa-envelope"></i><span>BUDDING INVENTORS</span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="tab-content">
					<div class="tab-pane active" id="1">
						<div class="">
								<div class="event-item">
									<div class="col-sm-7">
										<div class="event-date">
											<p><span>29-30</span>APRIL</p>
										</div>
										<h3>International Summit of Innovations and Design Exposition (InSIDE 2019)</h3>
										<h6><i class="fa fa-map-marker"></i>Faculty of Education, University of Malaya.</h6>
										<p>This Conference is aimed at providing opportunities for educators, researchers, academicians and postgraduate students to share their latest research findings and views on various aspects of Education to improve students' knowledge and skills for the 21st century.</p>
									</div>
									<div class="col-sm-5 event-item-img">
										<div class="event-img">
											<img src="assets/img/inside.png" alt="event" />
											<div class="event-detail-link">
												<a href="https://docs.google.com/forms/d/e/1FAIpQLScad9ATJauchth5X7xkW8RKbCRWw1A0lX21keXkDDUywEdPqA/viewform" target="_blank" >REGISTER</a>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>

						</div>

					</div>
					<div class="tab-pane" id="2">
						<div class="">
								<div class="event-item">
									<div class="col-sm-7">
										<div class="event-date">
											<p><span>21</span>MAR</p>
										</div>
										<h3>FILMING</h3>
										<h6><i class="fa fa-map-marker"></i>SLAB</h6>
										<p>Filming episodes for OnCE TV and Radio</p>
									</div>
									<div class="col-sm-5 event-item-img">
										<div class="event-img">
											<img src="assets/img/intechpro.jpg" alt="event" />
											<div class="event-detail-link">
												<a href="login">VIEW DETAILS</a>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="event-item">
									<div class="col-sm-7">
										<div class="event-date">
											<p><span>22</span> MAR</p>
										</div>
										<h3>Online Broadcast </h3>
										<h6><i class="fa fa-map-marker"></i>SLAB</h6>
										<p>Online radio broadcast</p>
									</div>
									<div class="col-sm-5 event-item-img">
										<div class="event-img">
											<img src="assets/img/school1.jpg" alt="event" />
											<div class="event-detail-link">
												<a href="#">VIEW DETAILS</a>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
						</div>
					</div>
					<div class="tab-pane" id="3">
						<div class="">
								<div class="event-item">
									<div class="col-sm-7">
										<div class="event-date">
											<p><span>11-12</span>DEC</p>
										</div>
										<h3>BUDDING INVENTORS CAMP 2019</h3>
										<h6><i class="fa fa-map-marker"></i>Faculty of Education, University of Malaya.</h6>
										<p>
											🤔 how to spend school holidays wisely <br>
											💡kids being inventors <br>
											🖱creative minds <br>
											<br>
											<h4>📲 VISIT!!! 👇</h4>
											<b><a href="https://www.facebook.com/Budding-Inventors-Camp-111683580286394/?modal=admin_todo_tour" class="btn btn-primary" target="_blank"><i class="fa fa-facebook"></i> OUR FACEBOOK PAGE</a></b><br>
											<br>
											<b><a style="font-size: 18px" href="https://forms.gle/bHmz1qh9wnegAZCJ9" target="_blank" class="btn btn-danger btn-lg"><i class="fa fa-home"></i> CLICK TO REGISTER NOW!</a></b>
										</p>
									</div>
									<div class="col-sm-5 event-item-img">
										<div class="event-img">
											<img src="assets/img/bic2019.jpg" alt="event" />
											<div class="event-detail-link">
												<a href="/assets/img/bic2019.jpg" target="_blank" download>VIEW DETAILS</a>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- Our Teaacher section -->
		<div class="row section-row teacher-row">
			<div class="container">
				<div class="section-row-header-center">
					<h6><i class="fa fa-star-o"></i>WE EMPOWER YOU TO CREATE<i class="fa fa-star-o"></i></h6>
					<h1>MEET OUR CONTRIBUTORS</h1>
					<p></p>
				</div>

				<div class="teacher-item col-sm-6 col-md-4 teacher-about-row">
					<div class="teacher-about-row-inner">
						<h5><i class="fa fa-user"></i>DR. RAFIZA BINTI ABDUL RAZAK</h5>
						<div class="teacher-item-inner">
							<p class="teacher-desc">
								Dr Rafiza  is currently the Head of Department of Curriculum and Instructional Technology (CITeD), Faculty of Education.  An innovative leader  who creatively rebrand the department to uplift and boost the departments’ wellbeing.  Her interest in frugal  innovation and creativity inspires her to design and develop several facilities at the Faculty of Education.  She is the creator and founder of the Online Community-based Ecosystem (OnCE) which includes her other inventions such as InTechPro, Inventors Hub and InTecH. One of her many seminars includes InSIDE 2019.

							</p>

							<div class="col-xs-4 clear-padding teacher-img">
								<img src="assets/img/rafiza.jpg" alt="teacher" />
							</div>
							<div class="col-xs-8 teacher-details">
								<p><strong>SENIOR LECTURER</strong></p>
								<p><i>PhD(2011) (UIAM), UNIVERSITI ISLAM ANTARABANGSA (UIAM)</i></p>
								<p>
									<!--<a href="#"><i class="fa fa-facebook" target="_blank"></i></a>-->
									<a href="mailto:rafiza@um.edu.my" target="_blank"><i class="fa fa-envelope"></i></a>

								</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="teacher-know-more-link">
							<a href="https://umexpert.um.edu.my/rafiza.html" target="_blank"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
						</div>
					</div>
				</div>
				<div class="teacher-item col-sm-6 col-md-4 teacher-about-row">
					<div class="teacher-about-row-inner">
						<h5><i class="fa fa-user"></i>DR. SITI HAJAR BINTI HALILI</h5>
						<div class="teacher-item-inner">
							<p class="teacher-desc">
								Dr. Siti Hajar Halili is a Senior Lecturer at University of Malaya, Kuala Lumpur. She was formerly with the Research Division, Prime Minister Department, Malaysia. She holds a Degree in Information System Management from the UT MARA, Master in Educational Technology and PhD. in Adult Education Technology from the University Sains Malaysia. Her works are published in ISI, SCOPUS, IRRODL, IJLT, MJLM, TOJET, Procedia of Social & Behavioral Sciences, Australian Journal of Basic and Applied Sciences, ASEAN Journal of Teaching & Learning in Higher Education etc.

							</p>

							<div class="col-xs-4 clear-padding teacher-img">
								<img src="assets/img/parent/sitihajar.jpg" alt="teacher" />
							</div>
							<div class="col-xs-8 teacher-details">
								<p><strong>SENIOR LECTURER</strong></p>
								<p><i>PhD(USM)(2012), UNIVERSITI SAINS MALAYSIA (USM)</i></p>
								<p>
								<!--<a href="#"><i class="fa fa-facebook" target="_blank"></i></a>-->
									<a href="mailto:siti_hajar@um.edu.my" target="_blank"><i class="fa fa-envelope"></i></a>

								</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="teacher-know-more-link">
							<a href="https://umexpert.um.edu.my/siti_hajar" target="_blank"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
						</div>
					</div>
				</div>
				<div class="teacher-item col-sm-6 col-md-4 teacher-about-row">
					<div class="teacher-about-row-inner">
						<h5><i class="fa fa-user"></i>DR. MOHD SHAHRIL NIZAM SHAHAROM</h5>
						<div class="teacher-item-inner">
							<p class="teacher-desc">
								Sarel became interested in the field of e-learning when he volunteered to be one of the participants in 2004 at one of the public universities e-learning in projects. Then with his background as a bachelor degree in computer Science, software engineering holder, he started seriously learn how to design and integrate e-learning with other education concept and also with additional technical functions to enhance student's opportunity in their learning.
								According to him, every engagement provided by the community in the online environment is about building up motivation.
							</p>
							<div class="col-xs-4 clear-padding teacher-img">
								<img src="assets/img/parent/shahril.jpg" alt="teacher" />
							</div>
							<div class="col-xs-8 teacher-details">
								<p><strong> SENIOR LECTURER</strong></p>
								<p><i>SARJANA PENDIDIKAN (TEKNOLOGI PENDIDIKAN), UTM</i></p>
								<p>
								<!--<a href="#"><i class="fa fa-facebook" target="_blank"></i></a>-->
									<a href="mailto:nizamsaril@um.edu.my"><i class="fa fa-envelope"></i></a>
									<a href="tel:+603-79675022"><i class="fa fa-phone"></i></a>
								</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="teacher-know-more-link">
							<a href="https://umexpert.um.edu.my/nizamsaril" target="_blank"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
						</div>
					</div>
				</div>


				<div class="teacher-item col-sm-6 col-md-4 teacher-about-row">
					<div class="teacher-about-row-inner">
						<h5><i class="fa fa-user"></i>DR. CHIN HAI LENG</h5>
						<div class="teacher-item-inner">
							<p class="teacher-desc">
								Dr. Chin is one of the Committee members for upgrading Faculty Online Journal (JUKU, MOJET), 01/08/2016 to 31/12/2018 (Committee member for upgrading Faculty Online journal) and also a Committee member for Undergraduate Program Time Table, 01/08/2016 to 31/12/2018 (Committee member for Undergraduate Program Time Table). She is the Editor of Malaysian Online Journal of Educational Technology (MOJET), 01/01/2018 to 31/12/2018 (Editor of MOJET)Programme Coordinator, 01/11/2017 to 31/12/2018 (Coordinator of Open distance Learning)
							</p>
							<div class="col-xs-4 clear-padding teacher-img">
								<img src="assets/img/parent/chin.jpg" alt="teacher" />
							</div>
							<div class="col-xs-8 teacher-details">
								<p><strong> SENIOR LECTURER</strong></p>
								<p><i>PhD(2009) (UM), UNIVERSITY OF MALAYA (UM)</i></p>
								<p>
									<!--<a href="#"><i class="fa fa-facebook" target="_blank"></i></a>-->
									<a href="mailto:chin@um.edu.my" target="_blank"><i class="fa fa-envelope"></i></a>
									<a href="tel:+6o3-79675170"><i class="fa fa-phone"></i></a>
								</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="teacher-know-more-link">
							<a href="https://umexpert.um.edu.my/chin.html"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
						</div>
					</div>
				</div>
				<div class="teacher-item col-sm-6 col-md-4 teacher-about-row">
					<div class="teacher-about-row-inner">
						<h5><i class="fa fa-user"></i>DR. TEE MENG YEW</h5>
							<div class="teacher-item-inner">
							<p class="teacher-desc">
								Dr. Tee is an expert in Teacher Education	(Knowledge building/construction; classroom practice; teaching and learning processes [active learning; inquiry learning, etc]; qualitative research; action research). He was a memeber of the Centre for Research in International and Comparative Education (CRICE), from 2016 to 2017, (International) and also Ahli, Jawatankuasa Etika Penyelidikan Kemanusiaan (bukan Perubatan), University Malaya, from 13/09/2017 to 31/01/2019 and his lastest publication is the 2017 Education in Malaysia: Developments and challenges.
							</p>
							<div class="col-xs-4 clear-padding teacher-img">
								<img src="assets/img/parent/tee.jpg" alt="teacher" />
							</div>
							<div class="col-xs-8 teacher-details">
								<p><strong> SENIOR LECTURER</strong></p>
								<p><i>PhD, UNIVERSITY OF KANSAS, LAWRENCE, KANSAS</i></p>
								<p>
										<!--<a href="#"><i class="fa fa-facebook" target="_blank"></i></a>-->
									<a href="mailto:mytee@um.edu.my" target="_blank"><i class="fa fa-envelope"></i></a>
									<a href="tel:+603-79675044" target="_blank"><i class="fa fa-phone"></i></a>
								</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="teacher-know-more-link">
							<a href="https://umexpert.um.edu.my/mytee" target="_blank"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
						</div>
					</div>
				</div>
				<br/><br/>
				<div class="teacher-item col-sm-6 col-md-4 teacher-about-row">
					<div class="teacher-about-row-inner">
						<h5><i class="fa fa-user"></i>ASSOCIATE PROF. DR. DOROTHY DEWITT</h5>
							<div class="teacher-item-inner">
							<p class="teacher-desc">
								Dr. Dorothy DeWitt is a Senior Lecturer in the Curriculum and Instructional Technology Department, University Malaya and a recipient of the Endeavour Executive Fellowship from the government of Australia. She was formerly with the Educational Technology Division (ETD), Ministry of Education, Malaysia, where she was involved in the Smart School Pilot Project in change management and managing the development of digital materials during the project. Also, she was involved in the research, management & promotion of innovation in instruction.
							</p>
							<div class="col-xs-4 clear-padding teacher-img">
								<img src="assets/img/parent/dorothy.jpg" alt="teacher" />
							</div>
							<div class="col-xs-8 teacher-details">
								<p><strong> SENIOR LECTURER</strong></p>
								<p><i>PhD, <br/>UNIVERSITY OF MALAYA (UM)</i></p>
								<p>
										<!--<a href="#"><i class="fa fa-facebook" target="_blank"></i></a>-->
									<a href="mailto:dorothy@um.edu.my"><i class="fa fa-envelope"></i></a>
									<a href="tel:+603-79675128"><i class="fa fa-phone"></i></a>
								</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="teacher-know-more-link">
							<a href="https://umexpert.um.edu.my/dorothy" target="_blank"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
						</div>
					</div>
				</div>
				<div class="teacher-item col-sm-6 col-md-4 teacher-about-row">
					<div class="teacher-about-row-inner">
						<h5><i class="fa fa-user"></i>ASSOCIATE PROF. DR. NORLIDAH ALIAS</h5>
							<div class="teacher-item-inner">
							<p class="teacher-desc">
								Dr. Norlidah Alias is an  Associate Professor at the Department of Curriculum and Instructional Technology, Faculty of Education, University of Malaya, Kuala Lumpur, Malaysia. She holds a Ph.D. in Curriculum Design and Development from the University of Malaya.
								Dr. Norlidah actively researches and publishes in the areas of Pedagogical Module based on technology and learning styles, homeschooling, collaborative mobile learning and Gerontology. Her homeschooling research is the first of its kind in Malaysia.
							</p>
							<div class="col-xs-4 clear-padding teacher-img">
								<img src="assets/img/parent/norlidah.jpg" alt="teacher" />
							</div>
							<div class="col-xs-8 teacher-details">
								<p><strong> SENIOR LECTURER</strong></p>
								<p><i>PHD, UM (2010), UNIVERSITY OF MALAYA (UM)</i></p>
								<p>
									<!--<a href="#"><i class="fa fa-facebook" target="_blank"></i></a>-->
									<a href="mailto:drnorlidah@um.edu.my"><i class="fa fa-envelope"></i></a>
									<a href="tel:+6o3-79675170"><i class="fa fa-phone"></i></a>
								</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="teacher-know-more-link">
							<a href="https://umexpert.um.edu.my/chin.html"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
						</div>
					</div>
				</div>
				<div class="teacher-item col-sm-6 col-md-4 teacher-about-row">
					<div class="teacher-about-row-inner">
						<h5><i class="fa fa-user"></i>DR. FARRAH DINA BINTI YUSOP</h5>
							<div class="teacher-item-inner">
							<p class="teacher-desc">
								Dr. Farrah has wide experiences in the area of teaching and training, both locally and internationally, in the area of educational
                technology and instructional design. She is also University of Malaya’s e-learning coordinator who is responsible in managing lecturers’
                active use of technology for teaching and learning purposes. Dr. Farrah won the PEO International Peace Scholarship, USA,
                the Richard and Shirley Warren Scholarship, USA and the International Association of Research in Service-Learning & Community Engagemen,
                USA awards in her academic endeavors.
							</p>
							<div class="col-xs-4 clear-padding teacher-img">
								<img src="assets/img/parent/farrah.jpg" alt="teacher" />
							</div>
							<div class="col-xs-8 teacher-details">
								<p><strong> SENIOR LECTURER</strong></p>
								<p><i>PhD(2013) (ISU), IOWA STATE UNIVERSITY, AMES, USA</i></p>

								<p>
									<!--<a href="#"><i class="fa fa-facebook" target="_blank"></i></a>-->
									<a href="mailto:farah@um.edu.my"><i class="fa fa-envelope"></i></a>
									<a href="tel:+603-79677816"><i class="fa fa-phone"></i></a>
								</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="teacher-know-more-link">
							<a href="https://umexpert.um.edu.my/farah.html"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
						</div>
					</div>
				</div>
				<div class="teacher-item col-sm-6 col-md-4 teacher-about-row">
					<div class="teacher-about-row-inner">
						<h5><i class="fa fa-user"></i>MR. HAJI NORHASHIMI BIN SAAD</h5>
							<div class="teacher-item-inner">
							<p class="teacher-desc">
							Mr. Haji Norhashimi is a Researcher (Academic) - FACULTY OF EDUCATION; Department of Curriculum & Instructional Technology, Universiti Malaya.
              His areas of expertise are Education (Instructional Design), Web-Based Instruction, Computer Education and Islamic Education.
              He currently teaches ACADEMIC PROJECT, PRINCIPLES OF INSTRUCTIONAL TECHNOLOGY, INSTRUCTIONAL MEDIA, TECHNOLOGY ISLAMIC EDUCATION,
            BASIC OF ENTREPRENEURSHIP CULTURE, WEB & SCHOOL NETWORKING,INSTRUCTIONAL AND INTERNET.
							</p>
							<div class="col-xs-4 clear-padding teacher-img">
								<img src="assets/img/parent/saad.jpg" alt="teacher" />
							</div>
							<div class="col-xs-8 teacher-details">
								<p><strong> SENIOR LECTURER</strong></p>
								<p><i>MA(WARWICK)(1996), WARWICK UNIVERSITY, UK</i></p>
								<p>
									<!--<a href="#"><i class="fa fa-facebook" target="_blank"></i></a>-->
									<a href="mailto:hashimi@um.edu.my"><i class="fa fa-envelope"></i></a>
									<a href="tel:+60379675071"><i class="fa fa-phone"></i></a>
								</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="teacher-know-more-link">
							<a href="https://umexpert.um.edu.my/hashimi"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
						</div>
					</div>
				</div>
			</div>
		</div>


	@endsection
