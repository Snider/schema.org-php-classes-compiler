<?php

class Thing_CreativeWork_MediaObject_ImageObject extends Thing_CreativeWork_MediaObject{

             /**
              * The caption for this object.
              *
              * @var $caption string
              */
              public $caption;

             /**
              * exif data for this object.
              *
              * @var $exifData string
              */
              public $exifData;

             /**
              * Indicates whether this image is representative of the content of the page.
              *
              * @var $representativeOfPage Boolean
              */
              public $representativeOfPage;

             /**
              * Thumbnail image for an image or video.
              *
              * @var $thumbnail Thing_CreativeWork_MediaObject_ImageObject
              */
              public $thumbnail;
}