@extends('layouts.app')
@section('content')

    <div class="col-xl-10 order-xl-1 mx-auto">
        <div class="card">

            <div class="card-body">
                <div class="col-sm-6 mb-5 p-0">
                    <h1>Register a School</h1>
                </div>

                @if ($errors->any())
                    {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
                @endif
                <form method="POST" action="{{ route('school.update',  $school->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">School Name</label>
                                <input type="text" value="{{ $school->school}}" name="school" class="form-control"
                                    placeholder="e.g example Academy ..." > 
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">Manager's Name</label>
                                <input type="owner" id="input-email" value="{{ $school->owner }}" name="owner"
                                    class="form-control" placeholder="Input owners's name.">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">Email</label>
                                <input type="email" id="input-email" value="{{ $school->email }}" name="email"
                                    class="form-control" placeholder="Email...">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">Contact Address</label>
                                <input type="text" id="input-email" value="{{ $school->contact_addr }}" name="contact_addr"
                                    class="form-control" placeholder="e.g so so so street ...">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">Phone Number</label>
                                <input type="text" name="phone" class="form-control" value="{{$school->phone}}"
                                    onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"
                                    placeholder="Enter phone number ..." />
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <button class="btn btn-primary" type="submit">Submit </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
