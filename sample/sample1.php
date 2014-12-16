<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 12/15/14
 * Time: 8:50 PM
 */
use SameerShelavale\PhpCountriesArray\CountriesArray;
include( "../src/CountriesArray.php" );



$countries = CountriesArray::get();
var_dump( $countries );


$countries = CountriesArray::get2d( 'alpha3' );
var_dump( $countries );


$countries = CountriesArray::get2d( 'alpha3', array( 'name', 'isd', 'continent' ) );
var_dump( $countries );


$countries = CountriesArray::get2d( null, array( 'name', 'num', 'isd', 'continent' ) );
var_dump( $countries );