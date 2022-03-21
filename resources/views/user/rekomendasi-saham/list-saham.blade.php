@extends('layouts.user')

@section('contents')
<div class="row">
	<div class="col-12">
      <div class="card mb-4">
        <!-- <div class="card-header pb-0 p-3">
          <h6 class="mb-1">Projects</h6>
          <p class="text-sm">Architects design houses</p>
        </div> -->
        <div class="card-body p-3">
          <div class="row">
          	@foreach($listSaham as $key => $saham)
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card card-blog card-plain">
                <div class="position-relative">
                  <a class="d-block shadow-xl border-radius-xl">
                  	<center>
                    	<img src="{{ $saham->logo }}" onerror="this.src='https://www.kindpng.com/picc/m/160-1607808_stock-investing-insights-and-information-stocks-png-transparent.png'" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl" style="min-height: 200px;">
                  	</center>
                  </a>
                </div>
                <div class="card-body px-1 pb-0">
                  <p class="text-gradient text-dark mb-2 text-sm">{{ $saham->symbol }}</p>
                  <a href="javascript:;">
                    <h5>
                      {{ $saham->name }}
                    </h5>
                  </a>
                  <div class="d-flex align-items-center justify-content-between">
                    <a href="{{ url('/rekomendasi-saham/'.$signal.'/'.$saham->symbol) }}" class="btn btn-outline-primary btn-sm mb-0">Lihat Saham</a>
                  	<div class="avatar-group mt-2">
                      <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom">
                        <img alt="{{ $saham->action }}" src="@if($saham->action == 'bearish') https://png.pngtree.com/png-clipart/20200801/ourmid/pngtree-red-solid-color-round-png-image_2319168.jpg @else https://w7.pngwing.com/pngs/51/802/png-transparent-circle-green-circle-color-grass-sphere-thumbnail.png @endif">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
</div>
@stop

@section('title-navbar')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
	<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">User Dashboard</a></li>
	<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Rekomendasi</a></li>
	<li class="breadcrumb-item text-sm text-dark active" aria-current="page">Detail Pattern</li>
</ol>
<h6 class="font-weight-bolder mb-0">List Saham</h6>
@stop