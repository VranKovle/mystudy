<div>
    <div class="container">
        <div class="row">
      <div class="card text-center">
        <div class="card-header">
         INFO HARIAN
        </div>
        <div class="card-body">
            @foreach ($informasi as $info)
            <h5 class="card-title">{{ $info->joedoel }}</h5>
            <p class="card-text">{{ $info->isinya }}</p>
            @if (Auth::user()->peran=='Moderator')
            <button type="button" class="btn btn-danger" wire:click="hapus({{ $info->id }})">Hapus</button>
            <!-- Button edit modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Edit
  </button>
  @endif

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form wire:submit.prevent="update">
                <label>Judul :</label>
          <input type="text" class="form-control" wire:model='judul' />
          <label>Isi Informasi :</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model='isi'></textarea>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary"  wire:click="update({{ $info->id }})" data-bs-dismiss="modal">Simpan</button>
        </div>
      </div>
    </div>
  </div>
@endforeach
        @if (Auth::user()->peran=='Moderator')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambahkan Informasi
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form wire:submit.prevent="simpan">
          <label>Judul :</label>
          <input type="text" class="form-control" wire:model='judul' />
          <label>Isi Informasi :</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model='isi'></textarea>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" wire:click='simpan' data-bs-dismiss="modal">Simpan</button>
        </div>
      </div>
    </div>
  </div>
@endif
        </div>
        @foreach ($informasi as $info)
        <div class="card-footer text-muted">
            {{ Carbon\Carbon::parse($info->created_at)->isoFormat('dddd, D MMMM Y , HH:mm') }}
        </div>
        @endforeach
      </div>
        </div>
      </div>
</div>
