<?php

class Thing_MedicalEntity_AnatomicalStructure_Nerve extends Thing_MedicalEntity_AnatomicalStructure{

             /**
              * The branches that delineate from the nerve bundle.
              *
              * @var $branch Thing_MedicalEntity_AnatomicalStructure|Thing_MedicalEntity_AnatomicalStructure_Nerve
              */
              public $branch;

             /**
              * The neurological pathway extension that involves muscle control.
              *
              * @var $nerveMotor Thing_MedicalEntity_AnatomicalStructure_Muscle
              */
              public $nerveMotor;

             /**
              * The neurological pathway extension that inputs and sends information to the brain or spinal cord.
              *
              * @var $sensoryUnit Thing_MedicalEntity_AnatomicalStructure|Thing_MedicalEntity_SuperficialAnatomy
              */
              public $sensoryUnit;

             /**
              * The neurological pathway that originates the neurons.
              *
              * @var $sourcedFrom Thing_MedicalEntity_AnatomicalStructure_BrainStructure
              */
              public $sourcedFrom;
}