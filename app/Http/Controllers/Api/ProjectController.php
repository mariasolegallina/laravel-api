<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {

        $projects = Project::all();

        // per ricevere i post con paginazione
        // $projects = Project::paginate(2);

        // per ricevere i post E tutte i types
        // $projects = Project::with(['type'])->paginate(2);

        return response()->json([
            "success" => true,
            "results" => $projects
        ]);

    }

    public function show($id) {

        // $project = Project::with(['type'])->where('slug', '=', $slug)->first();

        // possiamo scrivere la stessa cosa in questo modo:
        // ->find() cerca la riga della tabella che abbia la chiave primaria (id) uguale al valore che passiamo tra parentesi
        $project = Project::with(['type'])->find($id);

        // la query che risulta da questa espressione è:
        // "SELECT *
        // FROM projects
        // INNER JOIN type
        // ON projects.type_id = type.id

        if($project) {
            return response()->json([
                "success" => true,
                "project" => $project
            ]);

        } else {
            return response()->json([
                "success" => false,
                "error" => "Project not found"
            ]);
        }

}
}