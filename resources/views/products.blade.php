 
 @extends('layouts.layout')

@section('content')
 <!-- DataTales Example -->
 <a style="margin-bottom : 30px" href="/addproduct" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i 
                    class="fa fa-gift"></i> Add Product</a>
 <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Products</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product Name</th>
                                            <th>Product Slug</th>
                                            <th>Category</th>
                                            <th>Varient</th>
                                            <th>#</th>
                                            <th>#</th>
                                            <th>#</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product Name</th>
                                            <th>Product Slug</th>
                                            <th>Category</th>
                                            <th>Varient</th>
                                            <th>#</th>
                                            <th>#</th>
                                            <th>#</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                       
                                            <td scope="row">{{$product['id' ]}}</td>
                                            <td scope="row">{{$product['Product_name' ]}}</td>
                                            <td scope="row">{{$product['product_slug' ]}}</td>
                                            <td scope="row">{{$product['category_id' ]}}</td>
                                            <td scope="row">{{$product['varient' ]}}</td>
                                            
                                      
                                        
                                        

                                           <td> <a href="editproduct/{{$product['id']}}"><button   method="delete" type="button" class="btn btn-success">Edit</button></a></td>

                                           <td><form class="thead-light" action="{{url('/delete-product/' .$product['id'])}}" method="post">
                                            {{ method_field('DELETE')}}
                                            {{csrf_field()}}

                                            <button class="btn btn-danger" type="submit">DEL</button>
                                            </form> 
                                            </tr>
                                        @endforeach
                                      
                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                       <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    @endsection