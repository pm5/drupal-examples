<?php

/**
 * undocumented class
 * @packaged default
 */
class RestfulExampleRestfulEntityGenresResource__0_1 extends RestfulEntityBaseTaxonomyTerm
{
  public function publicFieldsInfo()
  {
    $public_fields = parent::publicFieldsInfo();

    $public_fields['genreDescription'] = array(
      'property' => 'description',
    );

    $public_fields['weight'] = array(
      'property' => 'weight',
    );

    return $public_fields;
  }
}
