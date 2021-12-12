
<!DOCTYPE html>

<html lang="en">
  @include('admin.partial.head')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div id="wrapper" style= " width: 100%;
          display: flex;
          align-items: center;
          justify-content: center;">
              <button type="button" style = "center"class="m-4 btn btn-block btn-dark btn-lg col-5 " data-toggle="modal" data-target="#modal-default">Tambah Produk</button>
            </div>
            
         
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Produk Tersedia</h3>

                        
                    </div>
                    <?php
                        $products = DB::select('select * from products where status = 1');
                    ?>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Perbarui Status</th>
                            <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                <td><img src="{{asset('product/' .$product->photo)}}" alt="{{$product->name}}" width="50" height="50"></td>
                                <td>{{$product->name}}</td>
                                <td >{{$product->category}}</td>
                                <td id="deskripsi"> {{$product->description}}</td>
                                <td>{{$product->price}}</td>
                                <form action="{{ route('product.update.status')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$product->id}}">
                                    <input type="hidden" name="status" value="{{$product->status}}">
                                    <td><button type="submit" class="btn bg-secondary"><i class="fas fa-times"></i></button>
                                </form>
                                    </td>  
                                <td>
                                    <button type="button" class="btn bg-warning" data-toggle="modal" data-target="#modal-edit-{{$product->id}}"><i class="fas fa-edit"></i></button> 
                                    <button type="submit" class="btn bg-danger" data-toggle="modal" data-target="#modal-delete-{{$product->id}}"><i class="fas fa-trash-alt"></i></button>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Produk Tidak Tersedia</h3>

                    </div>
                    <?php
                        $products = DB::select('select * from products where status = 0');
                    ?>
                    <!-- /.card-header -->
                   
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Perbarui Status</th>
                            <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                <td><img src="{{asset('product/' .$product->photo)}}" alt="{{$product->name}}" width="50" height="50"></td>
                                <td>{{$product->name}}</td>
                                <td >{{$product->category}}</td>
                                <td id="deskripsi"> {{$product->description}}</td>
                                <td>{{$product->price}}</td>
                                <form action="{{ route('product.update.status')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$product->id}}">
                                    <input type="hidden" name="status" value="{{$product->status}}">
                                    <td><button type="submit" class="btn bg-info"><i class="fas fa-arrow-up"></i></button>
                                </form>
                                    </td>  
                                <td>
                                    <button type="button" class="btn bg-warning" data-toggle="modal" data-target="#modal-edit-{{$product->id}}"><i class="fas fa-edit"></i></button> 
                                    <button type="submit" class="btn bg-danger" data-toggle="modal" data-target="#modal-delete-{{$product->id}}"><i class="fas fa-trash-alt"></i></button>
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
    <!-- Modal Tambah Produk -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Produk</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{ route('product.store')}}" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Produk</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan nama produk" name="name">
                  </div>
                  <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="category">
                          <option value="cookies">Cookies</option>
                          <option value="brownies">Brownies</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Harga</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan harga" name="price">
                  </div>
                  <div class="form-group">
                        <label>Deskripsi Produk</label>
                        <textarea class="form-control" rows="3" placeholder="Masukkan deskripsi produk" name="description"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="photo" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
              </form>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <!-- Modal Edit dan Hapus Produk -->
    <?php
        $products2 = DB::select('select * from products');
    ?>
    @foreach($products2 as $product)
    <div class="modal fade" id="modal-edit-{{$product->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Produk</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{ route('product.update')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" value="{{$product->id}}" name="id">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Produk</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$product->name}}" name="name">
                  </div>
                  <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="category">
                            @if($product->category == 'cookies')
                                <option value="cookies" selected="selected">Cookies</option>
                                <option value="brownies" >Brownies</option>
                            @else
                                <option value="cookies" >Cookies</option>
                                <option value="brownies" selected="selected">Brownies</option>
                            @endif
                          
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Harga</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="{{$product->price}}" name="price">
                  </div>
                  <div class="form-group">
                        <label>Deskripsi Produk</label>
                        <textarea class="form-control" rows="3" value="{{$product->description}}" name="description">{{$product->description}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="photo" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
              </form>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <div class="modal fade" id="modal-delete-{{$product->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Produk</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <h2>Apakah kamu yakin akan menghapus <strong>{{$product->name}}</strong> ?</h2>
              
            </div>
            <div class="modal-footer justify-content-between">
                <form action="{{ route('product.delete')}}" method="post">
                  @csrf
                    <input type="hidden" value="{{$product->id}}" name="id">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
              
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    @endforeach
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
