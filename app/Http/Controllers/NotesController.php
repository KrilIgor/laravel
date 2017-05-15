<?php

namespace App\Http\Controllers;

use App\Notes;
use Illuminate\Http\Request;

/**
 * Class NotesController
 * @package App\Http\Controllers
 */
class NotesController extends Controller
{

    /**
     * @param Request $request
     * @return $this
     */
    public function index(Request $request)
    {
        $notes = Notes::orderBy('id','DESC')->paginate(5);
        return view('notes.index',compact('notes'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('notes.notes-create');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $note = Notes::find($id);
        return view('notes.edit',compact('note'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'tags' => 'required',
        ]);

        Notes::find($id)->update($request->all());
        return redirect()->route('notes.index')
            ->with('success','Note updated successfully');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'tags' => 'required'
        ]);

        Notes::create($request->all());
        return redirect()->route('notes.index', 1)
            ->with('success','Note created successfully');
    }
    
    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Notes::find($id)->delete();
        return redirect()->route('notes.index')
            ->with('success','Note deleted successfully');
    }

}