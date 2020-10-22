@extends('website.layout.websiteLayout')

@section('title')  {{ucwords(__('cp.subject'))}}
@endsection
@section('content')


<section class="section_services">
    {{-- <div class="seThumb">
        <img src="{{url('frontasset/images/sbg.png')}}" alt="" class="img-responsive">
    </div> --}}
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
                                <p>{{__('website.code-no')}}: <span>{{$subject->code_no}}</span></p>
                                <p> {{__('website.University')}} : <span>University Name</span></p>
                                {{-- <p>University : <span>{{$subject->specialist()->university_id}}</span></p> --}}
                            </div>
                        </div>
                    </div>
                
                @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
