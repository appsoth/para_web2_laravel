@extends('layouts.master')


@section('content')



<!-- Show Movies -->
<!-- Loop -->
<div class="movie-contents">
    <h1>Form Movies</h1>
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif


    <div class="">
        <div class="card-header text-center font-weight-bold">

        <div class="card-body">
          <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="/savemovie">
           @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Movie Name</label>
              <input type="text" id="m_title" name="m_title" class="form-control" required="yes">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Date</label>
              <input type="text" id="m_date" name="m_date" class="form-control" required="yes">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Time</label>
                <input type="text" id="m_time" name="m_time" class="form-control" required="yes">
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Category</label>
                <input type="text" id="m_cate_id" name="m_cate_id" class="form-control" required="yes">
              </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Images Thumail</label>
              <input type="text" id="m_image_path" name="m_image_path" class="form-control" required="yes">
            </div>



            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>


</div>

@stop
