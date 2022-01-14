<?php

namespace App\Http\Controllers;

use App\Models\Land;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LandsController extends Controller
{
    public function list()
    {
        return Land::all();
    }
    public function detail($id)
    {
        return Land::find($id)->first();
    }

    public function create(Request $req)
    {
        $landData = json_decode($req->getContent());

        $land = new Land();
        Log::info('landdatas');

        $land->comune = $landData->comune;
        $land->foto = $landData->foto;
        $land->dimensione = $landData->dimensione;
        $land->foglio = $landData->foglio;
        $land->mappale = $landData->mappale;
        $land->parcella = $landData->parcella;
        $land->terreno = $landData->terreno;
        $land->irrigazione = $landData->irrigazione;
        $land->offerta = $landData->offerta;
        $land->canone = $landData->canone;
        $land->disponibile = $landData->disponibile;

        $land->save();
        return $land;
    }
    public function modify(Request $req, $id)
    {
        $landData = json_decode($req->getContent());

        $editLand = Land::find($id);
        Log::info("requetstsefas");
        Log::info($req);
        Log::info($landData->linguaggio);

        $editLand->comune = $landData->comune;
        $editLand->foto = $landData->foto;
        $editLand->dimensione = $landData->dimensione;
        $editLand->foglio = $landData->foglio;
        $editLand->mappale = $landData->mappale;
        $editLand->parcella = $landData->parcella;
        $editLand->terreno = $landData->terreno;
        $editLand->irrigazione = $landData->irrigazione;
        $editLand->offerta = $landData->offerta;
        $editLand->canone = $landData->canone;
        $editLand->disponibile = $landData->disponibile;

        $editLand->save();
        return $editLand;
    }
    public function delete($id)
    {
        return Land::destroy($id);
    }
}
