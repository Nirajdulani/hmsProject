<?php

require_once '../lib/helper.php';

dd($_REQUEST);

$db = new db();
$db->table_name = 'appointment';

$data = [

    'fullname' => post('fullname'),
    'age' => post('age'),
    'email' => post('email'),
    'gender' =>post('gender'),
    'contact' => post('contact'),
    'date' => post('date'),
    'address' => post('address'),
    'city' => post('city'),
    'country' => post('country'),
    'postal' => post('postal'),
    'diseases' => post('diseases'),
    

];

if(post('fullname') == '' || post('email') == '' || post('contact')== '') {

    $msg= 'Please fill valves';
    redirect(link_path('../appointment/index.php?msg='.$msg));
} else {

    
    
if (post('id') == '' && post('submit') == 'insert') {


    $db->create($data);
    redirect(link_path('../index.php'));
    
} else {
    $db->update($data, post('id'));
    redirect(link_path('../appointment/index.php'));
    
}

}