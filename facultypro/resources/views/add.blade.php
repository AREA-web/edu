@extends('layouts.app')

@section('content')

    <h2 class="text-center"> تعديل الموضوع </h2>
    <form style="width: 400px; margin: auto" method="post" action="/topic/save">
        @csrf
        <div class="form-group">
            <label for="exampleLinkEmail1">العنوان</label>
            <input type="text" class="form-control" id="exampleInputLink" name="title">
        </div>
        <div class="form-group">
            <label for="exampleLinkEmail1">لينك المحاضره</label>
            <input type="text" class="form-control share-link" id="exampleInputLink" name="lecture">
        </div>
        <div class="form-group">
            <label for="exampleLinkEmail1">لينك تحميل المحاضره</label>
            <input type="text" class="form-control down-link" id="exampleInputLink" name="lecturedown">
        </div>
        <div class="form-group">
            <label for="exampleLinkEmail1">لينك فيديو السيكشن</label>
            <input type="text" class="form-control" id="exampleInputLink" name="secvedio">
        </div>
        <div class="form-group">
            <label for="exampleLinkEmail1">لينك pdf السيكشن</label>
            <input type="text" class="form-control" id="exampleInputLink" name="secpdf">
        </div>
        <div class="input-group mb-3">
            <select class="custom-select" id="inputGroupSelect02" name="group">
                <option selected>Choose...</option>
                <option value="0">الاعداديه</option>
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
            <select class="custom-select" id="inputGroupSelect02"  name="depart">
                <option selected>Choose...</option>
                <option value="0">اعدادى</option>
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

        <div class="input-group mb-3">
            <select class="custom-select" id="inputGroupSelect02"  name="subject">
                <option selected>Choose...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <div class="input-group-append">
                <label class="input-group-text" for="inputGroupSelect02">الماده</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



    <script>

        document.querySelector(".share-link").onkeyup = function(){
            var File_id = document.querySelector(".share-link").value.slice(32, 65);
            document.querySelector(".down-link").value = "https://drive.google.com/uc?export=download&id=" + File_id ;    
        };


    </script>


    @if(isset($status) && $status)
        <div class="alert alert-success">لقد تمت الاضافه بنجاح</div>
    @endif
    <a class="btn btn-primary" href="/home">العوده</a>
@endsection

