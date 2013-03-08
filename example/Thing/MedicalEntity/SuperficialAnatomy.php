<?php

class Thing_MedicalEntity_SuperficialAnatomy extends Thing_MedicalEntity{

             /**
              * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.
              *
              * @var $associatedPathophysiology string
              */
              public $associatedPathophysiology;

             /**
              * Anatomical systems or structures that relate to the superficial anatomy.
              *
              * @var $relatedAnatomy Thing_MedicalEntity_AnatomicalStructure|Thing_MedicalEntity_AnatomicalSystem
              */
              public $relatedAnatomy;

             /**
              * A medical condition associated with this anatomy.
              *
              * @var $relatedCondition Thing_MedicalEntity_MedicalCondition
              */
              public $relatedCondition;

             /**
              * A medical therapy related to this anatomy.
              *
              * @var $relatedTherapy Thing_MedicalEntity_MedicalTherapy
              */
              public $relatedTherapy;

             /**
              * The significance associated with the superficial anatomy; as an example, how characteristics of the superficial anatomy can suggest underlying medical conditions or courses of treatment.
              *
              * @var $significance string
              */
              public $significance;
}