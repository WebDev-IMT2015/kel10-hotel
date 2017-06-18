@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Booking Room</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('main') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('namaDepan') ? ' has-error' : '' }}">
                            <label for="namaDepan" class="col-md-4 control-label">Nama Depan</label>

                            <div class="col-md-6">
                                <input id="namaDepan" type="text" class="form-control" name="namaDepan" required autofocus>

                                @if ($errors->has('namaDepan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namaDepan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('namaBelakang') ? ' has-error' : '' }}">
                            <label for="namaBelakang" class="col-md-4 control-label">Nama Belakang</label>

                            <div class="col-md-6">
                                <input id="namaBelakang" type="text" class="form-control" name="namaBelakang" required>

                                @if ($errors->has('namaBelakang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namaBelakang') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('noTelp') ? ' has-error' : '' }}">
                            <label for="noTelp" class="col-md-4 control-label">No. Telephone</label>

                            <div class="col-md-6">
                                <input id="noTelp" type="text" class="form-control" name="noTelp" required>

                                @if ($errors->has('noTelp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('noTelp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('negaraAsal') ? ' has-error' : '' }}">
                            <label for="negaraAsal" class="col-md-4 control-label">Negara Asal</label>

                            <div class="col-md-6">
                                <input id="negaraAsal" type="type" class="form-control" name="negaraAsal" required>

                                @if ($errors->has('negaraAsal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('negaraAsal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jenisKamar') ? ' has-error' : '' }}">
                            <label for="jenisKamar" class="col-md-4 control-label">Jenis Kamar</label>
                              
                            <div class="col-md-6">
                               <select id="jenisKamar" class="form-control" name="jenisKamar" required>
                                <option>Reguler</option>
                                <option>Delux</option>
                                <option>Superior</option>
                              </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('chekIn') ? ' has-error' : '' }}">
                            <label for="checkIn" class="col-md-4 control-label">Check in</label>

                            <div class="col-md-6 input-group date" id="datePicker">
                           
                                <input name='checkIn' type='text' class="form-control" id="datepicker" value="<?php if(!isset($_GET['date']))echo date('Y-m-d'); else echo $_GET['date']; ?>" required />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('chekOut') ? ' has-error' : '' }}">
                            <label for="checkOUt" class="col-md-4 control-label">Check Out</label>

                            <div class="col-md-6 input-group date" id="datePicker">
                                <input name='checkOUt' type='text' class="form-control" id="datepickerOut" value="<?php if(!isset($_GET['date']))echo date('Y-m-d'); else echo $_GET['date']; ?>" required />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-5">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                                  <a href="{{url('main')}}" class="btn btn-warning">
                                    Cancel
                                </a>
                            </div>
                              
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
