<?php

require_once '../lib/helper.php';

dd($_REQUEST);

$db = new db();
$db->table_name = 'doctors';

$data = [

    'fullname' => post('fullname'),
    'gender' => post('gender'),
    'age' => post('age'),
    'email' => post('email'),
    'address' => post('address'),
    'contact' => post('contact'),
    'specialist' => post('specialist'),
    
];

if(post('fullname') == '' || post('email') == '' || post('contact')== '') {

    $msg= 'Please fill valves';
    redirect(link_path('../doctor/index.php?msg='.$msg));
} else {

    
    
if (post('id') == '' && post('submit') == 'insert') {

    $db->create($data);
    redirect(link_path('../doctors/index.php'));
} else {
    $db->update($data, post('id'));
    redirect(link_path('../doctors/index.php'));
    
}

}