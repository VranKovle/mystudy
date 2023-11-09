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
                @if ($material->isNotEmpty())
                @else
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#materi" style="margin-bottom: 20px;">
                    + Materi
                </button>
                @endif
                <!-- Modal -->
                <div  wire:ignore.selfx class="modal fade" id="materi" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-fullscreen">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">MATERI</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form wire:submit.prevent="simpan">
                                    <label>Judul :</label>
                                    <input type="text" class="form-control" wire:model='materijudul' />
                                    <label>Isi :</label>
                                    <div class="form-group" wire:ignore>
                                    <textarea class="form-control summernote" input="materiisi" wire:model='materiisi' id="materiisi"></textarea>
                                </div>
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
                        <button class="btn btn-danger btn-sm" wire:click='hapus({{ $data->id }})'>Hapus</button>
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editmateri">
                            Edit
                        </button>
                        <p>{!! $data->isimateri !!}</p>
                    </div>
                </div>

                <div  wire:ignore.selfx class="modal fade" id="editmateri" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-fullscreen">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">EDIT MATERI</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form wire:submit.prevent="simpan">
                                    <label>Judul :</label>
                                    <input type="text" class="form-control" wire:model='materijudul' />
                                    <label>Isi :</label>
                                    <div class="form-group" wire:ignore>
                                    <textarea class="form-control summernote" input="materiisi" wire:model='materiisi' id="materiisi-edit">{!! $data->isimateri !!}</textarea>
                                </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" wire:click='edit({{ $data->id }})' data-bs-dismiss="modal">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    @push('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script>
      $('#materiisi').summernote({
      tabsize: 2,
      height: 200,
      toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
      ],
      callbacks: {
          onChange: function(contents, $editable) {
          @this.set('materiisi', contents);
      }
  }
  });
    </script>
    <script>
        $('#materiisi-edit').summernote({
        tabsize: 2,
        height: 200,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ],
        callbacks: {
            onChange: function(contents, $editable) {
            @this.set('materiisi', contents);
        }
    }
    });
      </script>
    @endpush
</div>
