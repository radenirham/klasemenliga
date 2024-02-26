@extends('Layout.index')

@section('content-title')
Single Input Score Pertandingan
@endsection

@section('content-main')
<h4 class="card-title">Silahkan Input Score Pertandingan</h4>
  
    <form action="{{route('klasemen.store')}}" method="post" class="col s12">
    @csrf
    <div class="row">
      <label>Klub 1</label>
      <select class="browser-default" name="club">
          <option value="" disabled selected>Pilih Klub 1</option>
          @foreach($Club as $item)
          <option value="{{$item->id}}">{{$item->nama}}</option>
          @endforeach  
      </select>
      @foreach ($errors->get('club') as $msg)
          <div class="card-alert card red lighten-5">
              <div class="card-content red-text">
                  <p>{{ $msg }}</p>
              </div>
              <button type="button" class="close orange-text" data-dismiss="alert" aria-label="Close">                                                       
                <span aria-hidden="true">×</span>                                                   
              </button>
          </div>
          @endforeach
      <div class="input-field col s6">
        <input id="score" type="text" name="score" class="validate">
        @foreach ($errors->get('score') as $msg)
          <div class="card-alert card red lighten-5">
              <div class="card-content red-text">
                  <p>{{ $msg }}</p>
              </div>
              <button type="button" class="close orange-text" data-dismiss="alert" aria-label="Close">                                                       
                <span aria-hidden="true">×</span>                                                   
              </button>
          </div>
          @endforeach
        <label for="score">Score 1</label>
      </div>
    </div>
    <div class="row">
      <label>Klub 2</label>
      <select class="browser-default" name="club2">
          <option value="" disabled selected>Pilih Klub 2</option>
          @foreach($Club as $item)
          <option value="{{$item->id}}">{{$item->nama}}</option>
          @endforeach  
      </select>  
      @foreach ($errors->get('club2') as $msg)
          <div class="card-alert card red lighten-5">
              <div class="card-content red-text">
                  <p>{{ $msg }}</p>
              </div>
              <button type="button" class="close orange-text" data-dismiss="alert" aria-label="Close">                                                       
                <span aria-hidden="true">×</span>                                                   
              </button>
          </div>
          @endforeach  
      <div class="input-field col s6">
          <input id="score2" type="text" name="score2" class="validate">
          @foreach ($errors->get('score2') as $msg)
          <div class="card-alert card red lighten-5">
              <div class="card-content red-text">
                  <p>{{ $msg }}</p>
              </div>
              <button type="button" class="close orange-text" data-dismiss="alert" aria-label="Close">                                                       
                <span aria-hidden="true">×</span>                                                   
              </button>
          </div>
          @endforeach
          <label for="score2">Score 2</label>
        </div>
      </div>
    </div>
    <button class="btn mb-2" id="add" >Submit</button>
    </form>
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
