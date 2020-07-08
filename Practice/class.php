<?php



function check($str)
{
    $regexp = "/^[CAP]{1}+\d{4}+[GHIKLM]{1}$/";

    if (preg_match_all($regexp, $str)) {
        return true;
    } else {
        return false;
    }
}
var_dump(check("C0378G"));
var_dump(check("M0318G"));
var_dump(check("P0323A"));

