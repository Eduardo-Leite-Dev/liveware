<div>

    <h1>Mostra postagens</h1>

    <p>{{ $message}}</p>

    <input type="text" name="message" id="message" wire:model="message">

    <hr>
    @foreach ($tweets as $tweet)
        {{ $tweet->user->name }} - {{ $tweet->content }} <br>
    @endforeach
</div>
