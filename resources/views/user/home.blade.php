@extends('layouts.mst_dashboard')
@section('content')

    <!-- HOME SLIDER -->
    <div class="slider-wrap" id="top">
        <div class="fullwidthbanner-container">
            <div class="fullwidthbanner-4">
                <ul>
                    <!-- SLIDE  1-->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="300"
                        data-thumb="img/slider/slider-4/bg.jpg" data-saveperformance="off" data-title="Slide1">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('img/slider/slider-4/bg.jpg')}}" alt="bg" data-bgposition="center top"
                             data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption intensy_slider4_slide1_t1white h1 sfl tp-resizeme"
                             data-x="0"
                             data-y="center" data-voffset="-33"
                             data-speed="800"
                             data-start="500"
                             data-easing="easeInOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"

                             style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;"><h1>WELCOME TO
                                BHINNEKA MUSIC STUDIO</h1>
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption intensy_slider4_slide1_t2white h1 sfr tp-resizeme"
                             data-x="0"
                             data-y="center" data-voffset="15"
                             data-speed="800"
                             data-start="1000"
                             data-easing="easeInOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"

                             style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;"><h1>CHOOSE
                                PROFESSIONALS</h1>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption sfb tp-resizeme"
                             data-x="0"
                             data-y="center" data-voffset="115"
                             data-speed="800"
                             data-start="1500"
                             data-easing="easeInOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"

                             style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><a
                                    href='index-4.html#' class='readon border white medium'>LEARN MORE</a>
                        </div>
                    </li>
                    <!-- SLIDE  2-->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="300"
                        data-thumb="img/slider/slider-4/bg2.jpg" data-saveperformance="off" data-title="Slide2">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('img/slider/slider-4/bg2.jpg')}}" alt="bg" data-bgposition="center top"
                             data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption intensy_slider4_slide2_t1white sfr tp-resizeme"
                             data-x="0"
                             data-y="center" data-voffset="-42"
                             data-speed="800"
                             data-start="500"
                             data-easing="easeInOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"

                             style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">ADVANCED
                            TECHNOLOGY
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption intensy_slider4_slide2_t2white h1 sfl tp-resizeme"
                             data-x="0"
                             data-y="center" data-voffset="17"
                             data-speed="800"
                             data-start="1000"
                             data-easing="easeInOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"

                             style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;"><h1>HD
                                RECORDING</h1>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption sfb tp-resizeme"
                             data-x="0"
                             data-y="center" data-voffset="113"
                             data-speed="800"
                             data-start="1500"
                             data-easing="easeInOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"

                             style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><a
                                    href='#pricing' class='readon border white'>ORDER NOW</a>
                        </div>
                    </li>
                    <!-- SLIDE  3-->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="300"
                        data-thumb="img/slider/slider-4/bg3.jpg" data-saveperformance="off" data-title="Slide3">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('img/slider/slider-4/bg3.jpg')}}" alt="bg" data-bgposition="center top"
                             data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption intensy_slider4_slide3_t1white sfl tp-resizeme"
                             data-x="0"
                             data-y="center" data-voffset="-45"
                             data-speed="800"
                             data-start="500"
                             data-easing="easeInOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"

                             style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">COMFORTABLE
                            SITUATION
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption intensy_slider4_slide3_t2white h1 sfr tp-resizeme"
                             data-x="0"
                             data-y="center" data-voffset="17"
                             data-speed="800"
                             data-start="1000"
                             data-easing="easeInOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"

                             style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;"><h1>NEW
                                TECHNOLOGY</h1>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption slider6_slide3_t3white sfl tp-resizeme"
                             data-x="right" data-hoffset="360"
                             data-y="bottom" data-voffset="-10"
                             data-speed="800"
                             data-start="1500"
                             data-easing="easeInOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"

                             style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">BETTER SOUND
                            THAN EVER
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption sfb tp-resizeme"
                             data-x="0"
                             data-y="center" data-voffset="115"
                             data-speed="800"
                             data-start="2000"
                             data-easing="easeInOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"

                             style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;"><a
                                    href='#pricing' class='readon border white'>ORDER NOW</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END HOME SLIDER -->

    <!-- service-area start -->
    <div class="service-area-4 fix" id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="section-title-4">
                            <h1><strong>OUR</strong> SERVICES</h1>
                        </div>
                        <p><strong>Bhinneka Music Studio</strong>, provide a recording studio service with the price of
                            each song that produced not per shift price like the other studio.<br> Every song that
                            produced in here won't be published without the permission of the band or owner of the song.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single-service start -->
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="single-service-4 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <i class="fa fa-soundcloud"></i>
                        <h3>SoundCloud channel</h3>
                        <p>Bhinneka Music Studio is integrated with SoundCloud.</p>
                    </div>
                </div>
                <!-- single-service end -->
                <!-- single-service start -->
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="single-service-4 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".6s">
                        <i class="fa fa-headphones"></i>
                        <h3>16/7 Support</h3>
                        <p>Bhinneka Music Studio provides full-services for 16 hours every day. </p>
                    </div>
                </div>
                <!-- single-service end -->
                <!-- single-service start -->
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="single-service-4 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".9s">
                        <i class="fa fa-microphone"></i>
                        <h3>High Quality Studio</h3>
                        <p>Bhinneka Music Studio is completed with an international standard equipments. </p>
                    </div>
                </div>
                <!-- single-service end -->
                <!-- single-service start -->
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="single-service-4 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="1.2s">
                        <i class="fa fa-volume-up"></i>
                        <h3>Recording Surroundings</h3>
                        <p>Bhinneka Music Studio is designed and decorated as an international standard recording
                            studio. </p>
                    </div>
                </div>
                <!-- single-service end -->
            </div>
        </div>
    </div>
    <!-- service-area end -->

    <!-- upcoming-product-area start -->
    <div class="upcoming-product-area fix silver" id="work">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="section-title-4">
                            <h1><strong>OUR</strong> STUDIO</h1>
                        </div>
                        <p><strong>Bhinneka Music Studio</strong>, is a Recording and Practice Studio in Gubeng
                            Kertajaya XI No. 7, Airlangga, Gubeng, Surabaya. <br>Bhinneka Music Studio has two studios,
                            Studio 3 dan Studio 2.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="upcoming-product-list wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <!-- upcoming-photo start -->
                        <div class="upcoming-photo">
                            <img src="{{asset('img/upcoming/sm/1.jpg')}}" alt=""/>
                            <a class="fancybox" href="{{asset('img/upcoming/1.jpg')}}" data-fancybox-group="group"><i
                                        class="fa fa-search"></i></a>
                        </div>
                        <!-- upcoming-photo end -->
                        <!-- upcoming-photo start -->
                        <div class="upcoming-photo">
                            <img src="{{asset('img/upcoming/sm/2.jpg')}}" alt=""/>
                            <a class="fancybox" href="{{asset('img/upcoming/2.jpg')}}" data-fancybox-group="group"><i
                                        class="fa fa-search"></i></a>
                        </div>
                        <!-- upcoming-photo end -->
                        <!-- upcoming-photo start -->
                        <div class="upcoming-photo">
                            <img src="{{asset('img/upcoming/sm/3.jpg')}}" alt=""/>
                            <a class="fancybox" href="{{asset('img/upcoming/3.jpg')}}" data-fancybox-group="group"><i
                                        class="fa fa-search"></i></a>
                        </div>
                        <!-- upcoming-photo end -->
                        <!-- upcoming-photo start -->
                        <div class="upcoming-photo">
                            <img src="{{asset('img/upcoming/sm/4.jpg')}}" alt=""/>
                            <a class="fancybox" href="{{asset('img/upcoming/4.jpg')}}" data-fancybox-group="group"><i
                                        class="fa fa-search"></i></a>
                        </div>
                        <!-- upcoming-photo end -->
                        <!-- upcoming-photo start -->
                        <div class="upcoming-photo">
                            <img src="{{asset('img/upcoming/sm/5.jpg')}}" alt=""/>
                            <a class="fancybox" href="{{asset('img/upcoming/5.jpg')}}" data-fancybox-group="group"><i
                                        class="fa fa-search"></i></a>
                        </div>
                        <!-- upcoming-photo end -->
                        <!-- upcoming-photo start -->
                        <div class="upcoming-photo">
                            <img src="{{asset('img/upcoming/sm/6.jpg')}}" alt=""/>
                            <a class="fancybox" href="{{asset('img/upcoming/6.jpg')}}" data-fancybox-group="group"><i
                                        class="fa fa-search"></i></a>
                        </div>
                        <!-- upcoming-photo end -->
                        <!-- upcoming-photo start -->
                        <div class="upcoming-photo">
                            <img src="{{asset('img/upcoming/sm/7.jpg')}}" alt=""/>
                            <a class="fancybox" href="{{asset('img/upcoming/7.jpg')}}" data-fancybox-group="group"><i
                                        class="fa fa-search"></i></a>
                        </div>
                        <!-- upcoming-photo end -->
                        <!-- upcoming-photo start -->
                        <div class="upcoming-photo">
                            <img src="{{asset('img/upcoming/sm/8.jpg')}}" alt=""/>
                            <a class="fancybox" href="{{asset('img/upcoming/8.jpg')}}" data-fancybox-group="group"><i
                                        class="fa fa-search"></i></a>
                        </div>
                        <!-- upcoming-photo end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- upcoming-product-area start -->

    <!-- counter-area start -->
    <div class="counter-area fix">
        <div class="container">
            <div class="row">
                <!-- single-counter start -->
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="single-counter wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <h1 class="counter">1234</h1>
                        <h3>Clients</h3>
                    </div>
                </div>
                <!-- single-counter end -->
                <!-- single-counter start -->
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="single-counter wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".5s">
                        <h1 class="counter">4567</h1>
                        <h3>Recordings</h3>
                    </div>
                </div>
                <!-- single-counter end -->
                <!-- single-counter start -->
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="single-counter wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".7s">
                        <h1 class="counter">8910</h1>
                        <h3>Satisfied Users</h3>
                    </div>
                </div>
                <!-- single-counter end -->
                <!-- single-counter start -->
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="single-counter wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".9s">
                        <h1 class="counter">1112</h1>
                        <h3>Instruments</h3>
                    </div>
                </div>
                <!-- single-counter end -->
            </div>
        </div>
    </div>
    <!-- counter-area end -->

    <!-- team-member-area start -->
    <div class="team-member-area" id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="section-title-4">
                            <h1><strong>OUR</strong> TEAM</h1>
                        </div>
                        <p>Meet our passionate crew! <br> Feel free to get in touch with them. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="team-member-tab">
                        <div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation"><a href="team-member.html#ayu"
                                                           aria-controls="ayu" role="tab"
                                                           data-toggle="tab">Ayu</a></li>
                                <li role="presentation" class="active"><a href="team-member.html#fq" aria-controls="fq"
                                                                          role="tab" data-toggle="tab">fq</a></li>
                                <li role="presentation"><a href="team-member.html#fahmi" aria-controls="fahmi"
                                                           role="tab" data-toggle="tab">Fahmi</a></li>
                                <li role="presentation"><a href="team-member.html#ilham" aria-controls="ilham"
                                                           role="tab" data-toggle="tab">Ilham</a></li>
                            </ul>

                            <div class="row">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane" id="ayu">
                                        <div class="team-m-content">
                                            <!-- team-m-img start -->
                                            <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="team-m-img">
                                                    <img src="{{asset('img/team/team-member/1.jpg')}}" alt=""/>
                                                </div>
                                            </div>
                                            <!-- team-m-img end -->
                                            <!-- team-m-desc start -->
                                            <div class="col-xs-12 col-sm-8 col-md-8">
                                                <div class="team-m-desc">
                                                    <h3>Ayu Fitri Wulandari</h3>
                                                    <span>Support</span>
                                                    <div class="team-m-icon">
                                                        <a href="https://twitter.com/ayufitriw"><i
                                                                    class="fa fa-twitter"></i></a>
                                                        <a href="https://facebook.com/ayu.fitri.90475"><i
                                                                    class="fa fa-facebook"></i></a>
                                                        <a href="https://instagram.com/ayufitriw/"><i
                                                                    class="fa fa-instagram"></i></a>
                                                        <a href="https://github.com/ayufitriw/"><i
                                                                    class="fa fa-github"></i></a>
                                                    </div>
                                                    <p>Ayu Fitri Wulandari, 20th years old student, an Informatics
                                                        Engineering student in UNESA (State University of Surabaya). She
                                                        has been active in the world of software engineering since
                                                        2015</p>
                                                    <div class="skill">
                                                        <!-- progress start -->
                                                        <div class="progress">
                                                            <div class="lead"><strong>24/7</strong> SUPPORT</div>
                                                            <div class="progress-bar wow fadeInLeft" data-progress="79%"
                                                                 style="width: 79%;" data-wow-duration="1.5s"
                                                                 data-wow-delay="1.2s"><span>79%</span></div>
                                                        </div>
                                                        <!-- progress end -->
                                                        <!-- progress start -->
                                                        <div class="progress">
                                                            <div class="lead"><strong>LOREM</strong> IPSUM</div>
                                                            <div class="progress-bar wow fadeInLeft" data-progress="90%"
                                                                 style="width: 90%;" data-wow-duration="1.5s"
                                                                 data-wow-delay="1.2s"><span>90%</span></div>
                                                        </div>
                                                        <!-- progress end -->
                                                        <!-- progress start -->
                                                        <div class="progress">
                                                            <div class="lead"><strong>COMMUNICATION</strong> SCORE</div>
                                                            <div class="progress-bar wow fadeInLeft" data-progress="81%"
                                                                 style="width: 81%;" data-wow-duration="1.5s"
                                                                 data-wow-delay="1.2s"><span>81%</span></div>
                                                        </div>
                                                        <!-- progress end -->
                                                        <!-- progress start -->
                                                        <div class="progress">
                                                            <div class="lead"><strong>REWARDS</strong> SCORE</div>
                                                            <div class="progress-bar wow fadeInLeft" data-progress="87%"
                                                                 style="width: 87%;" data-wow-duration="1.5s"
                                                                 data-wow-delay="1.2s"><span>87%</span></div>
                                                        </div>
                                                        <!-- progress end -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- team-m-desc end -->
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane active" id="fq">
                                        <div class="team-m-content">
                                            <!-- team-m-img start -->
                                            <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="team-m-img">
                                                    <img src="{{asset('img/team/team-member/2.jpg')}}" alt=""/>
                                                </div>
                                            </div>
                                            <!-- team-m-img end -->
                                            <!-- team-m-desc start -->
                                            <div class="col-xs-12 col-sm-8 col-md-8">
                                                <div class="team-m-desc">
                                                    <h3>Fiqy Ainuzzaqy</h3>
                                                    <span>Editor & Front-end Developer</span>
                                                    <div class="team-m-icon">
                                                        <a href="https://twitter.com/fqnkk"><i
                                                                    class="fa fa-twitter"></i></a>
                                                        <a href="https://facebook.com/FqNkk"><i
                                                                    class="fa fa-facebook"></i></a>
                                                        <a href="https://instagram.com/fq_whysoserious/"><i
                                                                    class="fa fa-instagram"></i></a>
                                                        <a href="https://github.com/Fq2124/"><i
                                                                    class="fa fa-github"></i></a>
                                                    </div>
                                                    <p>Fiqy Ainuzzaqy, 20th years old student, an Informatics
                                                        Engineering student in UNESA (State University of Surabaya). He
                                                        has been active in the world of multimedia, especially animation
                                                        and video editing since 2009 and play role as a <em>front-end
                                                            developer</em> since 2015.</p>
                                                    <div class="skill">
                                                        <!-- progress start -->
                                                        <div class="progress">
                                                            <div class="lead"><strong>PROFESSION</strong> SCORE</div>
                                                            <div class="progress-bar wow fadeInLeft" data-progress="89%"
                                                                 style="width: 89%;" data-wow-duration="1.5s"
                                                                 data-wow-delay="1.2s"><span>89%</span></div>
                                                        </div>
                                                        <!-- progress end -->
                                                        <!-- progress start -->
                                                        <div class="progress">
                                                            <div class="lead"><strong>SOFTWARE</strong> KNOWLEDGE</div>
                                                            <div class="progress-bar wow fadeInLeft" data-progress="95%"
                                                                 style="width: 95%;" data-wow-duration="1.5s"
                                                                 data-wow-delay="1.2s"><span>95%</span></div>
                                                        </div>
                                                        <!-- progress end -->
                                                        <!-- progress start -->
                                                        <div class="progress">
                                                            <div class="lead"><strong>COMMUNICATION</strong> SCORE</div>
                                                            <div class="progress-bar wow fadeInLeft" data-progress="81%"
                                                                 style="width: 81%;" data-wow-duration="1.5s"
                                                                 data-wow-delay="1.2s"><span>81%</span></div>
                                                        </div>
                                                        <!-- progress end -->
                                                        <!-- progress start -->
                                                        <div class="progress">
                                                            <div class="lead"><strong>LOREM </strong> SCORE</div>
                                                            <div class="progress-bar wow fadeInLeft" data-progress="86%"
                                                                 style="width: 86%;" data-wow-duration="1.5s"
                                                                 data-wow-delay="1.2s"><span>86%</span></div>
                                                        </div>
                                                        <!-- progress end -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- team-m-desc end -->
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="fahmi">
                                        <div class="team-m-content">
                                            <!-- team-m-img start -->
                                            <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="team-m-img">
                                                    <img src="{{asset('img/team/team-member/3.jpg')}}" alt=""/>
                                                </div>
                                            </div>
                                            <!-- team-m-img end -->
                                            <!-- team-m-desc start -->
                                            <div class="col-xs-12 col-sm-8 col-md-8">
                                                <div class="team-m-desc">
                                                    <h3>Fahmi Rizky Maulidy</h3>
                                                    <span>Back-end Developer</span>
                                                    <div class="team-m-icon">
                                                        <a href="https://twitter.com/fahmir009"><i
                                                                    class="fa fa-twitter"></i></a>
                                                        <a href="https://facebook.com/fahmir009"><i
                                                                    class="fa fa-facebook"></i></a>
                                                        <a href="https://instagram.com/fahmir009/"><i
                                                                    class="fa fa-instagram"></i></a>
                                                        <a href="https://github.com/Vreallyla/"><i
                                                                    class="fa fa-github"></i></a>
                                                    </div>
                                                    <p>Fahmi Rizky Maulidy, 20th years old student, an Informatics
                                                        Engineering student in UNESA (State University of Surabaya). He
                                                        has been active in the world of multimedia since 2009 and play
                                                        role as a <em>back-end developer</em> since 2015.</p>
                                                    <div class="skill">
                                                        <!-- progress start -->
                                                        <div class="progress">
                                                            <div class="lead"><strong>Production</strong> Skill</div>
                                                            <div class="progress-bar wow fadeInLeft" data-progress="96%"
                                                                 style="width: 96%;" data-wow-duration="1.5s"
                                                                 data-wow-delay="1.2s"><span>96%</span></div>
                                                        </div>
                                                        <!-- progress end -->
                                                        <!-- progress start -->
                                                        <div class="progress">
                                                            <div class="lead"><strong>Knowledge</strong> Score</div>
                                                            <div class="progress-bar wow fadeInLeft" data-progress="87%"
                                                                 style="width: 87%;" data-wow-duration="1.5s"
                                                                 data-wow-delay="1.2s"><span>87%</span></div>
                                                        </div>
                                                        <!-- progress end -->
                                                        <!-- progress start -->
                                                        <div class="progress">
                                                            <div class="lead"><strong>Experience</strong> Score</div>
                                                            <div class="progress-bar wow fadeInLeft" data-progress="81%"
                                                                 style="width: 81%;" data-wow-duration="1.5s"
                                                                 data-wow-delay="1.2s"><span>81%</span></div>
                                                        </div>
                                                        <!-- progress end -->
                                                        <!-- progress start -->
                                                        <div class="progress">
                                                            <div class="lead"><strong>Foreign</strong> Languages</div>
                                                            <div class="progress-bar wow fadeInLeft" data-progress="75%"
                                                                 style="width: 75%;" data-wow-duration="1.5s"
                                                                 data-wow-delay="1.2s"><span>75%</span></div>
                                                        </div>
                                                        <!-- progress end -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- team-m-desc end -->
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="ilham">
                                        <div class="team-m-content">
                                            <!-- team-m-img start -->
                                            <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="team-m-img">
                                                    <img src="{{asset('img/team/team-member/4.jpg')}}" alt=""/>
                                                </div>
                                            </div>
                                            <!-- team-m-img end -->
                                            <!-- team-m-desc start -->
                                            <div class="col-xs-12 col-sm-8 col-md-8">
                                                <div class="team-m-desc">
                                                    <h3>Ilham Puji Saputra</h3>
                                                    <span>Database Designer</span>
                                                    <div class="team-m-icon">
                                                        <a href="https://twitter.com/ilham_puji"><i
                                                                    class="fa fa-twitter"></i></a>
                                                        <a href="https://facebook.com/ilham.m1ku100"><i
                                                                    class="fa fa-facebook"></i></a>
                                                        <a href="https://instagram.com/ilham_puji/"><i
                                                                    class="fa fa-instagram"></i></a>
                                                        <a href="https://github.com/m1ku100/"><i
                                                                    class="fa fa-github"></i></a>
                                                    </div>
                                                    <p>Ilham Puji Saputra, 20th years old student, an Informatics
                                                        Engineering student in UNESA (State University of Surabaya). He
                                                        has been active in the world of software engineering since 2015
                                                        and play role as a <em>database designer</em> since 2017.</p>
                                                    <div class="skill">
                                                        <!-- progress start -->
                                                        <div class="progress">
                                                            <div class="lead"><strong>Production</strong> Skill</div>
                                                            <div class="progress-bar wow fadeInLeft" data-progress="96%"
                                                                 style="width: 96%;" data-wow-duration="1.5s"
                                                                 data-wow-delay="1.2s"><span>96%</span></div>
                                                        </div>
                                                        <!-- progress end -->
                                                        <!-- progress start -->
                                                        <div class="progress">
                                                            <div class="lead"><strong>Knowledge</strong> Score</div>
                                                            <div class="progress-bar wow fadeInLeft" data-progress="87%"
                                                                 style="width: 87%;" data-wow-duration="1.5s"
                                                                 data-wow-delay="1.2s"><span>87%</span></div>
                                                        </div>
                                                        <!-- progress end -->
                                                        <!-- progress start -->
                                                        <div class="progress">
                                                            <div class="lead"><strong>Experience</strong> Score</div>
                                                            <div class="progress-bar wow fadeInLeft" data-progress="81%"
                                                                 style="width: 81%;" data-wow-duration="1.5s"
                                                                 data-wow-delay="1.2s"><span>81%</span></div>
                                                        </div>
                                                        <!-- progress end -->
                                                        <!-- progress start -->
                                                        <div class="progress">
                                                            <div class="lead"><strong>Foreign</strong> Languages</div>
                                                            <div class="progress-bar wow fadeInLeft" data-progress="75%"
                                                                 style="width: 75%;" data-wow-duration="1.5s"
                                                                 data-wow-delay="1.2s"><span>75%</span></div>
                                                        </div>
                                                        <!-- progress end -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- team-m-desc end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team-member-area end -->

    <!-- pricing-area start -->
    <div class="pricing-area silver" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="section-title-4">
                            <h1><strong>OUR</strong> PRICING</h1>
                        </div>
                        <p><strong>Bhinneka Music Studio</strong> has many cheap recording package with enough result to
                            satisfy you. <br>Our recommended price is Enterprise Package!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="pricing-details">
                        <!-- single-plan start -->
                        <div class="single-plan">
                            <div class="plan-inner">
                                <div class="plan-head">
                                    <div class="plan-name">Practice</div>
                                    <div class="plan-price">
                                        <span class="plan-price-before">ON</span>
                                        <span class="plan-price-value">Demand</span>
                                    </div>
                                    <div class="plan-period">/1 hour</div>
                                </div>
                                <div class="plan-options">
                                    <ul>
                                        <li><span class="plan-border"><strong>10GB</strong> Storage</span></li>
                                        <li><span><strong>Practice</strong> Studio</span></li>
                                        <li><span><strong>0</strong> Recordings</span></li>
                                        <li><span><strong>10GB</strong> Internet Space</span></li>
                                        <li><span><strong>HD</strong> Studio Sound</span></li>
                                        <li><span class="plan-border"><strong>16/5</strong> Support</span></li>
                                    </ul>
                                </div>
                                <div class="sign-up basic">
                                    <a href="order-studio/options/eyJpdiI6IlYxbXUyVDF0dHNwckNUenA5ZlBuMmc9PSIsInZhbHVlIjoiZks4enJXbXRaS01sOWI2OU9cL2VhV3c9PSIsIm1hYyI6IjRhYWExMDIwYmVlNzg0Y2RjNjI2M2QxYjE1OTA3MDM4ZDFjYzliMTU4MGMxODhlY2NlN2Y0ZGYzNWMwNjVkYmEifQ==">ORDER</a>
                                </div>
                            </div>
                        </div>
                        <!-- single-plan end -->
                        <!-- single-plan start -->
                        @foreach($recorder as $rec)
                            @if ($rec->nama_recorder=="Enterprise")
                                <div class="single-plan standard-space">
                                    <div class="plan-inner">
                                        <div class="plan-head standard-b">
                                            <div class="plan-popular">RECOMMENDED</div>
                                            <div class="plan-name">{{$rec->nama_recorder}}</div>
                                            <div class="plan-price">
                                                <span class="plan-price-before">Rp</span>
                                                <span class="plan-price-value">{{number_format($rec->harga_recorder,2,',','.')}}</span>
                                            </div>
                                            <div class="plan-period">/day</div>
                                        </div>
                                        <div class="plan-options">
                                            <ul>
                                                {!! $rec->deskripsi !!}
                                            </ul>
                                        </div>
                                        <div class="sign-up professional">
                                            <a href="{{url('order-recorder/'.\Illuminate\Support\Facades\Crypt::encryptString($rec->id))}}">ORDER</a>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="single-plan">
                                    <div class="plan-inner">
                                        <div class="plan-head">
                                            <div class="plan-name">{{$rec->nama_recorder}}</div>
                                            <div class="plan-price">
                                                <span class="plan-price-before">Rp</span>
                                                <span class="plan-price-value">{{number_format($rec->harga_recorder,2,',','.')}}</span>
                                            </div>
                                            <div class="plan-period">/day</div>
                                        </div>
                                        <div class="plan-options">
                                            <ul>
                                                {!! $rec->deskripsi !!}
                                            </ul>
                                        </div>
                                        <div class="sign-up professional">
                                            <a href="{{url('order-recorder/'.\Illuminate\Support\Facades\Crypt::encryptString($rec->id))}}">ORDER</a>
                                        </div>
                                    </div>
                                </div>
                        @endif

                    @endforeach
                    <!-- single-plan end -->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- pricing-area end -->

    <!-- popular-brand-area start -->
    <div class="popular-brand-area fix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading-4">
                        <div class="section-title-4">
                            <h1><strong>COMPANIES</strong> THAT TRUST US</h1>
                        </div>
                        <p>They are companies who've been cooperating with us. <br> Feel free to get in touch with them.
                        </p>
                    </div>
                </div>
            </div>
            <!-- You can remove filters from images from below. Removing webkit-filter and filter will return color to the images -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="all-brands">
                        <!-- single-brand start -->
                        <div class="single-brand-4 text-center">
                            <a href="http://rabbit-media.net"><img src="{{asset('img/brand/1.png')}}" alt=""
                                                                   style="height:90px;-webkit-filter: grayscale(100%);filter: grayscale(100%);"/></a>
                        </div>
                        <!-- single-brand end -->
                        <!-- single-brand start -->
                        <div class="single-brand-4 text-center">
                            <a href="https://unesa.ac.id"><img src="{{asset('img/brand/2.png')}}" alt=""
                                                               style="height:90px;-webkit-filter: grayscale(100%);filter: grayscale(100%);"/></a>
                        </div>
                        <!-- single-brand end -->
                        <!-- single-brand start -->
                        <div class="single-brand-4 text-center">
                            <a href="http://epc.salwa.co.id"><img src="{{asset('img/brand/3.png')}}" alt=""
                                                                  style="height:90px;-webkit-filter: grayscale(100%);filter: grayscale(100%);"/></a>
                        </div>
                        <!-- single-brand end -->
                        <!-- single-brand start -->
                        <div class="single-brand-4 text-center">
                            <a href="http://eztravel.com"><img src="{{asset('img/brand/4.png')}}" alt=""
                                                               style="height:90px;-webkit-filter: grayscale(100%);filter: grayscale(100%);"/></a>
                        </div>
                        <!-- single-brand end -->
                        <!-- single-brand start -->
                        <div class="single-brand-4 text-center">
                            <a href="http://xproject.id"><img src="{{asset('img/brand/5.png')}}" alt=""
                                                              style="height:90px;-webkit-filter: grayscale(100%);filter: grayscale(100%);"/></a>
                        </div>
                        <!-- single-brand end -->
                    </div>
                </div>
            </div>
            <div class="divider-brand hidden-xs"></div>
            <div class="row hidden-xs">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="all-brands brands-bootom">
                        <!-- single-brand start -->
                        <div class="single-brand-4 text-center">
                            <a href="https://btn.co.id"><img src="{{asset('img/brand/6.png')}}" alt=""
                                                             style="height:90px;-webkit-filter: grayscale(100%);filter: grayscale(100%);"/></a>
                        </div>
                        <!-- single-brand end -->
                        <!-- single-brand start -->
                        <div class="single-brand-4 text-center">
                            <a href="https://instagram.com/lumpurklenyer"><img src="{{asset('img/brand/7.png')}}" alt=""
                                                                               style="height:90px;-webkit-filter: grayscale(100%);filter: grayscale(100%);"/></a>
                        </div>
                        <!-- single-brand end -->
                        <!-- single-brand start -->
                        <div class="single-brand-4 text-center">
                            <a href="http://poniba.salwa.co.id"><img src="{{asset('img/brand/8.png')}}" alt=""
                                                                     style="height:90px;-webkit-filter: grayscale(100%);filter: grayscale(100%);"/></a>
                        </div>
                        <!-- single-brand end -->
                        <!-- single-brand start -->
                        <div class="single-brand-4 text-center">
                            <a href="http://ctm.salwa.co.id"><img src="{{asset('img/brand/9.png')}}" alt=""
                                                                  style="height:90px;-webkit-filter: grayscale(100%);filter: grayscale(100%);"/></a>
                        </div>
                        <!-- single-brand end -->
                        <!-- single-brand start -->
                        <div class="single-brand-4 text-center">
                            <a href="http://salwa.co.id"><img src="{{asset('img/brand/10.png')}}" alt=""
                                                              style="height:90px;-webkit-filter: grayscale(100%);filter: grayscale(100%);"/></a>
                        </div>
                        <!-- single-brand end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popular-brand-area end -->
    <script>
        @if(\Session::has('ok'))
        swal({
            title: '{{ session('ok') }}',
            type: 'info'
        });
        @endif

    </script>
@endsection