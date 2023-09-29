<?php

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function load($data)
{

    foreach ($_POST as $key => $value) {

        if (array_key_exists($key, $data)) {

            $data[$key]['value'] = trim($value);
        }
    }
    return $data;
}

function validate($data)
{

    $errors = '';

    foreach ($data as $key => $value) {

        if ($data[$key]['required'] && empty ($data[$key]['value'])) {
            $errors .= "<li>Вы не заполнили поле {$data[$key]['field_name']}</li>";
        }
    }
    return $errors;
}