@extends('layouts.app-admin')

@section('body')
<x-admin.navbar />

<div class="page">
    <div class="page-content">
        <h2 class="page-title">Créer une réalisation</h2>
        <div class="page-block">
            <form action="{{ route('admin.realisations.create') }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" placeholder="Titre de la réalisation" class="form-control">
                </div>
                <div class="form-group">
                    <label for="subtitle">Sous-titre</label>
                    <input type="text" name="subtitle" id="subtitle" placeholder="Sous-titre de la réalisation" class="form-control">
                </div>

                <div class="form-group">
                    <label for="imageInput">Image</label>
                    <div id="imageContainer" style="position: relative; display: inline-block;">
                        <input type="file" name="image" id="imageInput" accept="image/png, image/jpeg" class="form-control" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
                        <img id="imagePreview" src="{{ asset('images/admin_imagepreview.png') }}" alt="Image Preview" class="img-thumbnail form-control" style="max-width: 150px; max-height: 150px;">
                    </div>
                </div>

                <div class="form-group">
                    <label for="subskills">Compétences</label>
                    <select name="subskills[]" id="subskills" multiple>
                        @foreach ($subskills as $subskill)
                        <option value="{{ $subskill->id }}">{{ $subskill->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="content">Contenu</label>
                    <textarea class="form-control" name="content" id="content"></textarea>
                </div>
                <button class="btn">Créer la réalisation</button>
            </form>
        </div>
    </div>
</div>

<script src="//cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content', {
        height: '300px'
    });
</script>
<script>
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