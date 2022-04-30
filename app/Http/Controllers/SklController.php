<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SklController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $school = School::first();
        // return $setting;
        return view('admin.skl.index', [
            'school' => $school,
        ]);
    }

    public function edit_kop($id)
    {
        $school = School::find($id);
        // return $setting;
        return view('admin.skl.edit_kop', [
            'school' => $school,
        ]);
    }

    public function edit_pembuka($id)
    {
        $school = School::find($id);
        // return $setting;
        return view('admin.skl.edit_pembuka', [
            'school' => $school,
        ]);
    }

    public function edit_penutup($id)
    {
        $school = School::find($id);
        // return $setting;
        return view('admin.skl.edit_penutup', [
            'school' => $school,
        ]);
    }

    /**
     * 
     * 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function update_kop(Request $request, $id)
    {
        //   return $request->all();
        DB::beginTransaction();

        try {

            $school = School::find($id);
            $school->kop_nama_disdik = $request->kop_nama_disdik;
            $school->kop_nama_sekolah = $request->kop_nama_sekolah;
            $school->kop_th_pelajaran = $request->kop_th_pelajaran;
            $school->kop_alamat = $request->kop_alamat;
            $school->kop_telepon = $request->kop_telepon;
            $school->kop_pos = $request->kop_pos;
            $school->kop_website = $request->kop_website;
            $school->kop_email = $request->kop_email;

            if ($request->kop_logo_dinas != null) {
                $kop_logo_dinas = $request->file('kop_logo_dinas');
                $nama_kop_logo_dinas =  $school->kop_nama_sekolah . "_" . $request->kop_logo_dinas_name;
                $kop_logo_dinas->move('files/logo', $nama_kop_logo_dinas);
                $school->kop_logo_dinas = $nama_kop_logo_dinas;
            }


            $school->save();

            DB::commit();
            return response()->json([
                'message' => 'Data Kop diperbaharui.',
                'code' => 200,
                'error' => false,
            ]);
        } catch (Exception $e) {
            DB::rollback();
            return response()->json([
                'message' => 'Internal error',
                'code' => 500,
                'error' => true,
                'errors' => $e . '',
            ], 500);
        }
    }


    public function update_penutup(Request $request, $id)
    {
        //   return $request->all();
        DB::beginTransaction();

        try {

            $school = School::find($id);
            $school->penutup_surat = $request->penutup_surat;
            $school->tempat = $request->tempat;
            $school->tanggal = $request->tanggal;
            $school->jabatan_penandatangan = $request->jabatan_penandatangan;
            $school->nama_penandatangan = $request->nama_penandatangan;
            $school->nip_penandatangan = $request->nip_penandatangan;

            if ($request->tanda_tangan != null) {
                $tanda_tangan = $request->file('tanda_tangan');
                $nama_tanda_tangan =  $school->tanggal . "_" . $request->tanda_tangan_name;
                $tanda_tangan->move('files/ttd', $nama_tanda_tangan);
                $school->tanda_tangan = $nama_tanda_tangan;
            }


            $school->save();

            DB::commit();
            return response()->json([
                'message' => 'Data Kop diperbaharui.',
                'code' => 200,
                'error' => false,
            ]);
        } catch (Exception $e) {
            DB::rollback();
            return response()->json([
                'message' => 'Internal error',
                'code' => 500,
                'error' => true,
                'errors' => $e . '',
            ], 500);
        }
    }

    public function update_pembuka(Request $request, $id)
    {
        //   return $request->all();
        DB::beginTransaction();

        try {

            $school = School::find($id);
            $school->nama_surat = $request->nama_surat;
            $school->pembuka_surat = $request->pembuka_surat;
            $school->no_surat = $request->no_surat;

            $school->save();

            DB::commit();
            return response()->json([
                'message' => 'Data Pembuka diperbaharui.',
                'code' => 200,
                'error' => false,
            ]);
        } catch (Exception $e) {
            DB::rollback();
            return response()->json([
                'message' => 'Internal error',
                'code' => 500,
                'error' => true,
                'errors' => $e . '',
            ], 500);
        }
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
