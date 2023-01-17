<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Komentar;

class Berita extends Component
{
    public $txtkomentar;
    public function simpan()
    {
        $simpan = new Komentar();
        $simpan->isi_komentar = $this->txtkomentar;
        $simpan->save();
        $this->reset();
    }
    public function hapus($idhapus)
    {
        $hapus = Komentar::findOrFail($idhapus);
        $hapus->delete();
        $hapus->reset();
    }

    public function render()
    {
        return view('livewire.berita', [
            'isi_komentar' => komentar::orderby('created_at', 'desc')->get()
        ]);
    }
}
