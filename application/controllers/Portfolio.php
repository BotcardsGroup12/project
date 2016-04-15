<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends Application {

    /**
     * Handle portfolio page
     */
    public function index($playerName = null) {
        $this->data['pagebody'] = 'portfolio';

        // Load from session if none selected
        if (is_null($playerName) || $playerName == "") {
            if (!is_null($this->session->username)) {
                $playerName = $this->session->username;
            }
        }
        $this->data['playerName'] = $playerName;


        // Load players dropdown
        $playersTab = $this->players->all();
        $options = array();

        foreach ($playersTab as $row) {
            $option['playerName'] = $row->Player;
            if ($playerName == $row->Player) {
                $option['selected'] = "selected=\"selected\"";
            } else {
                $option['selected'] = "";
            }
            $options[] = $option;
        }
        $players['options'] = $options;
        $this->data['playersOptions'] = $this->parser->parse('_playersOptions', $players, true);

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

        // Load cards
        $collectionsTab = $this->collections->some('Player', $playerName);
        $inventory = array();
        foreach ($collectionsTab as $row) {
            $item = array(
                $inventory[] = $row->Piece
            );
        }

        $itemsCount = array_count_values($inventory);
        ksort($itemsCount);

        $sortedList = array();
        foreach ($itemsCount as $key => $value) {
            $item['code'] = $key;
            $item['Series'] = substr($key, 0, 2);
            $item['Quantity'] = $value;
            $sortedList[] = $item;
        }

        $collection['collection'] = $sortedList;
        $this->data['inventory'] = $this->parser->parse('_inventory', $collection, true);


        // Render dummy trade log for now

        $tradeList = array();
        for ($x = 0; $x <= 10; $x++) {
            $item['tradeEntry'] = "Bought " . $x . " of something ";
            $tradeList[] = $item;
        }
        $collection['collection'] = $tradeList;
        $this->data['trades'] = $this->parser->parse('_trades', $collection, true);


        $this->render();
    }

}
