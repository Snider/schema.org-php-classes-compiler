<?php

class Thing_MedicalEntity_MedicalIntangible_DrugCost extends Thing_MedicalEntity_MedicalIntangible{

             /**
              * The location in which the status applies.
              *
              * @var $applicableLocation Thing_Place_AdministrativeArea
              */
              public $applicableLocation;

             /**
              * The category of cost, such as wholesale, retail, reimbursement cap, etc.
              *
              * @var $costCategory Thing_MedicalEntity_MedicalIntangible_MedicalEnumeration_DrugCostCategory
              */
              public $costCategory;

             /**
              * The currency (in 3-letter ISO 4217 format) of the drug cost.
              *
              * @var $costCurrency string
              */
              public $costCurrency;

             /**
              * Additional details to capture the origin of the cost data. For example, 'Medicare Part B'.
              *
              * @var $costOrigin string
              */
              public $costOrigin;

             /**
              * The cost per unit of the drug.
              *
              * @var $costPerUnit Number|string
              */
              public $costPerUnit;

             /**
              * The unit in which the drug is measured, e.g. '5 mg tablet'.
              *
              * @var $drugUnit string
              */
              public $drugUnit;
}