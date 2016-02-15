<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Application {

    /**
     * Index Page for this controller.
     */
    public function index()
    {
        $this->data['pagebody'] = 'home';

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
        
        $summary['collection'] = $series;
        $this->data['botPieces'] = $this->parser->parse('_botPieces', $summary, true);
        
        $this->render();
    }
}
