<?php
          if(isset($_POST['submit']))
          {
            include "config.php";
            $name=mysqli_real_escape_string($conn,$_POST['name']);
            $email=mysqli_real_escape_string($conn,$_POST['email']);
            $age=mysqli_real_escape_string($conn,$_POST['age']);
            $phone=mysqli_real_escape_string($conn,$_POST['phone']);
            $userid=mysqli_real_escape_string($conn,$_POST['userid']);
            $pass=mysqli_real_escape_string($conn,md5($_POST['pass']));
            $address=mysqli_real_escape_string($conn,$_POST['address']);
            $sql1="SELECT user_id FROM user WHERE username='{$userid}';";
            $sql2="INSERT INTO user (name,email,password,username,phone,address,age)
                    VALUES ('{$name}','{$email}','{$pass}','{$userid}','{$phone}','{$address}',{$age});";
            $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");
            $result2=mysqli_query($conn,$sql2);
            if(mysqli_num_rows($result1) > 0)
            {
              echo ("<script LANGUAGE='JavaScript'>
               window.alert('USERNAME ALREADY EXISTS');
              window.location.href='http://localhost/Dbms/signup_page.php';
              </script>");
            }
            else
            {
              echo ("<script LANGUAGE='JavaScript'>
               window.alert('ACCOUNT CREATED SUCCESSFULLY');
              window.location.href='http://localhost/Dbms/login_page.php';
              </script>");
              }
            }
        ?>