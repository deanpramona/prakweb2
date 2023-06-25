@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 style="text-align:center">Selamat  {{Auth::user()->name}} Berhasil Melakukan Registrasi</h3>
            <h5 style="text-align:center">Silahkan Logout & Login Kembali untuk Masuk Ke Dashboard Admin</h5>
        </div>
    </div>
</div>
@endsection
