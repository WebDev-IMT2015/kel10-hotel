@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="row text-center">
        <div class="form-group">
            <div class='input-group date' id='datePicker'>
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
        <br>
        <br>
        <br>
        <table class="table table-bordered">
        <!-- bikin For -->
        <?php $i=0; ?>
        @foreach($mains as $main)
            @if($i==0)
                <tr>
            @endif
            @if($i<5)
                @if($main->type == 'reguler')
                <td class="id1">
                @elseif($main->type == 'delux')
                <td class="id2">
                @else
                <td class="id3">
                @endif
                    <div class="td">{{ $main->no_kamar }}</div>
                </td>
                <?php $i++; ?>
            @endif
            @if($i==5)
                </tr>
                <?php $i=0; ?>
            @endif
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
@endsection
