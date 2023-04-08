<?php
require('C:\xampp\htdocs\portfolio\include\db.php');
if(!$_SESSION["isUserLoggenIn"]){
  header("Location: ../admin/pages/examples/login.php");
}
$query="SELECT * FROM  home,section_controll,social_media,about,skills,contact,background,seo,admin";
$run=mysqli_query($db,$query);
$user_data=mysqli_fetch_array($run);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portfolio-AdminPanel | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="./plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="./plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="./plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="./plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="./plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="./plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../include/logout.php">
          Logout
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../image/1667151433IMG_20220509_132434.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$user_data["fullname"]?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="../admin/index.php?sectioncontrol=true" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Section Control
              </p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="../admin/index.php?homesetting=true" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                
                Home Setting
              </p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="../admin/index.php?about=true" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                About Setting
              </p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="../admin/index.php?portfoliosetting=true" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Portfolio Setting
              </p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="../admin/index.php?resumesetting=true" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Resume Setting
              </p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="../admin/index.php?contactsetting=true" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Contact Setting
              </p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="../admin/index.php?backgroundsetting=true" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Change Background
              </p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="../admin/index.php?seosetting=true" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                SEO Setting
              </p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="../admin/index.php?accountsetting=true" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Account Setting
              </p>
            </a>
          </li>

        </ul>
      </nav>
    </div>
  </aside>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Portfolio</h1>
          </div><!-- /.col -->
        
        </div>
        <div class="row">
