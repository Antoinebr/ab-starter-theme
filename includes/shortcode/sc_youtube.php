<?php

function ab_youtube($params) {
  $url = $params[0];


  if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match)) {
    $video_id = $match[1];
  }

  if( isset($match[0]) ){

    $youtube_id = $match[1];
    $youtube_thumbnail = "http://img.youtube.com/vi/$youtube_id/hqdefault.jpg";
    $youtube_url = "http://www.youtube.com/v/$youtube_id";
    $youtube_url_secure = "https://www.youtube.com/v/$youtube_id";

    $urlEmbed = "http://www.youtube.com/embed/$youtube_id";

  }

  return "<div class='embed-container'><iframe src='$urlEmbed' frameborder='0' allowfullscreen></iframe></div>";


}

add_shortcode('youtube', 'ab_youtube');
// [youtube=http://www.youtube.com/watch?v=56ZxZOIoyvQ]
