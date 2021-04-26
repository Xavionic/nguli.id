@extends('layout/main')

@section('title', 'Input')

@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="mt-3">
                <h1>Input Data Mahasiswa</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="card">
        <form action="/">
        
            <div class="card-body">
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" required>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIM</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" required>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">IPK</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" required>
                </div>
              </div>
    
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                  <button class="btn btn-primary">Input</button>
                </div>
              </div>
            </div>
        </form>
      </div>
</div>
@endsection