<?php  
if(isset($_GET["homesetting"])){
?>
<div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Home</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="../include/admin.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Headline</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Headline" value="<?=$user_data["title"]?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Subtitle</label>
                    <input type="text" name="subtitle" class="form-control" id="exampleInputPassword1" placeholder="Subtitle" value="<?=$user_data["subtitle"]?>">
                  </div>
                
                  <div class="form-check">
                    <input type="checkbox" name="showicons" class="form-check-input" id="exampleCheck1" 
                    <?php  
                    if($user_data["showicons"])
                    echo "checked";
                    ?>>
                    <label class="form-check-label" for="exampleCheck1">Show Social Icons</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-home"  class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
  
<?php
}elseif(isset($_GET["sectioncontrol"])){
?>
<form action="../include/admin.php" method="POST">
<div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
<input type="checkbox" name="home" class="custom-control-input" id="customSwitch3" <?php
if($user_data["home_section"])
echo "checked";
?>>
<label class="custom-control-label" for="customSwitch3">Home Section</label>
</div>
<div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
<input type="checkbox" name="resume" class="custom-control-input" id="customSwitch5" 
<?php
if($user_data["resume_section"])
echo "checked";
?>>
<label class="custom-control-label" for="customSwitch5">Resume Section</label>
</div>
<div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
<input type="checkbox" name="portfolio" class="custom-control-input" id="customSwitch1" 
<?php
if($user_data["portfolio_section"])
echo "checked";
?>>
<label class="custom-control-label" for="customSwitch1">Portfolio Section</label>
</div>
<div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
<input type="checkbox" name="contact" class="custom-control-input" id="customSwitch6"
<?php
if($user_data["contact_section"])
echo "checked";
?>>
<label class="custom-control-label" for="customSwitch6">Contact Section</label>
</div>
<div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
<input type="checkbox" name="about" class="custom-control-input" id="customSwitch4"
<?php
if($user_data["about_section"])
echo "checked";
?>>
<label class="custom-control-label" for="customSwitch4">About Section</label>
</div>
<input style="display: block; margin-top: 10px;" type="submit" class="btn btn-primary" name="update-section" value="Save Changes">
</form>
<?php
}elseif(isset($_GET["about"])){
?>
<div class="card card-primary col-lg-12 mb-5">
              <div  class="card-header">
                <h3 class="card-title">Update About</h3>
              </div>
              <img  src="../image/<?=$user_data["profile_pic"]?>" class="col-2">
              <form action="../include/admin.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <label style="display: block;" for="profile" >About Picture</label>
                    <input type="file" class="form-control" name="profile" id="profile">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">About Headline</label>
                    <input type="text" name="abouttitle" class="form-control" id="exampleInputEmail1" placeholder="Enter About Headline" value="<?=$user_data["about_title"]?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">About Subtitle</label>
                    <input type="text" name="aboutsubtitle" class="form-control" id="exampleInputPassword1" placeholder="About Subtitle" value="<?=$user_data["about_subtitle"]?>">
                  </div>
                  <div style="display: flex; flex-direction: row; justify-content: space-between; align-items: center;">
                  <div class="form-group">
                    <label style="display: block;" for="aboutdesc">About Description</label>
                   <textarea name="aboutdesc" id="aboutdesc" cols="80" rows="3"><?=$user_data["about_desc"]?></textarea>
                  </div>
                  <div  class="card-footer ">
                  <button type="submit" name="update-about"  class="btn btn-primary">Update About</button>
                </div>
                </div>
              </form>
                </div>
                <!-- /.card-body -->
                
            </div>
            <div  class="card card-primary col-lg-12 mt-5" id="skill_table">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Skills</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Skill Name</th>
                      <th>Skill Level</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $q ="Select * from skills";
                    $r=mysqli_query($db,$q);
                    while($skills=mysqli_fetch_array($r)){
                    ?>
                    <tr>
                      <td><?=$skills["id"]?></td>
                      <td><?=$skills["skill_name"]?></td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-danger"  style="width:<?=$skills["skill_level"]?>%">
                        </div>
                        </div>
                        <div><span class="badge bg-danger"><?=$skills["skill_level"]?>%</span></div>
                      </td>
                      <td>
                        <a href="../include/delete-skill.php?id=<?=$skills["id"]?>"><button class="btn btn-danger">Delete</button></a>
                      </td>
                    </tr>
                    <?php
                    }?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
              <div style="margin-top: 10px;" class="card-header">
                <h3 class="card-title">Manage Skills</h3>
              </div>
              <form action="../include/admin.php" method="POST">
                <div class="card-body">
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Skill Name</label>
                    <input type="text" name="skillname" class="form-control" id="exampleInputEmail1" placeholder="Enter Skill Name">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputPassword1">Skill Level</label>
                    <input type="range" min="1" max="100" name="skilllevel" class="form-control" id="exampleInputPassword1" value="0">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="add-skill"  class="btn btn-primary">Add Skill</button>
                </div>
              </form>
            </div>

<?php
?>
<div class="card card-primary col-lg-12">
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Manage Personal Info</h3>
  </div>
  <div class="card-header">
    <h3 class="card-title">Personal Info</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body p-0" id="personal_table">
    <table class="table">
      <thead>
        <tr>
          <th style="width: 10px">#</th>
          <th>Label</th>
          <th>Value</th>
          <th style="width: 40px">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $q ="Select * from personal_info";
        $r=mysqli_query($db,$q);
        $c=1;
        while($personal_info=mysqli_fetch_array($r)){
        ?>
        <tr>
          <td><?=$c?></td>
          <td><?=$personal_info["label"]?></td>
          <td><?=$personal_info["value"]?></td>
          <td>
          <a href="<?=$_SERVER["PHP_SELF"]?>?about=true&updatepersonalinfo=true&id=<?=$personal_info["id"]?>" class="nav-link active"><button class="btn btn-warm">Update</button></a>
          <!-- &id=<?=$personal_info["id"]?>" -->

            <a href="../include/delete-personal-info.php?id=<?=$personal_info["id"]?>"><button class="btn btn-danger">Delete</button></a>
          </td>
        </tr>
        <?php
        $c++;
        }?>
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
  <div style="margin-top: 10px;" class="card-header">
    <h3 class="card-title">Manage Personal Info</h3>
  </div>
  <form action="../include/admin.php" method="POST">
    <div class="card-body">
      <div class="form-group col-6">
        <label for="exampleInputEmail1">Label Name</label>
        <input type="text" name="label" class="form-control" id="exampleInputEmail1" placeholder="Enter Label Name">
      </div>
      <div class="form-group col-6">
        <label for="exampleInputPassword1">Label Value</label>
        <input type="text"  name="value" class="form-control" id="exampleInputPassword1" placeholder="Enter Label Value">
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" name="add-personal-info"  class="btn btn-primary">Add Personal Info</button>
    </div>
  </form>
</div>
<?php
if(isset($_GET["updatepersonalinfo"])){
  $id=$_GET["id"];
  $queryt="SELECT * FROM personal_info where id=$id;";
  $run25=mysqli_query($db,$queryt);
  $user_data25=mysqli_fetch_array($run25);
?>
<div class="card card-primary col-lg-12">
<div style="margin-top: 10px;" class="card-header">
    <h3 class="card-title">Update Personal Info</h3>
  </div>
  <form action="../include/admin.php" method="POST">
    <div class="card-body">
    <div class="form-group col-6">
        <label for="exampleInput">Id</label>
        <input type="text" name="id" value="<?=$user_data25["id"]?>" class="form-control" id="exampleInput" placeholder="Enter Label Name">
      </div>
      <div class="form-group col-6">
        <label for="exampleInput">Label Name</label>
        <input type="text" name="label10" value="<?=$user_data25["label"]?>" class="form-control" id="exampleInput" placeholder="Enter Label Name">
      </div>
      <div class="form-group col-6">
        <label for="exampleInput">Label Value</label>
        <input type="text"  name="value10" value="<?=$user_data25["value"]?>" class="form-control" id="exampleInput" placeholder="Enter Label Value">
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" name="update-personal-info"  class="btn btn-primary">Update Personal Info</button>
    </div>
  </form>
  </div>
<?php

}?>
<?php
}elseif(isset($_GET["resumesetting"])){
?>
<?php
?>
<div class="card card-primary col-lg-12">
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Manage Resume</h3>
  </div>
  <div class="card-header">
    <h3 class="card-title">Education & Work</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body p-0" id="resume_table">
    <table class="table">
      <thead>
        <tr>
          <th style="width: 10px">#</th>
          <th>Type</th>
          <th>Title</th>
          <th>Time</th>
          <th>Institute/Company</th>
          <th>About</th>
          <th style="width: 40px">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $q ="Select * from resume";
        $r=mysqli_query($db,$q);
        $c=1;
        while($resume=mysqli_fetch_array($r)){
        ?>
        <tr>
          <td><?=$c?></td>
          <td><?=$resume["type"]?></td>
          <td><?=$resume["title"]?></td>
          <td><?=$resume["time"]?></td>
          <td><?=$resume["org"]?></td>
          <td><?=$resume["about_exp"]?></td>
          <td>
            <a href="../include/delete-resume.php?id=<?=$resume["id"]?>"><button class="btn btn-danger">Delete</button></a>
          </td>
        </tr>
        <?php
        $c++;
        }?>
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
  <div style="margin-top: 10px;" class="card-header">
    <h3 class="card-title">Manage Resume</h3>
  </div>
  <form action="../include/admin.php" method="POST">
    <div class="card-body">
      <div class="form-group col-6">
        <label for="exampleInputEmail1">Resume Type</label>
        <select name="type" class="form-control"><option value="e">Education</option>
        <option value="w">Work</option></select>      
      </div>
      <div class="form-group col-6">
        <label for="exampleInputPassword1">Resume Time</label>
        <input type="text"  name="time" class="form-control" id="exampleInputPassword1" placeholder="Enter Resume Time">
      </div>
    
    <div class="form-group col-6">
        <label for="exampleInputPassword1">Resume Institute/Company</label>
        <input type="text"  name="org" class="form-control" id="exampleInputPassword1" placeholder="Enter Institute/Company">
      </div>
      <div class="form-group col-6">
        <label  style="display: block;" for="exampleInputPassword1">Resume About</label>
        <textarea name="about" id="exampleInputPassword1" cols="80" rows="10"></textarea>
      </div>
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" name="add-resume"  class="btn btn-primary">Add Resume</button>
    </div>
  </form>
</div>
<?php
}elseif(isset($_GET["portfoliosetting"])){
  ?>
  <?php
  ?>
  <div class="card card-primary col-lg-12">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Manage Portfolio</h3>
    </div>
    <div class="card-header">
      <h3 class="card-title">Your Project</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0" id="portfolio_table">
      <table class="table">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>Project Type</th>
            <th>Project Image</th>
            <th>Project Name</th>
            <th>Project Link</th>
            <th style="width: 40px">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $q ="Select * from portfolio";
          $r=mysqli_query($db,$q);
          $c=1;
          while($portfolio=mysqli_fetch_array($r)){
          ?>
          <tr>
            <td><?=$c?></td>
            <td><?=$portfolio["project_type"]?></td>
            <td><img src="../image/<?=$portfolio["project_pic"]?>" alt="" style="width: 150px;"></td>
            <td><?=$portfolio["project_name"]?></td>
            <td><a href="<?=$portfolio["project_link"]?>">Open Link</a></td>
            <td>
              <a href="../include/delete-portfolio.php?id=<?=$portfolio["id"]?>"><button class="btn btn-danger">Delete</button></a>
            </td>
          </tr>
          <?php
          $c++;
          }?>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
    <div style="margin-top: 10px;" class="card-header">
      <h3 class="card-title">Manage Portfolio</h3>
    </div>
    <form action="../include/admin.php" method="POST" enctype="multipart/form-data">
      <div class="card-body">
        <div class="form-group col-6">
          <label for="exampleInputEmail1">Portfolio Type</label>
          <select name="type" class="form-control"><option value="App">App</option>
          <option value="Web">Web</option></select>      
        </div>
        <div class="form-group col-6">
          <label style="display: block;" for="exampleInputPassword1">Portfolio Image</label>
          <input type="file"  name="image" class="form-control" id="exampleInputPassword1">
        </div>
      
      <div class="form-group col-6">
          <label for="exampleInputPassword1">Portfolio Name</label>
          <input type="text"  name="name" class="form-control" id="exampleInputPassword1" placeholder="Enter Picture Name">
        </div>
        <div class="form-group col-6">
          <label  style="display: block;" for="exampleInputPassword1">Portfolio Link</label>
          <!-- <input type="text"  name="about" class="form-control" id="exampleInputPassword1" placeholder="Enter About"> -->
          <input type="text"  name="link" class="form-control" id="exampleInputPassword1" placeholder="Enter Link">
        </div>
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" name="add-portfolio"  class="btn btn-primary">Add Portfolio</button>
      </div>
    </form>
  </div>
  <?php
  }
