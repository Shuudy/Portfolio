@extends('layouts.app-admin')

@section('body')
<x-admin.navbar />

<div class="page">
    <div class="page-content">
        <h2 class="page-title">Réalisations</h2>
        <div class="page-block">
            <form action="" method="post">
                @method('PATCH')
                @csrf                
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="subtitle">Sous-titre</label>
                    <input type="text" name="subtitle" id="subtitle"" class="form-control">
                </div>
                <a href="" class="btn">Quoicoubebou</a>
            </form>
        </div>
    </div>
</div>
@endsection