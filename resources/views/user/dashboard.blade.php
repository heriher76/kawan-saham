@extends('layouts.user')

@section('contents')
<div class="row">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Saham ID</p>
              <h5 class="font-weight-bolder mb-0">
                {{ $jumlahStockID }}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
              <i class="ni ni-archive-2 text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Saham US</p>
              <h5 class="font-weight-bolder mb-0">
                {{ $jumlahStockUS }}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
              <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Indicator</p>
              <h5 class="font-weight-bolder mb-0">
                {{ $jumlahIndicator }}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
              <i class="ni ni-chart-bar-32 text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Pattern</p>
              <h5 class="font-weight-bolder mb-0">
                {{ $jumlahPattern }}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
              <i class="ni ni-vector text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  
<div class="row my-4">
  <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
    <div class="card">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-lg-6 col-7">
            <h6>Economic Calendar</h6>
          </div>
        </div>
      </div>
      <div class="card-body px-0 pb-2" style="padding-top: 0;">
        <div class="table-responsive">
          <table class="table align-items-center mb-0" id="economicCalendar">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Zone</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Event</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actual</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Currency</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Forecast</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Importance</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Previous</th>
              </tr>
            </thead>
            <tbody>
              @foreach($listCalendar as $key => $calendar)
              <tr>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold">{{ date_format(date_create(str_replace('/','-',$calendar->date)), 'd M Y') .' '. $calendar->time }}</span>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold">
                    @if($calendar->zone == 'united states') 
                      US 
                    @elseif($calendar->zone == 'indonesia')
                      ID
                    @else
                      Unknown
                    @endif
                    </span>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold">{{ $calendar->event }}</span>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold">{{ $calendar->actual }}</span>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold">{{ $calendar->currency }}</span>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold">{{ $calendar->forecast }}</span>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold">{{ $calendar->id }}</span>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold">{{ $calendar->importance }}</span>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold">{{ $calendar->previous }}</span>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@stop

@section('scripts')
<script src="{{ url('front/vendors/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
$(document).ready( function () {
  $('#economicCalendar').DataTable();
} );
</script>
@stop

@section('styles')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

<style type="text/css">
  .dataTables_wrapper {
    padding: 10px !important;
  }
</style>
@stop

@section('title-navbar')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Index</a></li>
  <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
</ol>
<h6 class="font-weight-bolder mb-0">User Dashboard</h6>
@stop