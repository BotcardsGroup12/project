<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Application {

    /**
     * Index Page for this controller.
     */
    public function index()
    {
        $this->data['pagebody'] = 'home';
        
        

        // Load bot pieces summary
        $seriesTab = $this->series->all();
        $series = array();
        foreach ($seriesTab as $row) {
            $item = array(
                'Series' => $row->Series,
                'Description' => $row->Description,
                'Frequency' => $row->Frequency,
                'Value' => $row->Value,
                'Acquired' => 0
            );
            $series[] = $item;
        }
        
        $collection['collection'] = $series;
        $this->data['botPieces'] = $this->parser->parse('_botPieces', $collection, true);
        
        
        // Load players stats
        $playersTab = $this->players->all();
        $players = array();
        foreach ($playersTab as $row) {
            $item = array(
                'playerName' => $row->Player,
                'equity' => (count($this->collections->some('Player', $row->Player)) + $row->Peanuts),
                'peanuts' => $row->Peanuts
            );
            $players[] = $item;
        }
        
        $collection['collection'] = $players;
        $this->data['playersStats'] = $this->parser->parse('_playersStats', $collection, true);
        
        
        $this->render();
    }
}
