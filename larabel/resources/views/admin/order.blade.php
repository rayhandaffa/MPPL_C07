<!DOCTYPE html>
<html lang="en">

  @include('admin.partial.head')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <div class="card card-primary card-outline card-tabs">
                <div class="card-header p-0 pt-1 border-bottom-0">
                  <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="false">Menunggu Konfirmasi Pembayaran</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Disiapkan</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#custom-tabs-three-messages" role="tab" aria-controls="custom-tabs-three-messages" aria-selected="false">Dikirim</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" id="custom-tabs-three-settings-tab" data-toggle="pill" href="#custom-tabs-three-settings" role="tab" aria-controls="custom-tabs-three-settings" aria-selected="true">Selesai</a>
                    </li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="tab-content" id="custom-tabs-three-tabContent">
                    <div class="tab-pane fade" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                      <div class="col-12">
                        <div class="card">
                          <?php
                            $orders = DB::select('select * from orders where status = "menunggu_konfirmasi"');
                          ?>
                          
                          <div class="card-body p-0">
                            <table class="table table-hover">
                              <tbody>
                                
                                @foreach($orders as $order)
                                <?php
                                  $order_details = DB::select("select * from order_details where id_order = $order->id");
                                ?>
                                <tr data-widget="expandable-table" aria-expanded="true">
                                  <td>
                                    <div class="row">
                                      <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                      <p class="ml-5">Nomor Pesanan. {{$order->id}} <br> {{$order->name}}</p>
                                      <div class="ml-auto">
                                        <form action="{{route('order.update.status')}}" method="post">
                                          @csrf
                                          <input type="hidden" name="status" value="{{$order->status}}">
                                          <input type="hidden" name="id" value="{{$order->id}}">
                                          <button type="submit" class=" ml-auto col-3 btn-sm btn btn-block btn-dark" style="max-width:none">Konfirmasi Pembayaran</button>
                                        </form>
                                      </div>
                                      
                                    </div>
                                    
                                  </td>
                                </tr>
                                <tr class="expandable-body d-none">
                                  
                                  <td>
                                    <div class="p-0" style="display: none;">
                                      <table class="table table-hover">
                                        <tbody>
                                        
                                        @foreach($order_details as $detail)
                                          <tr>
                                            <?php
                                              $product_name = DB::table('products')->where('id', $detail->id_product)->first()->name;

                                            //  echo
                                            ?>
                                            <td>{{$product_name}}<span class="badge bg-primary float-right" >{{$detail->quantity}}</span></td>
                                          </tr>
                                        @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                      <div class="col-12">
                        <div class="card">
                          <?php
                            $orders = DB::select('select * from orders where status = "disiapkan"');
                          ?>
                          
                          <div class="card-body p-0">
                            <table class="table table-hover">
                              <tbody>
                                <!-- <tr>
                                  <td class="border-0">183</td>
                                </tr> -->
                                @foreach($orders as $order)
                                <?php
                                  $order_details = DB::select("select * from order_details where id_order = $order->id");
                                ?>
                                <tr data-widget="expandable-table" aria-expanded="true">
                                  <td>
                                    <div class="row">
                                      <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                      <p class="ml-5">Nomor Pesanan. {{$order->id}} <br> {{$order->name}}</p>
                                      <div class="ml-auto">
                                        <form action="{{route('order.update.status')}}" method="post">
                                          @csrf
                                          <input type="hidden" name="status" value="{{$order->status}}">
                                          <input type="hidden" name="id" value="{{$order->id}}">
                                          <button type="submit" class=" ml-auto col-3 btn-sm btn btn-block btn-dark" style="max-width:none">Dikirim</button>
                                        </form>
                                      </div>
                                      
                                    </div>
                                    
                                  </td>
                                </tr>
                                <tr class="expandable-body d-none">
                                  
                                  <td>
                                    <div class="p-0" style="display: none;">
                                      <table class="table table-hover">
                                        <tbody>
                                        
                                        @foreach($order_details as $detail)
                                          <tr>
                                            <?php
                                              $product_name = DB::table('products')->where('id', $detail->id_product)->first()->name;

                                            //  echo
                                            ?>
                                            <td>{{$product_name}}<span class="badge bg-primary float-right" >{{$detail->quantity}}</span></td>
                                          </tr>
                                        @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel" aria-labelledby="custom-tabs-three-messages-tab">
                      <div class="col-12">
                        <div class="card">
                          <?php
                            $orders = DB::select('select * from orders where status = "dikirim"');
                          ?>
                          <!-- <div class="card-header">
                            <h3 class="card-title">Expandable Table Tree</h3>
                          </div> -->
                          <!-- ./card-header -->
                          <div class="card-body p-0">
                            <table class="table table-hover">
                              <tbody>
                                <!-- <tr>
                                  <td class="border-0">183</td>
                                </tr> -->
                                @foreach($orders as $order)
                                <?php
                                  $order_details = DB::select("select * from order_details where id_order = $order->id");
                                ?>
                                <tr data-widget="expandable-table" aria-expanded="true">
                                  <td>
                                    <div class="row">
                                      <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                      <p class="ml-5">Nomor Pesanan. {{$order->id}} <br> {{$order->name}}</p>
                                      <div class="ml-auto">
                                        <form action="{{route('order.update.status')}}" method="post">
                                          @csrf
                                          <input type="hidden" name="status" value="{{$order->status}}">
                                          <input type="hidden" name="id" value="{{$order->id}}">
                                          <button type="submit" class=" ml-auto col-3 btn-sm btn btn-block btn-dark" style="max-width:none">Selesai</button>
                                        </form>
                                      </div>
                                      
                                    </div>
                                    
                                  </td>
                                </tr>
                                <tr class="expandable-body d-none">
                                  
                                  <td>
                                    <div class="p-0" style="display: none;">
                                      <table class="table table-hover">
                                        <tbody>
                                        
                                        @foreach($order_details as $detail)
                                          <tr>
                                            <?php
                                              $product_name = DB::table('products')->where('id', $detail->id_product)->first()->name;

                                            //  echo
                                            ?>
                                            <td>{{$product_name}}<span class="badge bg-primary float-right" >{{$detail->quantity}}</span></td>
                                          </tr>
                                        @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                    </div>
                    <div class="tab-pane fade active show" id="custom-tabs-three-settings" role="tabpanel" aria-labelledby="custom-tabs-three-settings-tab">
                    <div class="col-12">
                        <div class="card">
                          <?php
                            $orders = DB::select('select * from orders where status = "selesai"');
                          ?>
                          
                          <div class="card-body p-0">
                            <table class="table table-hover">
                              <tbody>
                                <!-- <tr>
                                  <td class="border-0">183</td>
                                </tr> -->
                                @foreach($orders as $order)
                                <?php
                                  $order_details = DB::select("select * from order_details where id_order = $order->id");
                                ?>
                                <tr data-widget="expandable-table" aria-expanded="true">
                                  <td>
                                    <div class="row">
                                      <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                      <p class="ml-5">Nomor Pesanan. {{$order->id}} <br> {{$order->name}}</p>
                                      <div class="ml-auto">
                                        <!-- <form action="{{route('order.update.status')}}" method="post">
                                          @csrf
                                          <input type="hidden" name="status" value="{{$order->status}}">
                                          <input type="hidden" name="id" value="{{$order->id}}">
                                          <button type="submit" class=" ml-auto col-3 btn-sm btn btn-block btn-success" style="max-width:none">Selesai</button>
                                        </form> -->
                                      </div>
                                      
                                    </div>
                                    
                                  </td>
                                </tr>
                                <tr class="expandable-body d-none">
                                  
                                  <td>
                                    <div class="p-0" style="display: none;">
                                      <table class="table table-hover">
                                        <tbody>
                                        
                                        @foreach($order_details as $detail)
                                          <tr>
                                            <?php
                                              $product_name = DB::table('products')->where('id', $detail->id_product)->first()->name;

                                            //  echo
                                            ?>
                                            <td>{{$product_name}}<span class="badge bg-primary float-right" >{{$detail->quantity}}</span></td>
                                          </tr>
                                        @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card -->
              </div>
            </div>
            <!-- <button type="button" class="m-2 btn btn-block btn-success btn-lg col-6" data-toggle="modal" data-target="#modal-default">Tambah Produk</button> -->
            
        </div>
      </div>
  </div>
    
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0-rc
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('admin/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('admin/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('admin/dist/js/pages/dashboard.js')}}"></script>
</body>
</html>
