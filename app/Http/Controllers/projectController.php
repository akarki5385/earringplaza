<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;

class projectController extends Controller
{
    public function index(){
        $projects=project::paginate(5);
        return view('admin.viewprojects',compact('projects'));
    }

    public function store(Request $request){
        $project=new project();
        $this->validate($request,[
            'project_name'=>'required',
            'sub_name'=>'required',
            'client'=>'required',
            'surfacearea'=>'required',
            'location'=>'required',
            'value'=>'required',
            'architech'=>'required',
            'ih'=>'required',
            'ihc'=>'required',
            'main_image'=>'required',
            'p1'=>'required',
            'p2'=>'required',
            'p3'=>'required',
            'p4'=>'required'
        ]);

        if($request->hasFile('main_image')){
            $filename=$request->main_image->getClientOriginalName();
            $request->main_image->storeAs('projectImages',$filename);
            $project->imgmain=$filename;
        }
        if($request->hasFile('p1')){
            $filename=$request->p1->getClientOriginalName();
            $request->p1->storeAs('projectImages',$filename);
            $project->innerimg1=$filename;
        }
        if($request->hasFile('p2')){
            $filename=$request->p2->getClientOriginalName();
            $request->p2->storeAs('projectImages',$filename);
            $project->innerimg2=$filename;
        }
        if($request->hasFile('p3')){
            $filename=$request->p3->getClientOriginalName();
            $request->p3->storeAs('projectImages',$filename);
            $project->innerimg3=$filename;
        }
        if($request->hasFile('p4')){
            $filename=$request->p4->getClientOriginalName();
            $request->p4->storeAs('projectImages',$filename);
            $project->innerimg4=$filename;
        }

        $project->projectName=$request->project_name;
        $project->subName=$request->sub_name;
        $project->client=$request->client;
        $project->location=$request->location;
        $project->surfaceArea=$request->surfacearea;
        $project->value=$request->value;
        $project->tag=$request->tag;
        $project->architech=$request->architech;
        $project->innerHeading=$request->ih;
        $project->innerHeadingContent=$request->ihc;

        $project->save();
        return redirect(route('viewproject'))->with('message','Project Added Successfully');
    }

    public function addproject(){
        return view('admin.addprojects');
    }

    public function viewprojectid($id){
        $project=project::find($id);
        return view('admin.viewprojectid',compact('project'));
    }

    public function deleteproject($id){
        project::find($id)->delete();
        return redirect()->back()->with('message',"Project Deleted Successfully");
    }

    public function editproject($id){
        $project=project::find($id);
        return view('admin.editproject',compact('project'));
    }

    public function updateproject(Request $request,$id){
        $project=project::find($id);
        $this->validate($request,[
            'project_name'=>'required',
            'sub_name'=>'required',
            'client'=>'required',
            'surfacearea'=>'required',
            'location'=>'required',
            'value'=>'required',
            'architech'=>'required',
            'ih'=>'required',
            'ihc'=>'required'
        ]);

        if($request->hasFile('main_image')){
            $filename=$request->main_image->getClientOriginalName();
            $request->main_image->storeAs('projectImages',$filename);
            $project->imgmain=$filename;
        }
        if($request->hasFile('p1')){
            $filename=$request->p1->getClientOriginalName();
            $request->p1->storeAs('projectImages',$filename);
            $project->innerimg1=$filename;
        }
        if($request->hasFile('p2')){
            $filename=$request->p2->getClientOriginalName();
            $request->p2->storeAs('projectImages',$filename);
            $project->innerimg2=$filename;
        }
        if($request->hasFile('p3')){
            $filename=$request->p3->getClientOriginalName();
            $request->p3->storeAs('projectImages',$filename);
            $project->innerimg3=$filename;
        }
        if($request->hasFile('p4')){
            $filename=$request->p4->getClientOriginalName();
            $request->p4->storeAs('projectImages',$filename);
            $project->innerimg4=$filename;
        }

        $project->projectName=$request->project_name;
        $project->subName=$request->sub_name;
        $project->client=$request->client;
        $project->location=$request->location;
        $project->surfaceArea=$request->surfacearea;
        $project->value=$request->value;
        $project->tag=$request->tag;
        $project->architech=$request->architech;
        $project->innerHeading=$request->ih;
        $project->innerHeadingContent=$request->ihc;

        $project->save();
        return redirect(route('viewproject'))->with('message','Project Updated Successfully');
    }
}
