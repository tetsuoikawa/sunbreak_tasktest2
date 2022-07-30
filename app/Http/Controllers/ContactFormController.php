<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\ContactForm;

class ContactFormController extends Controller
{
    /**
     * Display  fa listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //クエリビルダ
       $contacts = DB::table('contact_forms')
        ->select('id', 'soubi-1', 'created_at')->get();

        return view('contact.index', compact('contacts'));
        //ドット(.)の前はフォルダ名で、ドットの後はファイル名になる
        return view('contact.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
        $contact = new ContactForm;

        $contact->title = $request->input('title');
        $contact->buki = $request->input('buki');
        $contact->{'soubi-1'} = $request->input('soubi-1');
        $contact->{'soubi-2'} = $request->input('soubi-2');
        $contact->{'soubi-3'} = $request->input('soubi-3');
        $contact->{'soubi-4'}  = $request->input('soubi-4');
        $contact->{'soubi-5'} = $request->input('soubi-5');
        $contact->contact = $request->input('contact');
        $contact->gender = $request->input('gender');


        $contact->save();

        return redirect('contact/index');


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
        $contact = ContactForm::find($id);
        dd($contact);

        return view('conact.show')
    };

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
