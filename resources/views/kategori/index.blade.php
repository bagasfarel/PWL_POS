@extends('layouts.template')
@section('content')
<div id="myModal" class="modal fade animate shake" tabindex="-1" role="dialog" data-backdrop="static"
data-keyboard="false" data-width="75%" aria-hidden="true"></div>
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Daftar Kategori</h3>
            <div class="card-tools">
                <button onclick="modalAction('{{ url('/barang/import') }}')" class="btn btn-info">Import Barang</button>
                <a href="{{ url('/barang/export_excel') }}" class="btn btn-primary"><i class="fa fa-file-excel"></i> Export Barang</a>
                <a href="{{ url('/barang/export_pdf') }}" class="btn btn-warning"><i class="fa fa-file-pdf"></i> Export Barang</a>
                <button onclick="modalAction('{{ url('/barang/create_ajax') }}')" class="btn btn-success">Tambah Data(Ajax)</button>
            </div>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            {{-- tidak menggunakan filter untuk kategori --}}
            {{-- <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Filter:</label>
                        <div class="col-3">
                            <select class="form-control" id="kategori_id" name="kategori_id" required>
                                <option value="">- Semua -</option>
                                @foreach ($kategori as $item)
                                    <option value="{{ $item->kategori_id }}">{{ $item->kategori_nama }}</option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted">kategori Pengguna</small>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <table class="table table-bordered table-striped table-hover table-sm" id="table_kategori"> --}}
            <table class="table table-bordered table-sm table-striped table-hover" id="table-kategori">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kode</th>
                        <th>Nama Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div id="myModal" class="modal fade animate shake" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="75%"></div>
@endsection
@push('css')
@endpush
@push('js')
    <script>

function modalAction(url = '') {
            $('#myModal').load(url, function() {
                $('#myModal').modal('show');
            });
        }

        var tableKategori;
        $(document).ready(function() {
            tableKategori = $('#table-kategori').DataTable({
                // serverSide: true, jika ingin menggunakan server side processing
                processing: true,
                serverSide: true,
                ajax: {
                    "url": "{{ url('kategori/list') }}",
                    "dataType": "json",
                    "type": "POST",
                    "data": function(d) {
                        d.filter_kategori = $('.filter_kategori').val();
                    }
                },
                columns: [{
                    // nomor urut dari laravel datatable addIndexColumn()
                    data: "kategori_id",
                    className: "text-center",
                    width: "5%",
                    orderable: false,
                    searchable: false
                }, {
                    data: "kategori_kode",
                    className: "",
                    width: "10%",
                    // orderable: true, jika ingin kolom ini bisa diurutkan
                    orderable: true,
                    // searchable: true, jika ingin kolom ini bisa dicari
                    searchable: true
                }, {
                    data: "kategori_nama",
                    className: "",
                    width: "37%",
                    orderable: true,
                    searchable: true
                }, {
                    data: "aksi",
                    className: "text-center",
                    width: "14%",
                    orderable: false,
                    searchable: false
                }]
            });

            // $('#kategori_id').on('change',function(){
            //     dataKategori.ajax.reload();
            // });
            $('#table-kategori_filter input').unbind().bind().on('keyup', function(e) {
                if (e.keyCode == 13) { // enter key
                    tableKategori.search(this.value).draw();
                }
            });
            $('.filter_kategori').change(function() {
                tableKategori.draw();
            });
        });
    </script>
@endpush