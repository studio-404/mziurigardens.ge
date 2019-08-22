<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);

$out = array(
    "Error" => array(
        "Code"=>1, 
        "Text"=>"მოხდა შეცდომა !",
        "Details"=>"!"
    )
);

$type = (isset($_POST['type']) && !empty($_POST['type'])) ? $_POST['type'] : "";

switch($type){
    case "callme":
        if(
            !isset($_POST['token']) || 
            (!isset($_POST['name']) || $_POST['name']=="") || 
            (!isset($_POST['country_code']) || $_POST['country_code']=="") || 
            (!isset($_POST['phone']) || $_POST['phone']=="") 
        ){
            $out = array(
                "Error" => array(
                    "Code"=>1, 
                    "Text"=>l('error.message'),
                    "Details"=>""
                ),
                "Success"=>array(
                    "Code"=>0, 
                    "Text"=>""
                )
            );
        }else if($_SESSION["token"]!=$_POST['token']){
            $out = array(
                "Error" => array(
                    "Code"=>1, 
                    "Text"=>"მოხდა ფატალური შეცდომა !",
                    "Details"=>""
                ),
                "Success"=>array(
                    "Code"=>0, 
                    "Text"=>""
                )
            );
        }else{
            $name = (isset($_POST['name']) && !empty($_POST['name'])) ? $_POST['name'] : "";
            $phone = (isset($_POST['phone']) && !empty($_POST['phone'])) ? $_POST['phone'] : "";
            $country_code = (isset($_POST['country_code']) && !empty($_POST['country_code'])) ? $_POST['country_code'] : "";
            
            $body = "<h2>Asked to Call</h2><br />";
            $body .= "<b>IP: </b>". $_SERVER["REMOTE_ADDR"] ."<br />";
            $body .= "<b>Name: </b>". $name ."<br />";
            $body .= "<b>Country Code: </b>". $country_code ."<br />";
            $body .= "<b>Phone: </b>". $phone ."<br />";
            
            $mailed = g_send_email(array(
                "sendTo"=>"v.apkhazava@gmail.com", //
                "subject"=>"Asked to Call",
                "body"=>$body
            ));

            $out = array(
                "Error" => array(
                    "Code"=>0, 
                    "Text"=>"",
                    "Details"=>""
                ),
                "Success"=>array(
                    "Code"=>1, 
                    "mailed"=>$mailed,
                    "Text"=>l('success.message')
                )
            );
        }
        break;
    case "contactMsg":
        if(
            !isset($_POST['token']) || 
            (!isset($_POST['name']) || $_POST['name']=="") || 
            (!isset($_POST['email']) || $_POST['email']=="") || 
            (!isset($_POST['message']) || $_POST['message']=="") || 
            (!isset($_POST['phone']) || $_POST['phone']=="") 
        ){
            $out = array(
                "Error" => array(
                    "Code"=>1, 
                    "Text"=>l('error.message'),
                    "Details"=>""
                ),
                "Success"=>array(
                    "Code"=>0, 
                    "Text"=>""
                )
            );
        }else if($_SESSION["token"]!=$_POST['token']){
            $out = array(
                "Error" => array(
                    "Code"=>1, 
                    "Text"=>"მოხდა ფატალური შეცდომა !",
                    "Details"=>""
                ),
                "Success"=>array(
                    "Code"=>0, 
                    "Text"=>""
                )
            );
        }else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $out = array(
                "Error" => array(
                    "Code"=>1, 
                    "Text"=>l('emailformaterror'),
                    "Details"=>""
                ),
                "Success"=>array(
                    "Code"=>0, 
                    "Text"=>""
                )
            );
        }else{
            $name = (isset($_POST['name']) && !empty($_POST['name'])) ? $_POST['name'] : "";
            $phone = (isset($_POST['phone']) && !empty($_POST['phone'])) ? $_POST['phone'] : "";
            $email = (isset($_POST['email']) && !empty($_POST['email'])) ? $_POST['email'] : "";
            $message = (isset($_POST['message']) && !empty($_POST['message'])) ? $_POST['message'] : "";
            
            $body = "<h2>Contact Message</h2><br />";
            $body .= "<b>IP: </b>". $_SERVER["REMOTE_ADDR"] ."<br />";
            $body .= "<b>Name: </b>". $name ."<br />";
            $body .= "<b>Phone: </b>". $phone ."<br />";
            $body .= "<b>Email: </b>". $email ."<br />";
            $body .= "<b>message: </b><br />". $message ."<br />";
            
            $mailed = g_send_email(array(
                "sendTo"=>"v.apkhazava@gmail.com", //
                "subject"=>"Contact Message",
                "body"=>$body
            ));

            $out = array(
                "Error" => array(
                    "Code"=>0, 
                    "Text"=>"",
                    "Details"=>""
                ),
                "Success"=>array(
                    "Code"=>1, 
                    "mailed"=>$mailed,
                    "Text"=>l('success.message')
                )
            );
        }
        break;
}   

echo json_encode($out);