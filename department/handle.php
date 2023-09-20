<?php

require_once '../lib/helper.php';

dd($_REQUEST);

$db = new db();
$db->table_name = 'department';

$data = [

    'fullname' => post('fullname'),
    'gender' => post('gender'),
    'age' => post('age'),
    'joiningdate' =>post('joiningdate'),
    'email' => post('email'),
    'address' => post('address'),
    'contact' => post('contact'),
    'department' => post('department'),
    
];

if(post('fullname') == '' || post('email') == '' || post('contact')== '') {

    $msg= 'Please fill valves';
    redirect(link_path('../department/index.php?msg='.$msg));
} else {

    
    
if (post('id') == '' && post('submit') == 'insert') {

    $db->create($data);
    redirect(link_path('../department/index.php'));
} else {
    $db->update($data, post('id'));
    redirect(link_path('../department/index.php'));
    
}

}