<?php 
    while($row = mysqli_fetch_assoc($query)){
        $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
                OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id} 
                OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        if(mysqli_num_rows($query2) > 0){
            $result = Decipher($row2['msg'],3);
        }else{
            $result ="No message available";
        }
        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
     //   ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
        ($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";
        ($outgoing_id == $row['unique_id']) ? $hid_me = "hide" : $hid_me = "";

        $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'">
                    <div class="content">
                    <img src="php/images/'. $row['img'] .'" alt="">
                    <div class="details">
                        <span>'. $row['fname']. " " . $row['lname'] .'</span>
                        <p>'.$msg .'</p>
                    </div>
                    </div>
                    <div class="status-dot '. $offline .'"><i class="fa fa-circle"></i></div>
                </a>';
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
    
    function Decipher($input, $key)
    {
        return Encipher($input, 26 - $key);
    }
?>