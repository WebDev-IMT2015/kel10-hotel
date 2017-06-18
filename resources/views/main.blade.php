@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="row text-center">
        <br>
        <div class="container-fluid">
            <div class="row text-right">
                <div class="col-md-9"></div>
                <div class="col-md-3">
                    <a href="{{ url('booking') }}" class="btn btn-primary" >Pesan Kamar</a>
                </div>
            </div>
        </div>

        <form class="form-inline">
            <div class="form-group" method='POST' action='main'>
                <div class='input-group date' id='datePicker'>
                    <input name='date' type='text' class="form-control" id="datepicker" value="<?php if(!isset($_GET['date']))echo date('Y-m-d'); else echo $_GET['date']; ?>" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                <button class="btn">Go</button>
            </div>
        </form>
        <br>
        <table class="table table-bordered table-hover">
            <tr>
                <th class="text-center">No Kamar</th>
                <th class="text-center">Tipe</th>
                <th class="text-center">Harga</th>
                <th class="text-center">Status</th>
            </tr>
            @foreach($mains as $main)
            <?php $check='0'; ?>
            {{-- '2017-05-17' ambil dari value input date --}}
            @foreach($bookings as $booking)
                @if(isset($_GET['date']))
                    @if($main->id == $booking->id_kamar && $booking->checkIn<=$_GET['date'] && $booking->checkOut>=$_GET['date'])
                        <tr style="background-color: blue;">
                        <?php $check='1'; ?>
                    @endif
                @else
                    <?php $date = date('Y-m-d');?>
                    @if($main->id == $booking->id_kamar && $booking->checkIn<=$date && $booking->checkOut>=$date)
                        <tr style="background-color: blue;">
                        <?php $check='1'; ?>
                    @endif
                @endif
            @endforeach
            @if($check=='1')
                <tr style="background-color: blue;">
            @else
                <tr>
            @endif
                <td>{{ $main->no_kamar }}</td>
                <td>{{ $main->type }}</td>
                <td>{{ $main->harga }}</td>
                <td>{{ $main->status }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
