 
 @extends('layouts.layout')

@section('content')
<a  style="margin-bottom : 30px"href="/addvarient" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-layer-group fa-sm text-white-50"></i> Add Varient</a>
 <!-- DataTales Example -->
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
                                            <th>SAP Code</th>
                                            <th>Web Code</th>
                                            <th>Name</th>
                                            <th>#</th>
                                            <th>#</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>ID</th>
                                            <th>SAP Code</th>
                                            <th>Web Code</th>
                                            <th>Name</th>
                                            <th>#</th>
                                            <th>#</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($varients as $varient)
                                        <tr>
                                       
                                            <td scope="row">{{$varient['id' ]}}</td>
                                            <td scope="row">{{$varient['sap_product_code' ]}}</td>
                                            <td scope="row">{{$varient['web_product_code' ]}}</td>
                                            <td scope="row">{{$varient['name' ]}}</td>
                                            
                                      
                                        
                                        
                                            <td> <a href="editvarient/{{$varient['id']}}"><button method="delete"  type="button" class="btn btn-success">Edit</button></a></td>
                                           <td><form class="thead-light" action="{{url('/delete-varient/' .$varient['id'])}}" method="post">
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