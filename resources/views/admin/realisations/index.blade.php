@extends('layouts.app-admin')

@php
    $useButterUp = true;
@endphp

@section('body')
<x-admin.navbar />

<div class="page">
    <div class="page-content">
        <div class="page-header">
            <h2 class="page-title">Réalisations</h2>
            <a href="{{ route('admin.realisations.create') }}" class="btn"><i class="ti ti-plus"></i>Créer une réalisation</a>
        </div>
        <div class="page-block">
            @livewire('pagination-realisations-table')
        </div>
    </div>
</div>

@if(session('success'))
    @section('js')
    <script>
        butterup.toast({
            title: 'Succès',
            message: '{{ session('success') }}',
            type: 'success',
            dismissable: true,
            icon: true,
        });
    </script>
    @endsection
@endif
@endsection