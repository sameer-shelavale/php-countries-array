php-countries-array
===================

PHP class to get array of countries with ISO_3166-1, ISO_3166-2 and ISD codes
it can provide following information related to  the country

1. name - Name of the country
2. alpha2 - alpha2 code, 2 characters (ISO-3166-1 alpha2)
3. alpha3 - alpha3 code, 3 characters (ISO-3166-1 alpha3)
4. num - numeric code (ISO-3166-1 numeric)
5. isd - ISD code for country
6. continent - Name of the continent in which the country is present

##Installation
#### PHP Include
Include CountryArray.php in your php code and you its ready to use.
#### Composer:
Add the package to your composer.json and run composer update.

```
{
    "require": {
        "sameer-shelavale/php-countries-array": "*"
    }
}
```

##Usage

Get simple key-value array by default it returns alpha2 => name pairs

```
$countries = CountryArray::get();
```

Get key values pairs

```
$countries = CountryArray::get( 'alpha2', 'name' ); // returns alpha2->name array
$countries = CountryArray::get( 'num', 'alpha3' ); // return numeric-codes->alpha3 array
$countries = CountryArray::get( 'num', 'name' ); // return numeric-codes->name array
```

Get only values without keys
```
$countries = CountryArray::get( null, 'name' ); // return array of country names
$countries = CountryArray::get( null, 'alpha2' ); // return array of alpha2 codes
```

Get 2d array
```
$countries = CountryArray::get( null, 'name' ); // return array of country names
$countries = CountryArray::get( null, 'alpha2' ); // return array of alpha2 codes
```


##IMP Note
Do not use ISD code(isd) and continent as key fields, as there are multiple records for them
