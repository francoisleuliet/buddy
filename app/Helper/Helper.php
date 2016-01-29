<?php

namespace Helper;

use AdamWathan\Form as Form;
use Manager\RechercheManager;

class Helper
{
    public function getLibelles()
    {

        $manager = new RechercheManager;
        $manager->setTable('categorie');
        $resultats = $manager->findCat();              

        foreach ($resultats as $values) {
            //print_r($values);
            $libelles[] = $values;
        }

        //debug($libelles);

        $manager->setTable('ss_categorie');
        $resultats2=$manager->findSsCat();              

        foreach ($resultats2 as $values) {
            $sslibelles[] = $values;
        }

        return [$libelles,$sslibelles];

    }

}

