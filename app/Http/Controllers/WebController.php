<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Web;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Exception;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $web = Web::first();
        return view('admin.web.index', [
            'web' => $web,
        ]);
    }






    /**
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
        $web = Web::findOrFail($id);
        return view('admin.web.edit', [
            'web' => $web,
        ]);
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
        //   return $request->all();
        DB::beginTransaction();

        try {

            $web = Web::find($id);
            $web->title = $request->title;
            $web->web_name = $request->web_name;
            $web->footer = $request->footer;
            $web->about = $request->about;

            if ($request->slide_1 != null) {
                $slide_1 = $request->file('slide_1');
                $nama_slide_1 =  $web->title . "_" . $request->slide_1_name;
                $slide_1->move('files/slider', $nama_slide_1);
                $web->slide_1 = $nama_slide_1;
            }

            if ($request->slide_2 != null) {
                $slide_2 = $request->file('slide_2');
                $nama_slide_2 =  $web->title . "_" . $request->slide_2_name;
                $slide_2->move('files/slider', $nama_slide_2);
                $web->slide_2 = $nama_slide_2;
            }

            if ($request->slide_3 != null) {
                $slide_3 = $request->file('slide_3');
                $nama_slide_3 =  $web->title . "_" . $request->slide_3_name;
                $slide_3->move('files/slider', $nama_slide_3);
                $web->slide_3 = $nama_slide_3;
            }
            if ($request->logo != null) {
                $logo = $request->file('logo');
                $nama_logo =  $web->web_name . "_" . $request->logo_name;
                $logo->move('files/logo', $nama_logo);
                $web->logo = $nama_logo;
            }


            $web->save();

            DB::commit();
            return response()->json([
                'message' => 'Data Web diperbaharui.',
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
