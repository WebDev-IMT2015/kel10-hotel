@extends('layouts.app')

@section('content')
  	<div class="container">
    	<div class="row">
            @foreach($bookings as $booking)
				@if($booking->id==$_GET['id'])
				@foreach($mains as $main)
					@if($main->id==$booking->id_kamar)
						<h2 class="modal-title" id="exampleModalLabel">Info Pemesan Kamar {{ $main->no_kamar }}</h2>
						@if($main->id==$booking->id_kamar)
							<?php
								$datetime1 = strtotime($booking->checkIn);
								$datetime2 = strtotime($booking->checkOut);

								$secs = $datetime2 - $datetime1;
								$days = $secs / 86400;
							?>
							<h4 id="nama">Nama Pemesan : {{ $booking->namaDepan }} {{ $booking->namaBelakang }}</h4>
			                <h4 id="email">Email : {{ $booking->email }}</h4>
			                <h4 id="noTelp">No Telp : {{ $booking->no_telp }}</h4>
			                <h4 id="wn">Warga Negara : {{ $booking->ntt }}</h4>
			                <h4 id="type">Tipe : {{ $main->type }} / Rp. {{ $main->harga }}</h4>
			                <h4 id="checkIn">Check In : {{ $booking->checkIn }}</h4>
			                <h4 id="checkOut">Check Out : {{ $booking->checkOut }}</h4>
			                <h4 id="lamaMenginap">Lama Menginap : <?php echo $days; ?> hari</h4>
	    					<h4 id="harga">Total harga : Rp. <?php echo $days*$main->harga; ?></h4>
						@endif
					@endif
				@endforeach
				@endif
			@endforeach
			<a id="print" class="btn btn-primary">Print</a>
			<a href="{{ url('main') }}" id="cancel" class="btn btn-primary">Back</a>
    	</div>
  	</div>
@endsection