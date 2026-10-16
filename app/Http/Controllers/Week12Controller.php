<?php

namespace App\Http\Controllers;

use App\Database\InventoryRepository;
use App\Database\PdoSqliteFactory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

/** Week 12: simple web forms with direct PDO and prepared statements. */
final class Week12Controller extends Controller
{
    private function repository(): InventoryRepository
    {
        return new InventoryRepository(PdoSqliteFactory::connect());
    }

    public function index(): View
    {
        return view('weeks.week12', ['items' => $this->repository()->all()]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate(['name' => 'required|string|max:120', 'quantity' => 'required|integer|min:0|max:100000']);
        $this->repository()->create($data['name'], (int) $data['quantity']);
        return redirect()->route('week12.index')->with('message', 'Record created using PDO prepare().');
    }

    public function update(Request $request, int $id): RedirectResponse
    {
        $data = $request->validate(['name' => 'required|string|max:120', 'quantity' => 'required|integer|min:0|max:100000']);
        $this->repository()->update($id, $data['name'], (int) $data['quantity']);
        return redirect()->route('week12.index')->with('message', 'Record updated using a prepared statement.');
    }

    public function destroy(int $id): RedirectResponse
    {
        $this->repository()->delete($id);
        return redirect()->route('week12.index')->with('message', 'Record deleted using a prepared statement.');
    }
}
