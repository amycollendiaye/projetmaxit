<?php

namespace  Src\Entity ;

 enum TypeTransaction :string
 {
        case PAIEMENT="paiement";
        case DEPOT= "depot";
        case RETRAIT= "retrait";
 }