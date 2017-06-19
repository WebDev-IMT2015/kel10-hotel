@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Booking Room</div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('main/edit') }}">
                    {{ csrf_field() }}
                    
                    <input type="hidden" name="id_kamar" value="<?php echo $_GET['id']; ?>">

                    <div class="form-group{{ $errors->has('chekOut') ? ' has-error' : '' }}">
                        <label for="datepickerOut" class="col-md-4 control-label">Check Out</label>

                        <div class="col-md-6">
                            <div class=input-group>
                                <input name='checkOut' type='text' class="form-control" id="datepickerOut" value="<?php $_GET['date']; ?>" required />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
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
@endsection
