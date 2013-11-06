<?php
  /* This file is automatically generated by {@link BuildMetadataPHPFromXml}.
   * Please don't modify it directly.
   */


return array (
  'generalDesc' => 
  array (
    'NationalNumberPattern' => '',
    'PossibleNumberPattern' => '',
    'ExampleNumber' => '',
  ),
  'fixedLine' => 
  array (
    'NationalNumberPattern' => '',
    'PossibleNumberPattern' => '',
    'ExampleNumber' => '',
  ),
  'mobile' => 
  array (
    'NationalNumberPattern' => '',
    'PossibleNumberPattern' => '',
    'ExampleNumber' => '',
  ),
  'tollFree' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'premiumRate' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'sharedCost' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'personalNumber' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'voip' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'pager' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'uan' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'emergency' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'voicemail' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'shortCode' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'standardRate' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'carrierSpecific' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'noInternationalDialling' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'id' => '',
  'countryCode' => 49,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => true,
  'numberFormat' => 
  array (
    0 => 
    array (
      'pattern' => '(\\d{2})(\\d{3})(\\d{3,4})',
      'format' => '$1/$2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            3[02]|
            40|
            [68]9
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    1 => 
    array (
      'pattern' => '(\\d{2})(\\d{2})(\\d{2})(\\d{2})(\\d{2})',
      'format' => '$1/$2 $3 $4 $5',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            3[02]|
            40|
            [68]9
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    2 => 
    array (
      'pattern' => '(\\d{2})(\\d{4})(\\d{3,4})',
      'format' => '$1/$2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            3[02]|
            40|
            [68]9
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    3 => 
    array (
      'pattern' => '(\\d{2})(\\d{3})(\\d{2})(\\d{1,2})',
      'format' => '$1/$2 $3 $4',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            3[02]|
            40|
            [68]9
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    4 => 
    array (
      'pattern' => '(\\d{2})(\\d{3})(\\d{3})(\\d{2,3})',
      'format' => '$1/$2 $3 $4',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            3[02]|
            40|
            [68]9
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    5 => 
    array (
      'pattern' => '(\\d{2})(\\d{2})(\\d{2})(\\d)(\\d{2})(\\d{2})',
      'format' => '$1/$2 $3 $4 $5 $6',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            3[02]|
            40|
            [68]9
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    6 => 
    array (
      'pattern' => '(\\d{3})(\\d{3})(\\d{2,4})',
      'format' => '$1/$2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            2(?:
              \\d1|
              0[2389]|
              1[24]|
              28|
              34
            )|
            3(?:
              [3-9][15]|
              40
            )|
            [4-8][1-9]1|
            9(?:
              06|
              [1-9]1
            )
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    7 => 
    array (
      'pattern' => '(\\d{3})(\\d{4})(\\d{3,4})',
      'format' => '$1/$2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            2(?:
              \\d1|
              0[2389]|
              1[24]|
              28|
              34
            )|
            3(?:
              [3-9][15]|
              40
            )|
            [4-8][1-9]1|
            9(?:
              06|
              [1-9]1
            )
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    8 => 
    array (
      'pattern' => '(\\d{3})(\\d{2})(\\d{2})(\\d{1,2})',
      'format' => '$1/$2 $3 $4',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            2(?:
              \\d1|
              0[2389]|
              1[24]|
              28|
              34
            )|
            3(?:
              [3-9][15]|
              40
            )|
            [4-8][1-9]1|
            9(?:
              06|
              [1-9]1
            )
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    9 => 
    array (
      'pattern' => '(\\d{3})(\\d{2})(\\d{2})(\\d{2})(\\d{2})',
      'format' => '$1/$2 $3 $4 $5',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            2(?:
              \\d1|
              0[2389]|
              1[24]|
              28|
              34
            )|
            3(?:
              [3-9][15]|
              40
            )|
            [4-8][1-9]1|
            9(?:
              06|
              [1-9]1
            )
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    10 => 
    array (
      'pattern' => '(\\d{3})(\\d{3})(\\d{2})(\\d{2})',
      'format' => '$1/$2 $3 $4',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            2(?:
              \\d1|
              0[2389]|
              1[24]|
              28|
              34
            )|
            3(?:
              [3-9][15]|
              40
            )|
            [4-8][1-9]1|
            9(?:
              06|
              [1-9]1
            )
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    11 => 
    array (
      'pattern' => '(\\d{3})(\\d{3})(\\d{2})(\\d{2})(\\d)',
      'format' => '$1/$2 $3 $4 $5',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            2(?:
              \\d1|
              0[2389]|
              1[24]|
              28|
              34
            )|
            3(?:
              [3-9][15]|
              40
            )|
            [4-8][1-9]1|
            9(?:
              06|
              [1-9]1
            )
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    12 => 
    array (
      'pattern' => '(\\d{3})(\\d{3})(\\d{3})(\\d{2,3})',
      'format' => '$1/$2 $3 $4',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            2(?:
              \\d1|
              0[2389]|
              1[24]|
              28|
              34
            )|
            3(?:
              [3-9][15]|
              40
            )|
            [4-8][1-9]1|
            9(?:
              06|
              [1-9]1
            )
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    13 => 
    array (
      'pattern' => '(\\d{4})(\\d{3})(\\d{1,4})',
      'format' => '$1/$2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            [24-6]|
            [7-9](?:
              \\d[1-9]|
              [1-9]\\d
            )|
            3(?:
              3(?:
                0[1-467]|
                2[127-9]|
                3[124578]|
                [46][1246]|
                7[1257-9]|
                8[1256]|
                9[145]
              )|
              4(?:
                2[135]|
                3[1357]|
                4[13578]|
                6[1246]|
                7[1356]|
                9[1346]
              )|
              5(?:
                0[14]|
                2[1-3589]|
                3[1357]|
                4[1246]|
                6[1-4]|
                7[1346]|
                8[13568]|
                9[1246]
              )|
              6(?:
                0[356]|
                2[1-489]|
                3[124-6]|
                4[1347]|
                6[13]|
                7[12579]|
                8[1-356]|
                9[135]
              )|
              7(?:
                2[1-7]|
                3[1357]|
                4[145]|
                6[1-5]|
                7[1-4]
              )|
              8(?:
                21|
                3[1468]|
                4[1347]|
                6[0135-9]|
                7[1467]|
                8[136]
              )|
              9(?:
                0[12479]|
                2[1358]|
                3[1357]|
                4[134679]|
                6[1-9]|
                7[136]|
                8[147]|
                9[1468]
              )
            )
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    14 => 
    array (
      'pattern' => '(\\d{4})(\\d{4})(\\d{1,4})',
      'format' => '$1/$2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            [24-6]|
            [7-9](?:
              \\d[1-9]|
              [1-9]\\d
            )|
            3(?:
              3(?:
                0[1-467]|
                2[127-9]|
                3[124578]|
                [46][1246]|
                7[1257-9]|
                8[1256]|
                9[145]
              )|
              4(?:
                2[135]|
                3[1357]|
                4[13578]|
                6[1246]|
                7[1356]|
                9[1346]
              )|
              5(?:
                0[14]|
                2[1-3589]|
                3[1357]|
                4[1246]|
                6[1-4]|
                7[1346]|
                8[13568]|
                9[1246]
              )|
              6(?:
                0[356]|
                2[1-489]|
                3[124-6]|
                4[1347]|
                6[13]|
                7[12579]|
                8[1-356]|
                9[135]
              )|
              7(?:
                2[1-7]|
                3[1357]|
                4[145]|
                6[1-5]|
                7[1-4]
              )|
              8(?:
                21|
                3[1468]|
                4[1347]|
                6[0135-9]|
                7[1467]|
                8[136]
              )|
              9(?:
                0[12479]|
                2[1358]|
                3[1357]|
                4[134679]|
                6[1-9]|
                7[136]|
                8[147]|
                9[1468]
              )
            )
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    15 => 
    array (
      'pattern' => '(\\d{4})(\\d{3})(\\d{3})(\\d{3})',
      'format' => '$1/$2 $3 $4',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            [24-6]|
            [7-9](?:
              \\d[1-9]|
              [1-9]\\d
            )|
            3(?:
              3(?:
                0[1-467]|
                2[127-9]|
                3[124578]|
                [46][1246]|
                7[1257-9]|
                8[1256]|
                9[145]
              )|
              4(?:
                2[135]|
                3[1357]|
                4[13578]|
                6[1246]|
                7[1356]|
                9[1346]
              )|
              5(?:
                0[14]|
                2[1-3589]|
                3[1357]|
                4[1246]|
                6[1-4]|
                7[1346]|
                8[13568]|
                9[1246]
              )|
              6(?:
                0[356]|
                2[1-489]|
                3[124-6]|
                4[1347]|
                6[13]|
                7[12579]|
                8[1-356]|
                9[135]
              )|
              7(?:
                2[1-7]|
                3[1357]|
                4[145]|
                6[1-5]|
                7[1-4]
              )|
              8(?:
                21|
                3[1468]|
                4[1347]|
                6[0135-9]|
                7[1467]|
                8[136]
              )|
              9(?:
                0[12479]|
                2[1358]|
                3[1357]|
                4[134679]|
                6[1-9]|
                7[136]|
                8[147]|
                9[1468]
              )
            )
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    16 => 
    array (
      'pattern' => '(\\d{4})(\\d{2})(\\d{3})(\\d{2})',
      'format' => '$1/$2 $3 $4',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            [24-6]|
            [7-9](?:
              \\d[1-9]|
              [1-9]\\d
            )|
            3(?:
              3(?:
                0[1-467]|
                2[127-9]|
                3[124578]|
                [46][1246]|
                7[1257-9]|
                8[1256]|
                9[145]
              )|
              4(?:
                2[135]|
                3[1357]|
                4[13578]|
                6[1246]|
                7[1356]|
                9[1346]
              )|
              5(?:
                0[14]|
                2[1-3589]|
                3[1357]|
                4[1246]|
                6[1-4]|
                7[1346]|
                8[13568]|
                9[1246]
              )|
              6(?:
                0[356]|
                2[1-489]|
                3[124-6]|
                4[1347]|
                6[13]|
                7[12579]|
                8[1-356]|
                9[135]
              )|
              7(?:
                2[1-7]|
                3[1357]|
                4[145]|
                6[1-5]|
                7[1-4]
              )|
              8(?:
                21|
                3[1468]|
                4[1347]|
                6[0135-9]|
                7[1467]|
                8[136]
              )|
              9(?:
                0[12479]|
                2[1358]|
                3[1357]|
                4[134679]|
                6[1-9]|
                7[136]|
                8[147]|
                9[1468]
              )
            )
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    17 => 
    array (
      'pattern' => '(\\d{4})(\\d{3})(\\d{2})(\\d{2})',
      'format' => '$1/$2 $3 $4',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            [24-6]|
            [7-9](?:
              \\d[1-9]|
              [1-9]\\d
            )|
            3(?:
              3(?:
                0[1-467]|
                2[127-9]|
                3[124578]|
                [46][1246]|
                7[1257-9]|
                8[1256]|
                9[145]
              )|
              4(?:
                2[135]|
                3[1357]|
                4[13578]|
                6[1246]|
                7[1356]|
                9[1346]
              )|
              5(?:
                0[14]|
                2[1-3589]|
                3[1357]|
                4[1246]|
                6[1-4]|
                7[1346]|
                8[13568]|
                9[1246]
              )|
              6(?:
                0[356]|
                2[1-489]|
                3[124-6]|
                4[1347]|
                6[13]|
                7[12579]|
                8[1-356]|
                9[135]
              )|
              7(?:
                2[1-7]|
                3[1357]|
                4[145]|
                6[1-5]|
                7[1-4]
              )|
              8(?:
                21|
                3[1468]|
                4[1347]|
                6[0135-9]|
                7[1467]|
                8[136]
              )|
              9(?:
                0[12479]|
                2[1358]|
                3[1357]|
                4[134679]|
                6[1-9]|
                7[136]|
                8[147]|
                9[1468]
              )
            )
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    18 => 
    array (
      'pattern' => '(\\d{4})(\\d{2})(\\d{2})(\\d{2,3})',
      'format' => '$1/$2 $3 $4',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            [24-6]|
            [7-9](?:
              \\d[1-9]|
              [1-9]\\d
            )|
            3(?:
              3(?:
                0[1-467]|
                2[127-9]|
                3[124578]|
                [46][1246]|
                7[1257-9]|
                8[1256]|
                9[145]
              )|
              4(?:
                2[135]|
                3[1357]|
                4[13578]|
                6[1246]|
                7[1356]|
                9[1346]
              )|
              5(?:
                0[14]|
                2[1-3589]|
                3[1357]|
                4[1246]|
                6[1-4]|
                7[1346]|
                8[13568]|
                9[1246]
              )|
              6(?:
                0[356]|
                2[1-489]|
                3[124-6]|
                4[1347]|
                6[13]|
                7[12579]|
                8[1-356]|
                9[135]
              )|
              7(?:
                2[1-7]|
                3[1357]|
                4[145]|
                6[1-5]|
                7[1-4]
              )|
              8(?:
                21|
                3[1468]|
                4[1347]|
                6[0135-9]|
                7[1467]|
                8[136]
              )|
              9(?:
                0[12479]|
                2[1358]|
                3[1357]|
                4[134679]|
                6[1-9]|
                7[136]|
                8[147]|
                9[1468]
              )
            )
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    19 => 
    array (
      'pattern' => '(\\d{5})(\\d{3})(\\d{3,4})',
      'format' => '$1/$2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '3',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    20 => 
    array (
      'pattern' => '(\\d{5})(\\d{4})(\\d{3,4})',
      'format' => '$1/$2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '3',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    21 => 
    array (
      'pattern' => '(\\d{5})(\\d{3})(\\d{3})(\\d{3})',
      'format' => '$1/$2 $3 $4',
      'leadingDigitsPatterns' => 
      array (
        0 => '3',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    22 => 
    array (
      'pattern' => '(1\\d{3})(\\d{2})(\\d{3})(\\d{2})',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' => 
      array (
        0 => '15',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    23 => 
    array (
      'pattern' => '(1\\d{3})(\\d{3})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '15',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    24 => 
    array (
      'pattern' => '(1\\d{3})(\\d{4})(\\d{3})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '15',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    25 => 
    array (
      'pattern' => '(1\\d{2})(\\d{8})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' => 
      array (
        0 => '15',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    26 => 
    array (
      'pattern' => '([18]\\d{2})(\\d{2,3})(\\d{3})(\\d{2})',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            1[5-7]|
            800
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    27 => 
    array (
      'pattern' => '([18]\\d{2})(\\d{3})(\\d{3})(\\d)',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            1[5-7]|
            800
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    28 => 
    array (
      'pattern' => '(8\\d{2})(\\d{6})(\\d{2})(\\d{1,4})',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' => 
      array (
        0 => '800',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    29 => 
    array (
      'pattern' => '(\\d{3})(\\d)(\\d{3})(\\d{3,4})',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            180|
            900[1359]
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    30 => 
    array (
      'pattern' => '(\\d{3})(\\d)(\\d{4})(\\d{3,4})',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            180|
            900[1359]
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    31 => 
    array (
      'pattern' => '(\\d{4})(\\d{4,10})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            180|
            900[1359]
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    32 => 
    array (
      'pattern' => '(\\d{3})(\\d{3})(\\d{4})(\\d{2})',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            900[1359]
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
  ),
  'intlNumberFormat' => 
  array (
  ),
  'mainCountryForCode' => false,
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => false,
);
/* EOF */