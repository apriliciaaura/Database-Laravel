@extends('layout/main')
@section('title', 'Data Mahasiswa')
@section('container')

<div class="container">
  <div class="row">
    <div class="col-10">
    	&nbsp &nbsp
      <center><h1 class="mt-2">Data Mahasiswa</h1></center>
      &nbsp &nbsp
      <table class="table table-striped table-dark">
      
      		<tr>
      		<th scope="col">No</th>
      		<th scope="col">Nama</th>
      		<th scope="col">NIM</th>
      		<th scope="col">Email</th>
      		<th scope="col">Jurusan</th>
      		<th scope="col">Aksi</th>
      	</tr>
      	</thead>
      	<tbody>
      		@foreach($mahasiswa as $mhs)
      		<tr>
      			<th scope="row">{{$mhs->id}}</th>
      			<td>{{$mhs->nama}}</td>
      			<td>{{$mhs->nim}}</td>
      			<td>{{$mhs->email}}</td>
      			<td>{{$mhs->jurusan}}</td>
      			<td>
      				<a href="" class="badge badge-success">edit</a>
      				<a href="" class="badge badge-danger">delete</a>
      			</td>
      		</tr>
      	@endforeach
      	</tbody>
      </table>
    </div>
  </div>
</div>
@endsection