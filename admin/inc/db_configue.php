<?php


$conn = mysqli_connect('localhost', 'root', '', 'hbms'); // Change this according to your DB details
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


function filteration($data){//filteration function
    foreach($data as $key=>$value){
        $data[$key]=trim($value);
        $data[$key]=stripslashes($value);
        $data[$key]=htmlspecialchars($value);
        $data[$key]=strip_tags($value);
    }
    return $data;
}
function select($sql, $values, $datatypes){
 $conn=$GLOBALS['conn'];
    if($stmt=$conn->prepare($sql)){
        $stmt->bind_param($datatypes,...$values);
        if($stmt->execute()){
            $res=$stmt->get_result();
            $stmt->close();
             return $res;
        }

        else{
             $stmt->close();
            die("query not execute - sorry");
        }


    }
    else {
        die("query Not Prepare - Sorry");
    }
}
function update($sql,$values,$datatypes){
	global $conn;
		if($stmt=$conn->prepare($sql)){
			if(!empty($values)){
				$stmt->bind_param($datatypes,...$values);
			}

			if($stmt->execute()){
					$res=$stmt->affected_rows;
					$stmt->close();
					return $res;
			}
			else{
				$stmt->close();
				die('Query cannot be executed-Updated');
			}
		}
		else{
			die('Query cannot be prepare-Updated');
		}
}
