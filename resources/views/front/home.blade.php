@extends('front.master')
@section('content')
 <!--nav-->
    <div class="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
                  <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('front/imgs/logo.png')}}" class="d-inline-block align-top" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">الرئيسية <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">عن بنك الدم</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">المقالات</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="donation-requests.html">طلبات التبرع</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="who-are-us.html">من نحن</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact-us.html">اتصل بنا</a>
                            </li>
                        </ul>
                        
                        <!--not a member-->
                        <div class="accounts">
                            <a href="create-account.html" class="create">إنشاء حساب جديد</a>
                            <a href="signin-account.html" class="signin">الدخول</a>
                        </div>
                        
                        <!--I'm a member

                        <a href="#" class="donate">
                            <img src="imgs/transfusion.svg">
                            <p>طلب تبرع</p>
                        </a>

                        -->
                        
                    </div>
                </div>
            </nav>
        </div>
        
        <!--intro-->
        <div class="intro">
            <div id="slider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#slider" data-slide-to="0" class="active"></li>
                    <li data-target="#slider" data-slide-to="1"></li>
                    <li data-target="#slider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item carousel-1 active">
                        <div class="container info">
                            <div class="col-lg-5">
                                <h3>بنك الدم نمضى قدما لصحة أفضل</h3>
                                <p>
                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص. 
                                </p>
                                <a href="#">المزيد</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item carousel-2">
                        <div class="container info">
                            <div class="col-lg-5">
                                <h3>بنك الدم نمضى قدما لصحة أفضل</h3>
                                <p>
                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص. 
                                </p>
                                <a href="#">المزيد</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item carousel-3">
                        <div class="container info">
                            <div class="col-lg-5">
                                <h3>بنك الدم نمضى قدما لصحة أفضل</h3>
                                <p>
                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي. 
                                </p>
                                <a href="#">المزيد</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--about-->
        <div class="about">
            <div class="container">
                <div class="col-lg-6 text-center">
                    <p>
                        <span>بنك الدم</span> هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ.
                    </p>
                </div>
            </div>
        </div>
        
        <!--articles-->
        <div class="articles">
            <div class="container title">
                <div class="head-text">
                    <h2>المقالات</h2>
                </div>
            </div>
            <div class="view">
                <div class="container">
                    <div class="row">
                        <!-- Set up your HTML -->
                        <div class="owl-carousel articles-carousel">
                            <div class="card">
                                <div class="photo">=
                                    <img src="{{ asset('front/imgs/p2.jpg')}}" class="card-img-top" alt="...">
                                    <a href="article-details.html" class="click">المزيد</a>
                                </div>
                                <a href="#" class="favourite">
                                    <i class="far fa-heart"></i>
                                </a>

                                <div class="card-body">
                                    <h5 class="card-title">طريقة الوقاية من الأمراض</h5>
                                    <p class="card-text">
                                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="photo">
                                    <img src="{{ asset('front/imgs/p2.jpg')}}" class="card-img-top" alt="...">
                                    <a href="article-details.html" class="click">المزيد</a>
                                </div>
                                <a href="#" class="favourite">
                                    <i class="far fa-heart"></i>
                                </a>

                                <div class="card-body">
                                    <h5 class="card-title">طريقة الوقاية من الأمراض</h5>
                                    <p class="card-text">
                                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="photo">
                                    <img src="{{ asset('front/imgs/p2.jpg')}}" class="card-img-top" alt="...">
                                    <a href="article-details.html" class="click">المزيد</a>
                                </div>
                                <a href="#" class="favourite">
                                    <i class="far fa-heart"></i>
                                </a>

                                <div class="card-body">
                                    <h5 class="card-title">طريقة الوقاية من الأمراض</h5>
                                    <p class="card-text">
                                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="photo">
                                    <img src="{{ asset('front/imgs/p2.jpg')}}" class="card-img-top" alt="...">
                                    <a href="article-details.html" class="click">المزيد</a>
                                </div>
                                <a href="#" class="favourite">
                                    <i class="far fa-heart"></i>
                                </a>

                                <div class="card-body">
                                    <h5 class="card-title">طريقة الوقاية من الأمراض</h5>
                                    <p class="card-text">
                                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="photo">
                                    <img src="{{ asset('front/imgs/p2.jpg')}}" class="card-img-top" alt="...">
                                    <a href="article-details.html" class="click">المزيد</a>
                                </div>
                                <a href="#" class="favourite">
                                    <i class="far fa-heart"></i>
                                </a>

                                <div class="card-body">
                                    <h5 class="card-title">طريقة الوقاية من الأمراض</h5>
                                    <p class="card-text">
                                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--requests-->
        <div class="requests">
            <div class="container">
                <div class="head-text">
                    <h2>طلبات التبرع</h2>
                </div>
            </div>
            <div class="content">
                <div class="container">
                    <form class="row filter">
                        <div class="col-md-5 blood">
                            <div class="form-group">
                                <div class="inside-select">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option selected disabled>اختر فصيلة الدم</option>
                                        <option>+A</option>
                                        <option>+B</option>
                                        <option>+AB</option>
                                        <option>-O</option>
                                    </select>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 city">
                            <div class="form-group">
                                <div class="inside-select">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option selected disabled>اختر المدينة</option>
                                        <option>المنصورة</option>
                                        <option>القاهرة</option>
                                        <option>الإسكندرية</option>
                                        <option>سوهاج</option>
                                    </select>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 search">
                            <button type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                    <div class="patients">
                        <div class="details">
                            <div class="blood-type">
                                <h2 dir="ltr">B+</h2>
                            </div>
                            <ul>
                                <li><span>اسم الحالة:</span> احمد محمد احمد</li>
                                <li><span>مستشفى:</span> القصر العينى</li>
                                <li><span>المدينة:</span> المنصورة</li>
                            </ul>
                            <a href="inside-request.html">التفاصيل</a>
                        </div>
                        <div class="details">
                            <div class="blood-type">
                                <h2 dir="ltr">A+</h2>
                            </div>
                            <ul>
                                <li><span>اسم الحالة:</span> احمد محمد احمد</li>
                                <li><span>مستشفى:</span> القصر العينى</li>
                                <li><span>المدينة:</span> المنصورة</li>
                            </ul>
                            <a href="inside-request.html">التفاصيل</a>
                        </div>
                        <div class="details">
                            <div class="blood-type">
                                <h2 dir="ltr">AB+</h2>
                            </div>
                            <ul>
                                <li><span>اسم الحالة:</span> احمد محمد احمد</li>
                                <li><span>مستشفى:</span> القصر العينى</li>
                                <li><span>المدينة:</span> المنصورة</li>
                            </ul>
                            <a href="inside-request.html">التفاصيل</a>
                        </div>
                        <div class="details">
                            <div class="blood-type">
                                <h2 dir="ltr">O-</h2>
                            </div>
                            <ul>
                                <li><span>اسم الحالة:</span> احمد محمد احمد</li>
                                <li><span>مستشفى:</span> القصر العينى</li>
                                <li><span>المدينة:</span> المنصورة</li>
                            </ul>
                            <a href="inside-request.html">التفاصيل</a>
                        </div>
                    </div>
                    <div class="more">
                        <a href="donation-requests.html">المزيد</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!--contact-->
        <div class="contact">
            <div class="container">
                <div class="col-md-7">
                    <div class="title">
                        <h3>اتصل بنا</h3>
                    </div>
                    <p class="text">يمكنك الإتصال بنا للإستفسار عن معلومة وسيتم الرد عليكم</p>
                    <div class="row whatsapp">
                        <a href="#">
                            <img src="{{ asset('front/imgs/whats.png')}}">
                            <p dir="ltr">+002  1215454551</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!--app-->
        <div class="app">
            <div class="container">
                <div class="row">
                    <div class="info col-md-6">
                        <h3>تطبيق بنك الدم</h3>
                        <p>
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                        </p>
                        <div class="download">
                            <h4>متوفر على</h4>
                            <div class="row stores">
                                <div class="col-sm-6">
                                    <a href="#">
                                        <img src="{{ asset('front/imgs/google.png')}}">
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#">
                                        <img src="{{ asset('front/imgs/ios.png')}}">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="screens col-md-6">
                        <img src="{{ asset('front/imgs/App.png')}}">
                    </div>
                </div>
            </div>
        </div>
@endsection