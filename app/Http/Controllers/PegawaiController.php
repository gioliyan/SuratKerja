<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function list()
    {
        $this->data['gawais'] = Pegawai::orderby('created_at', 'DESC')->paginate(10);
        // $mails = Mail::all()->paginate(10);

        return view('pegawai.listpegawai', $this->data);
    }

    public function create()
    {
        return view('pegawai.formpegawai');
    }

    public function store(Request $request)
    {
        $gawai = new Pegawai();

        $gawai->nama = request('nama');
        $gawai->nip = request('nip');
        $gawai->pangkat = request('pangkat');
        $gawai->jabatan = request('jabatan');

        $gawai->save();

        return redirect('/listpegawai');
    }

    public function edit($id)
    {
        $gawai = Pegawai::find($id);

        return view('pegawai.formedit')->with('gawai', $gawai);
    }

    public function update(Request $request, $id)
    {
        $gawai = Pegawai::find($id);

        $gawai->nama = request('nama');
        $gawai->nip = request('nip');
        $gawai->pangkat = request('pangkat');
        $gawai->jabatan = request('jabatan');

        $gawai->save();

        return redirect('/listpegawai');
    }

    public function destroy($id)
    {
        $gawai = Pegawai::find($id);
        $gawai->delete();
        return redirect('/listpegawai');
    }
}
