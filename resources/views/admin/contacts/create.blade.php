

@extends('admin.layout')


@section('main')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">


            <div class="col-12 pb-3">


                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{url("dashboard/contacts/store")}}" enctype="multipart/form-data">

                  @csrf

                  <div class="card-body">
                    <div class="row">


                        <div class="col-6">
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" class="form-control" name="productName">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label>Unit Name</label>
                                <input type="text" class="form-control" name="unitName">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" class="form-control" name="price">
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <input type="text" class="form-control" name="quantity">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label>Total</label>
                                    <input type="text" class="form-control" name="total">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label>Expiry Date</label>
                                    <input type="text" class="form-control" name="expiryDate">
                                </div>
                            </div>
                        </div>

                    </div>



                    </div>



                    <div class="row">



                    </div>

                    <div>
                        <button type="submit" class="btn btn-success" >New</button>
                        <button type="submit" class="btn btn-success" >Save</button>
                        <button type="submit" class="btn btn-success" >Back</button>
                        <button type="submit" class="btn btn-danger" >Delete</button>
                        <a class="btn btn-sm btn-primary" href="{{url()->previous()}}">Back</a>
                    </div>

                  </div>
                  <!-- /.card-body -->


                </form>
              </div>



        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection




