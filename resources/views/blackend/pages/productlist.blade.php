@extends('blackend.layouts.main_template')
@section('content')

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>product List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">DataTables</li>
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
            <div class="card-header">
              <h3 class="card-title">DataTable with minimal features & hover style</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="mt-3">
                {{$products->links('pagination::bootstrap-4');}}
                </div>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>name</th>
                  <th>slug</th>
                  <th>description</th>
                  <th>price</th>
                  <th>image</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($products as $product)
                <tr>
                  <td>{{$product->id}}</td>
                  <td>{{$product->name}}</td>
                  <td>{{$product->slug}}</td>
                  <td>{{$product->description}}</td>
                  <td>{{$product->price}}</td>
                  <td><img src="{{$product->image}}" width="50"></td>
                </tr>
                  @endforeach
                  
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>name</th>
                  <th>slug</th>
                  <th>description</th>
                  <th>price</th>
                  <th>image</th>
                </tr>
                </tfoot>

              </table>
              <div class="mt-3">
                {{$products->links('pagination::bootstrap-4');}}
                </div>
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