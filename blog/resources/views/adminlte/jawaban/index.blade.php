@extends('adminlte/master')

@section('header_content')
<h1>Jawaban pertanyaan {{$items['pertanyaan']->id}}</h1>
@endsection

@section('content')
    <div class="container mx-3">
        <h3>{{$items['pertanyaan']->judul}}</h1>
        <h5>{{$items['pertanyaan']->isi}}</h3>
    </div>

    <form action="adminlte/jawaban/{{$items['pertanyaan']->id}}" method="POST">
        <div class="card-body">  
            @csrf   
            <label for="isi">Isi Jawaban</label>
            <textarea class="form-control" rows="3" id="isi" name="isi" placeholder="Masukkan Isi Jawaban" required></textarea>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </div>
        <!-- /.card-body -->
    </form>

    @if (!count($items['jawaban'])==0)
        <div class="container mx-3">
            @foreach ($items['jawaban'] as $item)
            <div>
                <p>{{$item->isi}}</p>
            </div>
            <br>
        @endforeach
        </div>
        
    @endif
@endsection

{{-- @php
    dd($items)
@endphp --}}