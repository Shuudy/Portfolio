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
                <td><a class="link" href="">{{ $realisation->title }}</a></td>
                <td>{{ $realisation->subtitle }}</td>
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
    {{ $realisations->links('livewire.pagination') }}
</div>