<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> AREA-education </title>
    <link rel="icon" href="{{ asset('resources/icons/area.jpeg') }}">
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- amimate css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css-master/animate.css') }}">

    <!-- Css only -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

</head>
<body id="page-top">

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/"> faculty of engineering </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about"> معلومات عننا </a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services"> الاقسام الموجودة </a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Portfolio"> المواد </a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact"> تواصل معنا </a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Masthead-->
<!--  -->


<!-- end navbar -->

<section class="option-box">
    <div class="color-option collapse" id="colorbox" style="height: 20px">
        choose your theme
        <ul class="list-unstyled">
            <li data-value="default-theme.css" ></li>
            <li data-value="blue-theme.css"></li>
            <li data-value="treco-theme.css"></li>
            <li data-value="purple-theme.css"></li>
            <li data-value="green-theme.css"></li>
            <!-- <li data-value="black.css"></li> -->

        </ul>
    </div>

    <img src="{{ asset('icons/settings.svg') }}" class="fa-x" data-toggle="collapse" data-target="#colorbox">
</section>

<section class="top">
            <i class="fas fa-arrow-circle-up"></i>
</section>

<!-- About section-->
<section class="page-section bg-primary" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-black mt-0 wow bounceInUp">كل المناهج هنا </h2>
                <hr class="divider light my-4" />
                <p class="text-black-50 mb-4 wow bounceInUp"> مناهج جميع الصفوف و جميع الاقسام </p>

                <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-light btn-xl js-scroll-trigger" href="#services"> ابدأ </a>
                    <a class="btn btn-light btn-xl js-scroll-trigger" data-toggle="modal" data-target="#form"> دخول </a>
                </div>


                <!-- ************************** regForm ************************** -->
                <!-- Modal -->
                <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"> Register </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class=" col-lg-12 col-md-6 " >

                                            <form class="log" method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <a class="Register" id="form">  انتقل الي انشاء حساب جديد </a>
                                                <strong>الدخول للادمن فقط</strong>
                                                <div class="form-group">
                                                    <label for="email"> : اكتب الايميل الخاص بك </label>
                                                    <input type="email" class="form-control" id="email" name="email" required="required">
                                                </div>
                                                <div class="form-group">
                                                    <label for="pwd"> : كلمة المرور </label>
                                                    <input type="password" class="form-control" id="pwd" name="password" required="required">
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="checkbox"> تذكرني </label>
                                                </div>
                                                <input type="submit" class="btn btn-sucsess sign" value="تسجيل الدخول">
                                                <!-- <a class="Register"> Register </a> -->
                                            </form>

                                            <form class="reg" action="/user/signin" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <a class="Register" id="form"> انتقل الي تسجيل الدخول </a>
                                                    <label for="text"> : الاسم   </label>
                                                    <input type="text" class="form-control" id="Fname" name="name" required="required">

                                                    <label for="email">: الايميل الخاص بك </label>
                                                    <input type="email" class="form-control" id="email2" name="email" required="required">

                                                </div>

                                                <div class="form-group">
                                                    <label for="pwd"> : كلمة المرو </label>
                                                    <input type="password" class="form-control" id="pwd2" name="password1" required="required">
                                                </div>

                                                <div class="form-group">
                                                    <label for="pwd"> : اعد كتابة كلمة المرور </label>
                                                    <input type="password" class="form-control" id="pwd3" name="password2" required="required">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <select class="custom-select" id="inputGroupSelect01" name="group" required="required">
                                                        <option value="0" selected>الاعداديه</option>
                                                        <option value="1">الاولى</option>
                                                        <option value="2">الثانيه</option>
                                                        <option value="3">الثالثه</option>
                                                        <option value="4">الرابعه</option>
                                                    </select>
                                                    <div class="input-group-append">
                                                        <label class="input-group-text" for="inputGroupSelect02">الفرقه</label>
                                                    </div>
                                                </div>

                                                <div class="input-group mb-3">
                                                    <select class="custom-select" id="inputGroupSelect02"  name="depart" required="required">
                                                        <option value="0" selected>اعدادى</option>
                                                        <option value="1">مدنى</option>
                                                        <option value="2">كهربه(عام)</option>
                                                        <option value="2">كهربه(باور)</option>
                                                        <option value="3">كهربه(اتصالات)</option>
                                                        <option value="3">عماره</option>
                                                        <option value="4">انشاءات</option>
                                                    </select>
                                                    <div class="input-group-append">
                                                        <label class="input-group-text" for="inputGroupSelect02">القسم</label>
                                                    </div>
                                                </div>

                                                <button type="button" id="show" class="btn btn-sucsess sign"> : اظهر كلمة المرور </button>

                                                <input type="submit" class="btn btn-sucsess sign" value="انشاء حساب جديد"/>

                                            </form>

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
</section>

