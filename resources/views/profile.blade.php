@extends('layouts.admin')

@section('content')
<div class="page-content container-fluid">
    <div class="row">
        <!-- Middle Column -->
        <div class="col-lg-12 col-xl-6 order-xl-2">
            <!-- User Content Release -->
            <div class="user-release card card-shadow">
                <div class="card-block p-0">
                    <input class="user-release-input form-control form-control-lg" type="text" name="user-content-input" placeholder="type something here..." />
                    <div class="user-release-actions">
                        <button class="btn btn-pure btn-default icon wb-image" type="button"></button>
                        <button class="btn btn-pure btn-default icon wb-video" type="button"></button>
                        <button class="btn btn-pure btn-default icon wb-calendar" type="button"></button>
                        <button class="btn btn-pure btn-default icon wb-map" type="button"></button>
                        <button class="btn btn-primary btn-round float-right" type="button">submit</button>
                    </div>
                </div>
            </div>
            <!-- End User Content Release -->

            <!-- User Posts -->
            <div class="user-posts card card-shadow">
                <div class="card-block">
                    <h4 class="card-title mb-20">Post</h4>
                    <ul class="user-posts-list">
                        <li class="user-post">
                            <img src="../../../global/photos/placeholder.png" alt="..." />
                            <h4 class="user-post-title">
                                Example title1
                            </h4>
                            <time class="user-post-time" datetime="2017-02-15">Februrary 15, 2017</time>
                            <div class="user-post-data">
                                <i class="icon wb-eye">
                                    <span>16</span>
                                </i>
                                <i class="icon wb-heart">
                                    <span>4K</span>
                                </i>
                                <i class="icon wb-chat">
                                    <span>2K</span>
                                </i>
                            </div>
                        </li>
                        <li class="user-post">
                            <img src="../../../global/photos/placeholder.png" alt="..." />
                            <h4 class="user-post-title font-size-16 mb-5">
                                Example title2
                            </h4>
                            <time class="user-post-time">Februrary 15, 2017</time>
                            <div class="user-post-data">
                                <i class="icon wb-eye">
                                    <span>16</span>
                                </i>
                                <i class="icon wb-heart">
                                    <span>4K</span>
                                </i>
                                <i class="icon wb-chat">
                                    <span>2K</span>
                                </i>
                            </div>
                        </li>
                        <li class="user-post">
                            <img src="../../../global/photos/placeholder.png" alt="..." />
                            <h4 class="user-post-title font-size-16 mb-5">
                                Example title3
                            </h4>
                            <time class="user-post-time">Februrary 15, 2017</time>
                            <div class="user-post-data">
                                <i class="icon wb-eye">
                                    <span>16</span>
                                </i>
                                <i class="icon wb-heart">
                                    <span>4K</span>
                                </i>
                                <i class="icon wb-chat">
                                    <span>2K</span>
                                </i>
                            </div>
                        </li>
                        <li class="user-post">
                            <img src="../../../global/photos/placeholder.png" alt="..." />
                            <h4 class="user-post-title font-size-16 mb-5">
                                Example title4
                            </h4>
                            <time class="user-post-time">Februrary 15, 2017</time>
                            <div class="user-post-data">
                                <i class="icon wb-eye">
                                    <span>16</span>
                                </i>
                                <i class="icon wb-heart">
                                    <span>4K</span>
                                </i>
                                <i class="icon wb-chat">
                                    <span>2K</span>
                                </i>
                            </div>
                        </li>
                        <li class="user-post">
                            <img src="../../../global/photos/placeholder.png" alt="..." />
                            <h4 class="user-post-title font-size-16 mb-5">
                                Example title5
                            </h4>
                            <time class="user-post-time">Februrary 15, 2017</time>
                            <div class="user-post-data">
                                <i class="icon wb-eye">
                                    <span>16</span>
                                </i>
                                <i class="icon wb-heart">
                                    <span>4K</span>
                                </i>
                                <i class="icon wb-chat">
                                    <span>2K</span>
                                </i>
                            </div>
                        </li>
                        <li class="user-post">
                            <img src="../../../global/photos/placeholder.png" alt="..." />
                            <h4 class="user-post-title font-size-16 mb-5">
                                Example title6
                            </h4>
                            <time class="user-post-time">Februrary 15, 2017</time>
                            <div class="user-post-data">
                                <i class="icon wb-eye">
                                    <span>16</span>
                                </i>
                                <i class="icon wb-heart">
                                    <span>4K</span>
                                </i>
                                <i class="icon wb-chat">
                                    <span>2K</span>
                                </i>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- End User Posts -->

            <!-- User Background -->
            <div class="user-background card card-shadow">
                <div class="card-header card-header-transparent p-20">
                    <h4 class="card-title mb-0">Background</h4>
                </div>

                <div class="card-block">
                    <h5 class="card-title">
                        <i class="icon wb-clipboard"></i>
                        <span>Summary</span>
                    </h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                        laborum.
                    </p>
                </div>

                <div class="card-block">
                    <h5 class="card-title">
                        <i class="icon wb-briefcase"></i>
                        <span>Experience</span>
                    </h5>
                    <ul class="timeline timeline-single">
                        <li class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <img class="float-right" src="../../../global/photos/placeholder.png" alt="..." />
                                <span class="block font-size-15 mb-5">2000 President</span>
                                <span class="block mb-5">Co-founder, Chairman</span>
                                <span class="block mb-5">Company Name</span>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <img class="float-right" src="../../../global/photos/placeholder.png" alt="..." />
                                <span class="block font-size-15 mb-5">2000 President</span>
                                <span class="block mb-5">Co-founder, Chairman</span>
                                <span class="block mb-5">Company Name</span>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <img class="float-right" src="../../../global/photos/placeholder.png" alt="..." />
                                <span class="block font-size-15 mb-5">2000 President</span>
                                <span class="block mb-5">Co-founder, Chairman</span>
                                <span class="block mb-5">Company Name</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card-block">
                    <h5 class="card-title">
                        <i class="icon wb-flag"></i>
                        <span>Edication</span>
                    </h5>
                    <ul class="timeline timeline-single">
                        <li class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <img class="float-right" src="../../../global/photos/placeholder.png" alt="..." />
                                <span class="block font-size-15 mb-5">2000 President</span>
                                <span class="block mb-5">BS Computer Science</span>
                                <span class="block mb-5">Harvard University</span>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <img class="float-right" src="../../../global/photos/placeholder.png" alt="..." />
                                <span class="block font-size-15 mb-5">1996 - 2000</span>
                                <span class="block mb-5">B.E</span>
                                <span class="block mb-5">Tsinghua University</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card-block">
                    <h5 class="card-title">
                        <i class="icon wb-share"></i>
                        <span>Skills</span>
                    </h5>
                    <ul class="user-skills list-unstyled">
                        <li class="skill">
                            <ul class="skill-team list-unstyled">
                                <li class="avatar">
                                    <img src="../../../global/portraits/3.jpg" alt="" />
                                </li>
                                <li class="avatar">
                                    <img src="../../../global/portraits/4.jpg" alt="" />
                                </li>
                                <li class="avatar">
                                    <img src="../../../global/portraits/6.jpg" alt="" />
                                </li>
                            </ul>
                            <div class="skill-num">
                                <span class="badge badge-pill badge-dark badge-outline p-10">71</span>
                            </div>
                            <div class="skill-name">
                                Javascript
                            </div>
                        </li>
                        <li class="skill">
                            <div class="skill-num">
                                <span class="badge badge-pill badge-primary badge-outline p-10">71</span>
                            </div>
                            <div class="skill-name vertical-align-middle">
                                Photoshop
                            </div>
                            <ul class="skill-team list-unstyled">
                                <li class="avatar">
                                    <img src="../../../global/portraits/2.jpg" alt="" />
                                </li>
                                <li class="avatar">
                                    <img src="../../../global/portraits/4.jpg" alt="" />
                                </li>
                                <li class="avatar">
                                    <img src="../../../global/portraits/5.jpg" alt="" />
                                </li>
                            </ul>
                        </li>
                        <li class="skill">
                            <div class="skill-num">
                                <span class="badge badge-pill badge-success badge-outline p-10">71</span>
                            </div>
                            <div class="skill-name vertical-align-middle">
                                HTML
                            </div>
                            <ul class="skill-team list-unstyled">
                                <li class="avatar">
                                    <img src="../../../global/portraits/2.jpg" alt="" />
                                </li>
                                <li class="avatar">
                                    <img src="../../../global/portraits/4.jpg" alt="" />
                                </li>
                                <li class="avatar">
                                    <img src="../../../global/portraits/5.jpg" alt="" />
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="card-block">
                    <h5 class="card-title">
                        <i class="icon wb-star"></i>
                        <span>More interest</span>
                    </h5>
                    <span class="badge mb-5 mr-5 badge-default badge-outline">Movie</span>
                    <span class="badge mb-5 mr-5 badge-default badge-outline">Games</span>
                    <span class="badge mb-5 mr-5 badge-primary">Music</span>
                    <span class="badge mb-5 mr-5 badge-warning">Pokemon go</span>
                    <span class="badge mb-5 mr-5 badge-success">Football</span>
                    <span class="badge mb-5 mr-5 badge-info">Tennis</span>
                    <span class="badge mb-5 mr-5 badge-danger">Hiking</span>
                    <span class="badge mb-5 mr-5 badge-dark">Skating</span>
                    <span class="badge mb-5 mr-5 badge-success">Table tennis</span>
                    <span class="badge mb-5 mr-5 badge-default badge-outline">Reading</span>
                    <span class="badge mb-5 mr-5 badge-dark">Blogging/writing</span>
                    <span class="badge mb-5 mr-5 badge-warning">DIY</span>
                    <span class="badge mb-5 mr-5 badge-default badge-outline">Singing</span>
                    <span class="badge mb-5 mr-5 badge-info">Dancing</span>
                </div>
            </div>
            <!-- End User Background -->

            <!-- User Recomenfations -->
            <div class="user-recomendations card card-shadow">
                <div class="card-header card-header-transparent p-20">
                    <div class="testimonial-control float-right">
                        <a class="testimonial-control-left" data-slide="prev" href="#recomendations" role="button">
                            <span class="icon wb-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="testimonial-control-right" data-slide="next" href="#recomendations" role="button">
                            <span class="icon wb-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <h4 class="card-title mb-0">Recomendations</h4>
                </div>
                <div class="card-block">
                    <div class="testimonial carousel" role="listbox" id="recomendations" data-ride="carousel">
                        <ul class="testimonial-ul carousel-inner">
                            <li class="testimonial-item carousel-item">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="testimonial-content">
                                            <p>Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis.</p>
                                        </div>
                                        <div class="testimonial-image">
                                            <a class="avatar" href="javascript:void(0)">
                                                <img src="../../../global/portraits/13.jpg" alt="image" />
                                            </a>
                                        </div>
                                        <span class="testimonial-author">Andrew Hoffman</span>
                                        <span class="testimonial-company">Web Designer</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="testimonial-content">
                                            <p>Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna.</p>
                                        </div>
                                        <div class="testimonial-image">
                                            <a class="avatar" href="javascript:void(0)">
                                                <img src="../../../global/portraits/12.jpg" alt="image" />
                                            </a>
                                        </div>
                                        <span class="testimonial-author">Sarah Graves</span>
                                        <span class="testimonial-company">Videographer</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="testimonial-content">
                                            <p>Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis.</p>
                                        </div>
                                        <div class="testimonial-image">
                                            <a class="avatar" href="javascript:void(0)">
                                                <img src="../../../global/portraits/15.jpg" alt="image" />
                                            </a>
                                        </div>
                                        <span class="testimonial-author">Camila Lynch</span>
                                        <span class="testimonial-company">Wordpress Ninja</span>
                                    </div>
                                </div>
                            </li>
                            <li class="testimonial-item carousel-item active">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="testimonial-content">
                                            <p>Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis.</p>
                                        </div>
                                        <div class="testimonial-image">
                                            <a class="avatar" href="javascript:void(0)">
                                                <img src="../../../global/portraits/11.jpg" alt="image" />
                                            </a>
                                        </div>
                                        <span class="testimonial-author">Sarah Graves</span>
                                        <span class="testimonial-company">Web Designer</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="testimonial-content">
                                            <p>Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna.</p>
                                        </div>
                                        <div class="testimonial-image">
                                            <a class="avatar" href="javascript:void(0)">
                                                <img src="../../../global/portraits/10.jpg" alt="image" />
                                            </a>
                                        </div>
                                        <span class="testimonial-author">Andrew Hoffman</span>
                                        <span class="testimonial-company">Videographer</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="testimonial-content">
                                            <p>Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna.</p>
                                        </div>
                                        <div class="testimonial-image">
                                            <a class="avatar" href="javascript:void(0)">
                                                <img src="../../../global/portraits/9.jpg" alt="image" />
                                            </a>
                                        </div>
                                        <span class="testimonial-author">Camila Lynch</span>
                                        <span class="testimonial-company">Wordpress Ninja</span>
                                    </div>
                                </div>
                            </li>
                            <li class="testimonial-item carousel-item">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="testimonial-content">
                                            <p>Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna.</p>
                                        </div>
                                        <div class="testimonial-image">
                                            <a class="avatar" href="javascript:void(0)">
                                                <img src="../../../global/portraits/3.jpg" alt="image" />
                                            </a>
                                        </div>
                                        <span class="testimonial-author">Sarah Graves</span>
                                        <span class="testimonial-company">Web Designer</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="testimonial-content">
                                            <p>Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna.</p>
                                        </div>
                                        <div class="testimonial-image">
                                            <a class="avatar" href="javascript:void(0)">
                                                <img src="../../../global/portraits/4.jpg" alt="image" />
                                            </a>
                                        </div>
                                        <span class="testimonial-author">Andrew Hoffman</span>
                                        <span class="testimonial-company">Videographer</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="testimonial-content">
                                            <p>Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis.</p>
                                        </div>
                                        <div class="testimonial-image">
                                            <a class="avatar" href="javascript:void(0)">
                                                <img src="../../../global/portraits/2.jpg" alt="image" />
                                            </a>
                                        </div>
                                        <span class="testimonial-author">Camila Lynch</span>
                                        <span class="testimonial-company">Wordpress Ninja</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End User Recomendations -->
            <!-- User Following -->
            <div class="card user-following">
                <div class="card-header card-header-transparent p-20">
                    <h4 class="card-title mb-0">Following</h4>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-sm-3 col-6 mb-20">
                            <img src="../../../global/photos/placeholder.png" />
                            <h4 class="font-size-16 mb-5">KIPP Foundation</h4>
                            <span>
                                <span>+</span>
                                <span>Follow</span>
                            </span>
                        </div>
                        <div class="col-sm-3 col-6 mb-20">
                            <img src="../../../global/photos/placeholder.png" />
                            <h4 class="font-size-16 mb-5">KIPP Foundation</h4>
                            <span>
                                <span>+</span>
                                <span>Follow</span>
                            </span>
                        </div>
                        <div class="col-sm-3 col-6 mb-20">
                            <img src="../../../global/photos/placeholder.png" />
                            <h4 class="font-size-16 mb-5">KIPP Foundation</h4>
                            <span>
                                <span>+</span>
                                <span>Follow</span>
                            </span>
                        </div>
                        <div class="col-sm-3 col-6 mb-20">
                            <img src="../../../global/photos/placeholder.png" />
                            <h4 class="font-size-16 mb-5">KIPP Foundation</h4>
                            <span>
                                <span>+</span>
                                <span>Follow</span>
                            </span>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-round btn-outline btn-primary" type="button" name="button">See all (19)</button>
                    </div>
                </div>
            </div>
            <!-- End User Following -->
        </div>
        <!-- End Middle Column -->

        <!-- Left Column -->
        <div class="col-lg-6 col-xl-3 order-xl-1">
            <div class="user-info card card-shadow text-center">
                <div class="user-base card-block">
                    <a class="avatar img-bordered avatar-100" href="javascript:void(0)">
                        <img src="../../../global/portraits/5.jpg" alt="..." />
                    </a>
                    <h4 class="user-name">Terrance arnold</h4>
                    <p class="user-job">Art director</p>
                    <p class="user-location">Washington, d.c.</p>
                </div>

                <div class="user-actions">
                    <button class="btn btn-primary btn-round" type="button" name="follow">Follow</button>
                    <div class="dropdown">
                        <button class="btn btn-primary btn-round btn-outline dropdown-toggle" data-toggle="dropdown" id="userConnect" type="button" name="userConnect">Connect</button>
                        <div class="dropdown-menu" aria-labelledby="userConnect" role="menu">
                            <a class="dropdown-item" href="#" role="menuitem"> <i class="icon wb-share"></i> Real Gmat Test </a>
                            <a class="dropdown-item" href="#" role="menuitem"> <i class="icon wb-share"></i> Real Gmat Test </a>

                            <a class="dropdown-item" href="#" role="menuitem"> <i class="icon wb-share"></i> Real Gmat Test </a>
                            <a class="dropdown-item" href="#" role="menuitem"> <i class="icon wb-share"></i> Real Gmat Test </a>
                            <a class="dropdown-item" href="#" role="menuitem"> <i class="icon wb-share"></i> Real Gmat Test </a>
                        </div>
                    </div>
                </div>

                <div class="user-stats">
                    <a class="user-stat counter" href="javascript:void(0)">
                        <span class="counter-number font-size-16">260</span>
                        <span class="counter-label inline-block ml-5">Following</span>
                    </a>
                    <a class="user-stat counter p-15" href="javascript:void(0)">
                        <span class="counter-number font-size-16">1.8M</span>
                        <span class="counter-label inline-block ml-5">Followers</span>
                    </a>
                </div>

                <div class="user-socials list-group list-group-full">
                    <a class="list-group-item justify-content-center" href="javascript:void(0)"> <i class="icon bd-twitter"></i> twitter.com/example </a>
                    <a class="list-group-item justify-content-center" href="javascript:void(0)"> <i class="icon bd-facebook"></i> facebook.com/example </a>
                    <a class="list-group-item justify-content-center" href="javascript:void(0)"> <i class="icon bd-dribbble"></i> dribbble.com/example </a>
                    <a class="list-group-item justify-content-center" href="javascript:void(0)"> <i class="icon bd-github"></i> github.com/example </a>
                </div>

                <div class="card-footer">
                    <a href="#"> <i class="icon wb-print"></i> Export page as PDF </a>
                </div>
            </div>
            <!-- End User Info -->
            <!-- Friend List -->
            <div class="user-friends card card-shadow">
                <div class="card-block">
                    <h4 class="card-title mb-20">
                        Friends
                        <span>210</span>
                    </h4>
                    <ul class="list-group list-group-full m-0">
                        <li class="list-group-item">
                            <div class="media">
                                <div class="pr-20">
                                    <a class="avatar avatar-online" href="javascript:void(0)">
                                        <img class="img-fluid" src="../../../global/portraits/1.jpg" alt="..." />
                                        <i></i>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-5 hover">
                                        Herman Beck
                                    </h5>
                                    <small>CEO</small>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <div class="pr-20">
                                    <a class="avatar avatar-busy" href="javascript:void(0)">
                                        <img class="img-fluid" src="../../../global/portraits/2.jpg" alt="..." />
                                        <i></i>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-5 hover">
                                        Mary Adams
                                    </h5>
                                    <small>CIO</small>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <div class="pr-20">
                                    <a class="avatar avatar-off" href="javascript:void(0)">
                                        <img class="img-fluid" src="../../../global/portraits/3.jpg" alt="..." />
                                        <i></i>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-5 hover">
                                        Caleb Richards
                                    </h5>
                                    <small>CTO</small>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <div class="pr-20">
                                    <a class="avatar avatar-away" href="javascript:void(0)">
                                        <img class="img-fluid" src="../../../global/portraits/4.jpg" alt="..." />
                                        <i></i>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-5 hover">
                                        June Lane
                                    </h5>
                                    <small>CVO</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Friends List -->
        </div>
        <!-- End Left Column -->

        <!-- Right Column -->
        <div class="col-lg-6 col-xl-3 order-xl-3">
            <div class="card user-visitors">
                <div class="card-header card-header-transparent p-20">
                    <h4 class="card-title mb-0">Visitors</h4>
                </div>
                <div class="card-block">
                    <ul class="list-group list-group-full">
                        <li class="list-group-item">
                            <div class="media">
                                <div class="pr-20">
                                    <a class="avatar avatar-online" href="javascript:void(0)">
                                        <img class="img-fluid" src="../../../global/portraits/11.jpg" />
                                        <i></i>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-5 hover">Dan Cederholm</h5>
                                    <small>Co-founder of Company</small>
                                </div>
                                <div class="pt-10 pb-10 p-0">
                                    <button class="btn btn-icon btn-primary btn-outline btn-round btn-xs" type="button" name="button">
                                        <i class="icon icon-xs wb-plus mr-0"></i>
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <div class="pr-20">
                                    <a class="avatar" href="javascript:void(0)">
                                        <img class="img-fluid" src="../../../global/portraits/12.jpg" />
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-5 hover">Oykun Yilmaz</h5>
                                    <small>Co-founder of Company</small>
                                </div>
                                <div class="pt-10 pb-10 p-0">
                                    <button class="btn btn-icon btn-primary btn-outline btn-round btn-xs" type="button" name="button">
                                        <i class="icon icon-xs wb-plus mr-0"></i>
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <div class="pr-20">
                                    <a class="avatar" href="javascript:void(0)">
                                        <img class="img-fluid" src="../../../global/portraits/10.jpg" />
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-5 hover">Caleb Richards</h5>
                                    <small>Co-founder of Company</small>
                                </div>
                                <div class="pt-10 pb-10 p-0">
                                    <button class="btn btn-icon btn-primary btn-outline btn-round btn-xs" type="button" name="button">
                                        <i class="icon icon-xs wb-plus mr-0"></i>
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <div class="pr-20">
                                    <a class="avatar" href="javascript:void(0)">
                                        <img class="img-fluid" src="../../../global/portraits/1.jpg" />
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-5 hover">June Lane</h5>
                                    <small>Co-founder of Company</small>
                                </div>
                                <div class="pt-10 pb-10 p-0">
                                    <button class="btn btn-icon btn-primary btn-outline btn-round btn-xs" type="button" name="button">
                                        <i class="icon icon-xs wb-plus mr-0"></i>
                                    </button>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="text-center">
                        <button class="btn btn-round btn-outline btn-primary" type="button" name="button">
                            See all
                            <span>(19)</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card user-may-know">
                <div class="card-header card-header-transparent p-20">
                    <h4 class="card-title mb-5">People you may know</h4>
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item">
                            <a href="#">Jackie Tran Anh</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Designer
                        </li>
                    </ol>
                </div>
                <div class="card-block">
                    <div class="avatar avatar-online avatar-lg m-5">
                        <img src="../../../global/portraits/2.jpg" alt="" />
                        <i></i>
                    </div>
                    <div class="avatar avatar-off avatar-lg m-5">
                        <img src="../../../global/portraits/3.jpg" alt="" />
                        <i></i>
                    </div>
                    <div class="avatar avatar-busy avatar-lg m-5">
                        <img src="../../../global/portraits/4.jpg" alt="" />
                        <i></i>
                    </div>
                    <div class="avatar avatar-away avatar-lg m-5">
                        <img src="../../../global/portraits/1.jpg" alt="" />
                        <i></i>
                    </div>
                    <div class="avatar avatar-online avatar-lg m-5">
                        <img src="../../../global/portraits/5.jpg" alt="" />
                        <i></i>
                    </div>
                    <div class="avatar avatar-away avatar-lg m-5">
                        <img src="../../../global/portraits/1.jpg" alt="" />
                        <i></i>
                    </div>
                    <div class="avatar avatar-away avatar-lg m-5">
                        <img src="../../../global/portraits/1.jpg" alt="" />
                        <i></i>
                    </div>
                    <div class="avatar avatar-away avatar-lg m-5">
                        <img src="../../../global/portraits/1.jpg" alt="" />
                        <i></i>
                    </div>
                </div>
                <div class="card-block">
                    <div class="input-search">
                        <button class="input-search-btn" type="button" name="button">
                            <i class="icon wb-search" aria-hidden="true"></i>
                        </button>
                        <input class="form-control" type="text" name="search" placeholder="Search..." />
                    </div>
                </div>
            </div>
        </div>
        <!-- End Right Column -->
    </div>

</div>
@endsection

@push('body-class', 'page-profile-v2')

@push('externalCSS')
<link rel="stylesheet" href="{{ asset('global/vendor/slick-carousel/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/examples/css/pages/profile-v2.css') }}">
@endpush

@push('pluginJS')
<script src="{{ asset('global/vendor/slick-carousel/slick.js') }}"></script>
@endpush

@push('pageJS')
<script src="{{ asset('assets/examples/js/pages/profile-v2.js') }}"></script>
@endpush