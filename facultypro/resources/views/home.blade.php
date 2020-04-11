@extends('layouts.app')
@section('content')

<!-- Masthead-->
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">

            <div class="col-md-12 text-center heading-section ftco-animate">
                        <span class="subheading"> Dash bord </span>
                        <h2 class="mb-4"> اضف محاضرة او سكشن </h2>
            </div>

                <hr class="divider my-4" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                
            </div>
        </div>
    </div>
</header>


@if(isset($status) && $status)
<div class="alert alert-warning" >لقد حزفت موضوع</div>
@endif

<!-- Portfolio section-->
<section id="Portfolio ">

    <div id="accordion">


        <div class="card text-white">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <a class="btn btn-primary btn-lg btn-block" href="/topic/add">اضافه موضوع</a>
                </h5>
            </div>

            

                    <!-- Call to action section-->
                    <section class="bg-dark ">
                        <div class=" text-center ">


                            <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <h2 class="text-center">اعدادى</h2>
                                    </button>
                                </h2>
                                </div>

                                <div id="collapseOne" class="collapse show bg-dark " aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">

                                <div class="container">

                                <table class="table table-hover table-dark  table-responsive">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">اسم المحاضرة</th>
                                        <th scope="col"> لينك المحاضرة علي درايف </th>
                                        <th scope="col"> لينك تحميل المحاضرة  </th>
                                        <th scope="col">  لينك فديو السيكشن </th>
                                        <th scope="col"> لينك pdf السيكشن </th>
                                        <th scope="col">الادوات</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($topics->where('group', '=', 0) as $topic)
                                        <tr>
                                            <th scope="row"> {{ $topic->id }} </th>
                                            <td> {{ $topic->title }} </td>
                                            <td> {{ $topic->lecture}} </td>
                                            <td> {{ $topic->lecturedown}} </td>
                                            <td>{{ $topic->secvedio }}</td>
                                            <td> {{ $topic->secpdf }} </td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a class="btn btn-secondary btn-xl js-scroll-trigger" href="/topic/edit/{{ $topic->id }}"> تعديل </a>
                                                    <a class="btn btn-danger btn-xl js-scroll-trigger" href="/topic/delete/{{ $topic->id }}"> حزف </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                </div>

                                </div>
                                </div>
                            </div>

                            <!-- **************************** first card ******************************* -->

                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <h2 class="text-center">الفرقه الاولى</h2>
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseTwo" class="collapse bg-dark " aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">

                                <div class="container">

                                <h3 class="text-center">مدنى</h3>
                                                            
                                    <table class="table table-hover table-dark  table-responsive">
                                        <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">اسم المحاضرة</th>
                                            <th scope="col"> لينك المحاضرة علي درايف </th>
                                            <th scope="col"> لينك تحميل المحاضرة  </th>
                                            <th scope="col">  لينك فديو السيكشن </th>
                                            <th scope="col"> لينك pdf السيكشن </th>
                                            <th scope="col">الادوات</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($topics->where('group', '=', 1)->where('depart', '=', 1) as $topic)
                                            <tr>
                                                <th scope="row"> {{ $topic->id }} </th>
                                                <td> {{ $topic->title }} </td>
                                                <td> {{ $topic->lecture}} </td>
                                                <td> {{ $topic->lecturedown}} </td>
                                                <td>{{ $topic->secvedio }}</td>
                                                <td> {{ $topic->secpdf }} </td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a class="btn btn-secondary btn-xl js-scroll-trigger" href="/topic/edit/{{ $topic->id }}"> تعديل </a>
                                                        <a class="btn btn-danger btn-xl js-scroll-trigger" href="/topic/delete/{{ $topic->id }}"> حزف </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                    <h3 class="text-center">كهربا</h3>
                                    <table class="table table-hover table-dark  table-responsive">
                                        <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">اسم المحاضرة</th>
                                            <th scope="col"> لينك المحاضرة علي درايف </th>
                                            <th scope="col"> لينك تحميل المحاضرة  </th>
                                            <th scope="col">  لينك فديو السيكشن </th>
                                            <th scope="col"> لينك pdf السيكشن </th>
                                            <th scope="col">الادوات</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($topics->where('group', '=', 1)->where('depart', '=', 2) as $topic)
                                            <tr>
                                                <th scope="row"> {{ $topic->id }} </th>
                                                <td>  {{ $topic->title }}  </td>
                                                <td> {{ $topic->lecture}} </td>
                                                <td> {{ $topic->lecturedown}} </td>
                                                <td>{{ $topic->secvedio }}</td>
                                                <td> {{ $topic->secpdf }} </td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a class="btn btn-secondary btn-xl js-scroll-trigger" href="/topic/edit/{{ $topic->id }}"> تعديل </a>
                                                        <a class="btn btn-danger btn-xl js-scroll-trigger" href="/topic/delete/{{ $topic->id }}"> حزف </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                    <h3 class="text-center">عماره</h3>
                                    <table class="table table-hover table-dark  table-responsive">
                                        <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">اسم المحاضرة</th>
                                            <th scope="col"> لينك المحاضرة علي درايف </th>
                                            <th scope="col"> لينك تحميل المحاضرة  </th>
                                            <th scope="col">  لينك فديو السيكشن </th>
                                            <th scope="col"> لينك pdf السيكشن </th>
                                            <th scope="col">الادوات</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($topics->where('group', '=', 1)->where('depart', '=', 3) as $topic)
                                            <tr>
                                                <th scope="row"> {{ $topic->id }} </th>
                                                <td>  {{ $topic->title }}  </td>
                                                <td> {{ $topic->lecture}} </td>
                                                <td> {{ $topic->lecturedown}} </td>
                                                <td>{{ $topic->secvedio }}</td>
                                                <td> {{ $topic->secpdf }} </td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a class="btn btn-secondary btn-xl js-scroll-trigger" href="/topic/edit/{{ $topic->id }}"> تعديل </a>
                                                        <a class="btn btn-danger btn-xl js-scroll-trigger" href="/topic/delete/{{ $topic->id }}"> حزف </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                    <h3 class="text-center">انشاءات</h3>
                                    <table class="table table-hover table-dark  table-responsive">
                                        <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">اسم المحاضرة</th>
                                            <th scope="col"> لينك المحاضرة علي درايف </th>
                                            <th scope="col"> لينك تحميل المحاضرة  </th>
                                            <th scope="col">  لينك فديو السيكشن </th>
                                            <th scope="col"> لينك pdf السيكشن </th>
                                            <th scope="col">الادوات</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($topics->where('group', '=', 1)->where('depart', '=', 4) as $topic)
                                            <tr>
                                                <th scope="row"> {{ $topic->id }} </th>
                                                <td>  {{ $topic->title }}  </td>
                                                <td> {{ $topic->lecture}} </td>
                                                <td> {{ $topic->lecturedown}} </td>
                                                <td>{{ $topic->secvedio }}</td>
                                                <td> {{ $topic->secpdf }} </td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a class="btn btn-secondary btn-xl js-scroll-trigger" href="/topic/edit/{{ $topic->id }}"> تعديل </a>
                                                        <a class="btn btn-danger btn-xl js-scroll-trigger" href="/topic/delete/{{ $topic->id }}"> حزف </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <!-- **************************** second card ******************************* -->



                            <div class="card">
                                <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <h2 class="text-center">الفرقه الثانيه</h2>
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseThree" class="collapse bg-dark" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">

                                <div class="container">

                                    <h3 class="text-center">مدنى</h3>

                                    <table class="table table-hover table-dark  table-responsive">
                                        <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">اسم المحاضرة</th>
                                            <th scope="col"> لينك المحاضرة علي درايف </th>
                                            <th scope="col"> لينك تحميل المحاضرة  </th>
                                            <th scope="col">  لينك فديو السيكشن </th>
                                            <th scope="col"> لينك pdf السيكشن </th>
                                            <th scope="col">الادوات</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($topics->where('group', '=', 2)->where('depart', '=', 1) as $topic)
                                            <tr>
                                                <th scope="row"> {{ $topic->id }} </th>
                                                <td> {{ $topic->title }} </td>
                                                <td> {{ $topic->lecture}} </td>
                                                <td> {{ $topic->lecturedown}} </td>
                                                <td>{{ $topic->secvedio }}</td>
                                                <td> {{ $topic->secpdf }} </td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a class="btn btn-secondary btn-xl js-scroll-trigger" href="/topic/edit/{{ $topic->id }}"> تعديل </a>
                                                        <a class="btn btn-danger btn-xl js-scroll-trigger" href="/topic/delete/{{ $topic->id }}"> حزف </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                    <h3 class="text-center">كهربا</h3>
                                    <table class="table table-hover table-dark  table-responsive">
                                        <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">اسم المحاضرة</th>
                                            <th scope="col"> لينك المحاضرة علي درايف </th>
                                            <th scope="col"> لينك تحميل المحاضرة  </th>
                                            <th scope="col">  لينك فديو السيكشن </th>
                                            <th scope="col"> لينك pdf السيكشن </th>
                                            <th scope="col">الادوات</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($topics->where('group', '=', 2)->where('depart', '=', 2) as $topic)
                                            <tr>
                                                <th scope="row"> {{ $topic->id }} </th>
                                                <td> {{ $topic->title }} </td>
                                                <td> {{ $topic->lecture}} </td>
                                                <td> {{ $topic->lecturedown}} </td>
                                                <td>{{ $topic->secvedio }}</td>
                                                <td> {{ $topic->secpdf }} </td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a class="btn btn-secondary btn-xl js-scroll-trigger" href="/topic/edit/{{ $topic->id }}"> تعديل </a>
                                                        <a class="btn btn-danger btn-xl js-scroll-trigger" href="/topic/delete/{{ $topic->id }}"> حزف </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                    <h3 class="text-center">عماره</h3>
                                    <table class="table table-hover table-dark  table-responsive">
                                        <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">اسم المحاضرة</th>
                                            <th scope="col"> لينك المحاضرة علي درايف </th>
                                            <th scope="col"> لينك تحميل المحاضرة  </th>
                                            <th scope="col">  لينك فديو السيكشن </th>
                                            <th scope="col"> لينك pdf السيكشن </th>
                                            <th scope="col">الادوات</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($topics->where('group', '=', 2)->where('depart', '=', 3) as $topic)
                                            <tr>
                                                <th scope="row"> {{ $topic->id }} </th>
                                                <td> {{ $topic->title }} </td>
                                                <td> {{ $topic->lecture}} </td>
                                                <td> {{ $topic->lecturedown}} </td>
                                                <td>{{ $topic->secvedio }}</td>
                                                <td> {{ $topic->secpdf }} </td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a class="btn btn-secondary btn-xl js-scroll-trigger" href="/topic/edit/{{ $topic->id }}"> تعديل </a>
                                                        <a class="btn btn-danger btn-xl js-scroll-trigger" href="/topic/delete/{{ $topic->id }}"> حزف </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    </div>

                                </div>
                                </div>
                            </div>

                            <!-- **************************** third card ******************************* -->


                            <div class="card">
                                <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        <h2 class="text-center">الفرقه الثالثه</h2>
                                    </button>
                                </h2>
                                </div>
                                <div id="collapsefour" class="collapse bg-dark" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">

                                <div class="container">

                                <h3 class="text-center">مدنى</h3>

                                <table class="table table-hover table-dark  table-responsive">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">اسم المحاضرة</th>
                                        <th scope="col"> لينك المحاضرة علي درايف </th>
                                        <th scope="col"> لينك تحميل المحاضرة  </th>
                                        <th scope="col">  لينك فديو السيكشن </th>
                                        <th scope="col"> لينك pdf السيكشن </th>
                                        <th scope="col">الادوات</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($topics->where('group', '=', 3)->where('depart', '=', 1) as $topic)
                                        <tr>
                                            <th scope="row"> {{ $topic->id }} </th>
                                            <td> {{ $topic->title }} </td>
                                            <td> {{ $topic->lecture}} </td>
                                            <td> {{ $topic->lecturedown}} </td>
                                            <td>{{ $topic->secvedio }}</td>
                                            <td> {{ $topic->secpdf }} </td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a class="btn btn-secondary btn-xl js-scroll-trigger" href="/topic/edit/{{ $topic->id }}"> تعديل </a>
                                                    <a class="btn btn-danger btn-xl js-scroll-trigger" href="/topic/delete/{{ $topic->id }}"> حزف </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                <h3 class="text-center">كهربا (باور)</h3>
                                <table class="table table-hover table-dark  table-responsive">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">اسم المحاضرة</th>
                                        <th scope="col"> لينك المحاضرة علي درايف </th>
                                        <th scope="col"> لينك تحميل المحاضرة  </th>
                                        <th scope="col">  لينك فديو السيكشن </th>
                                        <th scope="col"> لينك pdf السيكشن </th>
                                        <th scope="col">الادوات</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($topics->where('group', '=', 3)->where('depart', '=', 2) as $topic)
                                        <tr>
                                            <th scope="row"> {{ $topic->id }} </th>
                                            <td> {{ $topic->title }} </td>
                                            <td> {{ $topic->lecture}} </td>
                                            <td> {{ $topic->lecturedown}} </td>
                                            <td>{{ $topic->secvedio }}</td>
                                            <td> {{ $topic->secpdf }} </td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a class="btn btn-secondary btn-xl js-scroll-trigger" href="/topic/edit/{{ $topic->id }}"> تعديل </a>
                                                    <a class="btn btn-danger btn-xl js-scroll-trigger" href="/topic/delete/{{ $topic->id }}"> حزف </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                <h3 class="text-center">كهربا (اتصالات)</h3>
                                <table class="table table-hover table-dark  table-responsive">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">اسم المحاضرة</th>
                                        <th scope="col"> لينك المحاضرة علي درايف </th>
                                        <th scope="col"> لينك تحميل المحاضرة  </th>
                                        <th scope="col">  لينك فديو السيكشن </th>
                                        <th scope="col"> لينك pdf السيكشن </th>
                                        <th scope="col">الادوات</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($topics->where('group', '=', 3)->where('depart', '=', 3) as $topic)
                                        <tr>
                                            <th scope="row"> {{ $topic->id }} </th>
                                            <td> {{ $topic->title }} </td>
                                            <td> {{ $topic->lecture}} </td>
                                            <td> {{ $topic->lecturedown}} </td>
                                            <td>{{ $topic->secvedio }}</td>
                                            <td> {{ $topic->secpdf }} </td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a class="btn btn-secondary btn-xl js-scroll-trigger" href="/topic/edit/{{ $topic->id }}"> تعديل </a>
                                                    <a class="btn btn-danger btn-xl js-scroll-trigger" href="/topic/delete/{{ $topic->id }}"> حزف </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                </div>

                                </div>
                                </div>
                            </div>

                            <!-- **************************** fourth card ******************************* -->

                            <div class="card">
                                <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                        <h2 class="text-center">الفرقه الرابعه</h2>
                                    </button>
                                </h2>
                                </div>
                                <div id="collapsefive" class="collapse bg-dark" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">

                                <div class="container">

                                <h3 class="text-center">مدنى</h3>

                                <table class="table table-hover table-dark  table-responsive">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">اسم المحاضرة</th>
                                        <th scope="col"> لينك المحاضرة علي درايف </th>
                                        <th scope="col"> لينك تحميل المحاضرة  </th>
                                        <th scope="col">  لينك فديو السيكشن </th>
                                        <th scope="col"> لينك pdf السيكشن </th>
                                        <th scope="col">الادوات</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($topics->where('group', '=', 4)->where('depart', '=', 1) as $topic)
                                        <tr>
                                            <th scope="row"> {{ $topic->id }} </th>
                                            <td> {{ $topic->title }} </td>
                                            <td> {{ $topic->lecture}} </td>
                                            <td> {{ $topic->lecturedown}} </td>
                                            <td>{{ $topic->secvedio }}</td>
                                            <td> {{ $topic->secpdf }} </td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a class="btn btn-secondary btn-xl js-scroll-trigger" href="/topic/edit/{{ $topic->id }}"> تعديل </a>
                                                    <a class="btn btn-danger btn-xl js-scroll-trigger" href="/topic/delete/{{ $topic->id }}"> حزف </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                <h3 class="text-center">كهربا (باور)</h3>
                                <table class="table table-hover table-dark  table-responsive">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">اسم المحاضرة</th>
                                        <th scope="col"> لينك المحاضرة علي درايف </th>
                                        <th scope="col"> لينك تحميل المحاضرة  </th>
                                        <th scope="col">  لينك فديو السيكشن </th>
                                        <th scope="col"> لينك pdf السيكشن </th>
                                        <th scope="col">الادوات</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($topics->where('group', '=', 4)->where('depart', '=', 2) as $topic)
                                        <tr>
                                            <th scope="row"> {{ $topic->id }} </th>
                                            <td> {{ $topic->title }} </td>
                                            <td> {{ $topic->lecture}} </td>
                                            <td> {{ $topic->lecturedown}} </td>
                                            <td>{{ $topic->secvedio }}</td>
                                            <td> {{ $topic->secpdf }} </td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a class="btn btn-secondary btn-xl js-scroll-trigger" href="/topic/edit/{{ $topic->id }}"> تعديل </a>
                                                    <a class="btn btn-danger btn-xl js-scroll-trigger" href="/topic/delete/{{ $topic->id }}"> حزف </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                <h3 class="text-center">كهربا(اتصالات)</h3>
                                <table class="table table-hover table-dark  table-responsive">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">اسم المحاضرة</th>
                                        <th scope="col"> لينك المحاضرة علي درايف </th>
                                        <th scope="col"> لينك تحميل المحاضرة  </th>
                                        <th scope="col">  لينك فديو السيكشن </th>
                                        <th scope="col"> لينك pdf السيكشن </th>
                                        <th scope="col">الادوات</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($topics->where('group', '=', 4)->where('depart', '=', 3) as $topic)
                                        <tr>
                                            <th scope="row"> {{ $topic->id }} </th>
                                            <td> {{ $topic->title }} </td>
                                            <td> {{ $topic->lecture}} </td>
                                            <td> {{ $topic->lecturedown}} </td>
                                            <td>{{ $topic->secvedio }}</td>
                                            <td> {{ $topic->secpdf }} </td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a class="btn btn-secondary btn-xl js-scroll-trigger" href="/topic/edit/{{ $topic->id }}"> تعديل </a>
                                                    <a class="btn btn-danger btn-xl js-scroll-trigger" href="/topic/delete/{{ $topic->id }}"> حزف </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                </div>
                                </div>
                                </div>
                            </div>
                            </div>

                            <!-- **************************** fifth card ******************************* -->



                            <div class="row">
                                <!-- <h2 class="text-center">اعدادى</h2> -->

                                <!-- ***************************** start dash bord ***************************** -->

                                

                                <!-- ***************************** end dash bord ***************************** -->
                            </div>

                        </div>
                    </section>
 
        </div>

    </div>
</section>

@endsection
