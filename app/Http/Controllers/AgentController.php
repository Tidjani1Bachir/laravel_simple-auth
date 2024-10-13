<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;

class AgentController extends Controller
{
    public function AgentDashboard(){

        return view('agent.agent_dashboard');

    } //end of public function AgentAdminDashboard
}
