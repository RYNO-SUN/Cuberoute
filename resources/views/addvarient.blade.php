@extends('layouts.layout')

@section('content')

<a style="margin-bottom : 30px" href="/varients" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i 
                    class="fa fa-arrow-left"></i> back</a>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Add A Varient!</h1>
                            </div>
                            <form class="user" action="/addvarient" method="POST" >
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="id" class="form-control form-control-user" id=""
                                        placeholder="ID">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="sap_product_code" class="form-control form-control-user" id=""
                                        placeholder="SAP Code">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="web_product_code" class="form-control form-control-user" id=""
                                        placeholder="Web Code">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="name" class="form-control form-control-user" id=""
                                        placeholder="Name">
                                </div>


                               
                               
                               
                                
                                <div class="form-group row">
                                  
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    Add Varient :)
</button>
                                <hr>
                               
                            </form>
                            <hr>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    



@endsection

