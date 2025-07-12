<?php

namespace App\Entity;

enum StatutTransaction:string {
    case VALIDE = 'VALIDE';
    case ANNULE = 'ANNULE';
}