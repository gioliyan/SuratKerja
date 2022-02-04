<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kerja;
use App\Models\Pegawai;

class KerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['gawais'] = Pegawai::all();

        return view('surat.formkerja', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kerja = new Kerja();

        $kerja->nama_pg1 = request('nama_pg1');
        $kerja->nip_pg1 = request('nip_pg1');
        $kerja->pangkat_pg1 = request('pangkat_pg1');
        $kerja->jabatan_pg1 = request('jabatan_pg1');
        $kerja->nama_pg2 = request('nama_pg2');
        $kerja->nip_pg2 = request('nip_pg2');
        $kerja->pangkat_pg2 = request('pangkat_pg2');
        $kerja->jabatan_pg2 = request('jabatan_pg2');
        $kerja->nama_pg3 = request('nama_pg3');
        $kerja->nip_pg3 = request('nip_pg3');
        $kerja->pangkat_pg3 = request('pangkat_pg3');
        $kerja->jabatan_pg3 = request('jabatan_pg3');
        $kerja->nama_pg4 = request('nama_pg4');
        $kerja->nip_pg4 = request('nip_pg4');
        $kerja->pangkat_pg4 = request('pangkat_pg4');
        $kerja->jabatan_pg4 = request('jabatan_pg4');
        $kerja->nama_pg5 = request('nama_pg5');
        $kerja->nip_pg5 = request('nip_pg5');
        $kerja->pangkat_pg5 = request('pangkat_pg5');
        $kerja->jabatan_pg5 = request('jabatan_pg5');

        $kerja->save();

        return redirect('/createsurat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
