<?php

namespace App\Http\Controllers;

class SurveyController extends Controller
{

    public function index() 
    {
        $this->results();
        return view('survey.index');
    }

    public function stats() 
    {
        $json = file_get_contents(base_path('database/votes.json'));
        $votes = json_decode($json, true);

        $results = $this->results();

        return view('survey.stats', compact(['votes', 'results']));
    }

    // ['ssbm' => 18, 'ssf4' => 7, 's4' => 75, 'mku' => 25 ] in %
    public function results() : mixed 
    {
        $json = file_get_contents(base_path('database/votes.json'));
        $votes = json_decode($json, true);

        $results = ['ssbm' => 0, 'ssf4' => 0, 's4' => 0, 'mku' => 0];
        foreach($votes['votes'] as $vote) {
            switch ($vote['choice']) {
                case 'ssbm':
                    $results['ssbm']++;
                    break;
                case 'ssf4':
                    $results['ssf4']++;
                    break;
                case 's4':
                    $results['s4']++;
                    break;
                case 'mku':
                    $results['mku']++;
                    break;
                default:
                    throw new Exception('Unexpected fight game name on votes.json.');
                    break;
            }   
        }

        $results['ssbm'] = round(($results['ssbm'] / count($votes['votes'])) * 100, 2);
        $results['ssf4'] = round(($results['ssf4'] / count($votes['votes'])) * 100, 2);
        $results['s4'] = round(($results['s4'] / count($votes['votes'])) * 100, 2);
        $results['mku'] = round(($results['mku'] / count($votes['votes'])) * 100, 2);

        return $results;
    }

}
