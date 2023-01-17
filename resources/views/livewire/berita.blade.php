<div>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                      Status
                    </div>
                    <div class="card-body">
                        Komentar <br />
                        <input type="text" class="form-control" wire:model='txtkomentar' />
                        <br />
                        <input type="submit" class="btn btn-primary" value="KIRIM" wire:click='simpan'/>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                      Kiriman Saya
                    </div>
                    <div class="card-body">
                        Saya :<br />
                        <p>
                            <i>
                                {{ $txtkomentar }}
                            </i>
                        </p>
                        <hr />
                        @foreach ($isi_komentar as $item)
                            Saya pad {{ Carbon\Carbon::parse($item->created_at)->isoformat('dddd, D MMM Y') }}
                            <br />
                            <p>
                                <i>
                                    {{ $item->isi_komentar }}
                                </i>
                                <button class="float-end btn btn-danger" wire:click="hapus('{{ $item->id }}')">
                                    HAPUS
                                </button>
                            </p>
                            <hr />
                        @endforeach

                    </div>
                  </div>
            </div>
    </div>
</div>
