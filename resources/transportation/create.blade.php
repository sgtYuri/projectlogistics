@php $active = 'assets' @endphp
@extends('layout.main')
@section('title', 'Create Assets')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-12">
                        <h4>Create Assets</h4>
                    </div>
                    <div class="col-12">
                         {{-- Supplier Form--}}
                         <form class =" row g-3 " action="{{ URL::route('assets.create.save') }}" method="post">
                            @csrf

                            {{-- assets Input Field --}}
                            <div class="col-md-12">
                                <label for="assets" class="form-label">Plate Number</label>
                                <input type="text" id="assets" class="form-control" name="plate_number" value="{{ old('plate_number') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="assets" class="form-label">Driver_name</label>
                                <input type="text" id="assets" class="form-control" name="driver_name" value="{{ old('driver_name') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="assets" class="form-label">Driver Contact</label>
                                <input type="text" id="assets" class="form-control" name="driver_contact" value="{{ old('driver_contact') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="assets" class="form-label">Notes</label>
                                <input type="number" id="assets" class="form-control" name="notes" value="{{ old('notes') }}" required>
                            </div> 
                           
                            
                            
                            {{-- End assets Input Field --}}
                        
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