@extends('Layout.index')

@section('content-title')
ADMIN DASHBOARD
@endsection

@section('content-main')
<h4 class="card-title">Data Club</h4>
<a class="btn mb-2" id="add" href='{{route('club.create')}}' method="get">Tambah Data</a>
<table id="dtable" class="display">
    <thead>
        <tr>
            <th>Nama Club</th>
            <th>Kota</th>
            <th>Action</th>
        </tr>
        <tbody>
              @foreach($club as $item)
                <tr>
                  <td>{{ $item->nama }}</td>
                  <td>{{ $item->kota }}</td> 
                  <td>
                    <a href="club/edit/{{$item->id}}" method="get">
                    <i class="material-icons dp48">edit</i>
                    </a>
                    <a href="club/delete/{{$item->id}}" method="post" onclick="return confirm('Yakin ingin menghapus data?')">
                    <i class="material-icons dp48">delete</i>
                    </a>
                  </td>
                </tr>    
              @endforeach             
        </tbody>
    </thead>
</table>
@endsection
