@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<!-- Page Title -->
<div class="page-title accent-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">About</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="{{route ('home')}}">Home</a></li>
                <li class="current">About</li>
            </ol>
        </nav>
    </div>
</div>
<!-- End Page Title -->
<!-- About Section -->
<section id="about" class="about section">

    <div class="container">

        <div class="row position-relative">

            <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200"><img
                    src="Company/assets/img/about.jpg">
            </div>

            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                <h2 class="inner-title">Consequatur eius et magnam</h2>
                <div class="our-story">
                    <h4>Est 1988</h4>
                    <h3>Our Story</h3>
                    <p>Inventore aliquam beatae at et id alias. Ipsa dolores amet consequuntur minima quia maxime autem.
                        Quidem id sed ratione. Tenetur provident autem in reiciendis rerum at dolor. Aliquam consectetur
                        laudantium temporibus dicta minus dolor.</p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commo</span>
                        </li>
                        <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit in</span>
                        </li>
                        <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
                    </ul>
                    <p>Vitae autem velit excepturi fugit. Animi ad non. Eligendi et non nesciunt suscipit repellendus
                        porro in quo eveniet. Molestias in maxime doloremque.</p>

                    <div class="watch-video d-flex align-items-center position-relative">
                        <i class="bi bi-play-circle"></i>
                        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox stretched-link">Watch
                            Video</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section><!-- /About Section -->

<section id="team" class="team py-5 bg-light">
    <div class="container" data-aos="fade-up">
        <div class="section-title text-center mb-5">
            <h2>Meet Our Team</h2>
            <p>Our team is composed of talented and dedicated professionals who are passionate about their work.</p>
        </div>
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
                <div class="team-member text-center p-4 shadow rounded">
                    <img src="{{ asset('Company/assets/img/team/team-1.jpg') }}" class="img-fluid rounded-circle mb-3"
                        alt="Team Member">
                    <h4>John Doe</h4>
                    <p>CEO & Founder</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-member text-center p-4 shadow rounded">
                    <img src="{{ asset('Company/assets/img/team/team-2.jpg') }}" class="img-fluid rounded-circle mb-3"
                        alt="Team Member">
                    <h4>Jane Smith</h4>
                    <p>Chief Marketing Officer</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-member text-center p-4 shadow rounded">
                    <img src="{{ asset('Company/assets/img/team/team-3.jpg') }}" class="img-fluid rounded-circle mb-3"
                        alt="Team Member">
                    <h4>Michael Brown</h4>
                    <p>Lead Developer</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="skills section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Our Skills</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

            <div class="col-lg-6">

                <div class="progress">
                    <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div><!-- End Skills Item -->

                <div class="progress">
                    <span class="skill"><span>CSS</span> <i class="val">90%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div><!-- End Skills Item -->

                <div class="progress">
                    <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div><!-- End Skills Item -->

            </div>

            <div class="col-lg-6">

                <div class="progress">
                    <span class="skill"><span>PHP</span> <i class="val">80%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div><!-- End Skills Item -->

                <div class="progress">
                    <span class="skill"><span>WordPress/CMS</span> <i class="val">90%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div><!-- End Skills Item -->

                <div class="progress">
                    <span class="skill"><span>Photoshop</span> <i class="val">55%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div><!-- End Skills Item -->

            </div>

        </div>

    </div>

</section><!-- /Skills Section -->

<!-- Clients Section -->
<section id="clients" class="clients section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Clients</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0 clients-wrap">

            <div class="col-xl-3 col-md-4 client-logo">
                <img src="Company/assets/img/clients/client-1.png" class="img-fluid" alt="">
            </div><!-- End Client Item -->

            <div class="col-xl-3 col-md-4 client-logo">
                <img src="Company/assets/img/clients/client-2.png" class="img-fluid" alt="">
            </div><!-- End Client Item -->

            <div class="col-xl-3 col-md-4 client-logo">
                <img src="Company/assets/img/clients/client-3.png" class="img-fluid" alt="">
            </div><!-- End Client Item -->

            <div class="col-xl-3 col-md-4 client-logo">
                <img src="Company/assets/img/clients/client-4.png" class="img-fluid" alt="">
            </div><!-- End Client Item -->

            <div class="col-xl-3 col-md-4 client-logo">
                <img src="Company/assets/img/clients/client-5.png" class="img-fluid" alt="">
            </div><!-- End Client Item -->

            <div class="col-xl-3 col-md-4 client-logo">
                <img src="Company/assets/img/clients/client-6.png" class="img-fluid" alt="">
            </div><!-- End Client Item -->

            <div class="col-xl-3 col-md-4 client-logo">
                <img src="Company/assets/img/clients/client-7.png" class="img-fluid" alt="">
            </div><!-- End Client Item -->

            <div class="col-xl-3 col-md-4 client-logo">
                <img src="Company/assets/img/clients/client-8.png" class="img-fluid" alt="">
            </div><!-- End Client Item -->

        </div>

    </div>

</section><!-- /Clients Section -->
@endsection