<div>


    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tg">
        Tambah
      </button>
 <!-- Modal -->
 <div class="modal fade" id="tg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah tugas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <label>Judul :</label>
          <input type="text" class="form-control" wire:model='judultugas' />
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary"  wire:click='simpan' data-bs-dismiss="modal">Simpan</button>
        </div>
      </div>
    </div>
  </div>

    @foreach ($semuatugas as $data)
         <div class="card">
        <div class="card-body">
            <div class="card" style="border-radius: 0px;border-color: black">
                <div class="card-body">
                    <button type="button" class="btn btn-outline-danger" wire:click="hapus({{ $data->id }})" style="border-radius: 0px;">X</button>
                    <a href="{{ url('tugas', ['idtugas'=>$data])}}" class="btn btn-outline-dark" style="padding-right: 50px;padding-left: 50px;border-radius: 0px;">{{ $data->jdl }}</a>
                    {{ User::find('id', $data->user_id)->name }} (contoh saja)
                </div>
            </div>
        </div>
    </div>
    @endforeach



    {{-- endforecH --}}

</div>
