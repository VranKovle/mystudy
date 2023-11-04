<div>
    data = {{ $data }}
    <div class="card">
        <div class="card-body">
            <!-- Button trigger modal -->
            @if (Auth::user()->peran == 'Moderator')
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#essay"
                    style="margin-bottom: 10px;">
                    + Essay
                </button>
            @endif

            <!-- Modal -->
            <div wire:ignore.selfx class="modal fade" id="essay" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <label>Soal :</label>
                                <input type="text" class="form-control" wire:model='soal'>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                                wire:click='simpan'>Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                @foreach ($pertanyaan as $data)
                    <div class="card">
                        <div class="card-header text-white" style="background-color: rgb(76, 215, 74);">SOAL</div>
                        <div class="card-body">
                            <h3>{{ $data->isisoal }}</h3>
                            @livewire('jawaban', ['data' => $data], key($data->id))
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </div>
</div>
