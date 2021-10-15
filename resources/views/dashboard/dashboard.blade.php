@extends('layouts.admin')
@section('content_admin')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div id="crypto-stats-3" class="row">
                    <div class="col-xl-3 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="cc BTC warning font-large-2" title="BTC"></i></h1>
                                        </div>
                                        <div class="col-5 pl-2">
                                            <h4>{{__('dashboard.1')}}</h4>
                                        </div>
                                        <div class="col-5 text-right">
                                            <h4>$9,980</h4>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="btc-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="cc ETH blue-grey lighten-1 font-large-2" title="ETH"></i></h1>
                                        </div>
                                        <div class="col-5 pl-2">
                                            <h4>{{__('dashboard.2')}}</h4>
                                        </div>
                                        <div class="col-5 text-right">
                                            <h4>$944</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="eth-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="cc XRP info font-large-2" title="XRP"></i></h1>
                                        </div>
                                        <div class="col-5 pl-2">
                                            <h4>{{__('dashboard.3')}}  </h4>
                                        </div>
                                        <div class="col-5 text-right">
                                            <h4>99</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="xrp-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="cc XRP info font-large-2" title="XRP"></i></h1>
                                        </div>
                                        <div class="col-5 pl-2">
                                            <h4> {{__('dashboard.4')}}</h4>
                                        </div>
                                        <div class="col-5 text-right">
                                            <h4>09</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="xrp-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Candlestick Multi Level Control Chart -->

                <!-- Sell Orders & Buy Order -->
                <div class="row match-height">
                    <div class="col-12 col-xl-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{__('dashboard.11')}} </h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-de mb-0">
                                        <thead>
                                        <tr>
                                            <th>{{__('dashboard.5')}}</th>
                                            <th>{{__('dashboard.6')}}</th>
                                            <th>{{__('dashboard.7')}}</th>
                                            <th>{{__('dashboard.8')}}</th>
                                            <th>{{__('dashboard.9')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="bg-success bg-lighten-5">
                                            <td>105000</td>
                                            <td>df</td>
                                            <td>$ 4762.53</td>
                                            <td>dsd</td>
                                            <td>$ 4762.53</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{__('dashboard.10')}}</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-de mb-0">
                                        <thead>
                                        <tr>
                                            <th> {{__('dashboard.6')}}</th>
                                            <th>{{__('dashboard.12')}}</th>
                                            <th>{{__('dashboard.13')}} </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="bg-danger bg-lighten-5">
                                            <td>ds ds</td>
                                            <td><i class="cc BTC-alt"></i> ds ds</td>
                                            <td> 5 </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Sell Orders & Buy Order -->

            </div>
        </div>
    </div>

@endsection
