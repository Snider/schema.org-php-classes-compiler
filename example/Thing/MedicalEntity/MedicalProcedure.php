<?php

class Thing_MedicalEntity_MedicalProcedure extends Thing_MedicalEntity{

             /**
              * Typical or recommended followup care after the procedure is performed.
              *
              * @var $followup string
              */
              public $followup;

             /**
              * How the procedure is performed.
              *
              * @var $howPerformed string
              */
              public $howPerformed;

             /**
              * Typical preparation that a patient must undergo before having the procedure performed.
              *
              * @var $preparation string
              */
              public $preparation;

             /**
              * The type of procedure, for example Surgical, Noninvasive, or Percutaneous.
              *
              * @var $procedureType Thing_MedicalEntity_MedicalIntangible_MedicalEnumeration_MedicalProcedureType
              */
              public $procedureType;
}