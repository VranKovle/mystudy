<div>

    <input type="text" class="form-control" wire:model='jawab' placeholder="Isi Jawaban" style="margin-bottom: 10px;" />
    <a href="" class="btn btn-primary form-control" wire:click='simpan'>Kirim</a>
    <br>

    <div wire:poll.1ms>
    @foreach ($answer as $data)
@if (auth()->user()->id === $data->user_id)
<p><b>User :</b> {{ App\Models\User::find($data->user_id)->name }}</p>@if (Auth::user()->peran=='Moderator')
        <textarea type="text" wire:model='nilainya' cols="5" rows="1" style="margin-bottom: -10px;"></textarea>@if (Auth::user()->peran=='Moderator')
        <td>
            <button class="btn btn-success btn-sm" wire:click='edit({{ $data->id }})' style="">Nilai</button>
        </td>
        @endif
            @endif
           <b>Nilai :</b> {{ $data->nilai }}
    <p><h4>Jawaban :</h4>   <p>{{ $data->jawaban }}</p>
    @if(auth()->user()->id === $data->user_id)
        <button class="btn btn-danger" wire:click='hapus({{ $data->id }})'>Hapus</button>
    @endif
    {{-- @if(Auth::user()->peran=='Moderator')
                <button class="btn btn-danger" wire:click='hapus({{ $data->id }})'>Hapus</button>
            @endif --}}
<hr>
@elseif (Auth::user()->peran=='Moderator')
    <p><b>User :</b> {{ App\Models\User::find($data->user_id)->name }}</p>@if (Auth::user()->peran=='Moderator')
        <textarea type="text" wire:model='nilainya' cols="5" rows="1" style="margin-bottom: -10px;"></textarea>@if (Auth::user()->peran=='Moderator')
        <td>
            <button class="btn btn-success btn-sm" wire:click='edit({{ $data->id }})' style="">Nilai</button>
        </td>
        @endif
            @endif
           <b>Nilai :</b> {{ $data->nilai }}
    <p><h4>Jawaban :</h4>   <p>{{ $data->jawaban }}</p>
    @if(Auth::user()->peran=='Moderator')
                <button class="btn btn-danger" wire:click='hapus({{ $data->id }})'>Hapus</button>
            @endif
<hr>
@endif
    @endforeach
    </div>

</div>
