<?php
function get_model($name)
{
    $file_name = 'modelos/'.$name.'.php';
    if(file_exists($file_name)) {
        include $file_name;
    }
}

function get_header()
{
    get_model('header');
}

function get_footer()
{
    get_model('footer');
}