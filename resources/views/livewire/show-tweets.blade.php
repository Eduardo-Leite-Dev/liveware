<div>

    <h1>Mostra postagens</h1>

    <p>{{ $content}}</p>

    <form method="post" wire:submit.prevent="create">
        @csrf
        <input type="text" name="content" id="content" wire:model="content">
        @error('content') {{ $message }} @enderror
        <button type="submit">Criar tweet</button>
    </form>

    <hr>
    @foreach ($tweets as $tweet)
        {{ $tweet->user->name }} - {{ $tweet->content }} <br>
    @endforeach

    <hr>

    <div>
        {{ $tweets->links() }}
    </div>
</div>
