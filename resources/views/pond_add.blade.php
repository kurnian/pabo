@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pond</h1>
  </div>
  <!-- Content Row -->
  <div>
    <!-- Area Chart -->
    <form class="row" method="post" action="{{url('pond/add')}}">
      @csrf
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Add Pond</h6>
          </div>
          <!-- Card Body -->
          <div class="card-body">

            @if($errors->any())
            @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
            @endforeach
            @endif

            <div class="form-group">
              <label for="exampleInputEmail1">Nama Kolam</label>
              <input name="name" type="text" class="form-control" id="" aria-describedby="" placeholder="Nama Kolam">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Luas</label>
              <input name="luas" type="text" class="form-control" id="" aria-describedby="" placeholder="Luas Kolam">
              <small id="emailHelp" class="form-text text-muted">Luas kolam dalam satuan m persegi</small>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Kedalaman</label>
              <input name="kedalaman" type="text" class="form-control" id="" aria-describedby="" placeholder="Kedalaman Kolam">
              <small id="emailHelp" class="form-text text-muted">Kedalaman kolam dalam satuan m</small>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Jenis Ikan</label>
              <input name="jenis_ikan" type="text" class="form-control" id="" aria-describedby="" placeholder="Jenis Ikan">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Jumlah Ikan</label>
              <input name="jumlah_ikan" type="text" class="form-control" id="" aria-describedby="" placeholder="Jumlah Ikan">
              <small id="emailHelp" class="form-text text-muted">Perkiraan jumlah ikan dalam kolam</small>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>


      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Lokasi</h6>
          </div>
          <!-- Card Body -->
          <div class="card-body">
            <div id="googleMap" style="height: 250px;"></div>
            <input type="hidden" name="lat" id="form_lat" value="">
            <input type="hidden" name="lon" id="form_lon" value="">
          </div>
        </div>
      </div>

    </form>

  </div>
  <!-- /.container-fluid -->

</div>
@endsection

@section('js')
<script>
  var marker = undefined;

  function myMap() {
    var mapProp = {
      center: new google.maps.LatLng(51.508742, -0.120850),
      zoom: 5,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

    google.maps.event.addListener(map, "click", (event) => {
      addMarker(event.latLng, map);
      document.getElementById("form_lat").value = event.latLng.lat();
      document.getElementById("form_lon").value = event.latLng.lng();
      console.log(event.latLng.lng());

    });

  }

  function addMarker(location, map) {
    // Add the marker at the clicked location, and add the next-available label
    // from the array of alphabetical characters.
    if (marker != undefined) {
      marker.setPosition(location);
    } else {
      marker = new google.maps.Marker({
        position: location,
        label: "Lokasi Kolam",
        map: map,
      });
    }

  }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyFW-gnvE6hJ8OTijKM95miEF_0QpzIM4&callback=myMap"></script>
@endsection