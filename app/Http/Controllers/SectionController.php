<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    function section_stor(Request $request)
    {
        $Section = new Section();
        $Section->name = $request->name;
        $Section->code = $request->code;

        $Section->save();
        return (back()->with('success', 'Register successfully'));
    }
}
