@extends('layouts.main') 
@section('title', 'Jenis Koperasi')
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
            <div class="col-md-5 offset-md-1">
                <div class="card card-red text-white" id="non-ksp">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="mb-0"> Non KSP </h4>
                            </div>
                            <div class="col-4 text-right">
                                <i class="ik ik-airplay f-30"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card card-blue text-white" id="ksp">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="mb-0"> KSP KUK </h4>
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

                function hover() {
                    $('#non-ksp').hover(function() {
                        $(this).css('cursor','pointer');
                    });
                    $('#ksp').hover(function() {
                        $(this).css('cursor','pointer');
                    });
                }

                function kspOnClick() {
                    $('#non-ksp').click(function (e) { 
                        e.preventDefault();
                        window.location.href = '/input/sertifikat/tatakelola';
                    });

                    $('#ksp').click(function (e) { 
                        e.preventDefault();
                        window.location.href = '/ksp-input/sertifikat/tatakelola';
                    });
                }

                kspOnClick();
                hover();
            });
        </script>
    @endpush
@endsection