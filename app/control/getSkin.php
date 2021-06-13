<?php

function pegarHead($nick) {

    if (file_exists('../../assets/img/heads/' . $nick . '.png')) {

        $head = '../../assets/img/heads/' . $nick . '.png';
        
    } else {

        $url = "https://api.mojang.com/users/profiles/minecraft/" . $nick;

        $json = file_get_contents($url);
        $player = json_decode($json);
        
        $head = "https://crafatar.com/avatars/". $player->id . "?size=100";
        
    }

    return $head;
}

function pegarBody($nick) {

    $url = "https://api.mojang.com/users/profiles/minecraft/" . $nick;

    $json = file_get_contents($url);
    $player = json_decode($json);
    
    $head = "https://crafatar.com/renders/body/". $player->id . "?size=100";
    return $head;

}

?>