@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="row text-center">
    <p>Date: <input type="text" id="datepicker"></p>
        <table class="table table-bordered">
            <tr>
                <td class="id1">
                    <div class="td" id="1">101</div>
                </td>
                <td class="id1">
                    <div class="td" id="2">102</div>
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
