<?php

namespace App\Http\Controllers;
use App\Models\Schedule;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUpdateScheduleFormRequest;



class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedules = Auth::user()->schedules()->with('recipe')->get();
        return view('schedules.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $recipes = Auth::user()->recipes;
        return view('schedules.create', compact('recipes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateScheduleFormRequest $request)
    {


        Auth::user()->schedules()->create($request->all());

        return redirect()->route('schedules.index')->with('success', 'Agendamento criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $schedule = Schedule::findOrFail($id);
        return view('schedules.show', compact('schedule')); $schedule = Schedule::findOrFail($id);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $schedule = Schedule::findOrFail($id);
        $recipes = Auth::user()->recipes;
        return view('schedules.edit', compact('schedule', 'recipes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateScheduleFormRequest $request, string $id)
    {
        $schedule = Schedule::findOrFail($id);



        $schedule->update($request->all());

        return redirect()->route('schedules.index')->with('success', 'Agendamento atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->delete();
        return redirect()->route('schedules.index')->with('success', 'Agendamento excluído com sucesso!');
        }
}
