<div>

    @auth
    <div wire:model='mode'>
    <select class="form-control">
        <option @if (Auth::user()->mode == 'original') selected @endif name="mode" value="original">Default</option>
        <option @if (Auth::user()->mode == 'dark') selected @endif name="mode" value="dark">Dark</option>
      </select> <br>
      <button class="btn btn-primary" wire:click='change'>Terapkan</button>
</div>
@endauth

</div>
