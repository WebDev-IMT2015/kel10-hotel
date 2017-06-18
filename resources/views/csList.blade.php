@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Customer Service List</div>
                <div class="panel-body">
                        {{ csrf_field() }}

                               
                        <div class="form-group">
                          <div class="col-md-6 col-md-offset-10">
                                <a href="{{url('registerUser')}}" type="submit" class="btn btn-primary">
                                    Register CS
                                </a>
                            </div>
                        </div>

                          <table class="table">
                            <thead>
                              <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Username</th>
                              </tr>

                            </thead>
                            <tbody>
                             @foreach($csList as $list)
                             {{ csrf_field() }}
                              <tr>
                                <th>{{$list->id}}</th>
                                <th>{{$list->name}}</th>
                                <th>{{$list->username}}</th>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                       
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection