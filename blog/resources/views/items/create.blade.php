@extends('adminlte/master')

@section('content')
<h2> Ini halaman create </h2>
@endsection

@push('scripts')
<script> 
    let wrappers = document.getElementsByClassName("wrappers");
    const items = ["ini", "contoh"];
    console.log(items);
  </script>
@endpush