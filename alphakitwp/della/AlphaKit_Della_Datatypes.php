<?php
    if (!defined('ABSPATH')) die;

    $datatypes['tinyint']['description'] = "8-bit Integer";
    $datatypes['tinyint']['command'] = "TINYINT";
    $datatypes['tinyint']['option'] = "(###DisplayWidth###)";
    $datatypes['tinyint']['bytesize'] = 1;
    $datatypes['tinyint']['unsignedrange'] = "~255";
    $datatypes['tinyint']['defaultoptions']['DisplayWidth'] = "3";

    $datatypes['smallint']['description'] = "16-bit Integer";
    $datatypes['smallint']['command'] = "SMALLINT";
    $datatypes['smallint']['option'] = "(###DisplayWidth###)";
    $datatypes['smallint']['bytesize'] = 2;
    $datatypes['smallint']['unsignedrange'] = "~65535";
    $datatypes['smallint']['defaultoptions']['DisplayWidth'] = "5";

    $datatypes['mediumint']['description'] = "24-bit Integer";
    $datatypes['mediumint']['command'] = "MEDIUMINT";
    $datatypes['mediumint']['option'] = "(###DisplayWidth###)";
    $datatypes['mediumint']['bytesize'] = 3;
    $datatypes['mediumint']['unsignedrange'] = "16 777 216";
    $datatypes['mediumint']['defaultoptions']['DisplayWidth'] = "8";

    $datatypes['int']['description'] = "32-bit Integer";
    $datatypes['int']['command'] = "INT";
    $datatypes['int']['option'] = "(###DisplayWidth###)";
    $datatypes['int']['bytesize'] = 4;
    $datatypes['int']['unsignedrange'] = "4 294 967 296";
    $datatypes['int']['defaultoptions']['DisplayWidth'] = "10";

    $datatypes['double']['description'] = "16-digit floating point number";
    $datatypes['double']['command'] = "DOUBLE";
    $datatypes['double']['option'] = "(###DisplayPreComma###, ###DisplayPostComma###)";
    $datatypes['double']['bytesize'] = 8;
    $datatypes['double']['unsignedrange'] = "";
    $datatypes['double']['defaultoptions']['DisplayPreComma'] = "12";
    $datatypes['double']['defaultoptions']['DisplayPostComma'] = "4";

    $datatypes['datetime']['description'] = "Date & Time (2006-12-31 23:59:59)";
    $datatypes['datetime']['command'] = "DATETIME";
    $datatypes['datetime']['option'] = false;
    $datatypes['datetime']['bytesize'] = 8;
    $datatypes['datetime']['unsignedrange'] = false;
    $datatypes['datetime']['defaultoptions'] = false;

    $datatypes['timestamp']['description'] = "Automatic Date & Time Stamp on write or change of row (2006-12-31 23:59:59)";
    $datatypes['timestamp']['command'] = "TIMESTAMP";
    $datatypes['timestamp']['option'] = false;
    $datatypes['timestamp']['bytesize'] = 8;
    $datatypes['timestamp']['unsignedrange'] = false;
    $datatypes['timestamp']['defaultoptions'] = false;

    $datatypes['varchar']['description'] = "Variable size character string (range is for western chars, may vary for multibyte)";
    $datatypes['varchar']['command'] = "VARCHAR";
    $datatypes['varchar']['option'] = "(###SIZE###)";
    $datatypes['varchar']['bytesize'] = false;
    $datatypes['varchar']['unsignedrange'] = "65535";
    $datatypes['varchar']['defaultoptions']['SIZE'] = "1000";

    $datatypes['tinytext']['description'] = "255 character string";
    $datatypes['tinytext']['command'] = "TINYTEXT";
    $datatypes['tinytext']['option'] = false;
    $datatypes['tinytext']['bytesize'] = false;
    $datatypes['tinytext']['unsignedrange'] = 255;
    $datatypes['tinytext']['defaultoptions'] = false;

    $datatypes['text']['description'] = "255 character string";
    $datatypes['text']['command'] = "TINYTEXT";
    $datatypes['text']['option'] = false;
    $datatypes['text']['bytesize'] = false;
    $datatypes['text']['unsignedrange'] = 65536;
    $datatypes['text']['defaultoptions'] = false;

    $datatypes['blob']['description'] = "Binary Data up to 65KB in size";
    $datatypes['blob']['command'] = "BLOB";
    $datatypes['blob']['option'] = false;
    $datatypes['blob']['bytesize'] = false;
    $datatypes['blob']['unsignedrange'] = false;
    $datatypes['blob']['defaultoptions'] = false;

    $datatypes['mediumblob']['description'] = "Binary Data up to 16,5 MB in size";
    $datatypes['mediumblob']['command'] = "MEDIUMBLOB";
    $datatypes['mediumblob']['option'] = false;
    $datatypes['mediumblob']['bytesize'] = false;
    $datatypes['mediumblob']['unsignedrange'] = false;
    $datatypes['mediumblob']['defaultoptions'] = false;

    $datatypes['longblob']['description'] = "Binary Data up to 4,2 GB in size";
    $datatypes['longblob']['command'] = "LONGBLOB";
    $datatypes['longblob']['option'] = false;
    $datatypes['longblob']['bytesize'] = false;
    $datatypes['longblob']['unsignedrange'] = false;
    $datatypes['longblob']['defaultoptions'] = false;
