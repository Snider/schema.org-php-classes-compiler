<?php

class Thing_MedicalEntity_MedicalStudy_MedicalObservationalStudy extends Thing_MedicalEntity_MedicalStudy{

             /**
              * Specifics about the observational study design (enumerated).
              *
              * @var $studyDesign Thing_MedicalEntity_MedicalIntangible_MedicalEnumeration_MedicalObservationalStudyDesign
              */
              public $studyDesign;
}