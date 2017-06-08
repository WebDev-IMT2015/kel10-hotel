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
            <tr>
                <td class="id1">
                    <div class="td">101</div>
                </td>
                <td class="id1">
                    <div class="td">102</div>
                </td>
                <td class="id1">
                    <div class="td">103</div>
                </td>
                <td class="id1">
                    <div class="td">104</div>
                </td>
                <td class="id1">
                    <div class="td">105</div>
                </td>
            </tr>
            <tr>
                <td class="id2">
                    <div class="td">test</div>
                </td>
                <td class="id2">
                    <div class="td">test</div>
                </td>
                <td class="id2">
                    <div class="td">test</div>
                </td>
                <td class="id2">
                    <div class="td">test</div>
                </td>
                <td class="id2">
                    <div class="td">test</div>
                </td>
            </tr>
            <tr>
                <td class="id3">
                    <div class="td" value="1">test</div>
                </td>
                <td class="id3">
                    <div class="td">test</div>
                </td>
                <td class="id3">
                    <div class="td">test</div>
                </td>
                <td class="id3">
                    <div class="td">test</div>
                </td>
                <td class="id3">
                    <div class="td">test</div>
                </td>
            </tr>
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
