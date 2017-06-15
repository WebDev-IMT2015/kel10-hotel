@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="row text-center">
        <div class="form-group">
            <div class='input-group date' id='datePicker'>
                <input type='text' class="form-control" value="<?php echo date('Y-m-d'); ?>" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
        <br>
        <br>
        <br>
        <table class="table table-bordered table-hover">
            <tr>
                <th class="text-center">No Kamar</th>
                <th class="text-center">Tipe</th>
                <th class="text-center">Harga</th>
                <th class="text-center">Status</th>
            </tr>
            @foreach($mains as $main)
            <tr>
                <td>{{ $main->no_kamar }}</td>
                <td>{{ $main->type }}</td>
                <td>{{ $main->harga }}</td>
                <td>{{ $main->status }}</td>
            </tr>
            @endforeach
        </table>

        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <p id="nomor"></p>
            </div>
        </div>

        <!-- <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div> -->
    </div>
</div>

{{-- <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

<script>
$(document).ready(function() 
{
    $(".td").click(function(){
        $("#myModal").show();
        var txt="";
        $(this).toggleClass('selected');
        $(".selected").each(function(){
            txt = $(".selected").text();
            @foreach($mains as $main)
                if({{ $main->no_kamar }} == txt)
                    txt="<p>No Kamar : {{ $main->no_kamar }}<br>Tipe : {{ $main->type }}<br>Harga: {{ $main->harga }}</p>";
            @endforeach
        });
        $("#nomor").html(txt);
    });

    $(".close").click(function(){
        $("#myModal").hide();
        $(".td").removeClass("selected");
    });
});
</script> --}}
@endsection
