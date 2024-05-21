<?php

function transformerPrenom(string $prenom)
{
    if (strpos($prenom, " ")) {
        return ucwords(strtolower($prenom));
    } elseif (strpos($prenom, "-")) {
        return mb_convert_case($prenom, MB_CASE_TITLE);
    }
    return ucfirst(strtolower($prenom));
}

function estSolide(string $password)
{
    return preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,14}$/', $password);
}