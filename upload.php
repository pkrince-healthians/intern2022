<pre>
<?php
//print_r($_POST);
//print_r($_FILES);
$postData = $_POST;

$hostname = "astdb001.healthians.co.in";
$user_name = "prince_pandey";
$password = "T8cih4Ue5AJx6D8YIdlVED4r";
$database = "int004";

$conn = mysqli_connect($hostname, $user_name, $password, $database) or die("connection failed:" . mysqli_connect_error());

$response = validateFormData($postData);
if ($response['status']) {
    echo 'Data Validate Successfully. ';
    $fileUploadRs = fileUpload($_FILES);
    //print_r($fileUploadRs);
    if ($fileUploadRs['status'] && !empty($fileUploadRs['image_path'])) {

        $image_path = $fileUploadRs['image_path'];
        $user_name = $postData['user_name'];
        $user_age = $postData['user_age'];
        $user_add = $postData['user_add'];
        $contact_number = $postData['contact_number'];
        $city = $postData['city'];
        $gender = $postData['gender'];


        //redirect('dashboard.php');
        // Insert
        $sql = "INSERT INTO UserCrm (image_path, user_name, user_age, user_add, contact_number, city , gender) VALUES ('" . $image_path . "','" . $user_name . "','" . $user_age . "','" . $user_add . "','" . $contact_number . "','" . $city . "','" . $gender . "')";

        //print_r($sql);
        // die;
        $query = mysqli_query($conn, $sql);
        if ($query) {
            echo "Entry successful";
        } else {
            echo "Error Occured";
        }
    } else {
        echo $response['message'];
    }
} else {
    echo $response['message'];
}

function fileUpload($fileInfo)
{
    $fileUploadRs = array();
    $fileUploadRs['status'] = true;
    $fileUploadRs['message'] = 'file uploaded successfully';
    //print_r($fileInfo);

    $target_dir = "/tmp/";
    echo $target_file = $target_dir . basename($fileInfo["user_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file)) {
        $fileUploadRs['status'] = true;
        $fileUploadRs['message'] = "Sorry, file already exists.";
        $uploadOk = 1;
    }

    // Check file size
    if ($fileInfo["user_image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg"
        || $imageFileType == "gif"
    ) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        echo 'target_file' . $target_file;
        if (move_uploaded_file($fileInfo["user_image"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($fileInfo["user_image"]["name"])) . " has been uploaded.";
            $fileUploadRs['image_path'] = $target_file;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    return $fileUploadRs;
}

function validateFormData($postData)
{
    $validationRs = array();
    // Validate Post Data
    $validationRs['status'] = true;
    $validationRs['message'] = 'Data validate successfully';

    if (empty($postData['user_name'])) {
        $validationRs['status'] = false;
        $validationRs['message'] = 'User name should not be empty.';
    }

    if (empty($postData['age']) && is_numeric($postData['age'])) {
        $validationRs['status'] = false;
        $validationRs['message'] = 'User name should not be empty.';
    }


    return $validationRs;
}


?>