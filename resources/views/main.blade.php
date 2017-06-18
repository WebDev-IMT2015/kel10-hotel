@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="row text-center">
        <form class="form-inline" method='GET' action='main'>
            <div class="form-group">
                <div class='input-group date'>
                    <input name='date' type='text' class="form-control" id="datepicker" value="<?php if(!isset($_GET['date'])) echo date('Y-m-d'); else echo $_GET['date']; ?>" />
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
                <th class="text-center">Info Pemesan</th>
            </tr>
            @foreach($mains as $main)
            <?php $check='0'; $date=date('Y-m-d');?>
            {{-- '2017-05-17' ambil dari value input date --}}
            @foreach($bookings as $booking)
                @if(isset($_GET['date']))
                    <?php $date = $_GET['date'];?>
                    @if($main->id == $booking->id_kamar && $booking->checkIn<=$_GET['date'] && $booking->checkOut>=$_GET['date'])
                        <?php $check='1'; $nama=$booking->namaDepan." ".$booking->namaBelakang; $email=$booking->email; $noTelp=$booking->no_telp; $wn=$booking->ntt; ?>
                    @endif
                @else
                    @if($main->id == $booking->id_kamar && $booking->checkIn<=$date && $booking->checkOut>=$date)
                        <?php $check='1'; $nama=$booking->namaDepan." ".$booking->namaBelakang; $email=$booking->email; $noTelp=$booking->no_telp; $wn=$booking->ntt; ?>
                    @endif
                @endif
            @endforeach
            @if($check=='1')
                <tr style="background-color: #bdc3c7;">
            @else
                <tr>
            @endif
                <td>{{ $main->no_kamar }}</td>
                <td>{{ $main->type }}</td>
                <td>{{ $main->harga }}</td>
                @if($check=='1')
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-nama="<?php echo $nama;?>" data-email="<?php echo $email;?>" data-no_telp="<?php echo $noTelp;?>" data-wn="<?php echo $wn;?>">Detail Info</button>
                </td>
                @else
                <td><a class="btn btn-primary" href="{{ url('booking') }}?id={{ $main->id }}&date=<?php echo $date; ?>">Booking Kamar</a></td>
                @endif
            </tr>
            @endforeach
        </table>
    </div>
</div>

{{-- Modal --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title" id="exampleModalLabel">Info Pemesan</h2>
            </div>
            <div class="modal-body">
                <h4 id="nama"></h4>
                <h4 id="email"></h4>
                <h4 id="noTelp"></h4>
                <h4 id="wn"></h4>
            </div>
            <div class="modal-footer">
                <button type='button' class="btn btn-primary" onclick="myFunction()">Print</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection
