<?php
/*******************************************************************************************************
 * class CountryArray
 * returns array of countries, can return flat array using get() function and 2d array with get2d()
 * it can provide following information related to  the country
 *      1) name
 *      2) alpha2 code, 2 characters (ISO-3166-1 alpha2)
 *      3) alpha3 code, 3 characters (ISO-3166-1 alpha3)
 *      4) numeric code (ISO-3166-1 numeric)
 *      5) ISD code for country
 *      6) continent
 *
 * Author : Sameer Shelavale
 * Email : samiirds@gmail.com, sameer@techrevol.com, sameer@possible.in
 * Author website: http://techrevol.com, http://possible.in
 * Phone : +91 9890103122
 * License: AGPL3, You should keep Package name, Class name, Author name, Email and website credits.
 * Copyrights (C) Sameer Shelavale
 *******************************************************************************************************/

class CountryArray{

    public static $countries = array(
        "AF" => array( 'a2'=>'AF', 'a3'=>'AFG', 'n'=>'004', 'isd'=> '93', "name" => "Afghanistan", "continent" => "Asia", ),
        "AX" => array( 'a2'=>'AX', 'a3'=>'ALA', 'n'=>'248', 'isd'=> '358', "name" => "Åland Islands", "continent" => "Europe"),
        "AL" => array( 'a2'=>'AL', 'a3'=>'ALB', 'n'=>'008', 'isd'=> '355', "name" => "Albania", "continent" => "Europe"),
        "DZ" => array( 'a2'=>'DZ', 'a3'=>'DZA', 'n'=>'012', 'isd'=> '213', "name" => "Algeria", "continent" => "Africa"),
        "AS" => array( 'a2'=>'AS', 'a3'=>'ASM', 'n'=>'016', 'isd'=> '1684', "name" => "American Samoa", "continent" => "Oceania"),
        "AD" => array( 'a2'=>'AD', 'a3'=>'AND', 'n'=>'020', 'isd'=> '376', "name" => "Andorra", "continent" => "Europe"),
        "AO" => array( 'a2'=>'AO', 'a3'=>'AGO', 'n'=>'024', 'isd'=> '244', "name" => "Angola", "continent" => "Africa"),
        "AI" => array( 'a2'=>'AI', 'a3'=>'AIA', 'n'=>'660', 'isd'=> '1264', "name" => "Anguilla", "continent" => "North America"),
        "AQ" => array( 'a2'=>'AQ', 'a3'=>'ATA', 'n'=>'010', 'isd'=> '672', "name" => "Antarctica", "continent" => "Antarctica"),
        "AG" => array( 'a2'=>'AG', 'a3'=>'ATG', 'n'=>'028', 'isd'=> '1268', "name" => "Antigua and Barbuda", "continent" => "North America"),
        "AR" => array( 'a2'=>'AR', 'a3'=>'ARG', 'n'=>'032', 'isd'=> '54', "name" => "Argentina", "continent" => "South America"),
        "AM" => array( 'a2'=>'AM', 'a3'=>'ARM', 'n'=>'051', 'isd'=> '374', "name" => "Armenia", "continent" => "Asia"),
        "AW" => array( 'a2'=>'AW', 'a3'=>'ABW', 'n'=>'533', 'isd'=> '297', "name" => "Aruba", "continent" => "North America"),
        "AU" => array( 'a2'=>'AU', 'a3'=>'AUS', 'n'=>'036', 'isd'=> '61', "name" => "Australia", "continent" => "Oceania"),
        "AT" => array( 'a2'=>'AT', 'a3'=>'AUT', 'n'=>'040', 'isd'=> '43', "name" => "Austria", "continent" => "Europe"),
        "AZ" => array( 'a2'=>'AZ', 'a3'=>'AZE', 'n'=>'031', 'isd'=> '994', "name" => "Azerbaijan", "continent" => "Asia"),
        "BS" => array( 'a2'=>'BS', 'a3'=>'BHS', 'n'=>'044', 'isd'=> '1242', "name" => "Bahamas", "continent" => "North America"),
        "BH" => array( 'a2'=>'BH', 'a3'=>'BHR', 'n'=>'048', 'isd'=> '973', "name" => "Bahrain", "continent" => "Asia"),
        "BD" => array( 'a2'=>'BD', 'a3'=>'BGD', 'n'=>'050', 'isd'=> '880', "name" => "Bangladesh", "continent" => "Asia"),
        "BB" => array( 'a2'=>'BB', 'a3'=>'BRB', 'n'=>'052', 'isd'=> '1246', "name" => "Barbados", "continent" => "North America"),
        "BY" => array( 'a2'=>'BY', 'a3'=>'BLR', 'n'=>'112', 'isd'=> '375', "name" => "Belarus", "continent" => "Europe"),
        "BE" => array( 'a2'=>'BE', 'a3'=>'BEL', 'n'=>'056', 'isd'=> '32', "name" => "Belgium", "continent" => "Europe"),
        "BZ" => array( 'a2'=>'BZ', 'a3'=>'BLZ', 'n'=>'084', 'isd'=> '501', "name" => "Belize", "continent" => "North America"),
        "BJ" => array( 'a2'=>'BJ', 'a3'=>'BEN', 'n'=>'204', 'isd'=> '229', "name" => "Benin", "continent" => "Africa"),
        "BM" => array( 'a2'=>'BM', 'a3'=>'BMU', 'n'=>'060', 'isd'=> '1441', "name" => "Bermuda", "continent" => "North America"),
        "BT" => array( 'a2'=>'BT', 'a3'=>'BTN', 'n'=>'064', 'isd'=> '975', "name" => "Bhutan", "continent" => "Asia"),
        "BO" => array( 'a2'=>'BO', 'a3'=>'BOL', 'n'=>'068', 'isd'=> '591', "name" => "Bolivia", "continent" => "South America"),
        "BA" => array( 'a2'=>'BA', 'a3'=>'BIH', 'n'=>'070', 'isd'=> '387', "name" => "Bosnia and Herzegovina", "continent" => "Europe"),
        "BW" => array( 'a2'=>'BW', 'a3'=>'BWA', 'n'=>'072', 'isd'=> '267', "name" => "Botswana", "continent" => "Africa"),
        "BV" => array( 'a2'=>'BV', 'a3'=>'BVT', 'n'=>'074', 'isd'=> '61', "name" => "Bouvet Island", "continent" => "Antarctica"),
        "BR" => array( 'a2'=>'BR', 'a3'=>'BRA', 'n'=>'076', 'isd'=> '55', "name" => "Brazil", "continent" => "South America"),
        "IO" => array( 'a2'=>'IO', 'a3'=>'IOT', 'n'=>'086', 'isd'=> '246', "name" => "British Indian Ocean Territory", "continent" => "Asia"),
        "BN" => array( 'a2'=>'BN', 'a3'=>'BRN', 'n'=>'096', 'isd'=> '672', "name" => "Brunei Darussalam", "continent" => "Asia"),
        "BG" => array( 'a2'=>'BG', 'a3'=>'BGR', 'n'=>'100', 'isd'=> '359', "name" => "Bulgaria", "continent" => "Europe"),
        "BF" => array( 'a2'=>'BF', 'a3'=>'BFA', 'n'=>'854', 'isd'=> '226', "name" => "Burkina Faso", "continent" => "Africa"),
        "BI" => array( 'a2'=>'BI', 'a3'=>'BDI', 'n'=>'108', 'isd'=> '257', "name" => "Burundi", "continent" => "Africa"),
        "KH" => array( 'a2'=>'KH', 'a3'=>'KHM', 'n'=>'116', 'isd'=> '855', "name" => "Cambodia", "continent" => "Asia"),
        "CM" => array( 'a2'=>'CM', 'a3'=>'CMR', 'n'=>'120', 'isd'=> '231', "name" => "Cameroon", "continent" => "Africa"),
        "CA" => array( 'a2'=>'CA', 'a3'=>'CAN', 'n'=>'124', 'isd'=> '1', "name" => "Canada", "continent" => "North America"),
        "CV" => array( 'a2'=>'CV', 'a3'=>'CPV', 'n'=>'132', 'isd'=> '238', "name" => "Cape Verde", "continent" => "Africa"),
        "KY" => array( 'a2'=>'KY', 'a3'=>'CYM', 'n'=>'136', 'isd'=> '1345', "name" => "Cayman Islands", "continent" => "North America"),
        "CF" => array( 'a2'=>'CF', 'a3'=>'CAF', 'n'=>'140', 'isd'=> '236', "name" => "Central African Republic", "continent" => "Africa"),
        "TD" => array( 'a2'=>'TD', 'a3'=>'TCD', 'n'=>'148', 'isd'=> '235', "name" => "Chad", "continent" => "Africa"),
        "CL" => array( 'a2'=>'CL', 'a3'=>'CHL', 'n'=>'152', 'isd'=> '56', "name" => "Chile", "continent" => "South America"),
        "CN" => array( 'a2'=>'CN', 'a3'=>'CHN', 'n'=>'156', 'isd'=> '86', "name" => "China", "continent" => "Asia"),
        "CX" => array( 'a2'=>'CX', 'a3'=>'CXR', 'n'=>'162', 'isd'=> '61', "name" => "Christmas Island", "continent" => "Asia"),
        "CC" => array( 'a2'=>'CC', 'a3'=>'CCK', 'n'=>'166', 'isd'=> '891', "name" => "Cocos (Keeling) Islands", "continent" => "Asia"),
        "CO" => array( 'a2'=>'CO', 'a3'=>'COL', 'n'=>'170', 'isd'=> '57', "name" => "Colombia", "continent" => "South America"),
        "KM" => array( 'a2'=>'KM', 'a3'=>'COM', 'n'=>'174', 'isd'=> '269', "name" => "Comoros", "continent" => "Africa"),
        "CG" => array( 'a2'=>'CG', 'a3'=>'COG', 'n'=>'178', 'isd'=> '242', "name" => "Congo", "continent" => "Africa"),
        "CD" => array( 'a2'=>'CD', 'a3'=>'COD', 'n'=>'180', 'isd'=> '243', "name" => "The Democratic Republic of The Congo", "continent" => "Africa"),
        "CK" => array( 'a2'=>'CK', 'a3'=>'COK', 'n'=>'184', 'isd'=> '682', "name" => "Cook Islands", "continent" => "Oceania"),
        "CR" => array( 'a2'=>'CR', 'a3'=>'CRI', 'n'=>'188', 'isd'=> '506', "name" => "Costa Rica", "continent" => "North America"),
        "CI" => array( 'a2'=>'CI', 'a3'=>'CIV', 'n'=>'384', 'isd'=> '225', "name" => "Cote D'ivoire", "continent" => "Africa"),
        "HR" => array( 'a2'=>'HR', 'a3'=>'HRV', 'n'=>'191', 'isd'=> '385', "name" => "Croatia", "continent" => "Europe"),
        "CU" => array( 'a2'=>'CU', 'a3'=>'CUB', 'n'=>'192', 'isd'=> '53', "name" => "Cuba", "continent" => "North America"),
        "CY" => array( 'a2'=>'CY', 'a3'=>'CYP', 'n'=>'196', 'isd'=> '357', "name" => "Cyprus", "continent" => "Asia"),
        "CZ" => array( 'a2'=>'CZ', 'a3'=>'CZE', 'n'=>'203', 'isd'=> '420', "name" => "Czech Republic", "continent" => "Europe"),
        "DK" => array( 'a2'=>'DK', 'a3'=>'DNK', 'n'=>'208', 'isd'=> '45', "name" => "Denmark", "continent" => "Europe"),
        "DJ" => array( 'a2'=>'DJ', 'a3'=>'DJI', 'n'=>'262', 'isd'=> '253', "name" => "Djibouti", "continent" => "Africa"),
        "DM" => array( 'a2'=>'DM', 'a3'=>'DMA', 'n'=>'212', 'isd'=> '1767', "name" => "Dominica", "continent" => "North America"),
        "DO" => array( 'a2'=>'DO', 'a3'=>'DOM', 'n'=>'214', 'isd'=> '1809', "name" => "Dominican Republic", "continent" => "North America"),
        "EC" => array( 'a2'=>'EC', 'a3'=>'ECU', 'n'=>'218', 'isd'=> '593', "name" => "Ecuador", "continent" => "South America"),
        "EG" => array( 'a2'=>'EG', 'a3'=>'EGY', 'n'=>'818', 'isd'=> '20', "name" => "Egypt", "continent" => "Africa"),
        "SV" => array( 'a2'=>'SV', 'a3'=>'SLV', 'n'=>'222', 'isd'=> '503', "name" => "El Salvador", "continent" => "North America"),
        "GQ" => array( 'a2'=>'GQ', 'a3'=>'GNQ', 'n'=>'226', 'isd'=> '240', "name" => "Equatorial Guinea", "continent" => "Africa"),
        "ER" => array( 'a2'=>'ER', 'a3'=>'ERI', 'n'=>'232', 'isd'=> '291', "name" => "Eritrea", "continent" => "Africa"),
        "EE" => array( 'a2'=>'EE', 'a3'=>'EST', 'n'=>'233', 'isd'=> '372', "name" => "Estonia", "continent" => "Europe"),
        "ET" => array( 'a2'=>'ET', 'a3'=>'ETH', 'n'=>'231', 'isd'=> '251', "name" => "Ethiopia", "continent" => "Africa"),
        "FK" => array( 'a2'=>'FK', 'a3'=>'FLK', 'n'=>'238', 'isd'=> '500', "name" => "Falkland Islands (Malvinas)", "continent" => "South America"),
        "FO" => array( 'a2'=>'FO', 'a3'=>'FRO', 'n'=>'234', 'isd'=> '298', "name" => "Faroe Islands", "continent" => "Europe"),
        "FJ" => array( 'a2'=>'FJ', 'a3'=>'FJI', 'n'=>'243', 'isd'=> '679', "name" => "Fiji", "continent" => "Oceania"),
        "FI" => array( 'a2'=>'FI', 'a3'=>'FIN', 'n'=>'246', 'isd'=> '238', "name" => "Finland", "continent" => "Europe"),
        "FR" => array( 'a2'=>'FR', 'a3'=>'FRA', 'n'=>'250', 'isd'=> '33', "name" => "France", "continent" => "Europe"),
        "GF" => array( 'a2'=>'GF', 'a3'=>'GUF', 'n'=>'254', 'isd'=> '594', "name" => "French Guiana", "continent" => "South America"),
        "PF" => array( 'a2'=>'PF', 'a3'=>'PYF', 'n'=>'258', 'isd'=> '689', "name" => "French Polynesia", "continent" => "Oceania"),
        "TF" => array( 'a2'=>'TF', 'a3'=>'ATF', 'n'=>'260', 'isd'=> '262', "name" => "French Southern Territories", "continent" => "Antarctica"),
        "GA" => array( 'a2'=>'GA', 'a3'=>'GAB', 'n'=>'266', 'isd'=> '241', "name" => "Gabon", "continent" => "Africa"),
        "GM" => array( 'a2'=>'GM', 'a3'=>'GMB', 'n'=>'270', 'isd'=> '220', "name" => "Gambia", "continent" => "Africa"),
        "GE" => array( 'a2'=>'GE', 'a3'=>'GEO', 'n'=>'268', 'isd'=> '995', "name" => "Georgia", "continent" => "Asia"),
        "DE" => array( 'a2'=>'DE', 'a3'=>'DEU', 'n'=>'276', 'isd'=> '49', "name" => "Germany", "continent" => "Europe"),
        "GH" => array( 'a2'=>'GH', 'a3'=>'GHA', 'n'=>'288', 'isd'=> '233', "name" => "Ghana", "continent" => "Africa"),
        "GI" => array( 'a2'=>'GI', 'a3'=>'GIB', 'n'=>'292', 'isd'=> '350', "name" => "Gibraltar", "continent" => "Europe"),
        "GR" => array( 'a2'=>'GR', 'a3'=>'GRC', 'n'=>'300', 'isd'=> '30', "name" => "Greece", "continent" => "Europe"),
        "GL" => array( 'a2'=>'GL', 'a3'=>'GRL', 'n'=>'304', 'isd'=> '299', "name" => "Greenland", "continent" => "North America"),
        "GD" => array( 'a2'=>'GD', 'a3'=>'GRD', 'n'=>'308', 'isd'=> '1473', "name" => "Grenada", "continent" => "North America"),
        "GP" => array( 'a2'=>'GP', 'a3'=>'GLP', 'n'=>'312', 'isd'=> '590', "name" => "Guadeloupe", "continent" => "North America"),
        "GU" => array( 'a2'=>'GU', 'a3'=>'GUM', 'n'=>'316', 'isd'=> '1871', "name" => "Guam", "continent" => "Oceania"),
        "GT" => array( 'a2'=>'GT', 'a3'=>'GTM', 'n'=>'320', 'isd'=> '502', "name" => "Guatemala", "continent" => "North America"),
        "GG" => array( 'a2'=>'GG', 'a3'=>'GGY', 'n'=>'831', 'isd'=> '44', "name" => "Guernsey", "continent" => "Europe"),
        "GN" => array( 'a2'=>'GN', 'a3'=>'GIN', 'n'=>'324', 'isd'=> '224', "name" => "Guinea", "continent" => "Africa"),
        "GW" => array( 'a2'=>'GW', 'a3'=>'GNB', 'n'=>'624', 'isd'=> '245', "name" => "Guinea-bissau", "continent" => "Africa"),
        "GY" => array( 'a2'=>'GY', 'a3'=>'GUY', 'n'=>'328', 'isd'=> '592', "name" => "Guyana", "continent" => "South America"),
        "HT" => array( 'a2'=>'HT', 'a3'=>'HTI', 'n'=>'332', 'isd'=> '509', "name" => "Haiti", "continent" => "North America"),
        "HM" => array( 'a2'=>'HM', 'a3'=>'HMD', 'n'=>'334', 'isd'=> '672', "name" => "Heard Island and Mcdonald Islands", "continent" => "Antarctica"),
        "VA" => array( 'a2'=>'VA', 'a3'=>'VAT', 'n'=>'336', 'isd'=> '379', "name" => "Holy See (Vatican City State)", "continent" => "Europe"),
        "HN" => array( 'a2'=>'HN', 'a3'=>'HND', 'n'=>'340', 'isd'=> '504', "name" => "Honduras", "continent" => "North America"),
        "HK" => array( 'a2'=>'HK', 'a3'=>'HKG', 'n'=>'344', 'isd'=> '852', "name" => "Hong Kong", "continent" => "Asia"),
        "HU" => array( 'a2'=>'HU', 'a3'=>'HUN', 'n'=>'348', 'isd'=> '36', "name" => "Hungary", "continent" => "Europe"),
        "IS" => array( 'a2'=>'IS', 'a3'=>'ISL', 'n'=>'352', 'isd'=> '354', "name" => "Iceland", "continent" => "Europe"),
        "IN" => array( 'a2'=>'IN', 'a3'=>'IND', 'n'=>'356', 'isd'=> '91', "name" => "India", "continent" => "Asia"),
        "ID" => array( 'a2'=>'ID', 'a3'=>'IDN', 'n'=>'360', 'isd'=> '62', "name" => "Indonesia", "continent" => "Asia"),
        "IR" => array( 'a2'=>'IR', 'a3'=>'IRN', 'n'=>'364', 'isd'=> '98', "name" => "Iran", "continent" => "Asia"),
        "IQ" => array( 'a2'=>'IQ', 'a3'=>'IRQ', 'n'=>'368', 'isd'=> '964', "name" => "Iraq", "continent" => "Asia"),
        "IE" => array( 'a2'=>'IE', 'a3'=>'IRL', 'n'=>'372', 'isd'=> '353', "name" => "Ireland", "continent" => "Europe"),
        "IM" => array( 'a2'=>'IM', 'a3'=>'IMN', 'n'=>'833', 'isd'=> '44', "name" => "Isle of Man", "continent" => "Europe"),
        "IL" => array( 'a2'=>'IL', 'a3'=>'ISR', 'n'=>'376', 'isd'=> '972', "name" => "Israel", "continent" => "Asia"),
        "IT" => array( 'a2'=>'IT', 'a3'=>'ITA', 'n'=>'380', 'isd'=> '39', "name" => "Italy", "continent" => "Europe"),
        "JM" => array( 'a2'=>'JM', 'a3'=>'JAM', 'n'=>'388', 'isd'=> '1876', "name" => "Jamaica", "continent" => "North America"),
        "JP" => array( 'a2'=>'JP', 'a3'=>'JPN', 'n'=>'392', 'isd'=> '81', "name" => "Japan", "continent" => "Asia"),
        "JE" => array( 'a2'=>'JE', 'a3'=>'JEY', 'n'=>'832', 'isd'=> '44', "name" => "Jersey", "continent" => "Europe"),
        "JO" => array( 'a2'=>'JO', 'a3'=>'JOR', 'n'=>'400', 'isd'=> '962', "name" => "Jordan", "continent" => "Asia"),
        "KZ" => array( 'a2'=>'KZ', 'a3'=>'KAZ', 'n'=>'398', 'isd'=> '7', "name" => "Kazakhstan", "continent" => "Asia"),
        "KE" => array( 'a2'=>'KE', 'a3'=>'KEN', 'n'=>'404', 'isd'=> '254', "name" => "Kenya", "continent" => "Africa"),
        "KI" => array( 'a2'=>'KI', 'a3'=>'KIR', 'n'=>'296', 'isd'=> '686', "name" => "Kiribati", "continent" => "Oceania"),
        "KP" => array( 'a2'=>'KP', 'a3'=>'PRK', 'n'=>'408', 'isd'=> '850', "name" => "Democratic People's Republic of Korea", "continent" => "Asia"),
        "KR" => array( 'a2'=>'KR', 'a3'=>'KOR', 'n'=>'410', 'isd'=> '82', "name" => "Republic of Korea", "continent" => "Asia"),
        "KW" => array( 'a2'=>'KW', 'a3'=>'KWT', 'n'=>'414', 'isd'=> '965', "name" => "Kuwait", "continent" => "Asia"),
        "KG" => array( 'a2'=>'KG', 'a3'=>'KGZ', 'n'=>'417', 'isd'=> '996', "name" => "Kyrgyzstan", "continent" => "Asia"),
        "LA" => array( 'a2'=>'LA', 'a3'=>'LAO', 'n'=>'418', 'isd'=> '856', "name" => "Lao People's Democratic Republic", "continent" => "Asia"),
        "LV" => array( 'a2'=>'LV', 'a3'=>'LVA', 'n'=>'428', 'isd'=> '371', "name" => "Latvia", "continent" => "Europe"),
        "LB" => array( 'a2'=>'LB', 'a3'=>'LBN', 'n'=>'422', 'isd'=> '961', "name" => "Lebanon", "continent" => "Asia"),
        "LS" => array( 'a2'=>'LS', 'a3'=>'LSO', 'n'=>'426', 'isd'=> '266', "name" => "Lesotho", "continent" => "Africa"),
        "LR" => array( 'a2'=>'LR', 'a3'=>'LBR', 'n'=>'430', 'isd'=> '231', "name" => "Liberia", "continent" => "Africa"),
        "LY" => array( 'a2'=>'LY', 'a3'=>'LBY', 'n'=>'434', 'isd'=> '218', "name" => "Libya", "continent" => "Africa"),
        "LI" => array( 'a2'=>'LI', 'a3'=>'LIE', 'n'=>'438', 'isd'=> '423', "name" => "Liechtenstein", "continent" => "Europe"),
        "LT" => array( 'a2'=>'LT', 'a3'=>'LTU', 'n'=>'440', 'isd'=> '370', "name" => "Lithuania", "continent" => "Europe"),
        "LU" => array( 'a2'=>'LU', 'a3'=>'LUX', 'n'=>'442', 'isd'=> '352', "name" => "Luxembourg", "continent" => "Europe"),
        "MO" => array( 'a2'=>'MO', 'a3'=>'MAC', 'n'=>'446', 'isd'=> '853', "name" => "Macao", "continent" => "Asia"),
        "MK" => array( 'a2'=>'MK', 'a3'=>'MKD', 'n'=>'807', 'isd'=> '389', "name" => "Macedonia", "continent" => "Europe"),
        "MG" => array( 'a2'=>'MG', 'a3'=>'MDG', 'n'=>'450', 'isd'=> '261', "name" => "Madagascar", "continent" => "Africa"),
        "MW" => array( 'a2'=>'MW', 'a3'=>'MWI', 'n'=>'454', 'isd'=> '265', "name" => "Malawi", "continent" => "Africa"),
        "MY" => array( 'a2'=>'MY', 'a3'=>'MYS', 'n'=>'458', 'isd'=> '60', "name" => "Malaysia", "continent" => "Asia"),
        "MV" => array( 'a2'=>'MV', 'a3'=>'MDV', 'n'=>'462', 'isd'=> '960', "name" => "Maldives", "continent" => "Asia"),
        "ML" => array( 'a2'=>'ML', 'a3'=>'MLI', 'n'=>'466', 'isd'=> '223', "name" => "Mali", "continent" => "Africa"),
        "MT" => array( 'a2'=>'MT', 'a3'=>'MLT', 'n'=>'470', 'isd'=> '356', "name" => "Malta", "continent" => "Europe"),
        "MH" => array( 'a2'=>'MH', 'a3'=>'MHL', 'n'=>'584', 'isd'=> '692', "name" => "Marshall Islands", "continent" => "Oceania"),
        "MQ" => array( 'a2'=>'MQ', 'a3'=>'MTQ', 'n'=>'474', 'isd'=> '596', "name" => "Martinique", "continent" => "North America"),
        "MR" => array( 'a2'=>'MR', 'a3'=>'MRT', 'n'=>'478', 'isd'=> '222', "name" => "Mauritania", "continent" => "Africa"),
        "MU" => array( 'a2'=>'MU', 'a3'=>'MUS', 'n'=>'480', 'isd'=> '230', "name" => "Mauritius", "continent" => "Africa"),
        "YT" => array( 'a2'=>'YT', 'a3'=>'MYT', 'n'=>'175', 'isd'=> '262', "name" => "Mayotte", "continent" => "Africa"),
        "MX" => array( 'a2'=>'MX', 'a3'=>'MEX', 'n'=>'484', 'isd'=> '52', "name" => "Mexico", "continent" => "North America"),
        "FM" => array( 'a2'=>'FM', 'a3'=>'FSM', 'n'=>'583', 'isd'=> '691', "name" => "Micronesia", "continent" => "Oceania"),
        "MD" => array( 'a2'=>'MD', 'a3'=>'MDA', 'n'=>'498', 'isd'=> '373', "name" => "Moldova", "continent" => "Europe"),
        "MC" => array( 'a2'=>'MC', 'a3'=>'MCO', 'n'=>'492', 'isd'=> '377', "name" => "Monaco", "continent" => "Europe"),
        "MN" => array( 'a2'=>'MN', 'a3'=>'MNG', 'n'=>'496', 'isd'=> '976', "name" => "Mongolia", "continent" => "Asia"),
        "ME" => array( 'a2'=>'ME', 'a3'=>'MNE', 'n'=>'499', 'isd'=> '382', "name" => "Montenegro", "continent" => "Europe"),
        "MS" => array( 'a2'=>'MS', 'a3'=>'MSR', 'n'=>'500', 'isd'=> '1664', "name" => "Montserrat", "continent" => "North America"),
        "MA" => array( 'a2'=>'MA', 'a3'=>'MAR', 'n'=>'504', 'isd'=> '212', "name" => "Morocco", "continent" => "Africa"),
        "MZ" => array( 'a2'=>'MZ', 'a3'=>'MOZ', 'n'=>'508', 'isd'=> '258', "name" => "Mozambique", "continent" => "Africa"),
        "MM" => array( 'a2'=>'MM', 'a3'=>'MMR', 'n'=>'104', 'isd'=> '95', "name" => "Myanmar", "continent" => "Asia"),
        "NA" => array( 'a2'=>'NA', 'a3'=>'NAM', 'n'=>'516', 'isd'=> '264', "name" => "Namibia", "continent" => "Africa"),
        "NR" => array( 'a2'=>'NR', 'a3'=>'NRU', 'n'=>'520', 'isd'=> '674', "name" => "Nauru", "continent" => "Oceania"),
        "NP" => array( 'a2'=>'NP', 'a3'=>'NPL', 'n'=>'524', 'isd'=> '977', "name" => "Nepal", "continent" => "Asia"),
        "NL" => array( 'a2'=>'NL', 'a3'=>'NLD', 'n'=>'528', 'isd'=> '31', "name" => "Netherlands", "continent" => "Europe"),
        "AN" => array( 'a2'=>'AN', 'a3'=>'ANT', 'n'=>'530', 'isd'=> '599', "name" => "Netherlands Antilles", "continent" => "North America"),
        "NC" => array( 'a2'=>'NC', 'a3'=>'NCL', 'n'=>'540', 'isd'=> '687', "name" => "New Caledonia", "continent" => "Oceania"),
        "NZ" => array( 'a2'=>'NZ', 'a3'=>'NZL', 'n'=>'554', 'isd'=> '64', "name" => "New Zealand", "continent" => "Oceania"),
        "NI" => array( 'a2'=>'NI', 'a3'=>'NIC', 'n'=>'558', 'isd'=> '505', "name" => "Nicaragua", "continent" => "North America"),
        "NE" => array( 'a2'=>'NE', 'a3'=>'NER', 'n'=>'562', 'isd'=> '227', "name" => "Niger", "continent" => "Africa"),
        "NG" => array( 'a2'=>'NG', 'a3'=>'NGA', 'n'=>'566', 'isd'=> '234', "name" => "Nigeria", "continent" => "Africa"),
        "NU" => array( 'a2'=>'NU', 'a3'=>'NIU', 'n'=>'570', 'isd'=> '683', "name" => "Niue", "continent" => "Oceania"),
        "NF" => array( 'a2'=>'NF', 'a3'=>'NFK', 'n'=>'574', 'isd'=> '672', "name" => "Norfolk Island", "continent" => "Oceania"),
        "MP" => array( 'a2'=>'MP', 'a3'=>'MNP', 'n'=>'580', 'isd'=> '1670', "name" => "Northern Mariana Islands", "continent" => "Oceania"),
        "NO" => array( 'a2'=>'NO', 'a3'=>'NOR', 'n'=>'578', 'isd'=> '47', "name" => "Norway", "continent" => "Europe"),
        "OM" => array( 'a2'=>'OM', 'a3'=>'OMN', 'n'=>'512', 'isd'=> '968', "name" => "Oman", "continent" => "Asia"),
        "PK" => array( 'a2'=>'PK', 'a3'=>'PAK', 'n'=>'586', 'isd'=> '92', "name" => "Pakistan", "continent" => "Asia"),
        "PW" => array( 'a2'=>'PW', 'a3'=>'PLW', 'n'=>'585', 'isd'=> '680', "name" => "Palau", "continent" => "Oceania"),
        "PS" => array( 'a2'=>'PS', 'a3'=>'PSE', 'n'=>'275', 'isd'=> '970', "name" => "Palestinia", "continent" => "Asia"),
        "PA" => array( 'a2'=>'PA', 'a3'=>'PAN', 'n'=>'591', 'isd'=> '507', "name" => "Panama", "continent" => "North America"),
        "PG" => array( 'a2'=>'PG', 'a3'=>'PNG', 'n'=>'598', 'isd'=> '675', "name" => "Papua New Guinea", "continent" => "Oceania"),
        "PY" => array( 'a2'=>'PY', 'a3'=>'PRY', 'n'=>'600', 'isd'=> '595', "name" => "Paraguay", "continent" => "South America"),
        "PE" => array( 'a2'=>'PE', 'a3'=>'PER', 'n'=>'604', 'isd'=> '51', "name" => "Peru", "continent" => "South America"),
        "PH" => array( 'a2'=>'PH', 'a3'=>'PHL', 'n'=>'608', 'isd'=> '63', "name" => "Philippines", "continent" => "Asia"),
        "PN" => array( 'a2'=>'PN', 'a3'=>'PCN', 'n'=>'612', 'isd'=> '870', "name" => "Pitcairn", "continent" => "Oceania"),
        "PL" => array( 'a2'=>'PL', 'a3'=>'POL', 'n'=>'616', 'isd'=> '48', "name" => "Poland", "continent" => "Europe"),
        "PT" => array( 'a2'=>'PT', 'a3'=>'PRT', 'n'=>'620', 'isd'=> '351', "name" => "Portugal", "continent" => "Europe"),
        "PR" => array( 'a2'=>'PR', 'a3'=>'PRI', 'n'=>'630', 'isd'=> '1', "name" => "Puerto Rico", "continent" => "North America"),
        "QA" => array( 'a2'=>'QA', 'a3'=>'QAT', 'n'=>'634', 'isd'=> '974', "name" => "Qatar", "continent" => "Asia"),
        "RE" => array( 'a2'=>'RE', 'a3'=>'REU', 'n'=>'638', 'isd'=> '262', "name" => "Reunion", "continent" => "Africa"),
        "RO" => array( 'a2'=>'RO', 'a3'=>'ROM', 'n'=>'642', 'isd'=> '40', "name" => "Romania", "continent" => "Europe"),
        "RU" => array( 'a2'=>'RU', 'a3'=>'RUS', 'n'=>'643', 'isd'=> '7', "name" => "Russian Federation", "continent" => "Europe"),
        "RW" => array( 'a2'=>'RW', 'a3'=>'RWA', 'n'=>'646', 'isd'=> '250', "name" => "Rwanda", "continent" => "Africa"),
        "SH" => array( 'a2'=>'SH', 'a3'=>'SHN', 'n'=>'654', 'isd'=> '290', "name" => "Saint Helena", "continent" => "Africa"),
        "KN" => array( 'a2'=>'KN', 'a3'=>'KNA', 'n'=>'659', 'isd'=> '1869', "name" => "Saint Kitts and Nevis", "continent" => "North America"),
        "LC" => array( 'a2'=>'LC', 'a3'=>'LCA', 'n'=>'662', 'isd'=> '1758', "name" => "Saint Lucia", "continent" => "North America"),
        "PM" => array( 'a2'=>'PM', 'a3'=>'SPM', 'n'=>'666', 'isd'=> '508', "name" => "Saint Pierre and Miquelon", "continent" => "North America"),
        "VC" => array( 'a2'=>'VC', 'a3'=>'VCT', 'n'=>'670', 'isd'=> '1784', "name" => "Saint Vincent and The Grenadines", "continent" => "North America"),
        "WS" => array( 'a2'=>'WS', 'a3'=>'WSM', 'n'=>'882', 'isd'=> '685', "name" => "Samoa", "continent" => "Oceania"),
        "SM" => array( 'a2'=>'SM', 'a3'=>'SMR', 'n'=>'674', 'isd'=> '378', "name" => "San Marino", "continent" => "Europe"),
        "ST" => array( 'a2'=>'ST', 'a3'=>'STP', 'n'=>'678', 'isd'=> '239', "name" => "Sao Tome and Principe", "continent" => "Africa"),
        "SA" => array( 'a2'=>'SA', 'a3'=>'SAU', 'n'=>'682', 'isd'=> '966', "name" => "Saudi Arabia", "continent" => "Asia"),
        "SN" => array( 'a2'=>'SN', 'a3'=>'SEN', 'n'=>'686', 'isd'=> '221', "name" => "Senegal", "continent" => "Africa"),
        "RS" => array( 'a2'=>'RS', 'a3'=>'SRB', 'n'=>'688', 'isd'=> '381', "name" => "Serbia", "continent" => "Europe"),
        "SC" => array( 'a2'=>'SC', 'a3'=>'SYC', 'n'=>'690', 'isd'=> '248', "name" => "Seychelles", "continent" => "Africa"),
        "SL" => array( 'a2'=>'SL', 'a3'=>'SLE', 'n'=>'694', 'isd'=> '232', "name" => "Sierra Leone", "continent" => "Africa"),
        "SG" => array( 'a2'=>'SG', 'a3'=>'SGP', 'n'=>'702', 'isd'=> '65', "name" => "Singapore", "continent" => "Asia"),
        "SK" => array( 'a2'=>'SK', 'a3'=>'SVK', 'n'=>'703', 'isd'=> '421', "name" => "Slovakia", "continent" => "Europe"),
        "SI" => array( 'a2'=>'SI', 'a3'=>'SVN', 'n'=>'705', 'isd'=> '386', "name" => "Slovenia", "continent" => "Europe"),
        "SB" => array( 'a2'=>'SB', 'a3'=>'SLB', 'n'=>'090', 'isd'=> '677', "name" => "Solomon Islands", "continent" => "Oceania"),
        "SO" => array( 'a2'=>'SO', 'a3'=>'SOM', 'n'=>'706', 'isd'=> '252', "name" => "Somalia", "continent" => "Africa"),
        "ZA" => array( 'a2'=>'ZA', 'a3'=>'ZAF', 'n'=>'729', 'isd'=> '27', "name" => "South Africa", "continent" => "Africa"),
        "SS" => array( 'a2'=>'SS', 'a3'=>'SSD', 'n'=>'710', 'isd'=> '211', "name" => "South Sudan", "continent" => "Africa" ),
        "GS" => array( 'a2'=>'GS', 'a3'=>'SGS', 'n'=>'239', 'isd'=> '500', "name" => "South Georgia and The South Sandwich Islands", "continent" => "Antarctica"),
        "ES" => array( 'a2'=>'ES', 'a3'=>'ESP', 'n'=>'724', 'isd'=> '34', "name" => "Spain", "continent" => "Europe"),
        "LK" => array( 'a2'=>'LK', 'a3'=>'LKA', 'n'=>'144', 'isd'=> '94', "name" => "Sri Lanka", "continent" => "Asia"),
        "SD" => array( 'a2'=>'SD', 'a3'=>'SDN', 'n'=>'736', 'isd'=> '249', "name" => "Sudan", "continent" => "Africa"),
        "SR" => array( 'a2'=>'SR', 'a3'=>'SUR', 'n'=>'740', 'isd'=> '597', "name" => "Suriname", "continent" => "South America"),
        "SJ" => array( 'a2'=>'SJ', 'a3'=>'SJM', 'n'=>'744', 'isd'=> '47', "name" => "Svalbard and Jan Mayen", "continent" => "Europe"),
        "SZ" => array( 'a2'=>'SZ', 'a3'=>'SWZ', 'n'=>'748', 'isd'=> '268', "name" => "Swaziland", "continent" => "Africa"),
        "SE" => array( 'a2'=>'SE', 'a3'=>'SWE', 'n'=>'752', 'isd'=> '46', "name" => "Sweden", "continent" => "Europe"),
        "CH" => array( 'a2'=>'CH', 'a3'=>'CHE', 'n'=>'756', 'isd'=> '41', "name" => "Switzerland", "continent" => "Europe"),
        "SY" => array( 'a2'=>'SY', 'a3'=>'SYR', 'n'=>'760', 'isd'=> '963', "name" => "Syrian Arab Republic", "continent" => "Asia"),
        "TW" => array( 'a2'=>'TW', 'a3'=>'TWN', 'n'=>'158', 'isd'=> '886', "name" => "Taiwan, Province of China", "continent" => "Asia"),
        "TJ" => array( 'a2'=>'TJ', 'a3'=>'TJK', 'n'=>'762', 'isd'=> '992', "name" => "Tajikistan", "continent" => "Asia"),
        "TZ" => array( 'a2'=>'TZ', 'a3'=>'TZA', 'n'=>'834', 'isd'=> '255', "name" => "Tanzania, United Republic of", "continent" => "Africa"),
        "TH" => array( 'a2'=>'TH', 'a3'=>'THA', 'n'=>'764', 'isd'=> '66', "name" => "Thailand", "continent" => "Asia"),
        "TL" => array( 'a2'=>'TL', 'a3'=>'TLS', 'n'=>'626', 'isd'=> '670', "name" => "Timor-leste", "continent" => "Asia"),
        "TG" => array( 'a2'=>'TG', 'a3'=>'TGO', 'n'=>'768', 'isd'=> '228', "name" => "Togo", "continent" => "Africa"),
        "TK" => array( 'a2'=>'TK', 'a3'=>'TKL', 'n'=>'772', 'isd'=> '690', "name" => "Tokelau", "continent" => "Oceania"),
        "TO" => array( 'a2'=>'TO', 'a3'=>'TON', 'n'=>'776', 'isd'=> '676', "name" => "Tonga", "continent" => "Oceania"),
        "TT" => array( 'a2'=>'TT', 'a3'=>'TTO', 'n'=>'780', 'isd'=> '1868', "name" => "Trinidad and Tobago", "continent" => "North America"),
        "TN" => array( 'a2'=>'TN', 'a3'=>'TUN', 'n'=>'788', 'isd'=> '216', "name" => "Tunisia", "continent" => "Africa"),
        "TR" => array( 'a2'=>'TR', 'a3'=>'TUR', 'n'=>'792', 'isd'=> '90', "name" => "Turkey", "continent" => "Asia"),
        "TM" => array( 'a2'=>'TM', 'a3'=>'TKM', 'n'=>'795', 'isd'=> '993', "name" => "Turkmenistan", "continent" => "Asia"),
        "TC" => array( 'a2'=>'TC', 'a3'=>'TCA', 'n'=>'796', 'isd'=> '1649', "name" => "Turks and Caicos Islands", "continent" => "North America"),
        "TV" => array( 'a2'=>'TV', 'a3'=>'TUV', 'n'=>'798', 'isd'=> '688', "name" => "Tuvalu", "continent" => "Oceania"),
        "UG" => array( 'a2'=>'UG', 'a3'=>'UGA', 'n'=>'800', 'isd'=> '256', "name" => "Uganda", "continent" => "Africa"),
        "UA" => array( 'a2'=>'UA', 'a3'=>'UKR', 'n'=>'804', 'isd'=> '380', "name" => "Ukraine", "continent" => "Europe"),
        "AE" => array( 'a2'=>'AE', 'a3'=>'ARE', 'n'=>'784', 'isd'=> '971', "name" => "United Arab Emirates", "continent" => "Asia"),
        "GB" => array( 'a2'=>'GB', 'a3'=>'GBR', 'n'=>'826', 'isd'=> '44', "name" => "United Kingdom", "continent" => "Europe"),
        "US" => array( 'a2'=>'US', 'a3'=>'USA', 'n'=>'840', 'isd'=> '1', "name" => "United States", "continent" => "North America"),
        "UM" => array( 'a2'=>'UM', 'a3'=>'UMI', 'n'=>'581', 'isd'=> '1', "name" => "United States Minor Outlying Islands", "continent" => "Oceania"),
        "UY" => array( 'a2'=>'UY', 'a3'=>'URY', 'n'=>'858', 'isd'=> '598', "name" => "Uruguay", "continent" => "South America"),
        "UZ" => array( 'a2'=>'UZ', 'a3'=>'UZB', 'n'=>'860', 'isd'=> '998', "name" => "Uzbekistan", "continent" => "Asia"),
        "VU" => array( 'a2'=>'VU', 'a3'=>'VUT', 'n'=>'548', 'isd'=> '678', "name" => "Vanuatu", "continent" => "Oceania"),
        "VE" => array( 'a2'=>'VE', 'a3'=>'VEN', 'n'=>'862', 'isd'=> '58', "name" => "Venezuela", "continent" => "South America"),
        "VN" => array( 'a2'=>'VN', 'a3'=>'VNM', 'n'=>'704', 'isd'=> '84', "name" => "Viet Nam", "continent" => "Asia"),
        "VG" => array( 'a2'=>'VG', 'a3'=>'VG', 'n'=>'092', 'isd'=> '1284', "name" => "Virgin Islands, British", "continent" => "North America"),
        "VI" => array( 'a2'=>'VI', 'a3'=>'VIR', 'n'=>'850', 'isd'=> '1430', "name" => "Virgin Islands, U.S.", "continent" => "North America"),
        "WF" => array( 'a2'=>'WF', 'a3'=>'WLF', 'n'=>'876', 'isd'=> '681', "name" => "Wallis and Futuna", "continent" => "Oceania"),
        "EH" => array( 'a2'=>'EH', 'a3'=>'ESH', 'n'=>'732', 'isd'=> '212', "name" => "Western Sahara", "continent" => "Africa"),
        "YE" => array( 'a2'=>'YE', 'a3'=>'YEM', 'n'=>'887', 'isd'=> '967', "name" => "Yemen", "continent" => "Asia"),
        "ZM" => array( 'a2'=>'ZM', 'a3'=>'ZMB', 'n'=>'894', 'isd'=> '260', "name" => "Zambia", "continent" => "Africa"),
        "ZW" => array( 'a2'=>'ZW', 'a3'=>'ZWE', 'n'=>'716', 'isd'=> '263', "name" => "Zimbabwe", "continent" => "Africa")
    );


