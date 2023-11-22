<div>

    <input type="text" class="form-control" wire:model='jawab' placeholder="Isi Jawaban" style="margin-bottom: 10px;" />
    <button class="btn btn-primary form-control" wire:click='simpan'>Kirim</button>
    <br>

    @error('jawab')
                <span style="color: red;">Harap diisi jawabanya!!!</span>
            @enderror


    @foreach ($answer as $data)
        @if (auth()->user()->id == $data->user_id)
            <p><b>User :</b> {{ App\Models\User::find($data->user_id)->name }}</p>

            <h3>{{ App\Models\pertanyaan::find($data->pertanyaan_id)->isisoal }}</h3>
            <h4>Jawaban :</h4>
            <p>{{ $data->jawaban }}</p>
            @if (Auth::user()->peran == 'Moderator')
                <textarea type="text" wire:model='nilainya' cols="5" rows="1" style="margin-bottom: -10px;"></textarea>
                        <button class="btn btn-success btn-sm" wire:click='edit({{ $data->id }})'
                            style="">Nilai</button>
            @endif
            <b>Nilai :</b> {{ $data->nilai }} <br>
            @if (auth()->user()->id == $data->user_id)
                <button class="btn btn-danger" wire:click='hapus({{ $data->id }})' style="margin-top: 20px;">Hapus</button>
            @endif

            <hr>
        @elseif (Auth::user()->peran == 'Moderator')
            <p><b>User :</b> {{ App\Models\User::find($data->user_id)->name }}</p>

            <h3>{{ App\Models\pertanyaan::find($data->pertanyaan_id)->isisoal }}</h3>
            <h4>Jawaban :</h4>
            <p>{{ $data->jawaban }}</p>
            @if (Auth::user()->peran == 'Moderator')
                <textarea type="text" wire:model='nilainya' cols="5" rows="1" style="margin-bottom: -10px;"></textarea>
                        <button class="btn btn-success btn-sm" wire:click='edit({{ $data->id }})'
                            style="">Nilai</button>
            @endif
            <b>Nilai :</b> {{ $data->nilai }} <br>
            @if (Auth::user()->peran == 'Moderator')
                <button class="btn btn-danger" wire:click='hapus({{ $data->id }})' style="margin-top: 20px;">Hapus</button>
            @endif
            <hr>
        @endif
    @endforeach


</div>
