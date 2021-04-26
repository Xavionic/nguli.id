@extends('admin/layout/main')

@section('title', 'Data Kuli')

@section('container')


<div class="container">
    <div class="row">
        <div class="col">
            <div class="mt-3">
                <h1>Data Kuli</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped">
                    
                    <tbody>
                      <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>No. Telp</th>
                          <th>Alamat</th>
                      </tr>

                        @foreach ($kuli as $k)
                        <tr>
                            <th scope="row">{{ $k->no_kuli }}</th>
                            <th>{{ $k->nama }}</th>
                            <th>{{ $k->no_telp }}</th>
                            <th>{{ $k->alamat }}</th>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
