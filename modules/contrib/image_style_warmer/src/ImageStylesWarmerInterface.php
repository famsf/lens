<?php

namespace Drupal\image_style_warmer;

use Drupal\file\FileInterface;

/**
 * Provides an interface defining an image styles warmer.
 */
interface ImageStylesWarmerInterface {

  /**
   * Init warm up with configured image styles for an image file.
   *
   * @param \Drupal\file\FileInterface $file
   *   The file for which image styles should be created.
   */
  public function warmUp(FileInterface $file);

  /**
   * Do warm up of image styles for an image file.
   *
   * @param \Drupal\file\FileInterface $file
   *   The file for which image styles should be created.
   * @param array $image_styles
   *   List of image styles machine names.
   */
  public function doWarmUp(FileInterface $file, array $image_styles);

  /**
   * Initial warm up of images style from a file.
   *
   * @param \Drupal\file\FileInterface $file
   *   The file for which image styles should be created.
   *
   * @deprecated
   *   Will be removed in upcoming RC release. Please use doWarmUp() instead.
   */
  public function initialWarmUp(FileInterface $file);

  /**
   * Queue warm up of images style from a file.
   *
   * @param \Drupal\file\FileInterface $file
   *   The file for which image styles should be created.
   *
   * @deprecated
   *   Will be removed in upcoming RC release. Please use addQueue() instead.
   */
  public function queueWarmUp(FileInterface $file);

  /**
   * Add file and image styles to ImageStylesPregenerator queue.
   *
   * @param \Drupal\file\FileInterface $file
   *   The file for which image styles should be created.
   * @param array $image_styles
   *   List of image styles machine names.
   */
  public function addQueue(FileInterface $file, array $image_styles);

  /**
   * Validate file as an image file.
   *
   * @param \Drupal\file\FileInterface $file
   *   The file for which image styles should be created.
   */
  public function validateImage(FileInterface $file);

}
