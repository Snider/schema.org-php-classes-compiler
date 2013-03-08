<?php

class Thing_MedicalEntity_AnatomicalStructure_Muscle extends Thing_MedicalEntity_AnatomicalStructure{

             /**
              * The movement the muscle generates.
              *
              * @var $action string
              */
              public $action;

             /**
              * The muscle whose action counteracts the specified muscle.
              *
              * @var $antagonist Thing_MedicalEntity_AnatomicalStructure_Muscle
              */
              public $antagonist;

             /**
              * The blood vessel that carries blood from the heart to the muscle.
              *
              * @var $bloodSupply Thing_MedicalEntity_AnatomicalStructure_Vessel
              */
              public $bloodSupply;

             /**
              * The place of attachment of a muscle, or what the muscle moves.
              *
              * @var $insertion Thing_MedicalEntity_AnatomicalStructure
              */
              public $insertion;

             /**
              * The underlying innervation associated with the muscle.
              *
              * @var $nerve Thing_MedicalEntity_AnatomicalStructure_Nerve
              */
              public $nerve;

             /**
              * The place or point where a muscle arises.
              *
              * @var $origin Thing_MedicalEntity_AnatomicalStructure
              */
              public $origin;
}