@extends('adminlte/master')

@section('header_content')
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Pertanyaan</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pertanyaan</a></li>
            <li class="breadcrumb-item active">Buat</li>
        </ol>
    </div>
@endsection


@section('content')
    <div class="card card-primary mx-auto" style="width: 90%;">
        <div class="card-header">
        <h3 class="card-title">Buat pertanyaan</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/pertanyaan" method="POST">
            <div class="card-body">  
                    @csrf
                    <label for="judul">Judul Pertanyaan</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Pertanyaan" required>
                    <label for="isi">Isi Pertanyaan</label>
                    
                    <textarea class="form-control" rows="5" id="isi" name="isi" placeholder="Masukkan Isi Pertanyaan" required></textarea>

                    <label>Tanggal Dibuat:</label>
                    <div class="form-group">
                        <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                            <input type="date" class="form-control datetimepicker-input" data-target="#datetimepicker4"/>
                            <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection

@push('script')
    <script>
        $(function () {
            $('#datetimepicker4').datetimepicker({
                format: 'L'
            });
        });
    </script>
@endpush