<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 12/15/14
 * Time: 8:50 PM
 */
include( "../CountryArray.php" );


$countries = CountryArray::get();
var_dump( $countries );


$countries = CountryArray::get2d( 'a3' );
var_dump( $countries );


$countries = CountryArray::get2d( 'a3', array( 'name', 'isd', 'continent' ) );
var_dump( $countries );


$countries = CountryArray::get2d( null, array( 'name', 'n', 'isd', 'continent' ) );
var_dump( $countries );