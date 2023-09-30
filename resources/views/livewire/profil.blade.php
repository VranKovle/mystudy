<div>
    {{--  --}}
    <div class="row">
        <div class="col-4">
           <img src="{{ asset('/storage/'.Auth::user()->gambar) }}" class="img-thumbnail">
        </div>
        <div class="col-8">
            <table class="table table-striped">
                <tr>
                    <td>Nama</td>
                    <td>{{ Auth::user()->name }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ Auth::user()->email }}</td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>{{ Auth::user()->tempatlahir }}</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>{{ Auth::user()->tanggallahir }}</td>
                </tr>
            </table>
            <h2  class="btn btn-primary" wire:click='editData'>Ubah data Saya</h2    >
        </div>
    </div>

    @if($bukaFormulir)
    <div class="row">
        <div class="col-12">
            <form wire:submit='simpan'>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" wire:model='name'>

                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" wire:model='email'>

                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control" wire:model='tempatlahir'>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" wire:model='tanggallahir'>
                    @error('tanggallahir')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" class="form-control" wire:model='gambar'>
                    @if ($gambar)
                    <img src="{{ $gambar->temporaryUrl() }}" class="img-thumbnail" width="100px">
                    @endif
                </div>
                <div class="form-group">
                    <input type="submit" value="SIMPAN" class="btn btn-primary" />
                </div>
            </form>
        </div>
    </div>
    @endif
    {{--  --}}
</div>
