<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;
use App\Models\Kerja;

use PDF;

class SuratController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function list()
    {
        $this->data['mails'] = Surat::orderby('created_at', 'DESC')->paginate(10);
        // $mails = Mail::all()->paginate(10);

        return view('surat.list', $this->data);
    }

    public function create()
    {
        return view('surat.form');
    }

    public function store(Request $request)
    {
        $mail = new Surat();

        $mail->dasar = request('dasar');
        $mail->untuk = request('untuk');
        $mail->instansi = request('instansi');
        $mail->dari = request('dari');
        $mail->menuju = request('menuju');
        $mail->transportasi = request('transportasi');
        $mail->dari_tanggal = request('dari_tanggal');
        $mail->sampai_tanggal = request('sampai_tanggal');
        $mail->biaya_perhari = request('biaya_perhari');
        $mail->lama_hari = request('lama_hari');
        $mail->total = request('total');
        $mail->jumlah = request('jumlah');

        $mail->save();

        return redirect('/listsurat');
    }

    public function print($id)
    {
        $this->data['mails'] = Surat::findOrFail($id);
        $this->data['gawais'] = Kerja::findOrFail($id);
        $pdf = PDF::loadview('surat.print', $this->data);
        return $pdf->stream("Surat SPPD", array("Attachment" => false));
        exit(0);
    }
}