elseif(isset($_GET["contactsetting"])){
?>
<div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Contact</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="../include/admin.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="Enter Address" value="<?=$user_data["adress"]?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputPassword1" placeholder="Enter Email" value="<?=$user_data["email"]?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone Number</label>
                    <input type="text" name="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Phone Number" value="<?=$user_data["number"]?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-contact"  class="btn btn-primary">Update Contact</button>
                </div>
              </form>
            </div>
<?php }elseif(isset($_GET["backgroundsetting"])){
  $q ="Select * from background";
  $r=mysqli_query($db,$q);
  $background=mysqli_fetch_array($r);
  
?>
<div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Change Background</h3>
              </div>
              <img src="../image/<?=$background["background"]?>" alt="" class="col-2"   >
              <form action="../include/admin.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Background Image Choose</label>
                    <input type="file" name="background" class="form-control" id="exampleInputEmail1">
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" name="update-background"  class="btn btn-primary">Update Background</button>
                </div>
              </form>
            </div>
<?php }elseif(isset($_GET["seosetting"])){
?>
<div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Seo Setting</h3>
              </div>
              <img src="../image/<?=$user_data["siteicon"]?>" alt="" class="col-2"   >
              <form action="../include/admin.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Page Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Page Title" value="<?=$user_data["page_title"]?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keywords</label>
                    <input type="text" name="keywords" class="form-control" id="exampleInputEmail1" placeholder="Enter Keywords" value="<?=$user_data["keywords"]?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputEmail1" placeholder="Enter Description" value="<?=$user_data["description"]?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Page Icon</label>
                    <input type="file" name="icon" class="form-control" id="exampleInputEmail1">
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" name="update-seo"  class="btn btn-primary">Update Seo</button>
                </div>
              </form>
            </div>
<?php
}elseif(isset($_GET["accountsetting"])){
  $q ="Select * from admin,social_media";
  $r=mysqli_query($db,$q);
  $admin=mysqli_fetch_array($r);
  ?>
  <div class="card card-primary col-lg-12">
                <div class="card-header">
                  <h3 class="card-title">Account Setting</h3>
                </div>
                <img src="../image/<?=$admin["profile_pic"]?>" alt="" class="col-2"   >
                <form action="../include/admin.php" method="POST" enctype="multipart/form-data">
                  <div class="card-body">
                  <div class="form-group">
                      <label for="exampleInputEmail1">FullName </label>
                      <input type="text" name="fullname" class="form-control" id="exampleInputEmail1" placeholder="Enter FullName" value="<?=$admin["fullname"]?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" value="<?=$admin["email"]?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Enter Password" value="<?=$admin["password"]?>">
                    </div>
                    <div class="form-group">
                      <label style="display: block;" for="exampleInputEmail1">Profile Image</label>
                      <input type="file" name="admin_image" class="form-control" id="exampleInputEmail1">
                    </div>
                  </div>
  
                  <div class="card-footer">
                    <button type="submit" name="update-account"  class="btn btn-primary">Update Account</button>
                  </div>
                </form>
              </div>





              <div class="card card-primary col-lg-12" id="social_media">
                <div class="card-header">
                  <h3 class="card-title">Social Media Setting</h3>
                </div>
                <form action="../include/admin.php" method="POST">
                  <div class="card-body">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Twitter </label>
                      <input type="text" name="twitter" class="form-control" id="exampleInputEmail1" placeholder="Enter Twitter" value="<?=$admin["twitter"]?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Facebook</label>
                      <input type="text" name="facebook" class="form-control" id="exampleInputEmail1" placeholder="Enter Facebook" value="<?=$admin["facebook"]?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Instagram</label>
                      <input type="text" name="instagram" class="form-control" id="exampleInputEmail1" placeholder="Enter Instagram" value="<?=$admin["instagram"]?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Linkedin</label>
                      <input type="text" name="linkedin" class="form-control" id="exampleInputEmail1" placeholder="Enter Linkedin" value="<?=$admin["linkedin"]?>">
                    </div>
                  </div>
  
                  <div class="card-footer">
                    <button type="submit" name="update-social-media"  class="btn btn-primary">Update Social Media</button>
                  </div>
                </form>
              </div>
  <?php
  }?>


</div>




</div>
</div>
</div>
</div>
</div>
  </div>
  <footer class="main-footer">
    <strong>Copyright &copy; 2022.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-rc
    </div>
  </footer>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

</body>
</html>
