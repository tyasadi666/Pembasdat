@extends('layouts.backend.app')
@section('title', 'Home')
@section('content_title', 'Home')
@section('content')
<x-alert></x-alert>
<div class="row">
	<div class="col-lg">
		<div class="jumbotron">
		@role('admin|petugas')
		  <h1 class="display-4">Halo, {{ Universe::petugas()->nama_petugas }}!</h1>
		@endrole

		@role('siswa')
		  <h1 class="display-4">Halo, {{ Universe::siswa()->nama_siswa }}!</h1>
		@endrole
		  <p class="lead">Selamat datang di WEB e-SPP.</p>
		  <hr class="my-4">
		</div>
	</div>
</div>
<div class="row">
<div class="col-lg">
		<img src="{{ URL::to('/') }}/images/smk.jpg" class="img-fluid" alt="">
	</div>
</div>
@endsection