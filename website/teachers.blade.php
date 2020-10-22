@extends('website.layout.websiteLayout')
@section('content')


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
            </div>
        </div>
    </div>
</section>
@endsection