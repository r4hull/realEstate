@extends('layouts.app')

@section('content')

<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left">Starter</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Abstack</a></li>
                                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                        <li class="breadcrumb-item active">Starter</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                               <div class="card-box">
                                <form method="post" action="{{url('/')}}/addPropertyFor">
                                    @csrf
                               <div class="form-row">
                                
                                    
                                            <div class="form-group col-md-6">
                                                <label for="inputCity" class="col-form-label">Add Property For</label>
                                                <input type="text" name="addfor" class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <button type="submit" class="btn btn-primary" style="margin-top: 35px;">Add Property For</button>
                                            </div>
                                         
                                             
                                        </div> 
                                    </form>
                               </div>
                            </div>
                            <!-- end col -->

                             
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                               <div class="card-box">
                                <table id="example" class="display" style="width:100%">
                                      <thead>
                                          <tr>
                                              <th>SrNo.</th>
                                              <th>Property For</th> 
                                              <th>Action Name</th> 
                                          </tr>
                                      </thead>
                                      <tbody>@php $x=0; @endphp
                                         @foreach($addFor as $cty)
                                         
                                          <tr>
                                            <td><?php $x++; ?>{{$x}}</td>
                                            <td>{{$cty->addfor}}</td>
                                            <td>
                                                <button type="button" class="btn btn-icon waves-effect waves-light btn-primary"> <i class="fa fa-edit"></i> </button>
                                                <button type="button" class="btn btn-icon waves-effect waves-light btn-primary"> <i class="fa fa-trash-o"></i> </button>
                                            </td>
                                          </tr>
                                          @endforeach
                                      </tbody>
                                  </table>

                               </div>
                            </div>
                            <!-- end col -->

                             
                        </div>



                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2017 - 2018 © Abstack. - Coderthemes.com
                </footer>

            </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                $('#example').DataTable();
                 });
            </script>

@endsection
