<?php

try {
    $DB = new PDO('mysql:host=localhost; dbname=projet_calendrier', 'root' , '' , array(PDO::MYSQL_ATTR_INIT_COMMAND => 'set names UTF8'));
}
catch (PDOException $e){
    echo 'base de donnee en vacance';
    exit();
}

class Date{

    var $days = array('Lundi' , 'Mardi' , 'Mercredi' , 'Jeudi' , 'Vendredi' , 'Samedi' , 'Dimanche');
    var $months = array('Janvier' , 'Fevrier' , 'Mars' , 'Avril' , 'Mai' , 'Juin' , 'Juillet' , 'Aout' , 'Septembre' , 'Octobre' , 'Novembre' , 'Decembre');

    function getEvents($year){
        global $DB;

        $sql = 'SELECT id_appointment, date,  hour FROM appointments ';


        $requete = $DB->query($sql);

        $r = array();
        while ($d = $requete->fetch(PDO::FETCH_OBJ)){

            //$r[strtotime($d->date)] = $d->hour  ;
            $r[strtotime($d->date)][$d->id_appointment] = $d->hour;
            //$r=$d->hour;

            //print_r($r);
        }
        return $r;
    }

    function getAll($year){
        $r = array();

        $date = new DateTime($year.'-01-01');
        while ($date->format('y') <= $year){

            $y = $date->format('y');
            $m = $date->format('n');
            $d = $date->format('j');
            $w = str_replace('0','7', $date->format('w'));
            $r[$y][$m][$d] = $w;
            $date->add(new DateInterval('P1D'));
        }


        return $r;
    }
}


