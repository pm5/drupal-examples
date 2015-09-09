<?php

class RestfulExampleRestfulEntityArtistsResource__0_2 extends RestfulEntityBaseNode {
  public function publicFieldsInfo()
  {
    $public_fields = parent::publicFieldsInfo();
    $public_fields['yearFormed'] = array(
      'property' => 'field_artist_year_formed',
    );
    $public_fields['countryOfOrigin'] = array(
      'property' => 'field_artist_country_of_origin',
    );
    $public_fields['rockAndRollHallOfFame'] = array(
      'property' => 'field_artist_rnr_hall_of_fame',
    );
    $public_fields['description'] = array(
      'property' => 'body',
      'sub_property' => 'value',
    );
    $public_fields['artistWebsite'] = array(
      'property' => 'field_artist_website',
      'sub_property' => 'url',
    );
    return $public_fields;
  }
}
