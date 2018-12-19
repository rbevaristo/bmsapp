@extends('layouts.app')

@section('content')
<div class="row">
    <div class='col-md-12'>
        <div class="panel panel-primary">
            <div class="panel-heading">
                Add Client
            </div>
            <div class="panel-body">
                <form method="POST" action="{{ route('clients.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Client Name..." required value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact Number</label>
                        <input type="text" class="form-control" name="contact" id="contact" placeholder="Contact Number" required value="{{ old('contact') }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email Address..." required value="{{ old('email') }}">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="houseNumber">House / Apartment / Building Number</label>
                                <input type="text" name="houseNumber" id="houseNumber" class="form-control" value="{{ old('houseNumber') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="street">Street</label>
                                <input type="text" name="street" id="street" class="form-control" value="{{ old('street') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="barangay">Barangay / Subdivision</label>
                                <input type="text" name="barangay" id="barangay" class="form-control" value="{{ old('barangay') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" name="city" id="city" class="form-control" value="{{ old('city') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="state">Province / State</label>
                                <input type="text" name="state" id="state" class="form-control" value="{{ old('state') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="postalCode">Postal Code</label>
                                <input type="number" name="postalCode" id="postalCode" class="form-control" value="{{ old('postalCode') }}">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Save</button>
                </form>
            </div>
        </div>
    </div>  
</div>
@endsection