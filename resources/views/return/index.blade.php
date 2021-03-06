@php $active = 'return' @endphp
@extends('layout.main')
@section('title', 'return')
@section('content')
<div class="container">
    <div class="row p-5">
        <div class="col-10">
            <h1>Return</h1>
        </div>
        <div class="col-2">
            <a href="/return/create" class="btn btn-success">Add New</a>
        </div>
                    <div class="col-12">
                        <hr>    
                    </div>

                    <div class="col-8"></div>
                    <div class="col-4 text-end"> 
                        <input type="text" class="form-control" placeholder="Search">
                    </div> 

                    <div class="col-12 mt-5">
                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success')}}
                            </div>
                        @endif
                        <div class="col-12 mt-5">
                            <table class="table">
                                <thead>
                                <tr>                                    
                                    <th>Asset id</th> 
                                    <th>Returned By</th>
                                    <th>Returned by Contact</th> 
                                    <th>Quantity</th>
                                    <th>Reason</th>
                                    
                                </tr>
                           
                            </thead>
                            <tbody>
                                <!--$x is the -->
                                @foreach($data as $x)
                                    <tr> 
                                        <td>{{$x->asset_id}}</td> 
                                        <td>{{$x->returned_by}}</td>
                                        <td>{{$x->returned_by_contact}}</td> 
                                        <td>{{$x->quantity}}</td>
                                        <td>{{$x->reason}}</td>                                      
                                      
                                      
                                        <td style="width: 200px;">
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                  Action
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                  <li><a class="dropdown-item" href="{{ URL::route('return.edit', $x->id) }}">Update</a></li>
                                                  <li><a class="dropdown-item" href="{{ URL::route('return.delete', $x->id) }}">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td> 
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