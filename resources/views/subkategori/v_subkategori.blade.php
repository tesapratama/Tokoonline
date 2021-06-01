@extends('tema.admin')
@section('title','Sub Kategori')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">List Sub Kategori</h3>
                            <div class="card-tools">
                                <a href="/subkategori/tambah-subkategori" class="btn btn-primary">Tambah Data <i class="fas fa-plus-square"></i></a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kategori</th>
                                        <th>Sub Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no=1;?>
                                @foreach($subkategori as $p)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $p->nama_kategori }}</td>
                                        <td>{{ $p->nama_subkategori }}</td>
                                        <td width="110px"><a href="/subkategori/{{$p->id}}/edit" type="button" class="btn btn-warning btn-sm">
                                Ubah</a>
                            <a href="/subkategori/{{$p->id}}/hapus" class="btn btn-danger btn-sm">Hapus</a></td>
                                    </tr>
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