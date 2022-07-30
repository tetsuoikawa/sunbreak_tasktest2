<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

use App\Models\ContactForm3;

use Illuminate\Support\Facades\DB;

use App\Services\CheckFormData;

use App\Http\Requests\StoreContactForm;

class ContactFormController3 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $search = $request->input('search');

        //ORマッパーを使った、DBのデータ取り出し
        //$contents = ContactForm3::all();

        //クエリビルダ
        //$contacts = DB::table('contact_form3s')
        //->select('id','your_name','created_at')

        //paginate・・1ページに表示する件数を決めれる。
        //->paginate(20);

                // 検索フォーム
                $query = DB::table('contact_form3s');

                        //もしキーワードがあったら
        if($search !== null){
            //全角スペースを半角に
            $search_split = mb_convert_kana($search,'s');

            //空白で区切る
            $search_split2 = preg_split('/[\s]+/', $search_split,-1,PREG_SPLIT_NO_EMPTY);

            //単語をループで回す
            foreach($search_split2 as $value)
            {
            $query->where('your_name','like','%'.$value.'%');
           
            }
        };

                $query->select('id','your_name','created_at');
                $query->orderBy('created_at', 'asc');
                $contacts = $query->paginate(20);

        

        return view('contact3.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contact3.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


        //POST形式のデータをとってくるには、
        //スーパーグローバル変数のRequest
        //でとってこれる
        //使う際には、use Illuminate\Http\Request;
        //を、上に記述するのを忘れずに。
    public function store(StoreContactForm $request)
    {

        $contact = new ContactForm3;

        //request->inputで、登録している
        //データを持ってこれる

        $contact->your_name = $request->input('your_name');
        $contact->email = $request->input('email');
        $contact->url = $request->input('url');
        $contact->gender = $request->input('gender');
        $contact->age = $request->input('age');
        $contact->contact = $request->input('contact');

        //上記の情報をセーブする
        $contact->save();

        //redirectで、送信後に戻る画面を指定
        return redirect('contact3/index');
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
        $contact = ContactForm3::find($id);

        //CheckFormDataのクラスで、変数がcontactの場合
        //の処理を実行している。
        $gender = CheckFormData::checkGender($contact);


        return view('contact3.show', compact('contact','gender'));
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
        $contact = ContactForm3::find($id);

        return view('contact3.edit', compact('contact'));
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
        
        $contact = ContactForm3::find($id);

        //request->inputで、登録している
        //データを持ってこれる

        $contact->your_name = $request->input('your_name');
        $contact->email = $request->input('email');
        $contact->url = $request->input('url');
        $contact->gender = $request->input('gender');
        $contact->age = $request->input('age');
        $contact->contact = $request->input('contact');

        //上記の情報をセーブする
        $contact->save();

        //redirectで、送信後に戻る画面を指定
        return redirect('contact3/index');
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
        $contact = ContactForm3::find($id);

        //delete()をすると、消える
        $contact->delete();

        //redirectで、送信後に戻る画面を指定
        return redirect('contact3/index');
    }
}
