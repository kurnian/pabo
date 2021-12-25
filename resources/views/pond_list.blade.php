@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pond</h1>
  </div>
  <!-- Content Row -->
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Daftar Kolam</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">


          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Luas</th>
                <th>Kedalam</th>
                <th>Jenis Ikan</th>
                <th>Jumlah Ikan</th>
              </tr>
            </thead>
            <tbody>
              @foreach($tables as $table)
              
              <tr>
                <td>{{ $table->name }}</td>
                <td>{{ $table->luas}}</td>
                <td>{{ $table->kedalaman }}</td>
                <td>{{ $table->jenis_ikan }}</td>
                <td>{{ $table->jumlah_ikan }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->

</div>
@endsection

@section('js')
<script>
  function myMap() {
    var mapProp = {
      center: new google.maps.LatLng(51.508742, -0.120850),
      zoom: 5,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
  }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyFW-gnvE6hJ8OTijKM95miEF_0QpzIM4&callback=myMap"></script>
@endsection