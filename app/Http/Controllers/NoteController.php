<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Company;

class NoteController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'note' => 'required|min:5',
        ]);

        Note::create($request->all());

        return redirect()->route('companies.show', $request->get('company_id'))->with(['message' => 'Комментарий успешно создан!']);
    }
}
