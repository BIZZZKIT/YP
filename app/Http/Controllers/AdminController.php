<?php

namespace App\Http\Controllers;

use App\Models\Statement;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function editStatus(Request $request, $statement_id)
    {
        $statement = Statement::findOrFail($statement_id);
        $statement->status = $request->status;

        $statement->save();

        return redirect()->back()->with('success', $request->get('status'));
    }
}
