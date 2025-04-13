<?php

namespace App\Livewire;

use Livewire\Component;
use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Mail;

class Form extends Component
{
    public string $name = '';
    public string $email = '';
    public ?string $phone = null;
    public string $message = '';
    public bool $terms = false;

    public function submit()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
            'terms' => 'accepted',
        ]);

        Mail::to(config('mail.from.address'))->send(new ContactFormSubmitted(
            $this->name,
            $this->email,
            $this->phone,
            $this->message
        ));

        session()->flash('success', __('form.success_message'));
        
        $this->reset(['name', 'email', 'phone', 'message', 'terms']);
    }

    public function render()
    {
        return view('livewire.form');
    }
}
