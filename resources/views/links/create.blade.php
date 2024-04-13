@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Enter Link</div>

    <div class="card-body">
        <form method="POST" action="{{ route('links.store') }}">
            @csrf

            <div class="form-group">
                <label for="link">Link</label>
                <input type="text" name="link" id="link" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
