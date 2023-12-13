<div>
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
                <td><a class="link" href="{{ route('admin.realisations.edit', $realisation->id) }}">{{ $realisation->title }}</a></td>
                <td>{{ $realisation->subtitle }}</td>
                <td>{{ \Carbon\Carbon::parse($realisation->updated_at)->isoFormat('D MMM, G') }}</td>
                <td>{{ \Carbon\Carbon::parse($realisation->created_at)->isoFormat('D MMM, G') }}</td>
                <td><a class="action" href="{{ route('admin.realisations.edit', $realisation->id) }}">Edit</a></td>
            </tr>
            @empty
            <tr>
                <td colspan="6">No realisation found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    {{ $realisations->links('livewire.pagination') }}
</div>