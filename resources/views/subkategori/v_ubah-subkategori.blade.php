@extends('tema.admin')
@section('title','Ubah SubKategori')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Ubah SubKategori</h3>
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
                            <form action="/subkategori/update" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{ $subkategori->id }}"> <br/>
                                <div class="form-group">
                                    <label>Pilih Kategori</label>
                                    <select class="form-control select2" style="width: 100%;" name="id_kategori">
                                    @foreach ($kategori as $d)
                                        <option value="{{ $d->id }}"
                                        @if ($subkategori->id_kategori == $d->id)
                                            selected
                                        @endif
                                        >{{ $d->nama_kategori }}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Sub Kategori</label>
                                    <input type="text" id="nama_subkategori" name="nama_subkategori" class="form-control" value="{{$subkategori->nama_subkategori}}">
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