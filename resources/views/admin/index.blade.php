@extends('admin/layout/main')

@section('title', 'Indeks')

@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="mt-3">
                <div class="hero text-white hero-bg-image" style="background-image: url('assets/img/unsplash/gambar-kuli1.jpg');">
                    <div class="hero-inner">
                      <h2>Halo, Kuliawan!</h2>
                      <p class="lead">Selamat datang di halaman layanan, Bersama kuli membangun negeri!</p>
                      <p class="lead">Salam perkulian duniawi</p>
                      <div class="mt-4">
                        <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i>Akun</a>
                        <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i>Artikel</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection