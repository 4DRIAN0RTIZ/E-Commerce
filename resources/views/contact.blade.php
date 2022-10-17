@extends('master')
@section('content')
<div class="container custom-contact-map">
<div class="row">
    <div class="d-flex justify-content-center flex-nowrap">
        <x-mapbox 
        id="mapId"
        class="hellomap" 
        style="height: 500px; width: 500px; margin:auto;" 
        mapStyle="mapbox/outdoors-v11"
        :cooperativeGestures="true"
        :center="['long' => -103.3424851, 'lat' => 20.6780543]"
        :navigationControls="true"
        :interactive="true"
        :markers="[['long' => -103.3424851, 'lat' => 20.6780543,'description' => 'La Consentida']]"
        :zoom="15"/>
        <div>
            <p>               Prueba
            </p>



        </div>
    </div>
  </div>
</div>
@endsection

