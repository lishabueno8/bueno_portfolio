@extends('layouts.app')

@section('content')
    @include('partials.hero', ['profile' => $profile, 'stats' => $stats])
    @include('partials.about', ['profile' => $profile, 'stats' => $stats])
    @include('partials.education', ['education' => $education])
    @include('partials.certificates', ['certificates' => $certificates])
    @include('partials.contact', ['profile' => $profile])
@endsection