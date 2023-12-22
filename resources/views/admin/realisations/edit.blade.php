@extends('layouts.app-admin')

@section('body')
<x-admin.navbar />

<div class="page">
    <div class="page-content">
        <h2 class="page-title">Réalisations</h2>
        <div class="page-block">
            <form action="{{ route('admin.realisations.update', $realisation->id) }}" method="post" enctype="multipart/form-data">
                @method('PATCH')
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" value="{{ $realisation->title }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="subtitle">Sous-titre</label>
                    <input type="text" name="subtitle" id="subtitle" value="{{ $realisation->subtitle }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" accept="image/png, image/gif, image/jpeg" class="form-control">
                </div>

                <div class="form-group">
                    <label for="skills">Compétences</label>
                    <select name="skills[]" id="skills" multiple>
                        @foreach ($skills as $skill)
                        <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="content">Contenu</label>
                    <textarea class="form-control" name="content" id="content">{{ $realisation->content }}</textarea>
                </div>
                <button class="btn">Modifier</button>
            </form>
        </div>
    </div>
</div>

<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    function MinHeightPlugin(editor) {
        this.editor = editor;
    }

    MinHeightPlugin.prototype.init = function() {
        this.editor.ui.view.editable.extendTemplate({
            attributes: {
                style: {
                    minHeight: '300px'
                }
            }
        });
    };

    ClassicEditor.builtinPlugins.push(MinHeightPlugin);
    ClassicEditor
        .create(document.querySelector('#content'), {
            fontFamily: {
                options: [
                    'default',
                    'Ubuntu, Arial, sans-serif',
                    'Ubuntu Mono, Courier New, Courier, monospace'
                ]
            },
            toolbar: {
                items: [
                    'undo', 'redo',
                    '|', 'heading',
                    '|', 'fontfamily', 'fontColor',
                    '|', 'bold', 'italic',
                    '|', 'link', 'uploadImage', 'blockQuote', 'code',
                    '|', 'bulletedList', 'numberedList', 'outdent', 'indent', 'fulLScreen'
                ]
            }
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endsection