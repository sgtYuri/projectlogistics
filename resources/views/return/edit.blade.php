@php $active = 'return' @endphp
@extends('layout.main')
@section('title', 'Create return')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-12">
                        <h4>Edit Storage</h4>
                    </div>
                    <div class="col-12">
                         {{-- Supplier Form--}}
                         <form class =" row g-3 " action="{{ URL::route('return.update', ['id' => $data->id ]) }}" method="post">
                            @csrf

                            {{-- Supplier Input Field --}}
                            <div class="col-md-12">
                                <label for="return" class="form-label">Asset id</label>
                                <input type="text" id="return" class="form-control" name="asset_id" required value="{{ $data->asset_id }}">
                            </div> 
                            <div class="col-md-12">
                                <label for="return" class="form-label">Returned By</label>
                                <input type="text" id="return" class="form-control" name="returned_by" required value="{{ $data->returned_by }}">
                            </div> 
                            <div class="col-md-12">
                                <label for="return" class="form-label">Returned by Contact</label>
                                <input type="text" id="return" class="form-control" name="returned_by_contact" required value="{{ $data->returned_by_contact }}">
                            </div> 
                            <div class="col-md-12">
                                <label for="return" class="form-label">Quantity</label>
                                <input type="number" id="return" class="form-control" name="quantity" required value="{{ $data->quantity }}">
                            </div> 
                            <div class="col-md-12">
                                <label for="return" class="form-label">Reason</label>
                                <input type="text" id="return" class="form-control" name="reason" required value="{{ $data->reason }}">
                            </div> 
                            
                            
                            
                            {{-- End Storage Input Field --}}
                        
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