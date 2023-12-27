@extends('layouts.app-admin')

@php
    $includeNotify = true;
    $includeLivewire = true;
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
@endsection