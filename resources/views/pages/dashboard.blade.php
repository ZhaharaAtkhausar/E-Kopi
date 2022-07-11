@extends('layouts.main') 
@section('title', 'Dashboard')
@section('content')
    <!-- push external head elements to head -->
    @push('head')

        <link rel="stylesheet" href="{{ asset('plugins/weather-icons/css/weather-icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/owl.carousel/dist/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/chartist/dist/chartist.min.css') }}">
    @endpush

    <div class="container-fluid">
    	<div class="row align-items-center">
    		<!-- page statustic chart start -->
            <div class="col-md-6">
                <div class="card card-red text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="mb-0" id="counterKoperasi"></h4>
                                <p class="mb-0">Jumlah Koperasi</p>
                            </div>
                            <div class="col-4 text-right">
                                <i class="ik ik-airplay f-30"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-blue text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="mb-0" id="counterSehat"></h4>
                                <p class="mb-0">Jumlah Koperasi Bersertifikat</p>
                            </div>
                            <div class="col-4 text-right">
                                <i class="ik ik-check-square f-30"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page statustic chart end -->
    	</div>
    </div>
	<!-- push external js -->
    @push('script')
        <script src="{{ asset('plugins/owl.carousel/dist/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('plugins/chartist/dist/chartist.min.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.js') }}"></script>
        <!-- <script src="{{ asset('plugins/flot-charts/jquery.flot.categories.js') }}"></script> -->
        <script src="{{ asset('plugins/flot-charts/curvedLines.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.tooltip.min.js') }}"></script>

        <script src="{{ asset('plugins/amcharts/amcharts.js') }}"></script>
        <script src="{{ asset('plugins/amcharts/serial.js') }}"></script>
        <script src="{{ asset('plugins/amcharts/themes/light.js') }}"></script>
       
        
        <script src="{{ asset('js/widget-statistic.js') }}"></script>
        <script src="{{ asset('js/widget-data.js') }}"></script>
        <script src="{{ asset('js/dashboard-charts.js') }}"></script>
        
        <script>
            $(function () {
                let counterKoperasi = '';
                let counterSehat = '';

                function koperasiCount() {
                    $.ajax({
                        type: "get",
                        url: "/koperasi/count",
                        success: function (response) {
                            // console.log(response.tata_kelola);
                            counterKoperasi = response.koperasi;
                            counterSehat = response.tata_kelola;

                            $("#counterKoperasi").text(counterKoperasi);
                            $("#counterSehat").text(counterSehat);
                        }
                    });
                }

                koperasiCount();
            });
        </script>
    @endpush
@endsection