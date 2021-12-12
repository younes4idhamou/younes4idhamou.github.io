<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'subject',
    'email_message' => 'message-1',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'email',
    'to' => 'sdadclub@protonmail.com'
    ),
    'fields' => array(
    'email' => array(
    'order' => 1,
    'type' => 'email',
    'label' => 'E-mail',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'E-mail\' is required.'
    )
    ),
    'name' => array(
    'order' => 2,
    'type' => 'string',
    'label' => 'Full Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Full Name\' is required.'
    )
    ),
    'phone оо' => array(
    'order' => 3,
    'type' => 'tel',
    'label' => 'Phone',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Phone\' is required.'
    )
    ),
    'subject' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'Subject',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Subject\' is required.'
    )
    ),
    'message-1' => array(
    'order' => 5,
    'type' => 'string',
    'label' => 'Your message',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Your message\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>