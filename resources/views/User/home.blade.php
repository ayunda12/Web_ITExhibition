@extends('User.layout.index')
@section('css')
    <style type="text/css">
        .section-header h3 {
            font-size: 36px;
            color: #283d50;
            text-align: center;
            font-weight: 500;
            position: relative;
        }

        .section-header p {
            text-align: center;
            margin: auto;
            font-size: 15px;
            padding-bottom: 60px;
            color: #556877;
            width: 50%;
        }

        #clients {
            padding: 60px 0;

        }

        #clients .clients-wrap {
            border-top: 1px solid #6aaef7;
            border-left: 1px solid #6aaef7;
            margin-bottom: 30px;

        }

        #clients .client-logo {
            padding: 64px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            border-right: 1px solid #6aaef7;
            border-bottom: 1px solid #6aaef7;
            overflow: hidden;
            background-color: #f5f5f5;
            height: 160px;
        }

        #clients img {
            transition: all 0.4s ease-in-out;
        }

    </style>
@endsection
@section('body')
    <div id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
        class="modal fade">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title">Sign Up Modal</h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                            aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form id="signupform" action="#">
                        <div class="form-group">
                            <label for="fullname">Full Name</label>
                            <input type="text" name="fullname" placeholder="Full Name" id="fullname">
                        </div>
                        <div class="form-group">
                            <label for="username">User Name</label>
                            <input type="text" name="username" placeholder="User Name" id="username">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="text" name="email" placeholder="Email Address" id="email">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="submit btn btn-primary btn-shadow btn-gradient">Signup</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <section id="hero" class="hero hero-home bg-gray">
      <div class="container text-center">
            <h1>Virtual Exhibition</h1>
            <h2>Hall</h2>
            <div class="CTA"><a href="#features" class="btn btn-primary btn-shadow btn-gradient link-scroll">START</a></div>
          </div>
      </div>
    </section>
    <!--<section id="browser" class="browser">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="h3 mb-5">How it works</h2>
                    <div class="browser-mockup">
                        <div id="nav-tabContent" class="tab-content">
                            <div id="nav-first" role="tabpanel" aria-labelledby="nav-first-tab"
                                class="tab-pane fade show active"><img
                                    src="https://d19m59y37dris4.cloudfront.net/landy/1-0/img/preview-3.png" alt="..."
                                    class="img-fluid"></div>
                            <div id="nav-second" role="tabpanel" aria-labelledby="nav-second-tab" class="tab-pane fade">
                                <img src="https://d19m59y37dris4.cloudfront.net/landy/1-0/img/preview-2.png" alt="..."
                                    class="img-fluid">
                            </div>
                            <div id="nav-third" role="tabpanel" aria-labelledby="nav-third-tab" class="tab-pane fade">
                                <img src="https://d19m59y37dris4.cloudfront.net/landy/1-0/img/preview-1.png" alt="..."
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="myTab" role="tablist" class="nav nav-tabs">
                <div class="row">
                    <div class="col-md-4"><a id="nav-first-tab" data-toggle="tab" href="#nav-first" role="tab"
                            aria-controls="nav-first" aria-expanded="true" class="nav-item nav-link active"> <span
                                class="number">1</span>Choose any website to turn into an interactive pinboard
                            for feedback</a></div>
                    <div class="col-md-4"><a id="nav-second-tab" data-toggle="tab" href="#nav-second" role="tab"
                            aria-controls="nav-second" class="nav-item nav-link"> <span
                                class="number">2</span>Choose any website to turn into an interactive pinboard
                            for feedback</a></div>
                    <div class="col-md-4"><a id="nav-third-tab" data-toggle="tab" href="#nav-third" role="tab"
                            aria-controls="nav-third" class="nav-item nav-link"> <span class="number">3</span>Choose
                            any website to turn into an interactive pinboard
                            for feedback</a></div>
                </div>
            </div>
        </div>
    </section>-->
    <section id="about-us" class="about-us bg-gray">
      <div class="container">
        <h2>Tentang Kami</h2>
        <div class="row">
          <p class="lead col-lg-10">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. or randomised words which don't look even slightly believable. </p>
        </div>
      </div>
    </section>
    <section id="features" class="features">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="text col-lg-6 order-2 order-lg-1">
                    <div class="icon"><img src="https://d19m59y37dris4.cloudfront.net/landy/1-0/img/medal.svg"
                            alt="..." class="img-fluid"></div>
                    <h4>Produk</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable. </p><a href="#" class="btn btn-primary btn-shadow btn-gradient">View More</a>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2"><img
                        src="https://d19m59y37dris4.cloudfront.net/landy/1-0/img/feature-1.png" alt="..."
                        class="img-fluid"></div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="image col-lg-6"><img src="https://d19m59y37dris4.cloudfront.net/landy/1-0/img/feature-2.png"
                        alt="..." class="img-fluid"></div>
                <div class="text col-lg-6">
                    <div class="icon"><img src="https://d19m59y37dris4.cloudfront.net/landy/1-0/img/hourglass.svg"
                            alt="..." class="img-fluid"></div>
                    <h4>Your peace of mind is our business</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable. </p><a href="#" class="btn btn-primary btn-shadow btn-gradient">View More</a>
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="text col-lg-6 order-2 order-lg-1">
                    <div class="icon"><img src="https://d19m59y37dris4.cloudfront.net/landy/1-0/img/cup.svg"
                            alt="..." class="img-fluid"></div>
                    <h4>Your peace of mind is our business</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable. </p><a href="#" class="btn btn-primary btn-shadow btn-gradient">View More</a>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2"><img
                        src="https://d19m59y37dris4.cloudfront.net/landy/1-0/img/feature-3.png" alt="..."
                        class="img-fluid"></div>
            </div>
        </div>
    </section>
    <!--<section id="extra-features" class="extra-features bg-primary">
        <div class="container text-center">
            <header>
                <h2>More great features </h2>
                <div class="row">
                    <p class="lead col-lg-8 mx-auto">There are many variations of passages of Lorem Ipsum available, but
                        the majority have suffered alteration in some form.</p>
                </div>
            </header>
            <div class="grid row">
                <div class="item col-lg-4 col-md-6">
                    <div class="icon"> <i class="icon-diploma"></i></div>
                    <h3 class="h5">Lorem Ipsum Dolor</h3>
                    <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                        humour.</p>
                </div>
                <div class="item col-lg-4 col-md-6">
                    <div class="icon"> <i class="icon-folder-1"></i></div>
                    <h3 class="h5">Lorem Ipsum Dolor</h3>
                    <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                        humour.</p>
                </div>
                <div class="item col-lg-4 col-md-6">
                    <div class="icon"> <i class="icon-gears"></i></div>
                    <h3 class="h5">Lorem Ipsum Dolor</h3>
                    <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                        humour.</p>
                </div>
                <div class="item col-lg-4 col-md-6">
                    <div class="icon"> <i class="icon-management"></i></div>
                    <h3 class="h5">Lorem Ipsum Dolor</h3>
                    <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                        humour.</p>
                </div>
                <div class="item col-lg-4 col-md-6">
                    <div class="icon"> <i class="icon-pie-chart"></i></div>
                    <h3 class="h5">Lorem Ipsum Dolor</h3>
                    <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                        humour.</p>
                </div>
                <div class="item col-lg-4 col-md-6">
                    <div class="icon"> <i class="icon-quality"></i></div>
                    <h3 class="h5">Lorem Ipsum Dolor</h3>
                    <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                        humour.</p>
                </div>
            </div>
        </div>
    </section>-->
    <section id="testimonials" class="testimonials">
        <div class="container">
            <header class="text-center no-margin-bottom">
                <h2>Komentar</h2>
                <p class="lead">There are many variations of passages of Lorem Ipsum available, but the
                    majority have</p>
            </header>
            <div class="owl-carousel owl-theme testimonials-slider">
                <div class="item-holder">
                    <div class="item">
                        <div class="avatar"><img
                                src="https://d19m59y37dris4.cloudfront.net/landy/1-0/img/avatar-3.jpg" alt="..."
                                class="img-fluid"></div>
                        <div class="text">
                            <div class="quote"><img
                                    src="https://d19m59y37dris4.cloudfront.net/landy/1-0/img/quote.svg" alt="..."
                                    class="img-fluid"></div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever</p><strong class="name">Jessica
                                Watson</strong>
                        </div>
                    </div>
                </div>
                <div class="item-holder">
                    <div class="item">
                        <div class="avatar"><img
                                src="https://d19m59y37dris4.cloudfront.net/landy/1-0/img/avatar-5.jpg" alt="..."
                                class="img-fluid"></div>
                        <div class="text">
                            <div class="quote"><img
                                    src="https://d19m59y37dris4.cloudfront.net/landy/1-0/img/quote.svg" alt="..."
                                    class="img-fluid"></div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever</p><strong class="name">Sarrah
                                Wood</strong>
                        </div>
                    </div>
                </div>
                <div class="item-holder">
                    <div class="item">
                        <div class="avatar"><img
                                src="https://d19m59y37dris4.cloudfront.net/landy/1-0/img/avatar-3.jpg" alt="..."
                                class="img-fluid"></div>
                        <div class="text">
                            <div class="quote"><img
                                    src="https://d19m59y37dris4.cloudfront.net/landy/1-0/img/quote.svg" alt="..."
                                    class="img-fluid"></div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever</p><strong class="name">Jessica
                                Watson</strong>
                        </div>
                    </div>
                </div>
                <div class="item-holder">
                    <div class="item">
                        <div class="avatar"><img
                                src="https://d19m59y37dris4.cloudfront.net/landy/1-0/img/avatar-5.jpg" alt="..."
                                class="img-fluid"></div>
                        <div class="text">
                            <div class="quote"><img
                                    src="https://d19m59y37dris4.cloudfront.net/landy/1-0/img/quote.svg" alt="..."
                                    class="img-fluid"></div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever</p><strong class="name">Sarrah
                                Wood</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="clients" class="section-bg" style="background-color: #f5f5f5">
        <div class="container">

            <div class="section-header">
                <h3>Our CLients</h3>
                <p>Meet our happy clients</p>
            </div>

            <div class="row no-gutters clients-wrap clearfix wow fadeInUp"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="col-lg-4 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{ asset('assetsuser/') }}/img/polije.svg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{ asset('assetsuser/') }}/img/jti.svg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{ asset('assetsuser/') }}/img/hmjti.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{ asset('assetsuser/') }}/img/kematif.svg" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{ asset('assetsuser/') }}/img/jtinova.svg" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{ asset('assetsuser/') }}/img/esolusindo.svg" class="img-fluid" alt="">
                    </div>
                </div>

            </div>


    </section>
@endsection
