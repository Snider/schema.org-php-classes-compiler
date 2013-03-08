<?php

class Thing_CreativeWork_MusicRecording extends Thing_CreativeWork{

             /**
              * The artist that performed this album or recording.
              *
              * @var $byArtist Thing_Organization_PerformingGroup_MusicGroup
              */
              public $byArtist;

             /**
              * The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
              *
              * @var $duration Thing_Intangible_Quantity_Duration
              */
              public $duration;

             /**
              * The album to which this recording belongs.
              *
              * @var $inAlbum Thing_CreativeWork_MusicPlaylist_MusicAlbum
              */
              public $inAlbum;

             /**
              * The playlist to which this recording belongs.
              *
              * @var $inPlaylist Thing_CreativeWork_MusicPlaylist
              */
              public $inPlaylist;
}