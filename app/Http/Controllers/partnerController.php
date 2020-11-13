<?php

namespace App\Http\Controllers;

use App\Models\partner;
use Illuminate\Http\Request;

class partnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners=partner::all();
        return view('admin.viewpartners',compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addpartners');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partner=new partner();
        $this->validate($request,[
            'partnerName'=>'required',
            'partnerImage'=>'required',
            'description'=>'required'
        ]);

        if($request->hasFile('partnerImage')){
            $filename=$request->partnerImage->getClientOriginalName();
            $request->partnerImage->storeAs('partnerImages',$filename);
            $partner->partnerImage=$filename;
        }
        $partner->partnerName=$request->partnerName;
        $partner->description=$request->description;
        $partner->save();
        return redirect(route('viewpartners'))->with('message',"Partner Added Successfully");
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
        $partner=partner::find($id);
        $this->validate($request,[
            'partnerName'=>'required',
            'description'=>'required'
        ]);

        if($request->hasFile('partnerImage')){
            $filename=$request->partnerImage->getClientOriginalName();
            $request->partnerImage->storeAs('partnerImages',$filename);
            $partner->partnerImage=$filename;
        }
        $partner->partnerName=$request->partnerName;
        $partner->description=$request->description;
        $partner->save();
        return redirect(route('viewpartners'))->with('message',"Partner Updated Successfully");
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

    public function editpartner($id){
        $partner=partner::find($id);
        return view('admin.editpartner',compact('partner'));
    }

    public function deletepartner($id){
        partner::find($id)->delete();
        return redirect()->back()->with('message',"Partner Deleted Successfully");
    }
}