<!-- Services section-->
<section class="page-section" id="services">
    <div class="container">

        
        <?php
        use \App\User;
        $admins = User::where('is_admin', '=', 1)->get();
        $prim = User::where('depart', '=', 0)->get();
        $civil = User::where('depart', '=', 1)->get();
        $elec = User::where('depart', '=', 2)->get();
        $arc = User::where('depart', '=', 3)->get();
        $build = User::where('depart', '=', 4)->get();
        ?>
        <h2 class="text-center mt-0 wow bounceInUp">الاقسام المتاحة بالموقع</h2>
        <hr class="divider my-4" />
        <div class="row">

            <div class="col-lg-2 col-md-6 text-center">
                <div class="mt-5">
                    <!-- <i class="fas fa-exclamation-triangle text-primary fa-4x mb-4"></i> -->
                    <img class="fa-4x text-primary mb-4" src="{{ asset('icons/worker.svg') }}" style="width: 1em;"/>
                    <h3 class="h4 mb-2">مدني</h3>
                    <p class="text-muted mb-0"> عدد الطلاب في القسم </p>
                    <h1><span class="counter">{{ count($civil) }}</span></h1>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 text-center">
                <div class="mt-5">
                    <!-- <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i> -->
                    <img class="fa-4x text-primary mb-4" src="{{ asset('icons/circuit.svg') }}" style="width: 1em;" />
                    <h3 class="h4 mb-2">كهربا</h3>
                    <p class="text-muted mb-0"> عدد الطلاب القسم </p>
                    <h1><span class="counter">{{ count($elec) }}</span></h1>

                </div>
            </div>

            <div class="col-lg-2 col-md-6 text-center">
                <div class="mt-5">
                    <!-- <i class="fas fa-4x fa-globe text-primary mb-4"></i> -->
                    <img class="fa-4x text-primary mb-4" src="{{ asset('icons/government.svg') }}" style="width: 1em;"/>
                    <h3 class="h4 mb-2">عمارة</h3>
                    <p class="text-muted mb-0"> عدد الطلاب القسم </p>
                    <h1><span class="counter">{{ count($arc) }}</span></h1>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 text-center">
                <div class="mt-5">
                    <!-- <i class="fas fa-4xcircuit-board.svg fa-heart text-primary mb-4"></i> -->
                    <img class="fa-4x text-primary mb-4" src="{{ asset('icons/gear.svg') }}" style="width: 1em;"/>
                    <h3 class="h4 mb-2">اعدادي</h3>
                    <p class="text-muted mb-0"> عدد الطلاب القسم </p>
                    <h1><span class="counter">{{ count($prim) }}</span></h1>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 text-center">
                <div class="mt-5">
                    <!-- <i class="fas fa-4xcircuit-board.svg fa-heart text-primary mb-4"></i> -->
                    <img class="fa-4x text-primary mb-4" src="{{ asset('icons/engineers.svg') }}" style="width: 1em;"/>
                    <h3 class="h4 mb-2">انشاءات</h3>
                    <p class="text-muted mb-0"> عدد الطلاب القسم </p>
                    <h1><span class="counter">{{ count($build) }}</span></h1>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 text-center">
                <div class="mt-5">
                    <!-- <i class="fas fa-4xcircuit-board.svg fa-heart text-primary mb-4"></i> -->
                    <img class="fa-4x text-primary mb-4" src="{{ asset('icons/engineer_admin.svg') }}" style="width: 1em;"/>
                    <h3 class="h4 mb-2">مديري الموقع</h3>
                    <p class="text-muted mb-0"> عدد الادمينز </p>
                    <h1><span class="counter">{{ count($admins) }}</span></h1>
                </div>
            </div>

        </div>
    </div>
</section>





@yield('content')






