<?php 
include 'huffman.php';
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $messag = mysqli_real_escape_string($conn, $_POST['message']);
        
         $message = Encipher($messag,3);
         if(!empty($message)){
            $sql = mysqli_query($conn, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$message}')") or die();
        }
    }else{
        header("location: ../login.php");
    }
    function Cipher($ch, $key)
    {
        if (!ctype_alpha($ch))
            return $ch;
    
        $offset = ord(ctype_upper($ch) ? 'A' : 'a');
        return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
    }
    
    function Encipher($input, $key)
    {
        $output = "";
    
        $inputArr = str_split($input);
        foreach ($inputArr as $ch)
            $output .= Cipher($ch, $key);
    
        return $output;
    }

    
?>