@extends('Admin.layouts.master')
@section('title')

@endsection

@section('css')
<style>
  .desss{
      width: 100%;
      height: 75px;
      display: inline;
  }
  
  </style>
@endsection

@section('title_page')

@endsection

@section('title_page2')

@endsection


@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
      
        <div class="col-md-8">
         
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit design</h3>
            </div> 

            <form action="{{route('designs.update',$designsEdit->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
               <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">design Name</label>
                  <input type="text" class="form-control" name="name" value="{{$designsEdit->name}}">
                </div>
                <div>
                  <label for="exampleInputEmail1"> price </label>
                  <input type="text" class="form-contrvol" name="price" value="{{$designsEdit->price}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <input  rows="4" cols="50" type="text" class="form-control desss" name="description" value="{{$designsEdit->description}}">
                </div>

                <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                          <label>Choose a Category</label>
                          <select name="category_id" class="custom-select">
                            @foreach($designsCat as $category)
                          <option value="{{$category->id}}"> {{$category->name}}</option>
                          {{-- isset($movie->image) ? $movie->image->movie_image : "" --}}
                          @endforeach
                        </select>
                      </div>
                    </div>
                <div class="form-group">
                  <label for="exampleInputFile">Add image</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="image">
                      <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                  </div>
                </div>
              </div>
              
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
    </section>
    

@endsection 

@section('script')

@endsection 











