@extends('user.layouts.master')
@section('content')


    <div id="home" style="background-image: url('{{ asset('public/bg11.jpg')}}');height: 500px; background-position: center; background-repeat: no-repeat; background-size: 100%; padding-top: 7.75rem;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1 class="h1-large mt-5" style="color:white">HI! I AM DEVELOPER</h1>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <div  class="container" >
        <div id="about" class="row" style="padding-top: 7.75rem; padding-bottom: 5.25rem;">
            <div  class="col-sm-12">
                <div class="d-flex justify-content-center" >
                    <h1 style="color: white">About</h1>
                </div>
                <div class="d-flex justify-content-center" >
                    <hr style="width: 20%; height:5px; color: #0EA5E9">
                </div>
                <div class="row">

                        <div class="row ">
                          <div class="col-sm-12 col-md-4 col-lg-3">
                            <div class="card">
                            <img src="{{url('public/profil.jpg')}}" class="img-fluid rounded-start" style="width: auto;" alt="...">
                        </div>
                          </div>
                          <div class="col-sm-12 col-md-8 col-lg-9">
                            <div class="card" style=" background-color: #17213D">
                            <div class="card-body">
                              <p class="card-text">Seorang Full Stack Developer berengalaman dalam menganalisis, mendesain, mengembangkan, mengimplementasikan dan pengujian aplikasi, dapat mengerjakan proyek aplikasi skala kecil maupun skala besar. Menyukai tantangan dan hal baru tentang teknologi dan sangat mengutamakan penyelesaian masalah, bisa bekerja dalam team</p>
                            </div>
                            <div class="card-footer">
                                <div class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-lg-6 g-3 d-flex justify-content-center text-light">
                                    <div class="col">
                                        <div class="card shadow-sm border-0 card-transparent" style="background-color: #17213D">
                                            <div class="card-body ">
                                                <div class="d-flex  justify-content-center">
                                                    <i class='bx bxl-linkedin-square bx-lg' style="color: #0EA5E9"></i>
                                                </div>
                                            </div>
                                            <div class="card-footer text-center " >
                                                <a href="https://www.linkedin.com/in/r-ardan-732569151/"><h6 class="text-muted">Linkedin</h6></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card shadow-sm border-0 card-transparent" style="background-color: #17213D">
                                            <div class="card-body ">
                                                <div class="d-flex  justify-content-center">
                                                    <i class='bx bxl-github bx-lg' style="color: #0EA5E9"></i>
                                                </div>
                                            </div>
                                            <div class="card-footer text-center">
                                                <a href="https://github.com/rname97"><h6 class="text-muted">Github</h6></a>
                                                <h6 class="text-muted"></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card shadow-sm border-0 card-transparent" style="background-color: #17213D">
                                            <div class="card-body ">
                                                <div class="d-flex  justify-content-center">
                                                    <i class='bx bxl-blogger bx-lg' style="color: #0EA5E9"></i>
                                                </div>
                                            </div>
                                            <div class="card-footer text-center">
                                                <a href="https://github.com/rname97"><h6 class="text-muted">Blog</h6></a>
                                                <h6 class="text-muted"></h6>
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
        </div>


        <div id="service" class="row" style="padding-top: 7.75rem; padding-bottom: 5.25rem;" >
            <div class="col-sm-12">
                <div class="d-flex justify-content-center">
                    <h1 style="color: white">My Service</h1>
                </div>
                <div class="d-flex justify-content-center" >
                    <hr style="width: 20%; height:5px; color: #0EA5E9">
                </div>
                <div class="row" >
                    <div class="col-sm-12">
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 row-cols-sm-1 g-4 d-flex justify-content-center">


                            @foreach ($service as $rowService)
                            <div class="col">
                                <div class="card mb-3 shadow-sm" style="max-width: 540px; background-color: #17213D">
                                    <div class="row g-0">
                                        <div class="col-md-2">
                                        <i class='{{$rowService->serviceIcon}}' style="color: #0EA5E9"></i>

                                    </div>
                                        <div class="col-md-10">
                                        <div class="card-body">
                                            <h6 class="card-title" style="color: white">{{$rowService->serviceName}}</h6>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>






    <div id="experience" class="row " style="padding-top: 7.75rem; padding-bottom: 5.25rem;" >
        <div class="col-sm-12">
            <div class="d-flex justify-content-center">
                <h1 style="color: white">My Experience</h1>
            </div>
            <div class="d-flex justify-content-center" >
                <hr style="width: 20%; height:5px; color: #0EA5E9">
            </div>
            <div class="row" >
                <div class="col-sm-12 col-md-12">


                    @foreach ($experience as $rowExperience)



                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-8 col-md-8 col-lg-6">
                            <div class="card mb-3 shadow-sm" style="max-width: 100%; background-color: #17213D">
                                <div class="row g-0">
                                    <div class="col-md-2">
                                        <div class="card-body">
                                            <i class='bx bxs-building bx-lg' style="color: #0EA5E9"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color: white">{{ $rowExperience->experienceCompany }}</h5>
                                            <p>{{ $rowExperience->experienceName }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card-body">
                                            <p>{{ $rowExperience->experienceStart }}</p>
                                            <p>{{ $rowExperience->experienceEnd }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>


    <div id="activity" class="row" style="padding-top: 7.75rem; padding-bottom: 5.25rem;" >
        <div class="col-sm-12">
            <div class="d-flex justify-content-center">
                <h1 style="color: white">Activity</h1>
            </div>
            <div class="d-flex justify-content-center" >
                <hr style="width: 20%; height:5px; color: #0EA5E9">
            </div>
            <div class="row" >
                <div class="col-sm-12">
                    <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 row-cols-sm-1 g-4">
                        <div class="col">
                            <div class="card mb-3 shadow-sm" style="max-width: 540px; background-color: #17213D">
                                <div class="row g-0">
                                    <div class="col-md-2">
                                        <i class='bx bx-code-alt bx-lg' style="color: #0EA5E9"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color: white">Coding</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card mb-3 shadow-sm" style="max-width: 540px; background-color: #17213D">
                                <div class="row g-0">
                                    <div class="col-md-2">
                                    <i class='bx bxs-pencil bx-lg' style="color: #0EA5E9"></i>
                                </div>
                                    <div class="col-md-10">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: white">Writing</h5>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card mb-3 shadow-sm" style="max-width: 540px; background-color: #17213D">
                                <div class="row g-0">
                                    <div class="col-md-2">
                                    <i class='bx bxs-user-detail bx-lg' style="color: #0EA5E9"></i>
                                </div>
                                    <div class="col-md-10">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: white">Instruktur</h5>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card mb-3 shadow-sm" style="max-width: 540px; background-color: #17213D">
                                <div class="row g-0">
                                    <div class="col-md-2">
                                    <i class='bx bx-sitemap bx-lg' style="color: #0EA5E9"></i>

                                </div>
                                    <div class="col-md-10">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: white">Penelitian</h5>
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


    {{-- <div class="row" style="padding-top: 7.75rem; padding-bottom: 5.25rem;">
        <div class="col-sm-12">
            <div class="d-flex justify-content-center">
                <h1 style="color: white">Skill</h1>
            </div>
            <div class="d-flex justify-content-center" >
                <hr style="width: 20%; height:5px; color: #0EA5E9">
            </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6 g-3 d-flex justify-content-center text-light">
                    @foreach ($skill as $rowSkill)

                        <div class="col">
                            <div class="card shadow-sm" style="background-color: #17213D">
                                <div class="card-body">
                                    <div class="d-flex  justify-content-center row-cols-md-4 ">
                                        <img src="{{url('public/Image/'.$rowSkill->skillImage)}}" alt="" class="img-fluid" style="width: auto; height: 60px;">
                                    </div>
                                </div>

                                <div class="card-footer text-center" >
                                    <h6 class="text-muted">{{$rowSkill->skillName}}</h6>
                                </div>

                            </div>

                        </div>
                    @endforeach
                </div>
        </div>
    </div> --}}




    <div id="skill" class="row" style="padding-top: 7.75rem; padding-bottom: 5.25rem;" >
        <div class="col-sm-12">
            <div class="d-flex justify-content-center">
                <h1 style="color: white">Skill</h1>
            </div>
            <div class="d-flex justify-content-center" >
                <hr style="width: 20%; height:5px; color: #0EA5E9">
            </div>
            <div class="row" >
                <div class="col-sm-12">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-md-2 g-5 d-flex justify-content-center">
                        @foreach ($skill as $rowSkill)

                        <div class="col">
                            <div class="card mb-3">
                                <div class="row">
                                    <div class="col-md-3 d-flex justify-content-center">
                                        <div class="card-body" style="background-color: white">
                                            <img src="{{url('public/Image/'.$rowSkill->skillImage)}}" alt=""  style="width: 60px; height: 50px;">
                                        </div>
                                    </div>
                                    <div class="col-md-9 " style=" background-color: #17213D">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: white">{{$rowSkill->skillName}} </h5>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div id="project" class="row" style="padding-top: 7.75rem; padding-bottom: 5.25rem;">
        <div class="col-sm-12">
            <div class="d-flex justify-content-center">
                <h1 style="color: white">Project</h1>
            </div>
            <div class="d-flex justify-content-center" >
                <hr style="width: 20%; height:5px; color: #0EA5E9">
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3 d-flex justify-content-center">
                @foreach ($project as $rowProject)
                    <div class="col">
                        <div class="card mb-5 shadow-sm" style="background-color: #17213D">

                            <img src="{{url('public/Image/'.$rowProject->projectImageCover)}}" class="img-fluid" alt="..." >


                            <div class="card-body text-center">
                            <h6 class="card-title">{{$rowProject->projectName}}</h6>
                            <a href="#" class="btn btn-primary">View</a>
                            {{-- <p class="card-text">{{$rowProject->projectDeskripsi}}</p> --}}
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">PHP, CI 3, HTML, CSS, MYSQL, BOOTSTRAP</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="explorasi" class="row" style="padding-top: 7.75rem; padding-bottom: 5.25rem;">
        <div class="col-sm-12">
            <div class="d-flex justify-content-center">
                <h1 style="color: white">Explorasi</h1>
            </div>
            <div class="d-flex justify-content-center" >
                <hr style="width: 20%; height:5px; color: #0EA5E9">
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3 d-flex justify-content-center">
                @foreach ($explorasi as $rowExplorasi)
                    <div class="col">
                        <div class="card mb-5 shadow-sm" style="background-color: #17213D">

                            <img src="{{url('public/Image/'.$rowExplorasi->explorasiImageCover)}}" class="img-fluid" alt="..." >


                            <div class="card-body text-center">
                            <h6 class="card-title">{{$rowExplorasi->explorasiName}}</h6>
                            <a href="#" class="btn btn-primary">View</a>
                            {{-- <p class="card-text">{{$rowProject->projectDeskripsi}}</p> --}}
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">PHP, CI 3, HTML, CSS, MYSQL, BOOTSTRAP</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script>
    (function($) {
    "use strict";

    /* Navbar Scripts */
    // jQuery to collapse the navbar on scroll
    $(window).on('scroll load', function() {
		if ($(".navbar").offset().top > 60) {
			$(".fixed-top").addClass("top-nav-collapse");
		} else {
			$(".fixed-top").removeClass("top-nav-collapse");
		}
    });

	// jQuery for page scrolling feature - requires jQuery Easing plugin
	$(function() {
		$(document).on('click', 'a.page-scroll', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 600, 'easeInOutExpo');
			event.preventDefault();
		});
    });

    // offcanvas script from Bootstrap + added element to close menu on click in small viewport
    $('[data-toggle="offcanvas"], .navbar-nav li a:not(.dropdown-toggle').on('click', function () {
        $('.offcanvas-collapse').toggleClass('open')
    })

    // hover in desktop mode
    function toggleDropdown (e) {
        const _d = $(e.target).closest('.dropdown'),
            _m = $('.dropdown-menu', _d);
        setTimeout(function(){
            const shouldOpen = e.type !== 'click' && _d.is(':hover');
            _m.toggleClass('show', shouldOpen);
            _d.toggleClass('show', shouldOpen);
            $('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
        }, e.type === 'mouseleave' ? 300 : 0);
    }
    $('body')
    .on('mouseenter mouseleave','.dropdown',toggleDropdown)
    .on('click', '.dropdown-menu a', toggleDropdown);


    /* Move Form Fields Label When User Types */
    // for input and textarea fields
    $("input, textarea").keyup(function(){
		if ($(this).val() != '') {
			$(this).addClass('notEmpty');
		} else {
			$(this).removeClass('notEmpty');
		}
	});


    /* Back To Top Button */
    // create the back to top button
    // $('body').prepend('<a href="body" class="back-to-top page-scroll">Back to Top</a>');
    // var amountScrolled = 700;
    // $(window).scroll(function() {
    //     if ($(window).scrollTop() > amountScrolled) {
    //         $('a.back-to-top').fadeIn('500');
    //     } else {
    //         $('a.back-to-top').fadeOut('500');
    //     }
    // });


	/* Removes Long Focus On Buttons */
	$(".button, a, button").mouseup(function() {
		$(this).blur();
	});

})(jQuery);
</script>
@endsection


