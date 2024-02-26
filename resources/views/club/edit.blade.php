@extends('Layout.index')

@section('content-title')
Add Club
@endsection

@section('content-main')
<h4 class="card-title">Tambah Data Club</h4>
<div class="row">
<form method="POST" action='{{ url('club/update/'. $club->id) }}' enctype="multipart/form-data">                    
@csrf
      <div class="row">
        <div class="input-field col s12">
          <input id="nama" type="text" name="nama" value="{{ $club->nama }}" class="validate">
          @foreach ($errors->get('nama') as $msg)
          <div class="card-alert card red lighten-5">
              <div class="card-content red-text">
                  <p>{{ $msg }}</p>
              </div>
              <button type="button" class="close orange-text" data-dismiss="alert" aria-label="Close">                                                       
                <span aria-hidden="true">×</span>                                                   
              </button>
          </div>
          @endforeach
          <label for="nama">Nama CLub</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="kota" type="text" name="kota" value="{{ $club->kota }}" class="validate">
          @foreach ($errors->get('kota') as $msg)
          <div class="card-alert card red lighten-5">
              <div class="card-content red-text">
                  <p>{{ $msg }}</p>
              </div>
              <button type="button" class="close orange-text" data-dismiss="alert" aria-label="Close">                                                       
                <span aria-hidden="true">×</span>                                                   
              </button>
          </div>
          @endforeach
          <label for="kota">Kota Club</label>
        </div>
      </div>
<button class="btn mb-2" id="add">UPDATE</button>
    </form>
  </div>
@endsection

@section('content-js')
    <script src="{{asset('app-assets/vendors/noUiSlider/nouislider.js')}}"></script>
    <script src="{{asset('app-assets/js/plugins.js')}}"></script>
    <script src="{{asset('app-assets/js/search.js')}}"></script>
    <script src="{{asset('app-assets/js/custom/custom-script.js')}}"></script>
    <script src="{{asset('app-assets/js/scripts/form-elements.js')}}"></script>
    <script src="{{asset('app-assets/js/plugins.js')}}"></script>
    <script src="{{asset('app-assets/js/search.js')}}"></script>
    <script src="{{asset('app-assets/js/custom/custom-script.js')}}"></script>
    <script src="{{asset('app-assets/js/scripts/ui-alerts.js')}}"></script>
@endsection
