@extends('website.layout.websiteLayout')

@section('title')  {{ucwords(__('cp.subject'))}}
@endsection
@section('content')

    
<div class="content_innerPage">
			<div class="container">
				<div class="box_white">
					<div class="row">
						<div class="col-sm-8">
							<div class="box_about">
								<h2>FAQ</h2>

								<h3>How can i download the apps ??</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standar</p>

                                <h3>Can I ask about the services provided??</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
				
                               <h3>How can i download the apps ??</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standar</p> 

                       
                                </div>
						</div>


                        <div class="col-sm-4">
							<div class="faq_thumb">
								<img src="images/faq.png" alt="" class="img-responsive">
							</div>
						</div>


                
               
                    
                
               
                    
                       


                            
                </div>
            </div>
        </div>
    </div>


    <style>

content_innerPage{
  padding: 60px 0;
}
.box_white{
  position: relative;
  background-color: #fff;
  padding: 30px 20px 30px;
  margin-bottom: 30px;
  -webkit-box-shadow: 0px 62px 64px 0px rgba(0,0,0,0.06);
  -moz-box-shadow: 0px 62px 64px 0px rgba(0,0,0,0.06);
  box-shadow: 0px 62px 64px 0px rgba(0,0,0,0.06);
}
.box_about > h2{
  color: #000000;
  font-size: 28px;
  margin-bottom: 30px;
}
.box_about > p{
  color: #9B9B9B;
  font-size: 15px;
  margin-bottom: 30px;
}
.box_about > h3{
  color: #000000;
  font-size: 22px;
  letter-spacing: 1px;
  margin-bottom: 20px;
}
.faq_thumb{
  text-align: center;
  margin: 100px auto 0;
}
.faq_thumb > img{
  margin: auto;
}
.title_box{
  color: #000000;
  font-size: 28px;
  margin-bottom: 30px;
}

</style>

@endsection