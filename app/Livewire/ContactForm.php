<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $object;
    public $message;
    public $successMessage;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'object' => 'required',
        'message' => 'required'
    ];

    public function submitForm()
    {
        $this->validate();

        Mail::to('contact@jancieux.fr')->send(new ContactMail([
            'name' => $this->name,
            'email' => $this->email,
            'object' => $this->object,
            'message' => $this->message
        ]));

        $this->reset(['name', 'email', 'object', 'message']);
        $this->successMessage = 'Votre message a bien été envoyé. Merci pour votre intérêt ! Je vous répondrai dès que possible.';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
