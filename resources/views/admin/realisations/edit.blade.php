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
                        <img id="imagePreview" src="{{ $realisation->image ? asset('storage/uploads/' . $realisation->image . '.webp') : asset('images/admin_imagepreview.png') }}" alt="Image Preview" class="img-thumbnail form-control @error('image') is-invalid @enderror" style="max-width: 150px; max-height: 150px;">
                    </div>
                    @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="quill_html">Contenu</label>
                    <div id="quill" style="height: 300px;">{!! $realisation->content !!}</div>
                    <input type="hidden" id="quill_html" name="content">
                    @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn">Modifier</button>
            </form>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.9.0/build/styles/default.min.css">
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<style>
.ql-container.ql-snow, .ql-toolbar.ql-snow { border-color: #dadfe5; }
.ql-container.ql-snow {
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
}
.ql-toolbar.ql-snow {
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
}
</style>

<script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.9.0/build/highlight.min.js"></script>
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

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

    quill.getModule('toolbar').addHandler('image', () => {
        const url = prompt('Insérez l\'URL de l\'image:');
        if (url) {
            if (isValidImageUrl(url)) {
                const range = quill.getSelection();
                quill.insertEmbed(range.index, 'image', url);
            } else {
                alert('L\'URL spécifiée n\'est pas une image valide.');
            }
        }
    });

    function isValidImageUrl(url) {   
        const imageExtensions = ['.jpg', '.jpeg', '.png', '.gif', '.webp'];     
        const cleanUrl = url.split('?')[0];

        return imageExtensions.some(ext => cleanUrl.toLowerCase().endsWith(ext));
    }

    document.querySelector('form').onsubmit = function () {
        document.getElementById("quill_html").value = quill.root.innerHTML;
    };

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