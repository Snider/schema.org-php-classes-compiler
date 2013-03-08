<?php

class Thing_MedicalEntity_MedicalGuideline extends Thing_MedicalEntity{

             /**
              * Strength of evidence of the data used to formulate the guideline (enumerated).
              *
              * @var $evidenceLevel Thing_MedicalEntity_MedicalIntangible_MedicalEnumeration_MedicalEvidenceLevel
              */
              public $evidenceLevel;

             /**
              * Source of the data used to formulate the guidance, e.g. RCT, consensus opinion, etc.
              *
              * @var $evidenceOrigin string
              */
              public $evidenceOrigin;

             /**
              * Date on which this guideline's recommendation was made.
              *
              * @var $guidelineDate Date
              */
              public $guidelineDate;

             /**
              * The medical conditions, treatments, etc. that are the subject of the guideline.
              *
              * @var $guidelineSubject Thing_MedicalEntity
              */
              public $guidelineSubject;
}