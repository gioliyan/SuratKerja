<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mail;

class SuratController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function list()
    {
        $this->data['mails'] = Mail::orderby('tertanggal', 'ASC')->paginate(10);
        // $mails = Mail::all()->paginate(10);

        return view('surat.list', $this->data);
    }

    public function create()
    {
        return view('surat.form');
    }

    public function store(Request $request)
    {
        $mail = new Mail();

        $mail->surat_dari = request('surat_dari');
        $mail->tertanggal = request('tertanggal');
        $mail->nomor_surat = request('nomor_surat');
        $mail->perihal = request('perihal');
        $mail->pembuka = request('pembuka');
        $mail->isi_surat = request('isi_surat');
        $mail->tanggal = request('tanggal');
        $mail->tujuan_surat = request('tujuan_surat');
        $mail->pembayaran = request('pembayaran');
        $mail->angkutan = request('angkutan');
        $mail->berangkat = request('berangkat');
        $mail->tujuan = request('tujuan');
        $mail->tgl_berangkat = request('tgl_berangkat');
        $mail->tgl_kembali = request('tgl_kembali');
        $mail->instansi_ang = request('instansi_ang');
        $mail->mata_ang = request('mata_ang');
        $mail->keterangan = request('keterangan');
        $mail->acuan_konsep = request('acuan_konsep');
        $mail->operator = request('operator');

        $mail->save();

        return redirect('/listsurat');
    }

    
}
