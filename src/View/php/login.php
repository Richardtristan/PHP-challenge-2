<?php


use App\Helper\Form;


$form = new Form();
$form->openForm('post', '');

echo $form->textarea('Login', '');

echo $form->textarea('Password', '');

echo $form->submit('se connecter');
$form->closeForm();



