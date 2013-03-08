<?php

class Thing_CreativeWork_MediaObject_VideoObject extends Thing_CreativeWork_MediaObject{

             /**
              * The caption for this object.
              *
              * @var $caption string
              */
              public $caption;

             /**
              * The production company or studio that made the movie, TV series, season, or episode, or video.
              *
              * @var $productionCompany Thing_Organization
              */
              public $productionCompany;

             /**
              * Thumbnail image for an image or video.
              *
              * @var $thumbnail Thing_CreativeWork_MediaObject_ImageObject
              */
              public $thumbnail;

             /**
              * If this MediaObject is an AudioObject or VideoObject, the transcript of that object.
              *
              * @var $transcript string
              */
              public $transcript;

             /**
              * The frame size of the video.
              *
              * @var $videoFrameSize string
              */
              public $videoFrameSize;

             /**
              * The quality of the video.
              *
              * @var $videoQuality string
              */
              public $videoQuality;
}