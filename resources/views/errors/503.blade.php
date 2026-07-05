@extends('errors.layout')

@section('code', '503')
@section('message', 'Under Maintenance')
@section('description')
    {{ setting('maintenance_message', 'We are performing scheduled maintenance. We will be back online shortly!') }}
@endsection

@section('actions')
    <button class="btn btn-primary" onclick="window.location.reload()">
        <i class="bi bi-arrow-clockwise me-1"></i> Try Again
    </button>
@endsection
