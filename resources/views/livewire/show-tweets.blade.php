<div>

    <h1>Mostra postagens</h1>

    <p>{{ $message}}</p>

    <form method="post" wire:submit.prevent="create">
        @csrf
        <input type="text" name="message" id="message" wire:model="message">
        <button type="submit">Criar tweet</button>
    </form>

    <hr>
    @foreach ($tweets as $tweet)
        {{ $tweet->user->name }} - {{ $tweet->content }} <br>
    @endforeach
</div>
