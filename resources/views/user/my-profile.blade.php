@extends('layouts.user')

@section('contents')
<div class="row">
	<div class="col-xl-12 col-sm-12 mb-4">
    	<form method="POST" action="{{ url('/my-profile') }}">
    	  @csrf
    	  {{method_field('PUT')}}
	      <div class="card">
	        <div class="card-body p-3">
	          <div class="row">
	            <div class="col-12">
	            	<label>Nama</label>
	            	<input type="text" name="name" class="form-control" value="{{ $me->name }}">
	            </div>
	            <div class="col-12">
	            	<label>Email</label>
	            	<input type="email" name="email" class="form-control" value="{{ $me->email }}">
	            </div>
	            <b style="color: red; font-size: 10px;">*Isi Password Baru dan Konfirmasi Password Baru untuk mengubah Password saat ini.</b>
	            <div class="col-12">
	            	<label>Password Baru</label>
	            	<input type="password" name="new_password" class="form-control" autocomplete="new-password">
	            </div>
	            <div class="col-12">
	            	<label>Konfirmasi Password Baru</label>
	            	<input type="password" name="confirm_new_password" class="form-control" autocomplete="new-password">
	            </div>
	            <div class="col-12">
	            	<br>
	            	<button type="submit" class="btn btn-success">Update</button>
	            </div>
	          </div>
	        </div>
	      </div>
      	</form>
    </div>
  </div>
</div>
@stop

@section('title-navbar')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
	<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">User Dashboard</a></li>
	<li class="breadcrumb-item text-sm text-dark active" aria-current="page">Profile</li>
</ol>
<h6 class="font-weight-bolder mb-0">My Profile</h6>
@stop