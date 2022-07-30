<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sunbreak;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\StoreSunBreak;

class SunBreakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $sunbreaks = DB::table('sunbreaks')
        ->orderBy('id','DESC')
        ->select('id','title','contact','buki','soubi1','soubi2','soubi3','soubi4','soubi5','series','photo')
        ->paginate(20);


       // $sunbreaks = SunBreak::all;

       //クエリビルダ　ORマッパー

        

        return view('sunbreak.index', compact('sunbreaks'));


    }

    public function index2(Request $request)
    {
        //

        $gender2 = $request->input('gender2');
        $series2 = $request->input('series2');

        if($gender2 !== '2' and $series2 == '0'){

            $sunbreaks = DB::table('sunbreaks')
            ->where('gender', $gender2 )
            ->orderBy('id', 'desc')
            ->select('id','title','contact','buki','soubi1','soubi2','soubi3','soubi4','soubi5','series','photo')
            ->paginate(20);

        }else if($gender2 == '2' and $series2 !== '0'){
            $sunbreaks = DB::table('sunbreaks')
            ->where('series', $series2 )
            ->orderBy('id', 'desc')
            ->select('id','title','contact','buki','soubi1','soubi2','soubi3','soubi4','soubi5','series','photo')
            ->paginate(20);
        }else if($gender2 !== '2' and $series2 !== '0'){
            //WHERE `gender`=1 AND `series`=0 ORDER BY `id` DESC
            $sunbreaks = DB::table('sunbreaks')
            ->where('gender', $gender2 )
            ->where('series', $series2 )
            ->orderBy('id', 'desc')
            ->select('id','title','contact','buki','soubi1','soubi2','soubi3','soubi4','soubi5','series','photo')
            ->paginate(20);
        }else{
            $sunbreaks = DB::table('sunbreaks')
            ->orderBy('id','DESC')
            ->select('id','title','contact','buki','soubi1','soubi2','soubi3','soubi4','soubi5','series','photo')
            ->paginate(20);
        }

        return view('sunbreak.index', compact('sunbreaks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sunbreak.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'title' => 'required|string|max:30',
        'buki' =>   'string|max:30|nullable',
        'soubi1' => 'required|string|max:30',
        'soubi2' => 'required|string|max:30',
        'soubi3' => 'required|string|max:30',
        'soubi4' => 'required|string|max:30',
        'soubi5' => 'required|string|max:30',
        'series' => 'required|gte:2',
        'gender' => 'required',
        'contact' => 'string|max:200|nullable',
        'photo' => 'required|image',
    ]);
        $img = $request->file('photo');
        if (isset($img)) {
            // storage > public > img配下に画像が保存される
            $path = $img->store('img','public');
            // store処理が実行できたらDBに保存処理を実行
            if ($path) {
                // DBに登録する処理
                Sunbreak::create([
                     'title' => $request->input('title'),
                     'buki' => $request->input('buki'),
                     'soubi1' => $request->input('soubi1'),
                     'soubi2' => $request->input('soubi2'),
                     'soubi3' => $request->input('soubi3'),
                     'soubi4' => $request->input('soubi4'),
                     'soubi5' => $request->input('soubi5'),
                     'gender' => $request->input('gender'),
                     'contact' => $request->input('contact'),
                     'series' => $request->input('series'),
                     'photo' => $path,

                ]);
            } //付け足したかっこ
        }


        return redirect('sunbreak/index');
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
