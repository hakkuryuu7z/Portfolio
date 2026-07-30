<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Setting;
use App\Models\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        $skills = Skill::all();
        $settings = Setting::pluck('value', 'key')->toArray();

        return view('welcome', compact('projects', 'skills', 'settings'));
    }

    public function storeMessage(Request $request)
    {
        $request->validate([
            'sender_name' => 'required|string|max:255',
            'sender_email' => 'required|email|max:255',
            'message_content' => 'required|string',
        ]);

        Message::create($request->all());

        return redirect('/#contact')->with('success', 'Your message has been sent successfully!');
    }
}
