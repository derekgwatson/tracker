@extends('layouts.app')

@section('content')
<form action="status" method="post">
    @csrf
    <div class="form-group">
    <label for="orderNo">Quote/Order Number</label>
    <input type="text" class="form-control" name="orderno" id="orderNo" aria-describedby="orderNoHelp" placeholder="Enter quote/order number" value="{{ old('orderno') }}">
    <small id="orderNoHelp" class="form-text text-muted">You'll find this on your quote or receipt.</small>
    </div>
    <div class="form-group">
    <label for="contactinfo">Email / Phone / Mobile</label>
    <input type="text" class="form-control" name="contactinfo" id="contactInfo" placeholder="Enter Email / Phone / Mobile" value="{{ old('contactinfo') }}">
    <small id=contactinfoHelp" class="form-text text-muted">Enter either the email, phone, or mobile number associated with this order.</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
