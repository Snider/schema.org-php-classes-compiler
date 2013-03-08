<?php

class Thing_MedicalEntity_AnatomicalStructure_Vessel_LymphaticVessel extends Thing_MedicalEntity_AnatomicalStructure_Vessel{

             /**
              * The vasculature the lymphatic structure originates, or afferents, from.
              *
              * @var $originatesFrom Thing_MedicalEntity_AnatomicalStructure_Vessel
              */
              public $originatesFrom;

             /**
              * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
              *
              * @var $regionDrained Thing_MedicalEntity_AnatomicalSystem|Thing_MedicalEntity_AnatomicalStructure
              */
              public $regionDrained;

             /**
              * The vasculature the lymphatic structure runs, or efferents, to.
              *
              * @var $runsTo Thing_MedicalEntity_AnatomicalStructure_Vessel
              */
              public $runsTo;
}