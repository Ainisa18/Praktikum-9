@php
    $username = 'Ainisa Dinda';
    $role = 'Admin';
@endphp

@if ($role == 'Admin')
    <h1>Selamat datang, {{$username}}! Anda adalah seorang {{$role}}</h1>
@else
    <h1>Selamat datang, {{$username}}! Anda adalah seorang user<h1>
@endif
