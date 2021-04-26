@extends('admin/layout/main')

@section('title', 'Data Mahasiswa')

@section('container')


<div class="container">
    <div class="row">
        <div class="col">
            <div class="mt-3">
                <h1>Data Mandor</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="card">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped">
              <tbody><tr>
                <th>Nama</th>
                <th>Progress</th>
                <th>Kuli</th>
                <th>Tanggal Pengerjaan</th>
              </tr>
              <tr>
                <td>Sukonto Legowo</td>
                <td class="align-middle">
                  <div class="progress" data-height="4" data-toggle="tooltip" title="" data-original-title="100%" style="height: 4px;">
                    <div class="progress-bar bg-success" data-width="100" style="width: 100px;"></div>
                  </div>
                </td>
                <td>
                  <img alt="image" src="/assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="tooltip" title="" data-original-title="Wildan Ahdian">
                </td>
                <td>2018-01-20</td>
              </tr>
              <tr>
                <td>Ahmad Kristian</td>
                <td class="align-middle">
                  <div class="progress" data-height="4" data-toggle="tooltip" title="" data-original-title="0%" style="height: 4px;">
                    <div class="progress-bar" data-width="0" style="width: 0px;"></div>
                  </div>
                </td>
                <td>
                  <img alt="image" src="/assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="" data-original-title="Nur Alpiana">
                  <img alt="image" src="/assets/img/avatar/avatar-3.png" class="rounded-circle" width="35" data-toggle="tooltip" title="" data-original-title="Hariono Yusup">
                  <img alt="image" src="/assets/img/avatar/avatar-4.png" class="rounded-circle" width="35" data-toggle="tooltip" title="" data-original-title="Bagus Dwi Cahya">
                </td>
                <td>2018-04-10</td>
              </tr>
              <tr>
                <td>Riki saepudin</td>
                <td class="align-middle">
                  <div class="progress" data-height="4" data-toggle="tooltip" title="" data-original-title="70%" style="height: 4px;">
                    <div class="progress-bar bg-warning" data-width="70" style="width: 70px;"></div>
                  </div>
                </td>
                <td>
                  <img alt="image" src="/assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="" data-original-title="Rizal Fakhri">
                  <img alt="image" src="/assets/img/avatar/avatar-2.png" class="rounded-circle" width="35" data-toggle="tooltip" title="" data-original-title="Hasan Basri">
                </td>
                <td>2018-01-29</td>
              </tr>
              <tr>
                <td>Meqibaw</td>
                <td class="align-middle">
                  <div class="progress" data-height="4" data-toggle="tooltip" title="" data-original-title="100%" style="height: 4px;">
                    <div class="progress-bar bg-success" data-width="100" style="width: 100px;"></div>
                  </div>
                </td>
                <td>
                  <img alt="image" src="/assets/img/avatar/avatar-2.png" class="rounded-circle" width="35" data-toggle="tooltip" title="" data-original-title="Rizal Fakhri">
                  <img alt="image" src="/assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="tooltip" title="" data-original-title="Isnap Kiswandi">
                  <img alt="image" src="/assets/img/avatar/avatar-4.png" class="rounded-circle" width="35" data-toggle="tooltip" title="" data-original-title="Yudi Nawawi">
                  <img alt="image" src="/assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="" data-original-title="Khaerul Anwar">
                </td>
                <td>2018-01-16</td>
              </tr>
            </tbody></table>
          </div>
        </div>
      </div>
</div>
@endsection