@extends('layouts.app-admin')

@section('title', 'Edit realisation')

@section('body')
<x-admin.navbar />

<div class="page">
    <div class="page-content">
        <h2 class="page-title">Modifier une réalisation</h2>
        <div class="page-block">
            <form action="{{ route('admin.realisations.update', $realisation->id) }}" method="post" enctype="multipart/form-data">
                @method('PATCH')
                @csrf

                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" name="title" id="title" value="{{ $realisation->title }}" class="form-control @error('title') is-invalid @enderror" required>
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="subtitle">Sous-titre</label>
                    <input type="text" name="subtitle" id="subtitle" value="{{ $realisation->subtitle }}" class="form-control @error('subtitle') is-invalid @enderror" required>
                    @error('subtitle')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="imageInput">Image</label>
                    <div id="imageContainer" style="position: relative; display: inline-block;">
                        <input type="file" name="image" id="imageInput" accept="image/png, image/jpeg" class="form-control" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
                        <img id="imagePreview" src="{{ $realisation->image ? asset('storage/uploads/' . $realisation->image) : asset('images/admin_imagepreview.png') }}" alt="Image Preview" class="img-thumbnail form-control @error('image') is-invalid @enderror" style="max-width: 150px; max-height: 150px;">
                    </div>
                    @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="subskills">Compétences</label>
                    <select name="subskills[]" id="subskills" multiple>
                        @foreach($skills->load('subskills') as $skill)
                        <optgroup label="{{ $skill->name }}">
                            @foreach($skill->subskills as $subskill)
                            <option value="{{ $subskill->id }}" {{ in_array($subskill->id, $selectedSubskills) ? 'selected' : '' }}>{{ $subskill->name }}</option>
                            @endforeach
                        </optgroup>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="quill_html">Contenu</label>
                    <div id="quill"></div>
                    <input type="hidden" id="quill_html" name="content" value="{{ $realisation->content }}"></input>
                    @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn">Modifier</button>
            </form>
        </div>
    </div>
</div>

<link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>

<style>
    .ts-dropdown .active {
        color: inherit;
        background-color: #f1f1f1;
    }
</style>

<script>
new TomSelect('#subskills', {
    plugins: {
		'checkbox_options': {
			'checkedClassNames':   ['ts-checked'],
			'uncheckedClassNames': ['ts-unchecked'],
		}
	}
});
</script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.9.0/build/styles/default.min.css">
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<style>
#quill {
    height: 300px;
}
</style>

<script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.9.0/build/highlight.min.js"></script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<script>
    const quill = new Quill('#quill', {
    theme: 'snow',
    modules: {
        syntax: true,
        toolbar: [
            [{ 'font': [] }, { 'size': [] }],
            ['bold', 'italic', 'underline', 'strike'],
            [{ 'color': [] }, { 'background': [] }],
            ['blockquote', 'code-block'],
            [{ 'list': 'ordered' }, { 'list': 'bullet' }],
            ['direction', { 'align': [] }],
            ['link', 'image', 'video'],
            ['clean']
            ]
        }
    });
    const contenuTexte = @json($realisation->content);
    quill.clipboard.dangerouslyPasteHTML(contenuTexte);

    quill.on('text-change', function(delta, oldDelta, source) {
        document.getElementById("quill_html").value = quill.root.innerHTML;
    });

    document.getElementById('imagePreview').addEventListener('click', function() {
        document.getElementById('imageInput').click();
    });
    showImagePreview();

    document.getElementById('imageInput').addEventListener('change', function() {
        showImagePreview();
    });

    function showImagePreview() {
        var imageInput = document.getElementById('imageInput');
        var imagePreview = document.getElementById('imagePreview');

        if (imageInput.files && imageInput.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                imagePreview.src = e.target.result;
            }
            reader.readAsDataURL(imageInput.files[0]);
        }
    }
</script>
@endsection