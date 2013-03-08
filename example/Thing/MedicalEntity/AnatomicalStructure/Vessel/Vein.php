<?php

class Thing_MedicalEntity_AnatomicalStructure_Vessel_Vein extends Thing_MedicalEntity_AnatomicalStructure_Vessel{

             /**
              * The vasculature that the vein drains into.
              *
              * @var $drainsTo Thing_MedicalEntity_AnatomicalStructure_Vessel
              */
              public $drainsTo;

             /**
              * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
              *
              * @var $regionDrained Thing_MedicalEntity_AnatomicalSystem|Thing_MedicalEntity_AnatomicalStructure
              */
              public $regionDrained;

             /**
              * The anatomical or organ system that the vein flows into; a larger structure that the vein connects to.
              *
              * @var $tributary Thing_MedicalEntity_AnatomicalStructure
              */
              public $tributary;
}