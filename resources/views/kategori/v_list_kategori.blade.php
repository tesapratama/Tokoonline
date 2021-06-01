@extends('tema.admin')
@section('title','Kategori')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">List Kategori</h3>
                            <div class="card-tools">
                                <a href="/kategori/tambah-kategori" class="btn btn-primary">Tambah Data <i class="fas fa-plus-square"></i></a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        @if ($message = Session::get('sukses'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button> 
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                        @if ($message = Session::get('gagal'))
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button> 
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no=1;?>
                                @foreach($kategori as $p)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $p->nama_kategori }}</td>
                                        <td width="110px"><a href="/kategori/{{$p->id}}/edit" type="button" class="btn btn-warning btn-sm">
                                Ubah</a>
                            <a href="/kategori/{{$p->id}}/hapus" class="btn btn-danger btn-sm">Hapus</a></td>
                                    </tr>
                                    <?php $no++ ;?>
                                @endforeach
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