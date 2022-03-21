@extends('layouts.user')

@section('contents')
<div class="row">
	@foreach($listPattern as $key => $pattern)
    <div class="col-xl-3 col-sm-6 mb-4">
    	<a href="{{ url('/rekomendasi-saham/'.$key) }}">
	      <div class="card">
	        <div class="card-body p-3">
	          <div class="row">
	            <div class="col-12">
	              <div class="numbers">
	                <p class="text-sm mb-0 text-capitalize font-weight-bold">{{ $pattern }}</p>
	                <h6 class="font-weight-bolder mb-0">
	                  {{ $key }}
	                </h6>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
      	</a>
    </div>
    @endforeach
  </div>
</div>
@stop

@section('title-navbar')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
	<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">User Dashboard</a></li>
	<li class="breadcrumb-item text-sm text-dark active" aria-current="page">Rekomendasi</li>
</ol>
<h6 class="font-weight-bolder mb-0">Rekomendasi Saham</h6>
@stop