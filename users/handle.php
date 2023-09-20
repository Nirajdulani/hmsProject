<?php

require_once '../lib/helper.php';

dd($_REQUEST);

$db = new db();
$db->table_name = 'users';

$data = [

    'fullname' => post('fullname'),
    'email' => post('email'),
    'contact' => post('contact'),
    'address' => post('address'),
    'status' =>  post('status') !== null ? post('status') : 'Locked',
];

if(post('fullname') == '' || post('email') == '' || post('contact')== '') {

    $msg= 'Please fill valves';
    redirect(link_path('users/index.php?msg='.$msg));
} else {

    
    
if (post('id') == '' && post('submit') == 'insert') {

    $db->create($data);
    redirect(link_path('users/index.php'));
} else {
    $db->update($data, post('id'));
    redirect(link_path('users/index.php'));
    
}

}