<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;

class teamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams=member::paginate(5);
        return view('admin.viewteams',compact('teams'));
    }


    public function editteam($id){
        $member=member::find($id);
        return view('admin.editteam',compact('member'));
    }

    public function updateteam(Request $request,$id){
        $this->validate($request,[
            'memberName'=>'required',
            'memberPost'=>'required'
        ]);
        $member=member::find($id);
        if($request->hasFile('memberImage')){
            $filename=$request->memberImage->getClientOriginalName();
            $request->memberImage->storeAs('membersImages',$filename);
            $member->memberImage=$filename;
        }
        $member->memberName=$request->memberName;
        $member->memberPost=$request->memberPost;
        $member->save();
        return redirect(route('viewteams'))->with('message','Member Updated Successfully');
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

        $this->validate($request,[
            'memberName'=>'required',
            'memberPost'=>'required',
            'memberImage'=>'required'
        ]);
        $member=new member();
        if($request->hasFile('memberImage')){
            $filename=$request->memberImage->getClientOriginalName();
            $request->memberImage->storeAs('membersImages',$filename);
            $member->memberImage=$filename;
        }
        $member->memberName=$request->memberName;
        $member->memberPost=$request->memberPost;
        $member->save();
        return redirect(route('viewteams'))->with('message','Member Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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

    public function addteam(){
        return view('admin.addteam');
    }

    public function deleteteam($id){
        member::find($id)->delete();
        return redirect(route('viewteams'))->with('message','Team Member Deleted Successfully');
    }

}
