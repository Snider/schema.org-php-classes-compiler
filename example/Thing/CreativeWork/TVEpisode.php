<?php

class Thing_CreativeWork_TVEpisode extends Thing_CreativeWork{

             /**
              * A cast member of the movie, TV series, season, or episode, or video.
              *
              * @var $actor Thing_Person
              */
              public $actor;

             /**
              * A cast member of the movie, TV series, season, or episode, or video. (legacy spelling; see singular form, actor)
              *
              * @var $actors Thing_Person
              */
              public $actors;

             /**
              * The director of the movie, TV episode, or series.
              *
              * @var $director Thing_Person
              */
              public $director;

             /**
              * The episode number.
              *
              * @var $episodeNumber Number
              */
              public $episodeNumber;

             /**
              * The composer of the movie or TV soundtrack.
              *
              * @var $musicBy Thing_Person|Thing_Organization_PerformingGroup_MusicGroup
              */
              public $musicBy;

             /**
              * The season to which this episode belongs.
              *
              * @var $partOfSeason Thing_CreativeWork_TVSeason
              */
              public $partOfSeason;

             /**
              * The TV series to which this episode or season belongs.
              *
              * @var $partOfTVSeries Thing_CreativeWork_TVSeries
              */
              public $partOfTVSeries;

             /**
              * The producer of the movie, TV series, season, or episode, or video.
              *
              * @var $producer Thing_Person
              */
              public $producer;

             /**
              * The production company or studio that made the movie, TV series, season, or episode, or video.
              *
              * @var $productionCompany Thing_Organization
              */
              public $productionCompany;

             /**
              * The trailer of the movie or TV series, season, or episode.
              *
              * @var $trailer Thing_CreativeWork_MediaObject_VideoObject
              */
              public $trailer;
}