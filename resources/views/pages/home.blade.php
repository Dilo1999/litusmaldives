@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <x-home.hero />
    <x-home.about-intro />
    <x-home.why-choose />
    <x-home.partners />
    <x-home.operations />
    <x-home.articles />
    <x-home.contact-section />
@endsection
