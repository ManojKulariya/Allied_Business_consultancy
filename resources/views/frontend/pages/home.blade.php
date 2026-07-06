@extends('frontend.layouts.app')

@section('content')
    {{-- Every section is database-driven: ordered, toggleable and editable
         in Admin → Homepage Builder. Nothing here is hardcoded. --}}
    @foreach($sections as $section)
        @include("frontend.sections.{$section->section_key}", ['section' => $section])
    @endforeach
@endsection
