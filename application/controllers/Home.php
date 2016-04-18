<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Application {

    /**
     * Index Page for this controller.
     */
    public function index() {
        $this->data['pagebody'] = 'home';

        //Load Game Status
        $url =  $this->serverUrl.'status';
        $sxml = simplexml_load_file($url);
        $status = $sxml->state;
        $this->data['current'] = $sxml->current;
        $this->data['round'] = $sxml->round;


        if ($status == 2 || $status == 3) {
            $_SESSION["register"] = "open";
        } else {
            $_SESSION["register"] = "closed";
        }

        $this->data['gameStatus'] = $this->parser->parse('_gameStatus', $this->data, true);

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

    function logout() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('home', 'refresh');
    }

    function agentregister() {

        $url = $this->serverUrl.'register';
        $data = array(
            'team' => 'B12',
            'name' => 'lol',
            'password' => 'tuesday'
        );
        $options = array(
            'http' => array(
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        if ($result === FALSE) { /* Handle error */
        }
        //$_SESSION['token'] = simplexml_load_file($result)->agent->token;
        $sxml = simplexml_load_string($result);
        $_SESSION['token'] = (string)$sxml->token;
        redirect('home');
    }

    function buy_card() {
        $url = $this->serverUrl.'buy';
        $data = array(
            'team' => 'B12',
            'token' =>  $_SESSION['token'],
            'player' => $_SESSION['username']
        );
        $options = array(
            'http' => array(
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        print_r($result);
    }

}
