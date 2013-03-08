<?php

class Thing_Intangible_StructuredValue_ContactPoint_PostalAddress extends Thing_Intangible_StructuredValue_ContactPoint{

             /**
              * The country. For example, USA. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
              *
              * @var $addressCountry Thing_Place_AdministrativeArea_Country
              */
              public $addressCountry;

             /**
              * The locality. For example, Mountain View.
              *
              * @var $addressLocality string
              */
              public $addressLocality;

             /**
              * The region. For example, CA.
              *
              * @var $addressRegion string
              */
              public $addressRegion;

             /**
              * The postal code. For example, 94043.
              *
              * @var $postalCode string
              */
              public $postalCode;

             /**
              * The post offce box number for PO box addresses.
              *
              * @var $postOfficeBoxNumber string
              */
              public $postOfficeBoxNumber;

             /**
              * The street address. For example, 1600 Amphitheatre Pkwy.
              *
              * @var $streetAddress string
              */
              public $streetAddress;
}