@extends('layout.master')

@section('title')
    Les données des clients
@endsection

@section('title_page1')
Les données des clients
@endsection

@section('title_page2')
     CONTROL PANEL
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/plugins/fontawesome-free/css/all.min.css')}}">

@endsection

@section('content')
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">

            @if (session()->has('Add'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{session()->get('Add')}}</strong>
                        <button type="button"class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            @endif
            @if (session()->has('Error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{session()->get('Error')}}</strong>
                        <button type="button"class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            @endif

        <div class="col-12">


            <section class="content">
                <div class="container-fluid">
                    <div class="card-body">

                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">
                          Add a client
                        </button>

                        <br />



                      </div>
                </div><!-- /.container-fluid -->


                <div class="modal fade" id="modal-lg">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Add a client</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form action="{{route('store')}}" method="POST" id="form">
                        {{-- {{csrf_field()}} --}}
                        @csrf
                      <div class="modal-body">
                        <div class="card-body">
                            <div class="row">
                              <div class="col-md-6">

                              <!-- /.col -->
                              <div class="card-body">
                                <label>First name</label>
                                <input class="form-control form-control-lg" type="text" placeholder="First name">
                                <br>
                                <label>Second name</label>
                                <input class="form-control form-control-lg" type="text" placeholder="Second name">
                                <br>
                                <label>Email</label>
                                <input class="form-control form-control-lg" type="text" placeholder="Email">
                                <br>
                                <label>Adress</label>
                                <input class="form-control form-control-lg" type="text" placeholder="Adress">
                                <br>
                                <label>City</label>
                                <input class="form-control form-control-lg" type="text" placeholder="City">
                                <br>
                                <label>Zip code</label>
                                <input class="form-control form-control-lg" type="text" placeholder="Zip code">
                              </div>
                                <!-- /.form-group -->
                                <div class="form-group" style="padding-left:0.5cm;">
                                  <label>Services</label>
                                  <select class="form-control select2" style="width: 100%;">
                                    <option> </option>
                                    <option>Home cleaning</option>
                                    <option>Baby sitting</option>
                                    <option>Home repair</option>
                                    <option>Gardener</option>
                                    <option>Delivery</option>
                                    <option>Health</option>
                                  </select>
                                </div>
                                <!-- /.form-group -->
                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <div class="row">
                              <div class="col-12 col-sm-6">
                                <div class="form-group" style="padding-left:0.5cm;">
                                  <label>Plans</label>
                                  <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                    <option> </option>
                                    <option>Basic</option>
                                    <option>Standard</option>
                                    <option>Premium</option>
                                  </select>
                                </div>
                                <!-- /.form-group -->
                              </div>

                            </div>
                            <!-- /.row -->
                          </div>
                      </div>
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" >Save changes</button>
                      </div>
                      </form>

                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->



              </section>
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>First name</th>
                  <th>Second name</th>
                  <th>Email</th>
                  <th>Adress</th>
                  <th>City</th>
                  <th>Zip code</th>
                  <th>Service</th>
                  <th>Plan</th>
                </tr>
                </thead>
                <tbody>
                    <?php $i=0; ?>

                    @foreach ($data as $client)

                    <?php $i++; ?>
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$client->first_name}}</td>
                    <td>{{$client->second_name}}</td>
                    <td>{{$client->email}}</td>
                    <td>{{$client->adress}}</td>
                    <td>{{$client->city}}</td>
                    <td>{{$client->code_postal}}</td>
                    <td>{{$client->service}}</td>
                    <td>{{$client->plan}}</td>
                </tr>

                    @endforeach

                </tbody>

              </table>
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
  <!-- /.content -->
@endsection

@section('scripts')
<script type="text/javascript" src="{{URL::asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/jszip/jszip.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>


<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection
