@extends('layouts.user')

@section('contents')
<div class="row">
	<div class="card card-body blur mx-3 shadow-blur overflow-hidden">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="https://www.kindpng.com/picc/m/160-1607808_stock-investing-insights-and-information-stocks-png-transparent.png" alt="saham_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                PT Bank Rakyat Indonesia
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                {{ $symbol }}
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                    <svg class="text-dark" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                          <g transform="translate(1716.000000, 291.000000)">
                            <g transform="translate(603.000000, 0.000000)">
                              <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z">
                              </path>
                              <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                              <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                    <span class="ms-1">Info</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                    <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <title>document</title>
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                          <g transform="translate(1716.000000, 291.000000)">
                            <g transform="translate(154.000000, 300.000000)">
                              <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                              <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                              </path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                    <span class="ms-1">Grafik</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
</div>

<div class="py-4 mx-1">
  <div class="row">
    <div class="col-12 col-xl-6">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6 class="mb-0">Grafik Data</h6>
        </div>
        <div class="card-body">
          <canvas id="componentPerWeek" width="600" height="400"></canvas>
        </div>
      </div>
    </div>

    <div class="col-12 col-xl-6">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6 class="mb-0">Income Statement</h6>
        </div>
        <div class="card-body">
          <canvas id="densityChart" width="600" height="400"></canvas>
        </div>
      </div>
    </div>

    <div class="col-12 col-xl-6">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <div class="row">
            <div class="col-md-8 d-flex align-items-center">
              <h6 class="mb-0">Informasi</h6>
            </div>
            <div class="col-md-4 text-end">
              
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered">
              <tr>
                <th>Avg Volume</th>
                <td>{{ $information->avgVolume }}</td>
              </tr>
              <tr>
                <th>Beta</th>
                <td>{{ $information->beta }}</td>
              </tr>
              <tr>
                <th>Daily Range</th>
                <td>{{ $information->dailyRange }}</td>
              </tr>
              <tr>
                <th>Dividend</th>
                <td>{{ $information->dividend }}</td>
              </tr>
              <tr>
                <th>Eps</th>
                <td>{{ $information->eps }}</td>
              </tr>
              <tr>
                <th>Market Cap</th>
                <td>{{ $information->marketCap }}</td>
              </tr>
              <tr>
                <th>Next Earning Date</th>
                <td>{{ $information->nextEarningDate }}</td>
              </tr>
              <tr>
                <th>One Year Return</th>
                <td>{{ $information->oneYearReturn }}</td>
              </tr>
              <tr>
                <th>Open</th>
                <td>{{ $information->open }}</td>
              </tr>
              <tr>
                <th>Prev Close</th>
                <td>{{ $information->prevClose }}</td>
              </tr>
              <tr>
                <th>Ratio</th>
                <td>{{ $information->ratio }}</td>
              </tr>
              <tr>
                <th>Revenue</th>
                <td>{{ $information->revenue }}</td>
              </tr>
              <tr>
                <th>Shares Outstanding</th>
                <td>{{ $information->sharesOutstanding }}</td>
              </tr>
              <tr>
                <th>Volume</th>
                <td>{{ $information->volume }}</td>
              </tr>
              <tr>
                <th>Week Range</th>
                <td>{{ $information->weekRange }}</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-xl-6">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Analisis Indikator</h6>
        </div>
        <div class="card-body pt-0 pb-2" style="padding: 1rem 1rem;">
          <div class="table-responsive p-0">
            <table class="table align-items-center justify-content-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Indicator</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Value</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Signal</th>
                </tr>
              </thead>
              <tbody>
                @foreach($listIndicator as $indicator)
                <tr>
                  <td class="align-middle text-center">
                    <div class="d-flex">
                      <div class="my-auto">
                        <span class="mb-0 text-xs">{{ $indicator->indicator }}</span>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle text-center">
                    <div class="d-flex">
                      <div class="my-auto">
                        <span class="mb-0 text-xs">{{ $indicator->value }}</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="text-xs font-weight-bold" style="color: @if($indicator->signal == 'buy') green @elseif($indicator->signal == 'neutral') grey @elseif($indicator->signal == 'high_volatility') orange @else red @endif">{{ $indicator->signal }}</span>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-xl-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6 class="mb-0">Balance Sheet</h6>
        </div>
        <div class="card-body">
          <canvas id="balanceSheetChart" width="600" height="300"></canvas>
        </div>
      </div>
    </div>

    <div class="col-12 col-xl-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6 class="mb-0">Cash Flow</h6>
        </div>
        <div class="card-body">
          <canvas id="cashflowChart" width="600" height="300"></canvas>
        </div>
      </div>
    </div>

  </div>
</div>
@stop

@section('scripts')
<script src="{{ url('back/assets/js/plugins/chartjs.min.js') }}"></script>
<script type="text/javascript">
const randomNum = () => Math.floor(Math.random() * (235 - 52 + 1) + 52);

const randomRGB = () => `rgb(${randomNum()}, ${randomNum()}, ${randomNum()})`;

const densityCanvas = document.getElementById("densityChart");

Chart.defaults.font.family = "Teko";
Chart.defaults.font.size = 22;
Chart.defaults.color = "black";

let gravityBars = randomRGB();
let densityBars = randomRGB();

let incomeData = {
  label: "Net Income",
  data: @json($arrayNetIncome),
  backgroundColor: densityBars,
  yAxisID: "y-axis-density"
};

let revenueData = {
  label: "Total Revenue",
  data: @json($arrayRevenue),
  backgroundColor: gravityBars,
  yAxisID: "y-axis-gravity"
};
let planetData = {
  labels: @json($arrayYear),
  datasets: [incomeData, revenueData]
};

let chartOptions = {
  barPercentage: 1,
  categoryPercentage: 0.8,
  responsive: true,
  maintainAspectRatio: false,
  scales: {
    "y-axis-density": {
      grid: {
        color: densityBars,
        tickColor: densityBars,
        borderColor: densityBars
      },
      ticks: {
        color: densityBars
      },
      position: "left"
    },
    "y-axis-gravity": {
      grid: {
        color: gravityBars,
        tickColor: gravityBars,
        borderColor: gravityBars
      },
      ticks: {
        color: gravityBars
      },
      position: "right"
    }
  }
};

let barChart = new Chart(densityCanvas, {
  type: "bar",
  data: planetData,
  options: chartOptions
});

//Another Graph

const componentPerWeek = document.getElementById("componentPerWeek");

const data = {
  labels: @json($labelDateGraph),                 
  datasets: [
    {
      label: 'Close',
      data: @json($listDataGraph),
      borderColor: '#36B368',
      backgroundColor: '#36B368',
    }
  ]
};

let lineOptions = {
  barPercentage: 1,
  categoryPercentage: 0.8,
  scales: {
    "y-axis-density": {
      grid: {
        color: densityBars,
        tickColor: densityBars,
        borderColor: densityBars
      },
      ticks: {
        color: densityBars
      },
      position: "left"
    }
  },
  scales: {
    x: {
      ticks: {
        font: {
          size: 0,
        }
      }
    }
  },
  parsing: {
    xAxisKey: 'Date',
    yAxisKey: 'Close'
  },
  plugins: {
    tooltip: {
      callbacks: {
        beforeTitle: function(context) {
          console.log(context)
        },
        afterBody: function(context) {
          const newLineArray = [];
          newLineArray.push('Adj Close: '+context[0].raw['Adj Close']);
          newLineArray.push('High: '+context[0].raw['High']);
          newLineArray.push('Low: '+context[0].raw['Low']);
          newLineArray.push('Open: '+context[0].raw['Open']);
          newLineArray.push('Volume: '+context[0].raw['Volume']);
          return newLineArray;
        }
      }
    },
    legend: {
      display: false
    },
  }
};

let lineChart = new Chart(componentPerWeek, {
  type: 'line',
  data: data,
  options: lineOptions,
});

//Balance Sheet

const balanceSheetChart = document.getElementById("balanceSheetChart");

var balanceSheet = @json($detailInformation->balanceSheet);

let datasetBalanceSheet = [];
let keyBS;
for (keyBS of Object.keys(balanceSheet)) {
  var theData = Object.keys(balanceSheet[keyBS]).map(function(key){ 
    return balanceSheet[keyBS][key] 
  });

  datasetBalanceSheet.push({"label": keyBS, "data": theData, 'borderColor': randomRGB(), 'backgroundColor': randomRGB()});
}

for (var prop in balanceSheet) {
    var labelsBalanceSheet = balanceSheet[prop]
    break;
}

const dataBalanceSheet = {
  labels: Object.keys(labelsBalanceSheet).map(function(dataBS){ var dateBS = new Date(dataBS); return dateBS.getFullYear() }),
  datasets: datasetBalanceSheet
};

const configBalanceSheet = {
  type: 'bar',
  data: dataBalanceSheet,
  options: {
    responsive: true,
    plugins: {
      legend: {
        display: 'top',
        labels: {
          font: {
              size: 14
          }
        }
      },
      tooltip: {
        titleFont: {
          size: 15
        },
        bodyFont: {
          size: 15
        },
        footerFont: {
          size: 15 // there is no footer by default
        }
      }
    },
    scales: {
      y: {
        ticks: {
          font: {
            size: 10,
          }
        }
      }
    },
  },
};

let chartBS = new Chart(balanceSheetChart, configBalanceSheet);

//Cash Flow

const cashflowChart = document.getElementById("cashflowChart");

var cashFlow = @json($detailInformation->cashFlow);

let datasetcashFlow = [];
let keyCF;
for (keyCF of Object.keys(cashFlow)) {
  var theData = Object.keys(cashFlow[keyCF]).map(function(key){ 
    return cashFlow[keyCF][key] 
  });

  datasetcashFlow.push({"label": keyCF, "data": theData, 'borderColor': randomRGB(), 'backgroundColor': randomRGB()});
}

for (var prop in cashFlow) {
    var labelscashFlow = cashFlow[prop]
    break;
}

const datacashFlow = {
  labels: Object.keys(labelscashFlow).map(function(dataBS){ var dateBS = new Date(dataBS); return dateBS.getFullYear() }),
  datasets: datasetcashFlow
};

const configcashFlow = {
  type: 'bar',
  data: datacashFlow,
  options: {
    responsive: true,
    plugins: {
      legend: {
        display: 'top',
        labels: {
          font: {
              size: 14
          }
        }
      },
      tooltip: {
        titleFont: {
          size: 15
        },
        bodyFont: {
          size: 15
        },
        footerFont: {
          size: 15 // there is no footer by default
        }
      }
    },
    scales: {
      y: {
        ticks: {
          font: {
            size: 10,
          }
        }
      }
    },
  },
};

let chartCF = new Chart(cashflowChart, configcashFlow);
</script>
@stop

@section('title-navbar')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
	<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">User Dashboard</a></li>
	<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Rekomendasi</a></li>
	<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">List Saham</a></li>
	<li class="breadcrumb-item text-sm text-dark active" aria-current="page">Detail</li>
</ol>
<h6 class="font-weight-bolder mb-0">Detail Saham</h6>
@stop