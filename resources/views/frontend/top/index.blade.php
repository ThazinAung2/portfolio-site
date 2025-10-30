@extends('frontend.layout.app')
@section('title', 'TOP')
@section('content')
@push('styles')
  {{-- <link rel="stylesheet" href="{{ asset('css/member/index.css') }}"> --}}
@endpush
<body>
    @include('frontend.top.hero_section')
    @include('frontend.top.about_section')
    @include('frontend.top.expertise_section')
    @include('frontend.top.project_section')
    @include('frontend.top.offer_section')
    @include('frontend.top.blog_section')
    @include('frontend.top.contact_section')
</body>
@endsection
@section('scripts')
  {{-- <script src="{{ asset('js/member/index.js')}}"></script> --}}
@endsection
