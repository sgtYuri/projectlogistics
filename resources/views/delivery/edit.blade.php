@php $active = 'delivery' @endphp
@extends('layout.main')
@section('title', 'Create Delivery')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-12">
                        <h4>Edit Assets</h4>
                    </div>
                    <div class="col-12">
                         {{-- Supplier Form--}}
                         <form class =" row g-3 " action="{{ URL::route('delivery.update', ['id' => $data->id ]) }}" method="post">
                            @csrf

                            {{-- Supplier Input Field --}}
                            <div class="col-md-12">
                                <label for="delivery" class="form-label">Distribution id</label>
                                <input type="number" id="delivery" class="form-control" name="distribution_id" required value="{{ $data->distribution_id }}">
                            </div> 
                            <div class="col-md-12">
                                <label for="delivery" class="form-label">Transportation id</label>
                                <input type="number" id="delivery" class="form-control" name="transportation_id" required value="{{ $data->transportation_id }}">
                            </div> 
                            <div class="col-md-12">
                                <label for="delivery" class="form-label">Date Distributed</label>                           
                                <input type="date" id="delivery" class="form-control" name="date_distributed" required value="{{ $data->date_distributed }}">
                            </div> 
                            <div class="col-md-12">
                            <label for="delivery" class="form-label">Status</label>
                                <select class="form-control" name="status" required value="{{ $data->status }}">
                                       <option selected>choose....</option>
                                       <option>Delivered</option>
                                       <option>Return</option>
                                    </select>
                            </div> 
                            </div> 
                            
                            
                            
                            
                            {{-- End Assets Input Field --}}
                        
                            {{-- Submit and Cancel Button --}}
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div> {{-- End Submit and Cancel Button --}}
                            
                        </form> {{-- End Supplier Form--}}
                    </div>
                </div>
            </div> 
        </div> 
    </div> 
@endsection