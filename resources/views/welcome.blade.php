@extends('layout')

@section('title', 'Parkir App')

@section('content')
<div class="min-height-200px">
    <div class="pd-20 card-box mb-30">
        <h3 class="text-blue h3">Kalkulasi Harga Parkir</h3>
        <hr/>
        <div class="row p-5">
            <div class="col-md-6 col-sm-12">
                <h3 class="weight-600 font-30 text-blue">Harga Parkir</h3>
                <div class="weight-600 font-30 text-black">Rp <span id="price">...</span></div>
            </div>
            <div class="col-md-6 col-sm-12">
                <h3 class="weight-600 font-30 text-blue">Durasi Parkir</h3>
                <div class="weight-600 font-30 text-black"><span id="hours">...</span> Jam</div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="birth_place">Waktu Datang</label>
                    <input class="form-control time-picker-default"
                           autocomplete="disabled" placeholder="Waktu Datang" name="arrived_time" type="text">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="birth_date">Waktu Keluar</label>
                    <input class="form-control time-picker-default"
                           autocomplete="disabled" placeholder="Waktu Keluar" name="exit_time" type="text">
                </div>
            </div>
        </div>
        <br/>
        <br/>
        <div class="col-md-12 col-sm-12 text-right">
            <button id="calculate" class="btn btn-success" type="submit" role="button" >
                <i class="micon icon-copy fi-check"></i> Hitung
            </button>
        </div>
    </div>
    <!-- Export Datatable End -->

</div>
@stop

@section('script')
<script src="{{ asset('assets/js/dashboard/dashboard-no-apex.js') }}"></script>
<script src="{{ asset('assets/packages/sweetalert2/sweetalert2.all.js') }}"></script>
<script src="{{ asset('assets/packages/sweetalert2/sweet-alert.init.js') }}"></script>
<script src="{{ asset('assets/packages/jquery-ui-1.12.1/jquery-ui.js') }}"></script>
<script>
    $(document).ready(function () {
        $("#calculate").click(function(){
            $('#hours').html('...')
            $('#price').html('...')
            $.post("{{ route('calculate') }}",
                {
                    arrived_time: $('input[name="arrived_time"]').val(),
                    exit_time: $('input[name="exit_time"]').val()
                },
                function(data, status){
                    $('#hours').html(data.diff)
                    $('#price').html(data.result)
                });
        });
    })
</script>
@endSection
