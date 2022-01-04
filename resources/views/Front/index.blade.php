@extends('Front.layout')

@section('content')
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>{{json_decode($banner->content,true)['title']}}</h5>
                            <h1>{{json_decode($banner->content,true)['sub_title']}}</h1>
                            <p>{{json_decode($banner->content,true)['desc']}}</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3 align-self-center">
                    <div class="single_feature_text ">
                        <h2>{{json_decode($feature->content,true)['title']}}</h2>
                        <p>{{json_decode($feature->content,true)['desc']}} </p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-layers"></i></span>
                            <h4>{{json_decode($chart1->content,true)['title']}}</h4>
                            <p>{{json_decode($chart1->content,true)['desc']}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                            <h4>{{json_decode($chart2->content,true)['title']}}</h4>
                            <p>{{json_decode($chart2->content,true)['desc']}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                            <h4>{{json_decode($chart3->content,true)['title']}}</h4>
                            <p>{{json_decode($chart2->content,true)['desc']}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->


    <!-- member_counter counter start -->
    <section class="member_counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{$courses_count}}</span>
                        <h4>All Courses</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{$trainers_count}}</span>
                        <h4> All Trainers</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{$students_count}}</span>
                        <h4>All Students</h4>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- member_counter counter end -->

    <!--::review_part start::-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>{{json_decode($special_cource->content,true)['title']}}</p>
                        <h2>{{json_decode($special_cource->content,true)['sub_title']}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($courses as $course)
                    <div class="col-sm-6 col-lg-4">
                        <div class="single_special_cource">
                            <img src="{{asset('uploads/courses/'. $course->img)}}" class="special_img" alt="">
                            <div class="special_cource_text">
                                <a href="{{route('Front.cat',$course->cat->id)}}"
                                   class="btn_4">{{$course->cat->name}}</a>
                                <h4>${{$course->price}}</h4>
                                <a href={{route('Front.show',[$course->cat->id,$course->id])}}>
                                    <h3>{{$course->name}}</h3></a>
                                <p>{{$course->small_desc}}</p>
                                <div class="author_info">
                                    <div class="author_img ">
                                        <img class="pb-2" src="{{asset('uploads/trainers/'. $course->trainer->img)}}"
                                             alt="">
                                        <div class="author_info_text ">
                                            <p class="text-center ml-3">Conduct by:</p>
                                            <h5 class="text-center ml-3">{{$course->trainer['name']}}</h5>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                @endforeach



            </div>
        </div>
    </section>
    <!--::blog_part end::-->



    <!--::review_part start::-->
    <section class="testimonial_part padding_top pb-5"   >
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>{{json_decode($testimonial->content,true)['title']}}</p>
                        <h2>{{json_decode($testimonial->content,true)['sub_title']}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel">
                        @foreach ($tests as $test)
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>{{$test->desc}}</p>
                                        <h4>{{$test->name}}</h4>
                                        <h5> {{$test->spec}}</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="{{asset('uploads/test/'.$test->img)}}" alt="#">
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
    <!--::blog_part end::-->


    @endsection
