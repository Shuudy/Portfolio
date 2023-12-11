@extends('layouts.app-admin')

@section('body')
<x-admin.navbar />

<div class="page">
    <div class="page-content">
        <h2 class="page-title">Réalisations</h2>
        <div class="page-block">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th>Last modified</th>
                        <th>Creation date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($realisations as $realisation)
                        <tr>
                            <td>{{ $realisation->id }}</td>
                            <td><a class="link" href="">Sacem, parrem, easter_days</a></td>
                            <td>Weakest, link, selection</td>
                            <td>30 May, 2023</td>
                            <td>30 May, 2023</td>
                            <td><a class="action" href="">Edit</a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">No realisation found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $realisations->links() }}
        </div>
    </div>
</div>
@endsection