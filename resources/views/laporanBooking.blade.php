@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="row text-center">

<button onclick="myFunction()">Print this page</button>
        <table class="table table-bordered table-hover">
            <tr>
                <th class="text-center">No Kamar</th>
                <th class="text-center">Tipe</th>
                <th class="text-center">Check In</th>
                <th class="text-center">Check Out</th>
                <th class="text-center">Nama Pemesan</th>
                <th class="text-center">Email Pemesan</th>
                <th class="text-center">No Telp Pemesan</th>
                <th class="text-center">Warga Negara</th>
            </tr>
            @foreach($bookings as $booking)
            <tr>
                @foreach($mains as $main)
                    @if($main->id==$booking->id)
                        <td>{{ $main->no_kamar }}</td>
                        <td>{{ $main->type }}</td>
                    @endif
                @endforeach
                <td>{{ $booking->checkIn }}</td>
                <td>{{ $booking->checkOut }}</td>
                <td>{{ $booking->namaDepan }} {{ $booking->namaBelakang }}</td>
                <td>{{ $booking->email }}</td>
                <td>{{ $booking->no_telp }}</td>
                <td>{{ $booking->ntt }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
