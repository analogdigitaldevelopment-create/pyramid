<?php
include("./config.php");
if(isset($_POST['submit'])){


    // Collect form data
    $fullName = $_POST['name'];
    $nameParts = explode(" ", $fullName, 2); 
    $firstName = $nameParts[0]; 
    $lastName  = isset($nameParts[1]) ? $nameParts[1] : "";
    $email     = $_POST['email'];
    $mobile    = $_POST['mobile'];
    $remark    = $_POST['project'];

    // API endpoint
    $url = "https://pyramid.maksoftbox.com/MDocBoxAPI/MdocAddEnquiryORTeleCalling";
    if($_POST['project'] == "Pyramid Elite"){
        // API payload (minimum required fields + your form fields)
    $data = [
        "DataFrom"    => "T",
        "ApiKey"      => "5c896419-4a71-4bc7-81ce-dcef0daae896", // replace with correct project key
        "EnquiryDate" => date("Y-m-d"),
        "FirstName"   => $firstName,
        "LastName"    => $lastName,
        "MobileNo"    => $mobile,
        "Email"       => $email,
        "Source"      => "Digitals",   // must match CRM config
        "SourceDetail"=> "Website",    // must match CRM config
        "Remark"      => $remark
    ];

    }
    elseif ($_POST['project'] == "Pyramid Gloria") {
         $data = [
        "DataFrom"    => "T",
        "ApiKey"      => "16e6e2bd-4d74-4808-9d37-70319cba9464", // replace with correct project key
        "EnquiryDate" => date("Y-m-d"),
        "FirstName"   => $firstName,
        "LastName"    => $lastName,
        "MobileNo"    => $mobile,
        "Email"       => $email,
        "Source"      => "Digitals",   // must match CRM config
        "SourceDetail"=> "Website",    // must match CRM config
        "Remark"      => $remark
    ];
    }
    elseif($_POST['project'] == "Pyramid Amara"){
         $data = [
        "DataFrom"    => "T",
        "ApiKey"      => "35746d2c-e224-430a-8bdb-ce57a6cd1333", // replace with correct project key
        "EnquiryDate" => date("Y-m-d"),
        "FirstName"   => $firstName,
        "LastName"    => $lastName,
        "MobileNo"    => $mobile,
        "Email"       => $email,
        "Source"      => "Digitals",   // must match CRM config
        "SourceDetail"=> "Website",    // must match CRM config
        "Remark"      => $remark
    ];
    }
    elseif($_POST['project'] == "Pyramid Gold"){
         $data = [
        "DataFrom"    => "T",
        "ApiKey"      => "1e97a510-e7fb-4cc9-ae24-9f2c59f85713", // replace with correct project key
        "EnquiryDate" => date("Y-m-d"),
        "FirstName"   => $firstName,
        "LastName"    => $lastName,
        "MobileNo"    => $mobile,
        "Email"       => $email,
        "Source"      => "Digitals",   // must match CRM config
        "SourceDetail"=> "Website",    // must match CRM config
        "Remark"      => $remark
    ];
    }
    // Initialize cURL
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/x-www-form-urlencoded'
    ]);

    // Execute and get response
    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // Decode JSON response
    $result = json_decode($response, true);

    // Handle response
    if ($http_code == 200 && isset($result['status']) && $result['status'] === "success") {
        echo "<script>alert('success')</script>";
        // echo $result['status'];
    } else {
        echo "<script>alert('faild')</script> " . $response;
    }
    $insert = "INSERT INTO `enquiry`(`name`, `email`, `mobile`, `project`) VALUES ('$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[project]')";
    $result = mysqli_query($con,$insert);

    if($result){
        // echo "<script>alert('Inserted in Server sucessfully')</script>";
        header('Location: ./Pyramid Amara Brochure Digital_.pdf');
    }
    else{
        echo "<script>alert('sever is crashed')</script>";
    }
}
if(isset($_POST['contact'])){
     // Collect form data
    $fullName = $_POST['name'];
    $nameParts = explode(" ", $fullName, 2); 
    $firstName = $nameParts[0]; 
    $lastName  = isset($nameParts[1]) ? $nameParts[1] : "";
    $email     = $_POST['email'];
    $mobile    = $_POST['mobile'];
    $remark    = $_POST['project'];

    // API endpoint
    $url = "https://pyramid.maksoftbox.com/MDocBoxAPI/MdocAddEnquiryORTeleCalling";
    if($_POST['project'] == "Pyramid Elite"){
        // API payload (minimum required fields + your form fields)
    $data = [
        "DataFrom"    => "T",
        "ApiKey"      => "5c896419-4a71-4bc7-81ce-dcef0daae896", // replace with correct project key
        "EnquiryDate" => date("Y-m-d"),
        "FirstName"   => $firstName,
        "LastName"    => $lastName,
        "MobileNo"    => $mobile,
        "Email"       => $email,
        "Source"      => "Digitals",   // must match CRM config
        "SourceDetail"=> "Website",    // must match CRM config
        "Remark"      => $remark
    ];

    }
    elseif ($_POST['project'] == "Pyramid Gloria") {
         $data = [
        "DataFrom"    => "T",
        "ApiKey"      => "16e6e2bd-4d74-4808-9d37-70319cba9464", // replace with correct project key
        "EnquiryDate" => date("Y-m-d"),
        "FirstName"   => $firstName,
        "LastName"    => $lastName,
        "MobileNo"    => $mobile,
        "Email"       => $email,
        "Source"      => "Digitals",   // must match CRM config
        "SourceDetail"=> "Website",    // must match CRM config
        "Remark"      => $remark
    ];
    }
    elseif($_POST['project'] == "Pyramid Amara"){
         $data = [
        "DataFrom"    => "T",
        "ApiKey"      => "35746d2c-e224-430a-8bdb-ce57a6cd1333", // replace with correct project key
        "EnquiryDate" => date("Y-m-d"),
        "FirstName"   => $firstName,
        "LastName"    => $lastName,
        "MobileNo"    => $mobile,
        "Email"       => $email,
        "Source"      => "Digitals",   // must match CRM config
        "SourceDetail"=> "Website",    // must match CRM config
        "Remark"      => $remark
    ];
    }
    elseif($_POST['project'] == "Pyramid Gold"){
         $data = [
        "DataFrom"    => "T",
        "ApiKey"      => "1e97a510-e7fb-4cc9-ae24-9f2c59f85713", // replace with correct project key
        "EnquiryDate" => date("Y-m-d"),
        "FirstName"   => $firstName,
        "LastName"    => $lastName,
        "MobileNo"    => $mobile,
        "Email"       => $email,
        "Source"      => "Digitals",   // must match CRM config
        "SourceDetail"=> "Website",    // must match CRM config
        "Remark"      => $remark
    ];
    }
    // Initialize cURL
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/x-www-form-urlencoded'
    ]);

    // Execute and get response
    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // Decode JSON response
    $result = json_decode($response, true);

    // Handle response
    if ($http_code == 200 && isset($result['status']) && $result['status'] === "success") {
        echo "<script>alert('success')</script>";
        // echo $result['status'];
    } else {
        echo "<script>alert('faild')</script> " . $response;
    }
    $insert = "INSERT INTO `contact`(`name`, `email`, `mobile`, `project`, `message`) VALUES ('$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[project]','$_POST[message]')";
    $result = mysqli_query($con,$insert);

    if($result){
        // echo "<script>alert('Inserted in Server sucessfully')</script>";
        header('Location: ../index.php');
    }
    else{
        echo "<script>alert('sever is crashed')</script>";
    }
}
?>