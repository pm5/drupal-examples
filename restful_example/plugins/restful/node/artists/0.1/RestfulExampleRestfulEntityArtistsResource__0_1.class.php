<?php

class RestfulExampleRestfulEntityArtistsResource__0_1 extends RestfulEntityBaseNode {
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
    return $public_fields;
  }
}
