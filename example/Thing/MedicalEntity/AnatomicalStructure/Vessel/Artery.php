<?php

class Thing_MedicalEntity_AnatomicalStructure_Vessel_Artery extends Thing_MedicalEntity_AnatomicalStructure_Vessel{

             /**
              * The branches that comprise the arterial structure.
              *
              * @var $arterialBranch Thing_MedicalEntity_AnatomicalStructure
              */
              public $arterialBranch;

             /**
              * The anatomical or organ system that the artery originates from.
              *
              * @var $source Thing_MedicalEntity_AnatomicalStructure
              */
              public $source;

             /**
              * The area to which the artery supplies blood to.
              *
              * @var $supplyTo Thing_MedicalEntity_AnatomicalStructure
              */
              public $supplyTo;
}