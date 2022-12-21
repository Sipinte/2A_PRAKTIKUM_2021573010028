<?php 
session_start();
if(isset($_GET['x']) && $_GET['x']==='home'){
        $page = "home.php";
            include 'main.php';
          }
          
          else if(isset($_GET['x']) && $_GET['x']==='menu'){
            $page = "menu.php";
            include 'main.php';
          }

          else if(isset($_GET['x']) && $_GET['x']==='order'){
            
            if($_SESSION['level_inicafe']!=5){
              $page = "order.php";
              include 'main.php';
            }else if($_SESSION['level_inicafe']==5){
              $page = "my_order.php";
              include 'main.php';
            }
            else{
              $page = "home.php";
              include 'main.php';
            }
          }

          else if(isset($_GET['x']) && $_GET['x']==='user'){
            if($_SESSION['level_inicafe']==1){
              $page = "user.php";
              include 'main.php';
            }
            else{
              $page = "home.php";
              include 'main.php';
            }
          }

          // elseif(isset($_GET['x']) && $_GET['x']==='report'){
          // if($_SESSION['level_inicafe']==1){
          //   $page = "report.php";
          //   include 'main.php';
          // }
          // else{
          //   $page = "home.php";
          //   include 'main.php';
          // }
          // }
          else if(isset($_GET['x']) && $_GET['x']==='menucustomer'){
            $page = "menu_customer.php";
            include 'main.php';
          }
          else if(isset($_GET['x']) && $_GET['x']==='ordercustomer'){
            $page = "order_customer.php";
            include 'main.php';
          }
          else if(isset($_GET['x']) && $_GET['x']==='about'){
            $page = "about.php";
            include 'main.php';
          }

          else if(isset($_GET['x']) && $_GET['x']==='login'){
            include 'login.php';
          }
          else if(isset($_GET['x']) && $_GET['x']==='register'){
            include 'proses/proses_register.php';
          }
          else if(isset($_GET['x']) && $_GET['x']==='profile'){
            include 'profile.php';
          }
          else if(isset($_GET['x']) && $_GET['x']==='reset'){
            include 'resetpasswordprofile.php';
          }
          else if(isset($_GET['x']) && $_GET['x']==='logout'){
            include 'proses/proses_logout.php';
          }
          else if(isset($_GET['x']) && $_GET['x']==='orderdetail'){
            $page = 'order_detail.php';
            include "main.php";
          }
          else{
            $page = "home.php";
            include 'main.php';
          }
          
          ?>