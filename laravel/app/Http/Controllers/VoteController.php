<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoteController extends Controller
{

    public function store(Request $request) 
    {
        // Récupération des données du fichier json
        $oldJson = file_get_contents(base_path('database/votes.json'));
        $votes = json_decode($oldJson, true);

        // Ecriture de la nouvelle réponse dans le fichier json
        $data = [
            'username' => trim(strtolower($request->input('username'))), 
            'choice' => $request->input('choice')
        ];
        $votes['votes'][] = $data;
        $newJson = json_encode($votes, JSON_PRETTY_PRINT);
        file_put_contents(base_path('database/votes.json'), stripslashes($newJson));

        return redirect()->route('survey.index');
    }

}
