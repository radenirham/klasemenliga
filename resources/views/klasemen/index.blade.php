@extends('Layout.index')

@section('content-title')
Klasemen 
@endsection

@section('content-main')
<h4 class="card-title">Klasemen Liga</h4>
<h7 class="card-title">Input Score Pertandingan</h7>
<a class="btn mb-2" id="add" href='{{route('klasemen.create')}}' method="get">Satu per Satu</a>
<a class="btn mb-2" id="add" href='{{route('klasemen.create2')}}' method="get">Multiple</a>
<table id="dtable" class="display">
    <thead>
        <tr>
            <th>No</th>
            <th>Klub</th>
            <th>Main</th>
            <th>Menang</th>
            <th>Seri</th>
            <th>Kalah</th>
            <th>GM</th>
            <th>GK</th>
            <th>point</th>
        </tr>
        <tbody>
              @foreach($Klasemen as $item)
                <tr>
                <td>{{ $loop->iteration }}</td> 
                  <td>{{ $item->club->nama}}</td>
                  <td>{{ $item->main }}</td> 
                  <td>{{ $item->menang }}</td> 
                  <td>{{ $item->seri}}</td> 
                  <td>{{ $item->kalah }}</td> 
                  <td>{{ $item->gm }}</td> 
                  <td>{{ $item->gk }}</td> 
                  <td>{{ $item->point }}</td> 
                </tr>    
              @endforeach             
        </tbody>
    </thead>
</table>
@endsection
