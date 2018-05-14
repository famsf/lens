<?php

namespace Drupal\schema_book\Plugin\metatag\Group;

use Drupal\schema_metatag\Plugin\metatag\Group\SchemaGroupBase;

/**
 * Provides a plugin for the 'VisualArtwork' meta tag group.
 *
 * @MetatagGroup(
 *   id = "schema_visual_artwork",
 *   label = @Translation("Schema.org: VisualArtwork"),
 *   description = @Translation("See Schema.org definitions for this Schema type at <a href="":url"">:url</a>. Also see <a href="":url2"">Google's requirements</a>.", arguments = {
 *     ":url" = "https://schema.org/VisualArtwork",
 *   }),
 *   weight = 10,
 * )
 */
class SchemaVisualArtwork extends SchemaGroupBase {
  // Nothing here yet. Just a placeholder class for a plugin.
}