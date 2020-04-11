@extends('layouts.app')

@section('content')
    <h2 class="text-center"> تعديل الموضوع </h2>
    <form style="width: 400px; margin: auto" method="post" action="/topic/update/{{ $topic->id }}">
        @csrf
        <div class="form-group">
            <label for="exampleLinkEmail1">العنوان</label>
            <input type="text" class="form-control" id="exampleInputLink" name="title" value="{{ $topic->title }}">
        </div>
        <div class="form-group">
            <label for="exampleLinkEmail1">لينك المحاضره</label>
            <input type="text" class="form-control" id="exampleInputLink" name="lecture" value="{{ $topic->lecture }}">
        </div>
        <div class="form-group">
            <label for="exampleLinkEmail1">لينك فيديو السيكشن</label>
            <input type="text" class="form-control" id="exampleInputLink" name="secvedio" value="{{ $topic->secvedio }}">
        </div>
        <div class="form-group">
            <label for="exampleLinkEmail1">لينك pdf السيكشن</label>
            <input type="text" class="form-control" id="exampleInputLink" name="secpdf" value="{{ $topic->secpdf }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @if(isset($status) && $status)
    <div class="alert alert-success">لقد تم التعديل بنجاح</div>
    @endif
    <a class="btn btn-primary" href="/home">العوده</a>
@endsection
