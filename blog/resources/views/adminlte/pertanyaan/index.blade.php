@extends('adminlte/master')

@section('header_content')
    <div class="jumbotron my-0">
        <h1 class="display-5" style="font-size: 300%">Daftar Pertanyaan</h1>
        <hr class="my-2">
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="/pertanyaan/create" role="button">Tambah Pertanyaan</a>
        </p>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="col">
        @foreach ($all_item as $item)
        
            <div class="card card-default shadow-lg my-3">
              <div class="card-header">
                <h3 class="card-title my-1">{{$item->judul }}</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
                <a class="btn btn-info btn-sm" href="adminlte/jawaban/{{$item->id}}" role="button">Detail</a>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                {{$item->isi }}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        @endforeach
        </div>
    </div>
@endsection