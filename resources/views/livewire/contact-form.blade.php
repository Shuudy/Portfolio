<div>
    <form wire:submit.prevent="submitForm">
        @csrf

        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name" id="name" autocomplete="name" required>
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model="email" id="email" autocomplete="email" required>
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="object">Objet</label>
            <input type="text" class="form-control @error('object') is-invalid @enderror" wire:model="object" id="object" required>
            @error('object')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea wire:model="message" class="form-control @error('message') is-invalid @enderror" id="message" required></textarea>
            @error('message')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button class="section-contact-button">Envoyer</button>
    </form>
    @if($successMessage)
        <div class="contact-success">{{ $successMessage }}</div>
    @endif
</div>