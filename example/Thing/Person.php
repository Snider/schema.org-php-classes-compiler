<?php

class Thing_Person extends Thing{

             /**
              * An additional name for a Person, can be used for a middle name.
              *
              * @var $additionalName string
              */
              public $additionalName;

             /**
              * Physical address of the item.
              *
              * @var $address Thing_Intangible_StructuredValue_ContactPoint_PostalAddress
              */
              public $address;

             /**
              * An organization that this person is affiliated with. For example, a school/university, a club, or a team.
              *
              * @var $affiliation Thing_Organization
              */
              public $affiliation;

             /**
              * An educational organizations that the person is an alumni of.
              *
              * @var $alumniOf Thing_Organization_EducationalOrganization
              */
              public $alumniOf;

             /**
              * An award won by this person or for this creative work.
              *
              * @var $award string
              */
              public $award;

             /**
              * Awards won by this person or for this creative work. (legacy spelling; see singular form, award)
              *
              * @var $awards string
              */
              public $awards;

             /**
              * Date of birth.
              *
              * @var $birthDate Date
              */
              public $birthDate;

             /**
              * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
              *
              * @var $brand Thing_Organization|Thing_Intangible_Brand
              */
              public $brand;

             /**
              * A child of the person.
              *
              * @var $children Thing_Person
              */
              public $children;

             /**
              * A colleague of the person.
              *
              * @var $colleague Thing_Person
              */
              public $colleague;

             /**
              * A colleague of the person (legacy spelling; see singular form, colleague).
              *
              * @var $colleagues Thing_Person
              */
              public $colleagues;

             /**
              * A contact point for a person or organization.
              *
              * @var $contactPoint Thing_Intangible_StructuredValue_ContactPoint
              */
              public $contactPoint;

             /**
              * A contact point for a person or organization (legacy spelling; see singular form, contactPoint).
              *
              * @var $contactPoints Thing_Intangible_StructuredValue_ContactPoint
              */
              public $contactPoints;

             /**
              * Date of death.
              *
              * @var $deathDate Date
              */
              public $deathDate;

             /**
              * The Dun & Bradstreet DUNS number for identifying an organization or business person.
              *
              * @var $duns string
              */
              public $duns;

             /**
              * Email address.
              *
              * @var $email string
              */
              public $email;

             /**
              * Family name. In the U.S., the last name of an Person. This can be used along with givenName instead of the Name property.
              *
              * @var $familyName string
              */
              public $familyName;

             /**
              * The fax number.
              *
              * @var $faxNumber string
              */
              public $faxNumber;

             /**
              * The most generic uni-directional social relation.
              *
              * @var $follows Thing_Person
              */
              public $follows;

             /**
              * Gender of the person.
              *
              * @var $gender string
              */
              public $gender;

             /**
              * Given name. In the U.S., the first name of a Person. This can be used along with familyName instead of the Name property.
              *
              * @var $givenName string
              */
              public $givenName;

             /**
              * The Global Location Number (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
              *
              * @var $globalLocationNumber string
              */
              public $globalLocationNumber;

             /**
              * Points-of-Sales operated by the organization or person.
              *
              * @var $hasPOS Thing_Place
              */
              public $hasPOS;

             /**
              * A contact location for a person's residence.
              *
              * @var $homeLocation Thing_Intangible_StructuredValue_ContactPoint|Thing_Place
              */
              public $homeLocation;

             /**
              * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
              *
              * @var $honorificPrefix string
              */
              public $honorificPrefix;

             /**
              * An honorific suffix preceding a Person's name such as M.D. /PhD/MSCSW.
              *
              * @var $honorificSuffix string
              */
              public $honorificSuffix;

             /**
              * A count of a specific user interactions with this item—for example, 20 UserLikes, 5 UserComments, or 300 UserDownloads. The user interaction type should be one of the sub types of UserInteraction.
              *
              * @var $interactionCount string
              */
              public $interactionCount;

             /**
              * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
              *
              * @var $isicV4 string
              */
              public $isicV4;

             /**
              * The job title of the person (for example, Financial Manager).
              *
              * @var $jobTitle string
              */
              public $jobTitle;

             /**
              * The most generic bi-directional social/work relation.
              *
              * @var $knows Thing_Person
              */
              public $knows;

             /**
              * A pointer to products or services offered by the organization or person.
              *
              * @var $makesOffer Thing_Intangible_Offer
              */
              public $makesOffer;

             /**
              * An organization to which the person belongs.
              *
              * @var $memberOf Thing_Organization
              */
              public $memberOf;

             /**
              * The North American Industry Classification System (NAICS) code for a particular organization or business person.
              *
              * @var $naics string
              */
              public $naics;

             /**
              * Nationality of the person.
              *
              * @var $nationality Thing_Place_AdministrativeArea_Country
              */
              public $nationality;

             /**
              * Products owned by the organization or person.
              *
              * @var $owns Thing_Intangible_StructuredValue_OwnershipInfo|Thing_Product
              */
              public $owns;

             /**
              * A parent of this person.
              *
              * @var $parent Thing_Person
              */
              public $parent;

             /**
              * A parents of the person (legacy spelling; see singular form, parent).
              *
              * @var $parents Thing_Person
              */
              public $parents;

             /**
              * Event that this person is a performer or participant in.
              *
              * @var $performerIn Thing_Event
              */
              public $performerIn;

             /**
              * The most generic familial relation.
              *
              * @var $relatedTo Thing_Person
              */
              public $relatedTo;

             /**
              * A pointer to products or services sought by the organization or person (demand).
              *
              * @var $seeks Thing_Intangible_Demand
              */
              public $seeks;

             /**
              * A sibling of the person.
              *
              * @var $sibling Thing_Person
              */
              public $sibling;

             /**
              * A sibling of the person (legacy spelling; see singular form, sibling).
              *
              * @var $siblings Thing_Person
              */
              public $siblings;

             /**
              * The person's spouse.
              *
              * @var $spouse Thing_Person
              */
              public $spouse;

             /**
              * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
              *
              * @var $taxID string
              */
              public $taxID;

             /**
              * The telephone number.
              *
              * @var $telephone string
              */
              public $telephone;

             /**
              * The Value-added Tax ID of the organisation or person.
              *
              * @var $vatID string
              */
              public $vatID;

             /**
              * A contact location for a person's place of work.
              *
              * @var $workLocation Thing_Intangible_StructuredValue_ContactPoint|Thing_Place
              */
              public $workLocation;

             /**
              * Organizations that the person works for.
              *
              * @var $worksFor Thing_Organization
              */
              public $worksFor;
}