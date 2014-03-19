This project is an effort to enable imageboards to host small video clips.  With modern video compression, it's possible to share much higher-quality videos in a few megabytes than what you can do with animated GIF files.

The software here can be used to extend an imageboard software to display metadata and create pseudo-thumbnails for WebM video files.  It is intended to work on very basic web hosting services.  In particular, it does not depend on any external video conversion software such as FFmpeg or Libav.  Rather, it parses the video container to extract a single frame from the video to use in place of a thumbnail.  If you can run FFmpeg or Libav on your server, it's a good idea to modify this code to use those tools to create true thumbnails; in the future, an option will be added to enable this.

A board using this code can be found at:
http://containerchan.org/tb/demo/

Be aware that this is beta software.  Please report any bugs you find.

This branch contains code not specific to any particular imageboard software.

License
-------

[CC0](https://github.com/ccd0/containerchan/blob/core/LICENSE.md)
