@extends('Layout.index')

@section('content-title')
Add Club
@endsection

@section('content-main')
<h4 class="card-title">Tambah Data Club</h4>
<div id="view-input-fields">
  <div class="row">
    <div class="col s12">
    <form action="{{route('club.store')}}" method="post" class="col s12">
    @csrf
      <div class="row">
        <div class="input-field col s12">
          <input id="nama" type="text" name="nama" class="validate">
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
        <div class="input-field col s12">
          <input id="kota" type="text" name="kota" class="validate">
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
      <button class="btn mb-2" id="add">Tambah</button>
    </form>
    </div>
  </div>
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
