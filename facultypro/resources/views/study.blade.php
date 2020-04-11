@extends('layoutpro')

@foreach($topics as $topic)
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">

                <div class="col-md-12 text-center heading-section ftco-animate wow bounceInUp" >
                    <span class="subheading" > {{ $topic->title }} </span>
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
@endforeach


@section('content')


    <!-- Portfolio section-->
    <section id="Portfolio">

        <div id="accordion">


            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseZero" aria-expanded="true" aria-controls="collapseZero">
                            المحاضرات والسكاشن
                        </button>
                    </h5>
                </div>

                <div id="collapseZero" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">

                        <!-- Call to action section-->
                        <section class="page-section bg-dark text-white">
                            <div class="container text-center">

                                <div class="row">

                                    <table class="table table-hover table-dark">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col"> السكاشن </th>
                                            <th scope="col"> المحاضرات </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($topics as $topic)
                                            <tr>
                                                <th scope="row">{{ $topic->title }}</th>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sec1">
                                                            section <!-- {{ $topic->id }} -->
                                                        </button>

                                                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <!-- split button -->
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="{{$topic->secpdf}}"> عرض في درايف </a>
                                                            <a class="dropdown-item" href="{{$topic->secvedio}}"> الفيديو </a>
                                                        </div>

                                                    </div>
                                                    <?php
                                                    $down = '';
                                                    if(isset(explode('/',$topic->lecture)[5]) && isset($topic)){
                                                        $down = 'https://drive.google.com/uc?export=download&id=' . explode('/',$topic->lecture)[5];
                                                    }
                                                    ?>


                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-secondary show-ifrm" data-toggle="modal" data-target="#lec1" data-down="<?php $down ?>" data-ifrm="{{ $topic->lecture }}">
                                                        lecture <!--{{ $topic->id }} -->
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach




                                        </tbody>
                                    </table>


                                    <!-- ***************************** start lectures Modals ***************************** -->
                                    <!-- Modal1 -->
                                    <!-- ***************************** start lectures Modals ***************************** -->
                                    <!-- Modal1 -->
                                    <div class="modal fade" id="lec1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> شاهد المادة </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <iframe class="embed-responsive-item ifrm" src="" width="640" height="480"></iframe>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                    <a href="" class="btn btn-primary download-ifrm"> download </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- ***************************** end sections Modals ***************************** -->

                                    <!-- ***************************** end sections Modals ***************************** -->


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
                            روابط اخري
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">

                        <!-- Call to action section-->
                        <section class="page-section bg-dark ">
                            <div class="container text-center">

                                <div class="row ">
                                    <div class="col-lg-12 ">
                                        <a href=" https://chat.whatsapp.com/IfEHN8Ya94gL6nW2tJBleE" class="btn btn-primary btn-lg btn-block"> جروب واتس </a>
                                    </div>
                                </div>

                            </div>
                        </section>

                    </div>
                </div>
            </div>


        </div>
    </section>
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>--}}
    <!-- Development version -->
{{--    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>--}}

{{--    <!-- Production version -->--}}
{{--    <script src="https://unpkg.com/@popperjs/core@2"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>--}}
{{--            integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>--}}
    <!-- counter up -->

    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
    {{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> --}}
    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> --}}

    <script> 

        window.onload = function () {
            window.document.location = "#Portfolio";
        };

        document.querySelector(".show-ifrm").click = function () {
            document.querySelector(".ifrm").src =  document.querySelector(".show-ifrm").data("ifrm");
            document.querySelector(".download-ifrm").href = document.querySelector(".show-ifrm").data("down");
        }

        

    </script>



@endsection



