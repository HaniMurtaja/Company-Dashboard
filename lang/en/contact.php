<?php

return [
    'title' => 'Contact Us Messages Management',
    'contacts' => 'Contacts ',
    'delete_msg' => 'You are about to delete Contact',
    'delete_done' => 'Contact has been Deleted!',
    'delete_cancel' => 'Contact deletion canceled!',
];

?>
@extends('website.layout.websiteLayout')
@section('content')
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