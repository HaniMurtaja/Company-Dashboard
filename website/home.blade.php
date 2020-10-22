@extends('website.layout.websiteLayout')
@section('content')

		<section class="section_home">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-5 col-sm-7">
						<div class="home_txt">
							<h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.500s">Get <strong>Allemni</strong> App Now!</h2>
							<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.600s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
							<ul class="buttons_store clearfix wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.700s">
								<li><a href="{{$setting->play_store_url }}" class="google_store"><i class="zmdi zmdi-google-play"></i>Google play</a></li>
								<li><a href="{{$setting->app_store_url }}" class="apple_store"><i class="zmdi zmdi-apple"></i>App Store</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-offset-1 col-md-5 col-sm-5">
						<div class="home_thumbs wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.500s">
							<div id="">
								<img src="{{url('frontasset/images/M.png')}}" alt="" class="img-responsive">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--section_home-->
		<section class="section_services">
			<div class="seThumb">
				<img src="{{url('frontasset/images/sbg.png')}}" alt="" class="img-responsive">
			</div>
			<div class="container">
				<div class="sec_head wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.500s">
                <h2>{{__('website.subjects-available')}}</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
				</div>
				<div class="sec_warpper">
					<div class="services_list">
						<div class="row">

                         @foreach($subjects as $subject)
							<div class="col-md-3 col-sm-6">
								<div class="serv_item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.600s">
									<div class="serv_icon">
										<img src="{{url('frontasset/images/undraw_Books.png')}}" alt="" class="img-responsive">
									</div>
									<div class="serv_txt">
									    <h3>{{$subject->name}}</h3>
										<p>  {{__('website.code-no')}} : <span>{{$subject->code_no}}</span></p>
										<p>{{__('website.University')}} : <span>University Name</span></p>
										{{-- <p>University : <span>{{$subject->specialist()->university_id}}</span></p> --}}
									</div>
								</div>
							</div>
						
						@endforeach
						</div>
						<a class="viewAll wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.500s" href="subjects">View All</a>
					</div>
				</div>
			</div>
		</section>
		<!--section_services-->
		<section class="section_teachers">
			<div class="container">
				<div class="sec_head wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.500s">
					<h2>{{__('website.Teachers')}}</h2>
				</div>
				<div class="sec_warpper">
					<div class="teacher_list">
						<div class="row is-flex">

						@foreach($teachers as $teacher)
							<div class="col-sm-6">
								<div class="teacher_item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.600s">
									<div class="imgBoxTeacher" style="background-image:url(images/BGTeacher.png)">
										<img src="{{$teacher->image}}" />
									</div>
									<div class="box_teacher">
									<h3>{{$teacher->user_name}}</h3>
                                <p>{{$teacher->email}} </p>
                                <p>{{$teacher->mobile}} </p>
                                <p>{{$teacher->description}} </p>
                                <p>{{$teacher->Subject}} </p>
										<div class="number_item">
											<p><img src="frontasset/images/star.svg" /> <span>{{$teacher->avarage_rate}}</span></p>
											<p><img src="frontasset/images/iconSubject.svg" /> <span>100 Subject</span></p>
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
						<a class="viewAll wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.500s" href="teachers">View All</a>
					</div>
				</div>
			</div>
		</section>
		<!--section_faq-->
		<section class="section_testimonials">
			<div class="container">
				<div class="boxTestimonials">
					<div class="home_thumbs wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.500s">
						<div class="owl-carousel" id="screen_slide">
							<div class="item row">
								<div class="col-md-4">
									<div class="userTitle">
										<h5>Ala Fsifes</h5>
										<p>Loreim ispum Loreim ispum Loreim ispum Loreim ispum Loreim ispum Loreim ispum</p>
									</div>
								</div>
								<div class="secContent col-md-8">
									<figure>
										<img src="frontasset/images/cbg.png" alt="" class="img-responsive">
									</figure>
									<div class="secTitle">
										<p>Loreim ispum Loreim ispum Loreim ispum Loreim ispum Loreim ispum Loreim ispum</p>
										<h5>Hexa Cit</h5>
									</div>
								</div>
							</div>
							<div class="item row">
								<div class="col-md-4">
									<div class="userTitle">
										<h5>Ala Fsifes</h5>
										<p>Loreim ispum Loreim ispum Loreim ispum Loreim ispum Loreim ispum Loreim ispum</p>
									</div>
								</div>
								<div class="secContent col-md-8">
									<figure>
										<img src="frontasset/images/cbg.png" alt="" class="img-responsive">
									</figure>
									<div class="secTitle">
										<p>Loreim ispum Loreim ispum Loreim ispum Loreim ispum Loreim ispum Loreim ispum</p>
										<h5>Hexa Cit</h5>
									</div>
								</div>
							</div>
							<div class="item row">
								<div class="col-md-4">
									<div class="userTitle">
										<h5>Ala Fsifes</h5>
										<p>Loreim ispum Loreim ispum Loreim ispum Loreim ispum Loreim ispum Loreim ispum</p>
									</div>
								</div>
								<div class="secContent col-md-8">
									<figure>
										<img src="frontasset/images/cbg.png" alt="" class="img-responsive">
									</figure>
									<div class="secTitle">
										<p>Loreim ispum Loreim ispum Loreim ispum Loreim ispum Loreim ispum Loreim ispum</p>
										<h5>Hexa Cit</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--section_testimonials-->
		<section class="section_contact">
			<div class="container">
				<div class="sec_head wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.500s">
					<h2>contact us</h2>
				</div>
				<div class="sec_warpper">
					<div class="contact_warpper">
						<div class="row">
							<div class="col-md-8 col-sm-7 bgc1">
								<div class="contact_left">
									<h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.500s">Get In Touch With Us</h2>
									<form class="form_contact" method=post action="{{url('contact/store')}}">
										{{ csrf_field() }}
										<div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.550s">
											<label for="Name">Name</label>
											<input type="text" class="form-control" id="Name" name="name">
										</div>
										<div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.600s">
											<label for="Email">Email</label>
											<input type="email" class="form-control" id="Email" name="email">
										</div>
										<div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.650s">
											<label for="Phone">Phone</label>
											<input type="text" class="form-control" id="mobile" name="mobile">
										</div>
										<div class="form-group wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.700s">
											<label for="Message">Message</label>
											<textarea class="form-control" id="Message" name="message"></textarea>
										</div>
										<button type="submit" class="btn btn_contact wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.750s">SEND MESSAGE</button>
									</form>
								</div>
							</div>
							<div class="col-md-4 col-sm-5 bgc2">
								<div class="contact_info_box wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.600s">
									<h2>Contact Information</h2>
									<ul>
										<li class="li_location">
											<img src="{{url('frontasset/images/map.png')}}" alt="">
											{{$setting->address}}<br>
											Al Salmeya<br>
											Al Karama Towr
										</li>
										<li class="li_phone">
											<img src="{{url('frontasset/images/phone_icon.png')}}" alt="">
											{{$setting->phone}}
										</li>
										<li class="li_email">
											<img src="{{url('frontasset/images/email.png')}}" alt="">
											{{$setting->info_email }}
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </section>
        @endsection    



	