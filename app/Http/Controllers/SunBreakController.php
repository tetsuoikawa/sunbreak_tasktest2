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
        ->select('id','title','username','contact','series','photo','photo2','photo3','photo4','photo5','photo6')
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
            ->select('id','title','username','contact','series','photo','photo2','photo3','photo4','photo5','photo6')
            ->paginate(20);

        }else if($gender2 == '2' and $series2 !== '0'){
            $sunbreaks = DB::table('sunbreaks')
            ->where('series', $series2 )
            ->orderBy('id', 'desc')
            ->select('id','title','username','contact','series','photo','photo2','photo3','photo4','photo5','photo6')
            ->paginate(20);
        }else if($gender2 !== '2' and $series2 !== '0'){
            //WHERE `gender`=1 AND `series`=0 ORDER BY `id` DESC
            $sunbreaks = DB::table('sunbreaks')
            ->where('gender', $gender2 )
            ->where('series', $series2 )
            ->orderBy('id', 'desc')
            ->select('id','title','username','contact','series','photo','photo2','photo3','photo4','photo5','photo6')
            ->paginate(20);
        }else{
            $sunbreaks = DB::table('sunbreaks')
            ->orderBy('id','DESC')
            ->select('id','title','username','contact','series','photo','photo2','photo3','photo4','photo5','photo6')
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
        'series' => 'required|gte:2',
        'gender' => 'required',
        'contact' => 'string|max:200|nullable',
        'photo' => 'required|image',
        'photo2' => 'required|image',

    ]);
        $img = $request->file('photo');
        $img2 = $request->file('photo2');
        $img3 = $request->file('photo3');
        $img4= $request->file('photo4');
        $img5 = $request->file('photo5');
        $img6 = $request->file('photo6');
        if(isset($img) && isset($img2) && isset($img3) && isset($img4) && isset($img5) && isset($img6)) {
            // storage > public > img配下に画像が保存される
            $path6 = $img6->store('img','public');
            $path5 = $img5->store('img','public');
            $path4 = $img4->store('img','public');
            $path3 = $img3->store('img','public');
            $path2 = $img2->store('img','public');
            $path = $img->store('img','public');
            // store処理が実行できたらDBに保存処理を実行
            if ($path) {
                // DBに登録する処理
                Sunbreak::create([
                     'title' => $request->input('title'),
                     'username' => $request->input('username'),
                     'gender' => $request->input('gender'),
                     'contact' => $request->input('contact'),
                     'series' => $request->input('series'),
                     'photo' => $path,
                     'photo2' => $path2,
                     'photo3' => $path3,
                     'photo4' => $path4,
                     'photo5' => $path5,
                     'photo6' => $path6,
                ]);
            } //付け足したかっこ
            return redirect('sunbreak/index');
        }else if(isset($img) && isset($img2) && isset($img3) && isset($img4) && isset($img5)) {
            // storage > public > img配下に画像が保存される
            $path5 = $img5->store('img','public');
            $path4 = $img4->store('img','public');
            $path3 = $img3->store('img','public');
            $path2 = $img2->store('img','public');
            $path = $img->store('img','public');
            // store処理が実行できたらDBに保存処理を実行
            if ($path) {
                // DBに登録する処理
                Sunbreak::create([
                     'title' => $request->input('title'),
                     'username' => $request->input('username'),
                     'gender' => $request->input('gender'),
                     'contact' => $request->input('contact'),
                     'series' => $request->input('series'),
                     'photo' => $path,
                     'photo2' => $path2,
                     'photo3' => $path3,
                     'photo4' => $path4,
                     'photo5' => $path5,
                ]);
            } //付け足したかっこ
            return redirect('sunbreak/index');
        }else if(isset($img) && isset($img2) && isset($img3) && isset($img4)) {
            // storage > public > img配下に画像が保存される
            $path4 = $img4->store('img','public');
            $path3 = $img3->store('img','public');
            $path2 = $img2->store('img','public');
            $path = $img->store('img','public');
            // store処理が実行できたらDBに保存処理を実行
            if ($path) {
                // DBに登録する処理
                Sunbreak::create([
                     'title' => $request->input('title'),
                     'username' => $request->input('username'),
                     'gender' => $request->input('gender'),
                     'contact' => $request->input('contact'),
                     'series' => $request->input('series'),
                     'photo' => $path,
                     'photo2' => $path2,
                     'photo3' => $path3,
                     'photo4' => $path4,
                ]);
            } //付け足したかっこ
            return redirect('sunbreak/index');
        }else if(isset($img) && isset($img2) && isset($img3)) {
            // storage > public > img配下に画像が保存される
            $path3 = $img3->store('img','public');
            $path2 = $img2->store('img','public');
            $path = $img->store('img','public');
            // store処理が実行できたらDBに保存処理を実行
            if ($path) {
                // DBに登録する処理
                Sunbreak::create([
                     'title' => $request->input('title'),
                     'username' => $request->input('username'),
                     'gender' => $request->input('gender'),
                     'contact' => $request->input('contact'),
                     'series' => $request->input('series'),
                     'photo' => $path,
                     'photo2' => $path2,
                     'photo3' => $path3,
                ]);
            } //付け足したかっこ
            return redirect('sunbreak/index');
        }else if(isset($img) && isset($img2)) {
            // storage > public > img配下に画像が保存される
            $path2 = $img2->store('img','public');
            $path = $img->store('img','public');
            // store処理が実行できたらDBに保存処理を実行
            if ($path) {
                // DBに登録する処理
                Sunbreak::create([
                     'title' => $request->input('title'),
                     'username' => $request->input('username'),
                     'gender' => $request->input('gender'),
                     'contact' => $request->input('contact'),
                     'series' => $request->input('series'),
                     'photo' => $path,
                     'photo2' => $path2,
                ]);
            } //付け足したかっこ
            return redirect('sunbreak/index');
        }
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

    public function test(Request $a)
    {

        return view('sunbreak/test');
    }
    public function mypage(Request $request)
    {
        //WHERE `username` = 'あああ'
        $sunbreaks = DB::table('sunbreaks')
        ->orderBy('id','DESC')
        ->select('id','title','username','contact','series','photo','photo2','photo3','photo4','photo5','photo6')
        ->paginate(20);
        


       // $sunbreaks = SunBreak::all;

       //クエリビルダ　ORマッパー      
        return view('sunbreak.mypage', compact('sunbreaks'));
    }
}
