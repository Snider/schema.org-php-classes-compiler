<?php

class Thing_CreativeWork_SoftwareApplication extends Thing_CreativeWork{

             /**
              * Type of software application, e.g. "Game, Multimedia".
              *
              * @var $applicationCategory string|string
              */
              public $applicationCategory;

             /**
              * Subcategory of the application, e.g. "Arcade Game".
              *
              * @var $applicationSubCategory string|string
              */
              public $applicationSubCategory;

             /**
              * The name of the application suite to which the application belongs (e.g. Excel belongs to Office)
              *
              * @var $applicationSuite string
              */
              public $applicationSuite;

             /**
              * Countries for which the application is not supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
              *
              * @var $countriesNotSupported string
              */
              public $countriesNotSupported;

             /**
              * Countries for which the application is supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
              *
              * @var $countriesSupported string
              */
              public $countriesSupported;

             /**
              * Device required to run the application. Used in cases where a specific make/model is required to run the application.
              *
              * @var $device string
              */
              public $device;

             /**
              * If the file can be downloaded, URL to download the binary.
              *
              * @var $downloadUrl string
              */
              public $downloadUrl;

             /**
              * Features or modules provided by this application (and possibly required by other applications).
              *
              * @var $featureList string|string
              */
              public $featureList;

             /**
              * MIME format of the binary (e.g. application/zip).
              *
              * @var $fileFormat string
              */
              public $fileFormat;

             /**
              * Size of the application / package (e.g. 18MB). In the absence of a unit (MB, KB etc.), KB will be assumed.
              *
              * @var $fileSize Integer
              */
              public $fileSize;

             /**
              * URL at which the app may be installed, if different from the URL of the item.
              *
              * @var $installUrl string
              */
              public $installUrl;

             /**
              * Minimum memory requirements.
              *
              * @var $memoryRequirements string|string
              */
              public $memoryRequirements;

             /**
              * Operating systems supported (Windows 7, OSX 10.6, Android 1.6).
              *
              * @var $operatingSystem string
              */
              public $operatingSystem;

             /**
              * Permission(s) required to run the app (for example, a mobile app may require full internet access or may run only on wifi).
              *
              * @var $permissions string
              */
              public $permissions;

             /**
              * Processor architecture required to run the application (e.g. IA64).
              *
              * @var $processorRequirements string
              */
              public $processorRequirements;

             /**
              * Description of what changed in this version.
              *
              * @var $releaseNotes string|string
              */
              public $releaseNotes;

             /**
              * Component dependency requirements for application. This includes runtime environments and shared libraries that are not included in the application distribution package, but required to run the application (Examples: DirectX, Java or .NET runtime).
              *
              * @var $requirements string|string
              */
              public $requirements;

             /**
              * A link to a screenshot image of the app.
              *
              * @var $screenshot Thing_CreativeWork_MediaObject_ImageObject|string
              */
              public $screenshot;

             /**
              * Version of the software instance.
              *
              * @var $softwareVersion string
              */
              public $softwareVersion;

             /**
              * Storage requirements (free space required).
              *
              * @var $storageRequirements string|string
              */
              public $storageRequirements;
}