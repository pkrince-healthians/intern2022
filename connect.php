<?php
print_r($_POST);
$postData = $_POST;

$response = validateFormData($postData);
if($response['status'])
{





    
}
function validateFormData($postData)
{
    $validationRs = array();
    // Validate Post Data
    $validationRs['status'] = true;
    $validationRs['message'] = 'Data validate successfully';
    return $validationRs;
}


?>