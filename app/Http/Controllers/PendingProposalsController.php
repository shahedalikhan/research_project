<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendingProposalsController extends Controller
{
    public function pendingproposals(){
        return view('admin.pendingproposals');
    }
}