<!-- Contact section-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="mt-0"> تواصل معنا لاي غرض </h2>
                <hr class="divider my-4" />
                <p class="text-muted mb-5"> ! اتصل بنا أو أرسل إلينا بريدًا إلكترونيًا وسنرد عليك في أقرب وقت ممكن </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                <h3><a class="d-block" href="tel:01113284597" >+20 111-328-4597</a></h3>
            </div>
            <div class="col-lg-4 mr-auto text-center">
                <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                <!-- Make sure to change the email address in BOTH the anchor text and the link target below!--><h3><a class="d-block" href="mailto:area.compiler@gmail.com">area.compiler@gmail.com</a></h3>
            </div>
        </div>
    </div>
</section>

<section class="bg-light page-section" id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        
        <div class="row">

            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="{{ asset('img/team/1.jpeg') }}" class="d-block" >
                        <img class="img-card bf" src="{{ asset('img/team/1.jpeg') }}">
                    </a>
                    <div class="text pt-3 pb-4 px-4">
                        <div class="meta">
                            <div>Sept. 06, 2019</div>
                            <div>Admin</div>
                            <div>aya</div>
                        </div>
                        <h3 class="heading">admin in the groub</h3>
                        <p class="clearfix">
                            <a href="#" class="float-left d-block">Read more</a>
                            <a href="#" class="float-right meta-chat"><i class="fas fa-comments"></i> 3</a>

                        <div class="socail_links">
                            <ul>
                                <li> <a class="d-inline" href="https://www.facebook.com/area.webdesigners.1"> <i class=" fab fa-facebook "></i> </a> </li>
                                <li> <a class="d-inline" href="#"> <i class="fab fa-google-plus"></i> </a> </li>
                                <li> <a class="d-inline" href="#"> <i class="fab fa-twitter"></i> </a> </li>
                                <li> <a class="d-inline" href="#"> <i class="fab fa-instagram"></i> </a> </li>
                            </ul>
                        </div>

                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="{{ asset('img/team/2.jpeg') }}" class="d-block" style="/*background-image: url('img/team/2.jpeg');">
                        <img class="img-card bf" src="{{ asset('img/team/2.jpeg') }}">
                    </a>
                    <div class="text pt-3 pb-4 px-4">
                        <div class="meta">
                            <div>Sept. 06, 2019</div>
                            <div>Admin</div>
                            <div>Abu bakr</div>
                        </div>
                        <h3 class="heading">admin in the groub</h3>
                        <p class="clearfix">
                            <a href="#" class="float-left d-block">Read more</a>
                            <a href="#" class="float-right meta-chat"><i class="fas fa-comments"></i> 3</a>

                        <div class="socail_links">
                            <ul>
                                <li> <a class="d-inline" href="https://www.facebook.com/profile.php?id=100011545385843"> <i class=" fab fa-facebook "></i> </a> </li>
                                <li> <a class="d-inline" href="#"> <i class="fab fa-google-plus"></i> </a> </li>
                                <li> <a class="d-inline" href="#"> <i class="fab fa-twitter"></i> </a> </li>
                                <li> <a class="d-inline" href="#"> <i class="fab fa-instagram"></i> </a> </li>
                            </ul>
                        </div>

                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="{{ asset('img/team/3.jpeg') }}" class="d-block" style="/*background-image: url('img/team/3.jpeg');">
                        <img class="img-card bf" src="{{ asset('img/team/3.jpeg') }}">
                    </a>
                    <div class="text pt-3 pb-4 px-4">
                        <div class="meta">
                            <div>Sept. 06, 2019</div>
                            <div>Admin</div>
                            <div>Rana</div>
                        </div>
                        <h3 class="heading">admin in the groub</h3>
                        <p class="clearfix">
                            <a href="#" class="float-left d-block">Read more</a>
                            <a href="#" class="float-right meta-chat"><i class="fas fa-comments"></i> 3</a>

                        <div class="socail_links">
                            <ul>
                                <li> <a class="d-inline" href="https://www.facebook.com/area.webdesigners.1"> <i class=" fab fa-facebook "></i> </a> </li>
                                <li> <a class="d-inline" href="#"> <i class="fab fa-google-plus"></i> </a> </li>
                                <li> <a class="d-inline" href="#"> <i class="fab fa-twitter"></i> </a> </li>
                                <li> <a class="d-inline" href="#"> <i class="fab fa-instagram"></i> </a> </li>
                            </ul>
                        </div>

                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="img/team/4.jpeg" class="d-block" style="/*background-image: url('img/team/4.jpeg');">
                        <img class="img-card bf" src="{{ asset('img/team/4.jpeg') }}">
                    </a>
                    <div class="text pt-3 pb-4 px-4">
                        <div class="meta">
                            <div>Sept. 06, 2019</div>
                            <div>Admin</div>
                            <div>yassa</div>
                        </div>
                        <h3 class="heading">admin in the groub</h3>
                        <p class="clearfix">
                            <a href="#" class="float-left d-block">Read more</a>
                            <a href="#" class="float-right meta-chat"><i class="fas fa-comments"></i> 3</a>

                        <div class="socail_links">
                            <ul>
                                <li> <a class="d-inline" href="https://www.facebook.com/yassa.zaki"> <i class=" fab fa-facebook "></i> </a> </li>
                                <li> <a class="d-inline" href="#"> <i class="fab fa-google-plus"></i> </a> </li>
                                <li> <a class="d-inline" href="#"> <i class="fab fa-twitter"></i> </a> </li>
                                <li> <a class="d-inline" href="#"> <i class="fab fa-instagram"></i> </a> </li>
                            </ul>
                        </div>

                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="img/team/5.jpeg" class="d-block" style="/*background-image: url('img/team/5.jpeg');">
                        <img style = "height: 354px ; " class="img-card bf" src="{{ asset('img/team/5.jpeg') }}">
                    </a>
                    <div class="text pt-3 pb-4 px-4">
                        <div class="meta">
                            <div>Sept. 06, 2019</div>
                            <div>Admin</div>
                            <div>dr\ Elsagher</div>
                        </div>
                        <h3 class="heading">admin in the groub</h3>
                        <p class="clearfix">
                            <a href="#" class="float-left d-block">Read more</a>
                            <a href="#" class="float-right meta-chat"><i class="fas fa-comments"></i> 3</a>

                        <div class="socail_links">
                            <ul>
                                <li> <a class="d-inline" href="https://www.facebook.com/profile.php?id=100006948694379"> <i class=" fab fa-facebook "></i> </a> </li>
                                <li> <a class="d-inline" href="#"> <i class="fab fa-google-plus"></i> </a> </li>
                                <li> <a class="d-inline" href="#"> <i class="fab fa-twitter"></i> </a> </li>
                                <li> <a class="d-inline" href="#"> <i class="fab fa-instagram"></i> </a> </li>
                            </ul>
                        </div>

                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="img/team/6.png" class="d-block" style="/*background-image: url('img/team/6.png');">
                        <img class="img-card bf" src="{{ asset('img/team/6.png') }}">
                    </a>
                    <div class="text pt-3 pb-4 px-4">
                        <div class="meta">
                            <div>Sept. 06, 2019</div>
                            <div>Admin</div>
                            <div>el khoiuty</div>
                        </div>
                        <h3 class="heading">admin in the groub</h3>
                        <p class="clearfix">
                            <a href="#" class="float-left d-block">Read more</a>
                            <a href="#" class="float-right meta-chat"><i class="fas fa-comments"></i> 3</a>

                        <div class="socail_links">
                            <ul>
                                <li> <a class="d-inline" href="https://www.facebook.com/Elkhiouty"> <i class=" fab fa-facebook "></i> </a> </li>
                                <li> <a class="d-inline" href="#"> <i class="fab fa-google-plus"></i> </a> </li>
                                <li> <a class="d-inline" href="#"> <i class="fab fa-twitter"></i> </a> </li>
                                <li> <a class="d-inline" href="#"> <i class="fab fa-instagram"></i> </a> </li>
                            </ul>
                        </div>

                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Footer-->
<footer class="bg-light py-5">


    <div class="container"><div class="small text-center text-muted">Copyright © 2020 - <a class="d-inline" href="https://www.facebook.com/area.webdesigners.1" > AREA-web-design-team </a>  </div></div>
</footer>


<!-- counter up -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="https://bfintal.github.io/Counter-Up/jquery.counterup.min.js"></script>
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 2000
        });
    });
</script>
<!-- counter up -->


<!-- wow -->
<script src="{{ asset('js/wow.min.js') }}"></script>
<script>
    new WOW().init();
</script>

<!-- Bootstrap core JS-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>



<!-- Core theme JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slidesjs/3.0/jquery.slides.min.js" integrity="sha256-g57NjvZT9kUcXYfgCMoQ/q6KssyDl/xAZE0ooOaK1Tk=" crossorigin="anonymous"></script>
<script src="{{ asset('js/scripts.js') }}"></script>

<!-- JS here -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<!-- font awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>


</body>
</html>