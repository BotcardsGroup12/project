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
        $this->data['countdown'] = $sxml->countdown;

        $_SESSION['current_round'] = (string)$sxml->round;
        
        if ($status == 2 || $status == 3) {
            $_SESSION["register"] = "open";
        } else {
            $_SESSION["register"] = "closed";
        }

        $this->data['gameStatus'] = $this->parser->parse('_gameStatus', $this->data, true);
        $series = array();
        
        // Load series info from server
        if (($handle = fopen($this->serverUrl.'data/series', "r")) !== FALSE) {
            # Set the parent multidimensional array key to 0.
            $nn = 0;
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                # Count the total keys in the row.
                $c = count($data);

                $item = array(
                    'Series' => (string)$data[0],
                    'Description' => (string)$data[1],
                    'Frequency' => (string)$data[2],
                    'Value' => (string)$data[3],
                    'Acquired' => 0
                );
                if ( $nn > 0) $series[] = $item;
                $nn++;
            }
            # Close the File.
            fclose($handle);
        }
        $collection['collection'] = $series;
        $this->data['botPieces'] = $this->parser->parse('_botPieces', $collection, true);


        // Load players stats
        $playersTab = $this->players->all();
        $players = array();
        foreach ($playersTab as $row) {
            $item = array(
                'avatar' => $row->Avatar,
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
        redirect('/');
    }

    function agentregister() {
        
        //Load Game Status
        //$url =  $this->serverUrl.'status';
        //$sxml = simplexml_load_file($url);
        //$_SESSION['registered_round'] = (string)$sxml->round; 
        $_SESSION['registered_round'] = $_SESSION['current_round']; 
        
        $url = $this->serverUrl.'register';
        $data = array(
            'team' => (string)'B12',
            'name' => 'Group12LOL',
            'password' => (string)'tuesday'
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
        
        $sxml = simplexml_load_string($result);
        $_SESSION['token'] = (string)$sxml->token;
        
        redirect('/home', 'refresh');
    }

    function buy_card() {
        $url = $this->serverUrl.'buy';
        $data = array(
            'team' => (string)'B12',
            'token' =>  (string)$_SESSION['token'],
            'player' => (string)$_SESSION['username']
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
        $sxml = simplexml_load_string($result);
        
        echo (string)$sxml->team;
        echo (string)$sxml->player;
        
        redirect('/home');
    }

}
