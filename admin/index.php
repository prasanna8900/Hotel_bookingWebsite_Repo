<?php include('inc/db_configue.php');

include('inc/essential.php');
session_regenerate_id(true);
 if(isset($_SESSION['admin']['user'])){
         redirect('dashboard.php');
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Hotel Panel</title>
    <?php include('inc/links.php');?>
    <style>
        div.login-form{
            position: absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            width:400px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="login-form text-center rounded bg-white shadow overflow-hidden ">

        <form method="post">
        <h4 class="bg-dark text-white py-3"> ADMIN LOGIN PANEL</h4>
        <div class="p-4">
         <div class="mb-3">

              <input type="text" class="form-control shadow-none text-center" id="exampleInputEmail1" placeholder="Admin Name" name="admin"  />

            </div>
            <div class="mb-3">

              <input type="password" class="form-control shadow-none text-center" id="password" aria-describedby="emailHelp"placeholder="Password" name="admin_pass" />
            </div>
            <button type="submit" class="btn text-white custom-bg shadow-none  " name="login">LOGIN</button>
            </div>
        </form>
    </div>
 <?php
if(isset($_POST['login'])){
    $filter=filteration($_POST);
    $query="SELECT * FROM  `admin_cred` WHERE `admin_name`=? AND `admin_pass`=?";
    $values=[$filter['admin'],$filter['admin_pass']];
    $res=select($query,$values,"ss");
    if($res->num_rows==1){
        $data=mysqli_fetch_assoc($res);
        $admin_name=$data['admin_name'];
        $_SESSION['admin']=['user'=>$admin_name];
        redirect('dashboard.php');

    }
    else{
       alert("error","Login Failed - invalid credantials ! ");
    }


}

    ?>
<?php include('inc/js.php')?>

</body>
</html>