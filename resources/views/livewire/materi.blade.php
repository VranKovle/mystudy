<div>
    <div class="card" style="background-color: black;border-radius: 0px;">
        <div class="card-body text-white" style="background: linear-gradient(to right, #000046, #1ce050);">
            Tugas : <h2>{{ $data->jdl }}</h2>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            @if (Auth::user()->peran == 'Moderator')
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#materi" style="margin-bottom: 20px;">
                    + Materi
                </button>

                <!-- Modal -->
                <div  wire:ignore.selfx class="modal fade" id="materi" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form wire:submit.prevent="simpan">
                                    <label>Judul :</label>
                                    <input type="text" class="form-control" wire:model='materijudul' />
                                    <label>Isi :</label>
                                    <textarea class="form-control" rows="3" wire:model='materiisi' name="materiisi" id="materiisi"></textarea>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" wire:click='simpan'
                                    data-bs-dismiss="modal">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @foreach ($material as $data)
                <div class="card">
                    <div class="card-header text-white" style="background-color: rgb(132, 74, 215);">MATERI</div>
                    <div class="card-body">
                        <h3>{{ $data->judulmateri }}</h3>
                        <p>{{ $data->isimateri }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
@push('scripts')


    <script>
        ClassicEditor
            .create(document.querySelector('#message'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                @this.set('message', editor.getData());
                })
            })
            .catch(error => {
                console.error(error);
            });
    </script>



@endpush
