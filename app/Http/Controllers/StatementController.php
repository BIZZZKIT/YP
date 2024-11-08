<?php

namespace App\Http\Controllers;

use App\Http\Requests\StatementRequest;
use App\Models\Statement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatementController extends Controller
{
    public function createStatement(StatementRequest $request)
    {
        Statement::create([
          'statenum' => $request->validated()['statenum'],
            'description' => $request->validated()['description'],
            'user_id' => Auth::id(),
        ]);
        return redirect()->route('main');
    }

    public function statementViewNotAdmin()
    {
        $statements = Statement::all()->where('user_id', Auth::id());
        return view('main', compact('statements'));
    }

    public function statementViewAdmin()
    {
        $statements = Statement::with('user')->get();
        $statements_statuses = Statement::statuses;
        return view('admin.admin', compact('statements', 'statements_statuses'));
    }
}
