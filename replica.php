<?php
    include 'connect.php';
    
/*    $error_msg = "";
    $expiry= time()+3600;
    session_start();
    if(isset($_SESSION['login']))
    {    
        if($_SESSION['login']=='1')
            header ("location:quiz.php");
    }
    if(!empty($_POST)){
         $name = $_COOKIE['student'];
         $roll =$_COOKIE['roll_no'];
         $username=$roll;
        $companies = $con->escape_string(trim($_POST['companies']));
        $paper =  $con->escape_string(trim($_POST['paper']));
         $ptype =  $con->escape_string(trim($_POST['ptype']));
        $adm = 'r';
        if(empty($companies)){
            $error_msg="Companies Name or Practice Test Type Required";
        }
        else if(!isset($adm)){
            $error_msg="Admission Type Required";
        }
        else
        {
            $sql = "SELECT * FROM `result` WHERE `roll`='$username' AND `Company_Name`='$companies'";
            $fetch = mysqli_query($con,$sql);
            $count = mysqli_num_rows($fetch);
            $student = mysqli_fetch_object($fetch);
            if( $count==1 && $student->attempt==0)
            {
                $_SESSION['login']='1';
                $_SESSION['roll']=$username;
                if($adm=="p")
                {
                    $sql = "UPDATE `result` SET `adm`='p', `type1`= NULL,`type2`=NULL,`type3`=NULL, `type4`=NULL,`start_time`=CURTIME() WHERE `roll`='$username' AND `Company_Name`='$companies'";
                }
                else
                {
                    $sql = "UPDATE `result` SET `type1`= NULL,`type2`=NULL,`type3`=NULL, `type4`=NULL,`start_time`=CURTIME() WHERE `roll`='$username' AND `Company_Name`='$companies'";
                }
                    
                $res=mysqli_query($con,$sql) or die($sql);
                setcookie("student", ucwords($student->name), $expiry);
                setcookie("roll_no", $username, $expiry);
                setcookie("companies_name", $companies, $expiry);
                header("location: quiz.php");
            }
            else if($student->attempt==1)
                $error_msg="Your Test Has Ended!";
        }
        
        if($error_msg!="") {
        }  
        else
        { $error_msg="Invalid Login"; }
        
       
    }  */
    ?>
    
<!DOCTYPE html>
<html>
    <head>
        <title>10 Seconds Online Assessment Portal</title>
       
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="Stylesheet/styles.css" />
        <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css" />
        
        <script src="Bootstrap/jquery/jquery-2.1.1.min.js"></script>
        <script src="Bootstrap/js/bootstrap.min.js"></script>
        <script>
            function checkLogin()
            {
		localStorage.setItem("timer",3600);
                document.getElementById("loginForm").submit();
            }
        </script>
        <style>
          .hiddenMenu {display: none;}
           .visibleMenu {display: inline;}

            @font-face {
                font-family: myFont;
                src: url(Fonts/JosefinSans.ttf);
            }
            
            @font-face {
                font-family: myFontBold;
                src: url(Fonts/Expressway.ttf);
            }
            
            @font-face {
                font-family: myFontTitle;
                src: url(Fonts/Accidental.ttf);
            }
            
            @font-face {
                font-family: myFontSpecs;
                src: url(Fonts/Abel.ttf);
            }
        </style>
