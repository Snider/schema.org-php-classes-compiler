<?php

class Thing_CreativeWork_WebPage extends Thing_CreativeWork{

             /**
              * A set of links that can help a user understand and navigate a website hierarchy.
              *
              * @var $breadcrumb string
              */
              public $breadcrumb;

             /**
              * Indicates the collection or gallery to which the item belongs.
              *
              * @var $isPartOf Thing_CreativeWork_WebPage_CollectionPage
              */
              public $isPartOf;

             /**
              * Date on which the content on this web page was last reviewed for accuracy and/or completeness.
              *
              * @var $lastReviewed Date
              */
              public $lastReviewed;

             /**
              * Indicates if this web page element is the main subject of the page.
              *
              * @var $mainContentOfPage Thing_CreativeWork_WebPageElement
              */
              public $mainContentOfPage;

             /**
              * Indicates the main image on the page
              *
              * @var $primaryImageOfPage Thing_CreativeWork_MediaObject_ImageObject
              */
              public $primaryImageOfPage;

             /**
              * A link related to this web page, for example to other related web pages.
              *
              * @var $relatedLink string
              */
              public $relatedLink;

             /**
              * People or organizations that have reviewed the content on this web page for accuracy and/or completeness.
              *
              * @var $reviewedBy Thing_Organization|Thing_Person
              */
              public $reviewedBy;

             /**
              * One of the more significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most.
              *
              * @var $significantLink string
              */
              public $significantLink;

             /**
              * The most significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most (legacy spelling; see singular form, significantLink).
              *
              * @var $significantLinks string
              */
              public $significantLinks;

             /**
              * One of the domain specialities to which this web page's content applies.
              *
              * @var $specialty Thing_Intangible_Enumeration_Specialty
              */
              public $specialty;
}