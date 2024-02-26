@extends('Layout.index')

@section('content-title')
Multiple Input Score
@endsection

@section('content-main')
<h4 class="card-title">Silahkan Input Score Pertandingan</h4>
<div id="html-view-validations">
  <div class="row">
    <form action="{{route('klasemen.store2')}}" method="post" class="formValidate0" id="formValidate0">
    @csrf
      <label>Klub 1</label>
      <select class="browser-default" name="club[]">
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
      <div class="input-field col s12">
        <input id="score" type="text" name="score[]" class="validate">
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
      <label>Klub 2</label>
      <select class="browser-default" name="club2[]">
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
        <div class="input-field col s12">
          <input id="score2" type="text" name="score2[]" class="validate">
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
      <div class="matches-container"></div>
    <a class="mb-6 btn waves-effect waves-light green darken-1" id="add-match">Tambah Data</a>
    <div class="input-field col s12">
        <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
        </button>
    </div>
    </form>
  </div>
</div>
@endsection

@section('content-js')
<script>
        $(document).ready(function() {
            $('#add-match').click(function() {
                var newMatch='<div class="match"><label>Klub 1</label><select class="browser-default" name="club[]"><option value="" disabled selected>Pilih Klub 1</option>@foreach($Club as $item)<option value="{{$item->id}}">{{$item->nama}}</option>@endforeach</select><div class="input-field col s12"><input id="score" type="text" name="score[]" class="validate"><label for="score">Score 1</label></div><label>Klub 2</label><select class="browser-default" name="club2[]"><option value="" disabled selected>Pilih Klub 2</option>@foreach($Club as $item)<option value="{{$item->id}}">{{$item->nama}}</option>@endforeach</select><div class="input-field col s12"><input id="score2" type="text" name="score2[]" class="validate"><label for="score2">Score 2</label></div><a class="mb-6 btn waves-effect waves-light red accent-2" id="remove-match">Hapus</a></div>'
                $('.matches-container').append(newMatch);
            });

            $(document).on('click', '#remove-match', function() {
                // Menghapus elemen match
                $(this).closest('.match').remove();
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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


