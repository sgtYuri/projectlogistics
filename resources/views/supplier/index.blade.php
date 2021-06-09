@php $active = 'supplier' @endphp
@extends('layout.main')
@section('title', 'supplier')
@section('content')
<div class="container">
    <div class="row p-5">
        <div class="col-10">
            <h1>Supplier</h1>
        </div>
        <div class="col-2">
            <a href="/supplier/create" class="btn btn-success">Add New</a>
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
                                    <th>Name</th>
                                    <th>Contact</th> 
                                    <th>Address</th>
                                    <th>Contact Person</th> 
                                    <th>Category</th>
                                    <th>Action</th> 
                                </tr>
                           
                            </thead>
                            <tbody>
                                <!--$x is the -->
                                @foreach($data as $x)
                                    <tr> 
                                        <td>{{$x->name}}</td> 
                                        <td>{{$x->contact}}</td>
                                        <td>{{$x->address}}</td> 
                                        <td>{{$x->contact_person}}</td>
                                        <td>{{$x->category}}</td> 
                                      
                                        <td style="width: 200px;">
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                  Action
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                  <li><a class="dropdown-item" href="{{ URL::route('supplier.edit', $x->id) }}">Update</a></li>
                                                  <li><a class="dropdown-item" href="{{ URL::route('supplier.delete', $x->id) }}">Delete</a></li>
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