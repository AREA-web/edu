@extends('layoutpro')

<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">

                <div class="col-md-12 text-center heading-section ftco-animate wow bounceInUp" >
                    <span class="subheading" > faculty of engineering </span>
                    <h2 class="mb-4"> جميع الاقسام </h2>
                </div>

                <hr class="divider my-4" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <!-- <p class="text-white-75 font-weight-light mb-5"> افضل تجميع و تنسيق لمواد كل الاقسام </p> -->
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about"> استكشف اكثر </a>
            </div>
        </div>
    </div>
</header>

@section('content')
    @if(isset($status) && $status)
        <div class="alert alert-success">لقد تم التعديل بنجاح</div>
    @endif

    

    <!-- Portfolio section-->
    <section id="Portfolio">

        <div id="accordion">

            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseZero" aria-expanded="true" aria-controls="collapseZero">
                            الفرقة الاعدادية
                        </button>
                    </h5>
                </div>

                <div id="collapseZero" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">

                        <!-- Call to action section-->
                        <section class="page-section bg-dark text-white">
                            <div class="container text-center">

                                <div class="row no-gutters">

                                    <div class="col-lg-12">

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#prep">
                                            اعدادي
                                        </button>

                                        <!-- prepModal -->
                                        <div class="modal fade" id="prep" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>

                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">

                                                        <!-- ************* subjects start *************  -->
                                                        <!-- start subjects links -->

                                                        <a class="btn btn-primary btn-lg btn-block" href="/study/0/0/1"> رسم 2 </a> <!-- sub1  -->
                                                        <a class="btn btn-primary btn-lg btn-block" href="/study/0/0/2"> فيزياء كهربية </a> <!-- sub2  -->
                                                        <a class="btn btn-primary btn-lg btn-block" href="/study/0/0/3"> تكامل </a> <!-- sub3  -->
                                                        <a class="btn btn-primary btn-lg btn-block" href="/study/0/0/4"> كيمياء </a> <!-- sub4  -->
                                                        <a class="btn btn-primary btn-lg btn-block" href="/study/0/0/5"> تالريخ هندسي </a> <!-- sub5  -->
                                                        <a class="btn btn-primary btn-lg btn-block" href="/study/0/0/6"> برمجة </a> <!-- sub6  -->

                                                        <!-- end subjects links -->
                                                        <!-- ************* subjects end ************* -->

                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </section>

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            الفرقة الاولي
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">

                        <!-- Call to action section-->
                        <section class="page-section bg-dark">
                            <div class="container text-center">

                                <div class="row no-gutters">
                                    <div class="col-lg-12 ">

                                        <!-- Button trigger modals -->

                                        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#civil1"> مدني </button>
                                        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#electric1"> كهربا </button>
                                        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#arc1"> عمارة </button>
                                        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#struct1"> انشاءات </button>

                                        <!-- end button triger modals -->

                                    </div>

                                    <!-- civilModal -->
                                    <div class="modal fade" id="civil1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> المواد </h5>

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">

                                                    <!-- ************* subjects start *************  -->
                                                    <!-- start subjects links -->

                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/1/1/1"> نظريات الانشاءات </a> <!-- sub1  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/1/1/2"> رسم مدني </a> <!-- sub2  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/1/1/3"> اليه وكهربية </a> <!-- sub3  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/1/1/4"> خواص المواد </a> <!-- sub4  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/1/1/5"> ري و صرف </a> <!-- sub5  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/1/1/6"> تالريخ </a> <!-- sub6  -->

                                                    <!-- end subjects links -->
                                                    <!-- ************* subjects end ************* -->



                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <!-- electricalModal -->
                                    <div class="modal fade" id="electric1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> المواد </h5>

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">

                                                    <!-- ************* subjects start *************  -->
                                                    <!-- start subjects links -->

                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/1/2/1"> الكترونيات </a> <!-- sub1  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/1/2/2"> دوائر كهربية 2 </a> <!-- sub2  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/1/2/3"> دوائر رقمية </a> <!-- sub3  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/1/2/4"> ثيرمو ديناميك </a> <!-- sub4  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/1/2/5"> مجالات كهرومغناطيسية (فيد 1)  </a> <!-- sub5  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/1/2/6"> تالريخ </a> <!-- sub6  -->

                                                    <!-- end subjects links -->
                                                    <!-- ************* subjects end ************* -->

                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <!-- architectureModal -->
                                    <div class="modal fade" id="arc1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> المواد </h5>

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">

                                                    <!-- ************* subjects start *************  -->
                                                    <!-- start subjects links -->

                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/1/3/1"> انشاء معماري  </a> <!-- sub1  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/1/3/2"> ظل منظور </a> <!-- sub2  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/1/3/3"> مساحة </a> <!-- sub3  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/1/3/4"> مساحة </a> <!-- sub4  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/1/3/5"> نظريات عمارة  </a> <!-- sub5  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/1/3/6"> تالريخ </a> <!-- sub6  -->

                                                    <!-- end subjects links -->
                                                    <!-- ************* subjects end ************* -->


                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <!-- Button trigger modal -->

                                    <!-- structModal -->
                                    <div class="modal fade" id="struct1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> المواد </h5>

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">

                                                    <!-- ************* subjects start *************  -->
                                                    <!-- start subjects links -->

                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/1/4/1"> رسم مدني </a> <!-- sub1  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/1/4/2">  استركتشر 2 </a> <!-- sub2  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/1/4/3">  ري و صرف </a> <!-- sub3  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/1/4/4"> خواص مادة  </a> <!-- sub4  -->
                                                    <!-- <a class="btn btn-primary btn-lg btn-block" href="electronics.html"> مجالات كهرومغناطيسية (فيد 1)  </a>  --> <!-- sub5  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/1/4/5"> تالريخ </a> <!-- sub6  -->

                                                    <!-- end subjects links -->
                                                    <!-- ************* subjects end ************* -->


                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </section>

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            الفرقة الثانية
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">

                        <!-- Call to action section-->
                        <section class="page-section bg-dark ">
                            <div class="container text-center">

                                <div class="row no-gutters">
                                    <div class="col-lg-12 ">

                                        <!-- Button trigger modal -->

                                        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#civil2"> مدني </button>
                                        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#electric2"> كهربا </button>
                                        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#arc2"> عمارة </button>
                                        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#struct2"> انشاءات </button>


                                    </div>


                                    <!-- civilModal -->
                                    <div class="modal fade" id="civil2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> المواد </h5>

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">

                                                    <!-- ************* subjects start *************  -->
                                                    <!-- start subjects links -->
{{--                                                    /study/2/1/1--}}
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/2/1/1"> b-2 استركشر </a> <!-- sub1  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/2/1/2"> 1 تراب </a> <!-- sub2  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/2/1/3"> b-1 خرسانة </a> <!-- sub3  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/2/1/4"> b-1 ري وصرف </a> <!-- sub4  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/2/1/5"> رياضيات 2 معادلات تفاضلية </a> <!-- sub5  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/2/1/6"> b-2 مساحة </a> <!-- sub6  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/2/1/7"> مقرر رياضي </a> <!-- sub7  -->


                                                    <!-- end subjects links -->
                                                    <!-- ************* subjects end ************* -->




                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- electricModal -->
                                    <div class="modal fade" id="electric2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> المواد </h5>

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">

                                                    <!-- ************* subjects start *************  -->
                                                    <!-- start subjects links -->

                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/2/2/1"> اختبارات </a> <!-- sub1  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/2/2/2"> قياسات </a> <!-- sub2  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/2/2/3"> دوائر رقمية </a> <!-- sub3  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/2/2/4"> ثيرمو ديناميك </a> <!-- sub4  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/2/2/5"> مجالات كهرومغناطيسية (فيد 2)  </a> <!-- sub5  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/2/2/6"> مقرر ثقافي </a> <!-- sub6  -->

                                                    <!-- end subjects links -->
                                                    <!-- ************* subjects end ************* -->


                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <!-- architectureModal -->
                                    <div class="modal fade" id="arc2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> المواد </h5>

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">

                                                    <!-- ************* subjects start *************  -->
                                                    <!-- start subjects links -->

                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/2/3/1"> 2 التصميم المعماري </a> <!-- sub1  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/2/3/2"> 1 تخطيط مدن </a> <!-- sub2  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/2/3/3"> تطبيقات معمارية علي الحاسب </a> <!-- sub3  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/2/3/4"> تنفيذ مباني 2 </a> <!-- sub4  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/2/3/5"> البيئة والمناخ </a> <!-- sub5  -->
                                                    <!-- <a class="btn btn-primary btn-lg btn-block" href="electronics.html"> تالريخ </a> --> <!-- sub6  -->

                                                    <!-- end subjects links -->
                                                    <!-- ************* subjects end ************* -->


                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- srtuctureModal -->
                                    <div class="modal fade" id="struct2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> المواد </h5>

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">

                                                    <img class="img-card bf" src="img/comic/comic1.png">


                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </section>

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            الفرقة الثالثة
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">

                        <!-- Call to action section-->
                        <section class="page-section bg-dark text-white">
                            <div class="container text-center">

                                <div class="row no-gutters">
                                    <div class="col-lg-12 ">

                                        <!-- Button trigger modal -->

                                        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#civil3"> مدني </button>
                                        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#electric31"> (كهربا (قسم باور </button>
                                        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#electric32"> (كهربا (قسم اتصالات </button>
                                        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#arc3"> عمارة </button>
                                        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#struct3"> انشاءات </button>


                                    </div>

                                    <!-- civilModal -->
                                    <div class="modal fade" id="civil3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> المواد </h5>

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">

                                                    <!-- ************* subjects start *************  -->
                                                    <!-- start subjects links -->

                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/3/1/1"> نظرية منشات معدنية  (ب) <a> <!-- sub1  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/3/1/2">تصميم منشات خرسانية (2-ب) </a> <!-- sub2  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/3/1/3"> تصميم منشات الري (1) </a> <!-- sub3  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/3/1/4"> هيدروليكا(2) </a> <!-- sub4  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/3/1/5"> تخطيط النقل والمرور </a> <!-- sub5  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/3/1/6"> مقرر اختياري(1) </a> <!-- sub6  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/3/1/7"> مقرر إنساني وثقافي (3-ب) </a> <!-- sub6  -->

                                                    <!-- end subjects links -->
                                                    <!-- ************* subjects end ************* -->




                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- electricModalpower -->
                                    <div class="modal fade" id="electric31" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> المواد </h5>

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">

                                                    <!-- ************* subjects start *************  -->
                                                    <!-- start subjects links -->

                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/3/2/1"> Distribution </a> <!-- sub1  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/3/2/2"> DDP </a> <!-- sub2  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/3/2/3"> High Voltage </a> <!-- sub3  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/3/2/4"> إلكترونيات صناعية </a> <!-- sub4  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/3/2/5"> اختبارات كهربيه </a> <!-- sub5  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/3/2/6"> مقرر ثقافي </a> <!-- sub6  -->

                                                    <!-- end subjects links -->
                                                    <!-- ************* subjects end ************* -->


                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- electricModalNetwork -->
                                    <div class="modal fade" id="electric32" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> المواد </h5>

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">

                                                    <!-- ************* subjects start *************  -->
                                                    <!-- start subjects links -->

                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/3/3/1"> هوائيات وانتشار موجات ب </a> <!-- sub1  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/3/3/2"> دوائر الكترونية 1 </a> <!-- sub2  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/3/3/3"> نظم الاتصالات والعمليات العشوائية </a> <!-- sub3  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/3/3/4"> مقرر اختياري 2 </a> <!-- sub4  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/3/3/5"> مقرر ثقافي و انساني </a> <!-- sub5  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/3/3/6"> اختبارات كهربائية </a> <!-- sub6  -->

                                                    <!-- end subjects links -->
                                                    <!-- ************* subjects end ************* -->


                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- architectureModal -->
                                    <div class="modal fade" id="arc3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> المواد </h5>

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">

                                                    <img class="img-card bf" src="img/comic/comic1.png">


                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- structureModal -->
                                    <div class="modal fade" id="struct3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> المواد </h5>

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">

                                                    <img class="img-card bf" src="img/comic/comic1.png">


                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </section>

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingfour">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                            الفرقة الرابعة
                        </button>
                    </h5>
                </div>
                <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                    <div class="card-body">

                        <!-- Call to action section-->
                        <section class="page-section bg-dark text-white">
                            <div class="container text-center">

                                <div class="row no-gutters">
                                    <div class="col-lg-12 ">

                                        <!-- Button trigger modal -->

                                        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#civil4"> مدني </button>
                                        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#electric41"> (كهربا (قسم باور </button>
                                        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#electric42"> (كهربا (قسم اتصالات </button>
                                        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#arc4"> عمارة </button>
                                        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#struct4"> انشاءات </button>


                                    </div>

                                    <!-- civilModal -->
                                    <div class="modal fade" id="civil4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> المواد </h5>

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">

                                                    <!-- ************* subjects start *************  -->
                                                    <!-- start subjects links -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/4/1/1"> تصميم منشات الري (2-ب) </a> <!-- sub1  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/4/1/2"> تصميم كباري معدنية </a> <!-- sub2  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/4/1/3"> إدارة مشروعات التشييد </a> <!-- sub3  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/4/1/4"> هندسة السكك الحديدية </a> <!-- sub4  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/4/1/5"> هندسة المواني والملاحة الداخلية </a> <!-- sub5  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/4/1/6"> مقرر اختياري(2) </a> <!-- sub6  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/4/1/7"> مشروع </a> <!-- sub7  -->


                                                    <!-- end subjects links -->
                                                    <!-- ************* subjects end ************* -->


                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <!-- elelctricModalPower -->
                                    <div class="modal fade" id="electric41" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> المواد </h5>

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">

                                                    <!-- ************* subjects start *************  -->
                                                    <!-- start subjects links -->

                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/4/2/1"> مقرر اختياري 4 </a> <!-- sub1  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/4/2/2"> مقرر انساني و ثقافي ب </a> <!-- sub2  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/4/2/3"> اختبارات كهربائية ب </a> <!-- sub3  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/4/2/4"> مشروع </a> <!-- sub4  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/4/2/5"> التحكم في نظم القوي الكهربائية </a> <!-- sub5  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/4/2/6"> حماية قوي النظم الكهربائية </a> <!-- sub6  -->

                                                    <!-- end subjects links -->
                                                    <!-- ************* subjects end ************* -->


                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- elelctricModalNetwork -->
                                    <div class="modal fade" id="electric42" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> المواد </h5>

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">

                                                    <!-- ************* subjects start *************  -->
                                                    <!-- start subjects links -->

                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/4/3/1"> دوائر الموجات متناهية القصر و الالياف الضوئية </a> <!-- sub1  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/4/3/1"> مقرر اختياري 4 </a> <!-- sub2  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/4/3/1"> دوائر الموائمة مع الحاسب </a> <!-- sub3  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/4/3/1"> نزظرية الاتصالات الرقمية</a> <!-- sub4  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/4/3/1"> اختبارات كهربائية ب </a> <!-- sub5  -->
                                                    <a class="btn btn-primary btn-lg btn-block" href="/study/4/3/1"> مشروع </a> <!-- sub6  -->

                                                    <!-- end subjects links -->
                                                    <!-- ************* subjects end ************* -->


                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                    <!-- architictureModal -->
                                    <div class="modal fade" id="arc4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> المواد </h5>

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">

                                                    <img class="img-card bf" src="img/comic/comic1.png">


                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                    <!-- structureModal -->
                                    <div class="modal fade" id="struct4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> المواد </h5>

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">

                                                    <img class="img-card bf" src="img/comic/comic1.png">


                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>

    </section>

    

@endsection
