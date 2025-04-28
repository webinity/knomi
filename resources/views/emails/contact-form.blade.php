<x-mail::message>
# Nová zpráva z knomi formuláře

**Jméno:** {{ $name }}  
**Email:** {{ $email }}

@if ($phone)
**Telefon:** {{ $phone }}
@endif

---

**Zpráva:**

{{ $messageContent }}


</x-mail::message>
