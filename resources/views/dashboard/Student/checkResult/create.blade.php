@extends('layouts.app')
@section('content')
    <div class="col-sm-6 p-0">
        <h1>Check Result</h1>
    </div>
    <div class="card col-6 mx-auto">
        <div class="card-body ">
            <h2> Select School </h2>
            {{-- validation errors --}}
            @if ($errors->any())
                {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
            @endif

            @if (session('msg'))
                <div class="alert alert-danger">{{ session('msg') }}</div>
            @endif
            <form action="{{ route('result.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <select class="form-control" name="term">
                        @foreach ($terms as $term)
                            <option value="{{ $term->id ?? '' }}">{{ $term->Term }}</option>
                        @endforeach
                    </select>
                </div>
                <h2> Enter Pin </h2>
                <div class="pb-3">
                    <input type="text" name="pin" class="form-control form-control-alternative p-4"
                        placeholder="e.g 123456789">
                    <button type="submit" class="btn btn-primary mt-3">Check</button>

                </div>
            </form>

            @if ($resultDisplay ?? '')
                {
                {{ Yesss }}
                }
            @endif
        </div>
    </div>
@endsection
