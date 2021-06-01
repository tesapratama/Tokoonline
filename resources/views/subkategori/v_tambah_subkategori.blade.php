@extends('tema.admin')
@section('title','Tambah SubKategori')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Tambah SubKategori</h3>
                        </div>
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
                            <form action="/subkategori/simpan-subkategori" method="post">
                            {{csrf_field()}}
                                <div class="form-group">
                                    <label>Pilih Kategori</label>
                                    <select class="form-control select2" style="width: 100%;" name="id_kategori">
                                    <option selected="selected">-- Pilih Kategori --</option>
                                    @foreach($kategori as $p)
                                    <option value="{{ $p->id }}">{{ $p->nama_kategori }}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Sub Kategori</label>
                                    <input type="text" id="nama_subkategori" name="nama_subkategori" class="form-control" placeholder="Nama Kategori">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="javascript:void(0)" onclick="window.history.back()" class="btn btn-warning">Kembali</a>
                                </div>
                            </form>
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