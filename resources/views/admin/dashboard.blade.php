@extends('admin.layout.app')
{{-- orang tua dari setiap halaman --}}


{{-- extends itu tulisan atau perintah agar kita dapat menggunakan semua kode yang ada di dalam file tersebut --}}

{{-- halaman dashboard adalah anak dari si parent --}}

@section('content')
<h2 style="text-align: center">Hallo {{Auth::user()->name}} </h2>
<h3 style="text-align:center;">Ini adalah halaman Dashboard</h3>
@endsection