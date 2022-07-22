<?php

/**
 * @file
 * Post Update file.
 */

/**
 * Remove view mode for media_card_caption.
 */
function osu_media_post_update_remove_card_caption_display(&$sandbox) {
  /** @var \Drupal\Core\Config\Config $media_card_caption_image_display */
  $media_card_caption_image_display = \Drupal::service('config.factory')
    ->getEditable('core.entity_view_display.media.image.media_card_caption');
  $media_card_caption_image_display->delete();
  /** @var \Drupal\Core\Config\Config $media_card_caption_remote_video_display */
  $media_card_caption_remote_video_display = \Drupal::service('config.factory')
    ->getEditable('core.entity_view_display.media.remote_video.media_card_caption');
  $media_card_caption_remote_video_display->delete();
  /** @var \Drupal\Core\Config\Config $media_card_caption */
  $media_card_caption = \Drupal::service('config.factory')
    ->getEditable('core.entity_view_mode.media.media_card_caption');
  $media_card_caption->delete();
}
