<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="image/favicon.png" type="image/png">
    <title>Tenda</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('vendors/nice-select/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('vendors/owl-carousel/owl.carousel.min.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ URL::asset('../css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../css/responsive.css') }}">

    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"
    rel="stylesheet"
    />
</head>
<style>
    .comment {
        width: 40%;
        height: 100px;
        padding: 10px;
        background-color: #d0e2bc;
        font: 1.4em/1.6em cursive;
        color: #095484;
    }
</style>

<body>
    <!--================Header Area =================-->
    <header class="header_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html"><img src="image/Logo Link.svg" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </nav>
        </div>
        
    </header>
    <!--================Header Area =================-->

    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="booking_table d_flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Trouvez votre offre idéale</h2>
                    <p>Tenda donne accès aux appels privés et publics pour endroit tous les appels d’offres, de projets et de candidatures</p>
                    <a href="#" class="btn theme_btn button_hover">Commencer</a>
                </div>
            </div>
        </div>
        <div class="hotel_booking_area position">
            <div class="container">
                <div class="hotel_booking_table">
                    <div class="col-md-3">
                        <h2>Trouvez<br> votre offre</h2>
                    </div>
                    <div class="col-md-9">
                        <div class="boking_table">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker11'>
                                                <input type='text' class="form-control" placeholder="Date d'échéance" />
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="input-group">
                                            <select class="wide">
                                                <option data-display="Catégorie">Catégorie</option>
                                                <option value="1">Old</option>
                                                <option value="2">Younger</option>
                                                <option value="3">Potato</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="input-group">
                                            <select class="wide">
                                                <option data-display="Région">Région</option>
                                                @foreach ($countries as $country)
                                                <option value="1"> {{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <a class="book_now_btn button_hover" href="#">Chercher</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Banner Area =================-->

    <!--================ List Of Tenders Area  =================-->'
    @foreach ($tenders as $item)
    <section class="testimonial_area section_gap">
        <div class="container">
            <div class="section_title text-start">
                <h4 class="title_color">Appels d'offres disponibles</h4>
                
            </div>
            <div class="media testimonial_item mb-4">
                <div class="media-body">
                    <h4>{{ $item->name }}</h4>
                    <p>{{ $item->description }}</p>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <h5 class="sec_h5">
                                Emplacement: <strong class="strong-black">Kenya</strong>
                            </h5>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <h5 class="sec_h5">
                                Statut: <i class="fa fa-circle" style="color: blue;"></i><strong class="strong-black">
                                    Market Information</strong>
                            </h5>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <h5 class="sec_h5">
                                Temps restant: <i class="fa fa-calendar"></i><strong class="strong-black">
                                {{ $item->submission_date }}</strong>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-12">
                    <div class="col-md-6">
                        
                        <a href="#" class="genric-btn info-border circle arrow mt-3">Plus d'information<span
                        class="lnr lnr-arrow-right"></span></a>
                    </div>
                    <div class="dropdown">
                    <button
                        class="genric-btn info-border circle arrow mt-3 dropdown-toggle"
                        type="button"
                        id="dropdownMenuButton"
                        data-mdb-toggle="dropdown"
                        aria-expanded="false"
                    >
                        Comment
                    </button>
                    <div class="card-footer py-3 border-0 dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color: #f8f9fa; position:relative; left:0vw;">
                        <div class="d-flex flex-start w-100">
                        <img
                            class="rounded-circle shadow-1-strong me-3"
                            src="https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_1280.png"
                            alt="avatar"
                            width="40"
                            height="40"
                        />
                        <div class="form-outline w-100">
                        <form method="post" action="{{ route('comment.store') }}">
                            @csrf
                            <textarea
                            class="comment form-control" name="comment"
                            style="background: #fff;"
                            ></textarea>
                            <label class="form-label" for="textAreaExample">Message</label>
                        </div>
                    </div>
                    <div class="float-end mt-2 pt-1">
                        <button type="submit" class="btn btn-primary btn-sm">Post comment</button>
                        <button type="button" class="btn btn-outline-primary btn-sm">Cancel</button>
                    </div>
                </form>
                    </div>
                    </div>
                    </ul>
                    </div>
                </div>
                </div>
            @endforeach
            
    </section>

    <!--================ start footer Area  =================-->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p class="col-lg-8 col-sm-12 footer-text m-0">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | Powered By <a href="https://revolution-analytics.co.ke" target="_blank">Revolution Analytics</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="https://www.linkedin.com/company/revolution-analytics-ltd/" target="_blank"><i
                            class="fa fa-linkedin"></i></a>
                    <a href="mailto:info@revolution-analytics.co.ke" target="_blank"><i
                            class="fa fa-envelope-o"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"
></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>