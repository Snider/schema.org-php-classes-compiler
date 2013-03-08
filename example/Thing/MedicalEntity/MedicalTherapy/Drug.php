<?php

class Thing_MedicalEntity_MedicalTherapy_Drug extends Thing_MedicalEntity_MedicalTherapy{

             /**
              * An active ingredient, typically chemical compounds and/or biologic substances.
              *
              * @var $activeIngredient string
              */
              public $activeIngredient;

             /**
              * A route by which this drug may be administered, e.g. 'oral'.
              *
              * @var $administrationRoute string
              */
              public $administrationRoute;

             /**
              * Any precaution, guidance, contraindication, etc. related to consumption of alcohol while taking this drug.
              *
              * @var $alcoholWarning string
              */
              public $alcoholWarning;

             /**
              * An available dosage strength for the drug.
              *
              * @var $availableStrength Thing_MedicalEntity_MedicalIntangible_DrugStrength
              */
              public $availableStrength;

             /**
              * Any precaution, guidance, contraindication, etc. related to this drug's use by breastfeeding mothers.
              *
              * @var $breastfeedingWarning string
              */
              public $breastfeedingWarning;

             /**
              * Description of the absorption and elimination of drugs, including their concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics, pD).
              *
              * @var $clincalPharmacology string
              */
              public $clincalPharmacology;

             /**
              * Cost per unit of the drug, as reported by the source being tagged.
              *
              * @var $cost Thing_MedicalEntity_MedicalIntangible_DrugCost
              */
              public $cost;

             /**
              * A dosage form in which this drug/supplement is available, e.g. 'tablet', 'suspension', 'injection'.
              *
              * @var $dosageForm string
              */
              public $dosageForm;

             /**
              * A dosing schedule for the drug for a given population, either observed, recommended, or maximum dose based on the type used.
              *
              * @var $doseSchedule Thing_MedicalEntity_MedicalIntangible_DoseSchedule
              */
              public $doseSchedule;

             /**
              * The class of drug this belongs to (e.g., statins).
              *
              * @var $drugClass Thing_MedicalEntity_MedicalTherapy_DrugClass
              */
              public $drugClass;

             /**
              * Any precaution, guidance, contraindication, etc. related to consumption of specific foods while taking this drug.
              *
              * @var $foodWarning string
              */
              public $foodWarning;

             /**
              * Another drug that is known to interact with this drug in a way that impacts the effect of this drug or causes a risk to the patient. Note: disease interactions are typically captured as contraindications.
              *
              * @var $interactingDrug Thing_MedicalEntity_MedicalTherapy_Drug
              */
              public $interactingDrug;

             /**
              * True if the drug is available in a generic form (regardless of name).
              *
              * @var $isAvailableGenerically Boolean
              */
              public $isAvailableGenerically;

             /**
              * True if this item's name is a proprietary/brand name (vs. generic name).
              *
              * @var $isProprietary Boolean
              */
              public $isProprietary;

             /**
              * Link to the drug's label details.
              *
              * @var $labelDetails string
              */
              public $labelDetails;

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
              * Any information related to overdose on a drug, including signs or symptoms, treatments, contact information for emergency response.
              *
              * @var $overdosage string
              */
              public $overdosage;

             /**
              * Pregnancy category of this drug.
              *
              * @var $pregnancyCategory Thing_MedicalEntity_MedicalIntangible_MedicalEnumeration_DrugPregnancyCategory
              */
              public $pregnancyCategory;

             /**
              * Any precaution, guidance, contraindication, etc. related to this drug's use during pregnancy.
              *
              * @var $pregnancyWarning string
              */
              public $pregnancyWarning;

             /**
              * Link to prescribing information for the drug.
              *
              * @var $prescribingInfo string
              */
              public $prescribingInfo;

             /**
              * Indicates whether this drug is available by prescription or over-the-counter.
              *
              * @var $prescriptionStatus Thing_MedicalEntity_MedicalIntangible_MedicalEnumeration_DrugPrescriptionStatus
              */
              public $prescriptionStatus;

             /**
              * Any other drug related to this one, for example commonly-prescribed alternatives.
              *
              * @var $relatedDrug Thing_MedicalEntity_MedicalTherapy_Drug
              */
              public $relatedDrug;

             /**
              * Any FDA or other warnings about the drug (text or URL).
              *
              * @var $warning string|string
              */
              public $warning;
}