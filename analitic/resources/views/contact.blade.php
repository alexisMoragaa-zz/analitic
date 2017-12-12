@extends('app')
@section('content')
<style>
       #map {
        height: 400px;
        width: 100%;
       }
       #titulo{
         font-size: 1.8em;
       }
       .caja{
         border-bottom: 1px solid #;
       }
</style>

<div class="container">
  <div class="row">
<!-- Mapa
    <div class="col-12">
      <button type="button" name="button" data-toggle="modal" data-target="#ModalContact" class="btn btn-secondary mt-2 mb-2 float-right">Contactanos</button>
          <div id="map" class=" img img-thumbnail"></div>
          <script>
            function initMap() {
              var uluru = {lat: -33.389832, lng: -70.618406};
              var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: uluru
              });
              var marker = new google.maps.Marker({
                position: uluru,
                map: map
              });
            }
          </script>
          <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMniwqt0kZ6EmG4qeFDv8ePse5z9I1LG4&callback=initMap">
          </script>
    </div>

    <div class="modal fade mt-5" id="ModalContact" tabindex="-1" role="dialog" aria-labelledby="titulo" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="mx-auto mt-4 caja">
            <h5 class="modal-title p-2" id="titulo">Contact us</h5>
          </div>
          <div class="modal-body">
            <form class="" action="index.html" method="post">
              <div class="col-12 mx-auto">
                <input type="text" name="nombre" value="" placeholder="Name" class="form-control mt-2 mb-2">
                <input type="email" name="email" value="" placeholder="Email"class="form-control mt-2 mb-2">
                <input type="text" name="asunto"   placeholder="Affair" class="form-control mt-2 mb-2">
                <textarea name="contenido" rows="8" cols="30" class="form-control mt-2 mb-2" placeholder="Coment"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer mx-auto">
            <button type="button" name="button" class="btn btn-outline-success">Send</button>
          </div>
        </div>
      </div>
    </div>
 /Modal Contacto -->


<!-- Mapa -->
    <div class="col-12 col-lg-7 d-none d-sm-block">
      <!-- <button type="button" name="button" data-toggle="modal" data-target="#ModalContact" class="btn btn-secondary mt-2 mb-2 float-right">Contactanos</button> -->
          <div id="map" class=" img img-thumbnail mt-5 mb-4"></div>
          <script>
            function initMap() {
              var uluru = {lat: -33.389832, lng: -70.618406};
              var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: uluru
              });
              var marker = new google.maps.Marker({
                position: uluru,
                map: map
              });
            }
          </script>
          <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMniwqt0kZ6EmG4qeFDv8ePse5z9I1LG4&callback=initMap">
          </script>
    </div>
    <div class="col-12 col-lg-5 ">
      <div class="col-6 mx-auto mt-4">
        <h5 class=" mx-auto" id="titulo">Contact us</h5>

      </div>
              <form class="" action="" method="post">
                <div class="col-12 mx-auto">
                  <input type="text" name="nombre" value="" placeholder="Name" class="form-control mt-2 mb-2">
                  <input type="email" name="email" value="" placeholder="Email"class="form-control mt-2 mb-2">
                  <input type="text" name="asunto"   placeholder="Affair" class="form-control mt-2 mb-2">
                  <textarea name="contenido" rows="6" cols="30" class="form-control mt-2 mb-2" placeholder="Coment"></textarea>
                  <div class="col-12 mx-auto">
                    <button type="submit" name="button" class="btn btn-outline-success float-right">Send</button>
                  </div>
                </div>
              </form>

        </div>
      </div>
    </div>

<!-- /Modal Contacto -->
  </div>
</div>
@endsection
