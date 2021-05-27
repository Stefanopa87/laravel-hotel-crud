<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

class MainController extends Controller
{
    // HOME
    public function home(){

    $employees = Employee::all();
    // dd($employees);
    return view('pages.home', compact('employees'));
    }

    // SINGOLO DIPENDENTE
    public function employee($id) {
    $employees = Employee::findOrFail($id);
    // dd($employees);

    return view('pages.employee', compact('employees'));
    }

    // CREA SINGOLO DIPENDENTE
    public function create(){

    return view('pages.create');
    }
    // ---------------------------------
    public function store(Request $request) {
    // dd($request -> all());

    $validate = $request -> validate([
        'firstname' => 'required|string',
        'lastname' => 'required|string',
        'role' => 'required|string',
        'ral' => 'required|integer',
    ]);
    // dd($validate);

    $employee = Employee::create($validate);
    return redirect() -> route('employee', $employee -> id);
    }

    // MODIFICA SINGOLO DIPENDENTE
    public function edit($id){
    $employee = Employee::findOrFail($id);

    return view('pages.edit', compact('employee'));
    }
    // ---------------------------------
    public function update(Request $request, $id) {

    // dd($request -> all(), $id);

    $validate = $request -> validate([
        'firstname' => 'required|string',
        'lastname' => 'required|string',
        'role' => 'required|string',
        'ral' => 'required|integer',
    ]);
    $employee = Employee::findOrFail($id);

    $employee -> update($validate);

    return redirect() -> route('home');
    }

    // CANCELLA SINGOLO DIPENDENTE
    public function destroy($id) {
    $employee = Employee::findOrFail($id);

    $employee -> delete();
    // dd($employee);

    return redirect() -> route('home');
    }


}
