<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmailTemplate;
use Illuminate\Support\Facades\Session;

class EmailTemplateController extends Controller
{

    public function index()
    {

        $data['emailTemplates']     =   EmailTemplate::all();

        return view("admin.emailTemplate.index",$data);


    }

    public function show($id)
    {
        
    }

    public function create()
    {
        $data['emailTemplate']    =   new EmailTemplate();
        $data['url']        =   route("email.store");
        $data['method']     =   "POST";
        return view("admin.emailTemplate.form", $data);
    }

    public function store(Request $request)
    {
        $emailTemplate                  =   EmailTemplate::firstOrNew(["name"=>$request->name]);
        $emailTemplate->email           =   $request->email;
        $emailTemplate->additional_info     =   $request->additional_info;
        $emailTemplate->save();
        Session::flash('success','email template Added');
        return redirect(route("email.index"));
    }


    public function edit($id)
    {
        $data['emailTemplate']    =   EmailTemplate::findOrFail($id);
        $data['url']        =   route("email.update", ['email' => $id]);
        $data['method']     =   "PUT";
        return view("admin.emailTemplate.form", $data);
    }

    public function update(Request $request, $id)
    {
        EmailTemplate::findOrFail($id)->update($request->all());
        Session::flash('success','Email Template Updated');
        return redirect(route("email.index"));

    }

    public function destroy(Request $request,$id)
    {
        EmailTemplate::findOrFail($id)->delete();
        Session::flash('success','Email Template Deleted');
        return redirect(route("email.index"));
    }

}
