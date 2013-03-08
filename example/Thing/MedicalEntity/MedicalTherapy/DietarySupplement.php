<?php

class Thing_MedicalEntity_MedicalTherapy_DietarySupplement extends Thing_MedicalEntity_MedicalTherapy{

             /**
              * An active ingredient, typically chemical compounds and/or biologic substances.
              *
              * @var $activeIngredient string
              */
              public $activeIngredient;

             /**
              * Descriptive information establishing a historical perspective on the supplement. May include the rationale for the name, the population where the supplement first came to prominence, etc.
              *
              * @var $background string
              */
              public $background;

             /**
              * A dosage form in which this drug/supplement is available, e.g. 'tablet', 'suspension', 'injection'.
              *
              * @var $dosageForm string
              */
              public $dosageForm;

             /**
              * True if this item's name is a proprietary/brand name (vs. generic name).
              *
              * @var $isProprietary Boolean
              */
              public $isProprietary;

             /**
              * The drug or supplement's legal status, including any controlled substance schedules that apply.
              *
              * @var $legalStatus Thing_MedicalEntity_MedicalIntangible_DrugLegalStatus
              */
              public $legalStatus;

             /**
              * The manufacturer of the product.
              *
              * @var $manufacturer Thing_Organization
              */
              public $manufacturer;

             /**
              * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
              *
              * @var $maximumIntake Thing_MedicalEntity_MedicalIntangible_DoseSchedule_MaximumDoseSchedule
              */
              public $maximumIntake;

             /**
              * The specific biochemical interaction through which this drug or supplement produces its pharmacological effect.
              *
              * @var $mechanismOfAction string
              */
              public $mechanismOfAction;

             /**
              * The generic name of this drug or supplement.
              *
              * @var $nonProprietaryName string
              */
              public $nonProprietaryName;

             /**
              * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
              *
              * @var $recommendedIntake Thing_MedicalEntity_MedicalIntangible_DoseSchedule_RecommendedDoseSchedule
              */
              public $recommendedIntake;

             /**
              * Any potential safety concern associated with the supplement. May include interactions with other drugs and foods, pregnancy, breastfeeding, known adverse reactions, and documented efficacy of the supplement.
              *
              * @var $safetyConsideration string
              */
              public $safetyConsideration;

             /**
              * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
              *
              * @var $targetPopulation string
              */
              public $targetPopulation;
}