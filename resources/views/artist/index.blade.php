
@extends('layouts.app') 

@section('content') 
<div class="container">

    <h3>ARTIST</h3>
    <h4>
    <a href="{{ url('/artist/create') }}" class="btn btn-primary btn-sm float-left">TAMBAH DATA</a>
    </h4>
    <table class="table table-bordered" >
        <tr>
            <th>Artist ID</th>
            <th>Artist Name</th>
          
            <th>DELETE</th>
        </tr>
            @foreach($rows as $row)
        <tr>
            <td>{{ $row->artist_id }}</td>
            <td>{{ $row->artist_nama }}</td>
            
    <td><form action="{{ url('/artist/' . $row->artist_id) }}" method="POST">
            <input name="_method" type="hidden" value="DELETE">
            @csrf
        <button>DELETE</button>
    </form></td>
        </tr>
            @endforeach
    </table>
 </div> 
@endsection 