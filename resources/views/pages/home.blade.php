@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="min-h-screen bg-litus-bg">
        <x-home.hero />
        <x-home.about-intro />
        <x-home.why-choose />
        <x-home.partners />
        <x-home.testimonial />
        <x-home.operations />
        <x-home.articles />
        <x-home.contact-section />
    </div>
@endsection