    /*
     * function get()
     * @param $key - key field for the array of countries, set it to null if you want array without named indices
     * @param $requestedField - name of the field to be fetched in value part of array
     * @returns array contained key=>value pairs of the requested key and field
     *
     */
    public static function get( $keyField = 'a2', $requestedField = 'name' ){
        $supportedFields = array( 'a2', 'a3', 'n', 'isd', 'name', 'continent' );
        //check if field to be used as array key is passed
        if( !in_array( $keyField, $supportedFields ) ){
            $keyField = null;
        }

        //check if the $requestedField is supported or not
        if( !in_array( $requestedField, $supportedFields ) ){
            $requestedField = 'name'; //return country name if invalid/unsupported field name is request
        }

        $result = array();
        //copy each requested field from the countries array
        foreach( SELF::$countries as $k => $country ){
            if( $keyField ){
                $result[ $country[ $keyField ] ] = $country[ $requestedField ];
            }else{
                $result[] = $country[ $requestedField ];
            }
        }
        return $result;
    }


    /*
     * function get2d() returns 2d array of countries
     * @param $key - key field for the array of countries, set it to null if you want array without named indices
     * @param $requestedFields - array of name of the fields to be fetched in value part of array
     * @returns array contained key=>value pairs of the requested key and field
     *
     */
    public static function get2d( $keyField = 'a2', $requestedFields = array( 'a2', 'a3', 'n', 'isd', 'name', 'continent' ) ){
        $supportedFields = array( 'a2', 'a3', 'n', 'isd', 'name', 'continent' );
        //check if field to be used as array key is passed
        if( !in_array( $keyField, $supportedFields ) ){
            $keyField = null;
        }

        //check if the $fields is an array or not
        if( is_array( $requestedFields ) ){
            //check if each field requested is supported or not, else unset it
            foreach( $requestedFields as $index => $field ){
                if( !in_array( $field, $supportedFields ) ){
                    unset( $requestedFields[$index] );
                }
            }
        }else{
            $requestedFields = array();
        }
        $result = array();
        //copy each requested field from the countries array
        foreach( SELF::$countries as $k => $country ){
            $tmp = array( );
            foreach( $requestedFields as $field ){
                $tmp[ $field ] = $country[ $field ];
            }
            if( $keyField ){
                $result[ $country[ $keyField ] ] = $tmp;
            }else{
                $result[] = $tmp;
            }
        }
        return $result;
    }

}

