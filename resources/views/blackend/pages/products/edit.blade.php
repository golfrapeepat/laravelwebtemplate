@extends('blackend.layouts.main_template')
@section('title') Product Detail @parent @endsection
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Product List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('blackend/products') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Product Detail</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">



                <form class="form-horizontal" method="post" action="{{route('products.update',$product->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                       <div class="card-body">
                       <div class="form-group row">
                         <label for="prd_name" class="col-sm-2 col-form-label">Name</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" id="prd_name" name="name" placeholder="Name ..." value="{{ $product->name }}">

                         </div>
                       </div>
                       <div class="form-group row">
                         <label for="prd_slug" class="col-sm-2 col-form-label">Slug</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" id="prd_slug" name="slug" placeholder="Slug ..." value="{{ $product->slug }}">
                       </div>
                       </div>
                       <div class="form-group row">
                           <label for="prd_description" class="col-sm-2 col-form-label">Description</label>
                           <div class="col-sm-10">
                               <textarea class="form-control" rows="3" id="prd_description" name="description"  placeholder="Enter ...">{{ $product->description }}</textarea>

                           </div>
                           </div>
                         </div>
                         <div class="form-group row">
                           <label for="prd_price" class="col-sm-2 col-form-label">Price</label>
                           <div class="col-sm-10">
                               <div class="input-group">
                                   <div class="input-group-prepend">
                                     <span class="input-group-text">
                                       <i class="fas fa-dollar-sign"></i>
                                     </span>
                                   </div>
                                   <input type="number" id="prd_price" name="price" class="form-control" value="{{ $product->price }}">
                               </div>
                           </div>
                         </div>
                         <div class="form-group row">
                           <label for="prd_image" class="col-sm-2 col-form-label">Image</label>
                           <div class="col-sm-10">
                            <div class="input-group">
                                     <div class="custom-file">
                                       <input type="file" class="custom-file-input" id="image" name="image" value="{{ $product->image }}">
                                   
                                       <label class="custom-file-label" for="exampleInputFile">Choose file ...</label>
                                     </div>
                                     <div class="input-group-append">
                                       <span class="input-group-text">Upload</span>
                                     </div>
                                   </div>
                                   
                                   <img src="{{ asset('assets/blackend/images/products/' . $product->image) }}" width="100">
                           </div>
                         </div>
                       <div class="form-group row">
                         <div class="offset-sm-2 col-sm-10">
                           <div class="form-check">
                             <input type="checkbox" class="form-check-input" id="exampleCheck2">
                             <label class="form-check-label" for="exampleCheck2">Remember me</label>
                           </div>
                         </div>
                       </div>
                     </div>
                     <!-- /.card-body -->
                     <div class="card-footer">
                       <input type="submit" id="submit" name="submit" class="btn btn-info" value="submit">
                       <button type="submit" class="btn btn-default float-right">Cancel</button>
                     </div>
                     <!-- /.card-footer -->
                   </form>

   
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>             



@endsection