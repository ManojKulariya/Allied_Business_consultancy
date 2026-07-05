@extends('errors.layout')

@section('code', '419')
@section('message', 'Session Expired')
@section('description', 'Your session has expired. Please refresh the page and try again.')

@section('actions')
    <button class="btn btn-primary" onclick="window.history.back()">
        <i class="bi bi-arrow-left me-1"></i> Go Back
    </button>
@endsection