<script type="text/javascript">
var lastDiv = "";
function showDiv(divName) {
    // hide last div
    if (lastDiv) {
        document.getElementById(lastDiv).className = "hiddenMenu";
    }
    //if value of the box is not nothing and an object with that name exists, then change the class
    if (divName && document.getElementById(divName)) {
        document.getElementById(divName).className = "visibleMenu";
        lastDiv = divName;
    }
}
</script>
    </head>
    
    <body>
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand"><img src="10 Sec Logo.png" style="width: 20%;">
			</a>
            
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main" style="position:relative;top:-49px">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav">
            
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <p class="navbar-brand" style="position:relative;top:-20px">Test Type Selection Page for Students</p>
                </li>
                
            </ul>

        </div>
      </div>
    </div>

   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
    <div class="container">
        
        <div class="row">
            <div class="col-lg-12">
                <br>
            <div class="bs-component">
                <div class="jumbotron">
                    <div class="row">
                        <p>Test for Students</p>
                    <div class="input-group col-lg-6">
                
                    <form action="quiz.php" method="POST" enctype="multipart/form-data" id="loginForm">
    <label for="shirttype">Choose your Company or Practice Test Type: &nbsp;&nbsp; </label>
    <select name="category" id="shirttype" onchange="showDiv(this.value);">
         <option value="">-</option>
                                       <option  value="TCS">TCS</option>
                                       <option  value="Infosys">Infosys</option>
                                        <option  value="Accenture">Accenture</option>
                                         <option  value="Wipro">Wipro</option>
                                          <option  value="Capgemini">Capgemini</option>
                                          <option  value="Practice Test-30 Marks">Practice Test-30 Marks</option>
                                          <option  value="Practice Test-60 Marks">Practice Test-60 Marks</option>
    </select>
    <br/>
    <p id="TCS" class="hiddenMenu">
    <label for="shirtsizefemale">Choose your Company PaperType: &nbsp;&nbsp; </label>
    <select name="subjectCategory" id="shirtsizefemale">
       <option value="Paper1">Paper1</option>
                                       <option value="Paper2">Paper2</option>
                                        <option value="Paper3">Paper3</option>
    </select>
    </p>
    <p id="Infosys" class="hiddenMenu">
    <label for="shirtsizefemale">Choose your Company PaperType: &nbsp;&nbsp; </label>
    <select name="subjectCategory" id="shirtsizefemale">
       <option value="Paper1">Paper1</option>
                                       <option value="Paper2">Paper2</option>
                                        <option value="Paper3">Paper3</option>
    </select>
    </p>
    <p id="Accenture" class="hiddenMenu">
    <label for="shirtsizefemale">Choose your Company PaperType: &nbsp;&nbsp; </label>
    <select name="subjectCategory" id="shirtsizefemale">
       <option value="Paper1">Paper1</option>
                                       <option value="Paper2">Paper2</option>
                                        <option value="Paper3">Paper3</option>
    </select>
    </p>
     <p id="Wipro" class="hiddenMenu">
    <label for="shirtsizefemale">Choose your Company PaperType: &nbsp;&nbsp; </label>
    <select name="subjectCategory" id="shirtsizefemale">
       <option value="Paper1">Paper1</option>
                                       <option value="Paper2">Paper2</option>
                                        <option value="Paper3">Paper3</option>
    </select>
    </p>
     <p id="Capgemini" class="hiddenMenu">
    <label for="shirtsizefemale">Choose your Company PaperType: &nbsp;&nbsp; </label>
    <select name="subjectCategory" id="shirtsizefemale">
       <option value="Paper1">Paper1</option>
                                       <option value="Paper2">Paper2</option>
                                        <option value="Paper3">Paper3</option>
    </select>
    </p>
    <p id="Practice Test-60 Marks" class="hiddenMenu">
    <label for="shirtsizemale">Choose your Practice Test Type and LOD: &nbsp;&nbsp;</label>
    <select name="subjectCategory" id="shirtsizemale">
       <option value="Test1-LOD1">Test1-LOD1</option>
    <option value="Test2-LOD1">Test2-LOD1</option>
    <option value="Test3-LOD1">Test3-LOD1</option> 
    <option value="Test4-LOD2">Test4-LOD2</option>
    <option value="Test5-LOD2">Test5-LOD2</option>
    <option value="Test6-LOD2">Test6-LOD2</option> 
    <option value="Test7-LOD3">Test7-LOD3</option>
    <option value="Test8-LOD3">Test8-LOD3</option>
    <option value="Test9-LOD3">Test9-LOD3</option> 
     <option value="Test10-LOD3">Test10-LOD3</option> 
     </select>
     </p>
    <br/>
    <p id="Practice Test-30 Marks" class="hiddenMenu">
    <label for="shirtsizemale">Choose your Practice Test Type and LOD: &nbsp;&nbsp;</label>
    <select name="subjectCategory" id="shirtsizemale">
       <option value="Test1-LOD1">Test1-LOD1</option>
    <option value="Test2-LOD1">Test2-LOD1</option>
    <option value="Test3-LOD1">Test3-LOD1</option> 
    <option value="Test4-LOD2">Test4-LOD2</option>
    <option value="Test5-LOD2">Test5-LOD2</option>
    <option value="Test6-LOD2">Test6-LOD2</option> 
    <option value="Test7-LOD3">Test7-LOD3</option>
    <option value="Test8-LOD3">Test8-LOD3</option>
    <option value="Test9-LOD3">Test9-LOD3</option> 
     <option value="Test10-LOD3">Test10-LOD3</option> 
     </select>
     </p>
    <br/>
                            <tr><td>
                                <div style="margin-left: 4em;">
                                 <a href="quiz.php" style="position:relative;bottom:-27px;right:-54px"><button style="position:relative;background-color:blue;color:yellow">LOGIN</button></a>
                            </div>  
                            </td>
                            
                        </tr>
                        
                        </table>
						<br>
                        <div class="col-lg-6" style="float: right">
                        <p class="error"><?php echo $error_msg ?></p>
                    </div>
                    </form>
                    </div>
                    
                    
                    </div>
                    
                    </div>
                    
                </div>

            </div>
            
            </div>
        </div>
    </body>
</html>