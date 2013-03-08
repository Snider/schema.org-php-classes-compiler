<?php

class Thing_CreativeWork_MusicPlaylist extends Thing_CreativeWork{

             /**
              * The number of tracks in this album or playlist.
              *
              * @var $numTracks Integer
              */
              public $numTracks;

             /**
              * A music recording (track)—usually a single song.
              *
              * @var $track Thing_CreativeWork_MusicRecording
              */
              public $track;

             /**
              * A music recording (track)—usually a single song (legacy spelling; see singular form, track).
              *
              * @var $tracks Thing_CreativeWork_MusicRecording
              */
              public $tracks;
}