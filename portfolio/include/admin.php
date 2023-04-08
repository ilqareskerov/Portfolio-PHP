<?php
require('C:\xampp\htdocs\portfolio\include\db.php');
if(isset($_POST["update-section"])){
    $home=$_POST["home"] ?? 0;
    $about=$_POST["about"] ?? 0;
    $service=$_POST["service"] ?? 0;
    $resume=$_POST["resume"] ?? 0;
    $portfolio=$_POST["portfolio"] ?? 0;
    $contact=$_POST["contact"] ?? 0;
    $query="UPDATE section_controll SET ";
    $query.="home_section='$home',";
    $query.="about_section='$about',";
    $query.="resume_section='$resume',";
    $query.="portfolio_section='$portfolio',";
    $query.="contact_section='$contact' Where id=1";
    $run=mysqli_query($db,$query);
        if($run){
        header("Location: ../admin/index.php?sectioncontrol=true");
    }
}

if(isset($_POST["update-home"])){
    $title=mysqli_real_escape_string($db,$_POST["title"]);
    $subtitle=mysqli_real_escape_string($db,$_POST["subtitle"]);
    $showicons=mysqli_real_escape_string($db,$_POST["showicons"]) ?? 0;
    $query1="UPDATE home SET ";
    $query1.="title='$title',";
    $query1.="subtitle='$subtitle',";
    $query1.="showicons='$showicons' Where id=1";
    $run1=mysqli_query($db,$query1);
        if($run1){
        header("Location: ../admin/index.php?homesetting=true");
    }
}

 if(isset($_POST["update-about"])){
    print_r($_FILES);
    $about_title=mysqli_real_escape_string($db,$_POST["abouttitle"]);
    $about_subtitle=mysqli_real_escape_string($db,$_POST["aboutsubtitle"]);
    $about_desc=mysqli_real_escape_string($db,$_POST["profile"]) ;
    $imagename=time().$_FILES["profile"]["name"];
    $imgtemp=$_FILES["profile"]["tmp_name"];
    if($imgtemp==''){
    $q="Select * from about";
    $r=mysqli_query($db,$q);
    $d=mysqli_fetch_array($r);
    $imagename=$d["profile_pic"];
    }
   move_uploaded_file($imgtemp,"../image/$imagename");
    $query2="UPDATE about SET ";
    $query2.="about_title='$about_title',";
    $query2.="about_subtitle='$about_subtitle',";
    $query2.="profile_pic='$imagename',";
    $query2.="about_desc='$about_desc' Where id=1";
    echo $query2;
    $run2=mysqli_query($db,$query2);
        if($run2){
        header("Location: ../admin/index.php?about=true");
}
}



if(isset($_POST["add-skill"])){
     $skill_name=$_POST["skillname"];
     $skill_level=$_POST["skilllevel"];
     $query3="INSERT INTO skills(skill_name,skill_level) value('$skill_name','$skill_level')";
     $run3=mysqli_query($db,$query3);
        if($run3){
        header("Location: ../admin/index.php?about=true");
    }
}





if(isset($_POST["add-personal-info"])){
     $label=$_POST["label"];
     $value=$_POST["value"];
     $query4="INSERT INTO personal_info(label,value) value('$label','$value')";
     $run4=mysqli_query($db,$query4);
        if($run4){
        header("Location: ../admin/index.php?about=true#personal_table");
    }
}


if(isset($_POST["add-resume"])){
     $type=$_POST["type"];
     $title=$_POST["title"];
     $time=$_POST["time"];
     $org=$_POST["org"];
     $about=$_POST["about"];
     $query5="INSERT INTO resume (type,title,time,org,about_exp) value('$type','$title','$time','$org','$about')";
     $run5=mysqli_query($db,$query5);
        if($run5){
        header("Location: ../admin/index.php?resumesetting=true#resume_table");
    }
}






 if(isset($_POST["add-portfolio"])){
    print_r($_FILES);
    $type=$_POST["type"];
    $name=$_POST["name"];
    $link=$_POST["link"];
    $imagename=time().$_FILES["image"]["name"];
    $imgtemp=$_FILES["image"]["tmp_name"];
   move_uploaded_file($imgtemp,"../image/$imagename");
    $query6="INSERT INTO portfolio(project_type,project_pic,project_name,project_link) value('$type','$imagename','$name','$link')";
    $run6=mysqli_query($db,$query6);
        if($run6){
        header("Location: ../admin/index.php?portfoliosetting=true#portfolio_table");
}
}


if(isset($_POST["update-contact"])){
    $address=$_POST["address"];
    $email=$_POST["email"];
    $number=$_POST["number"];
    $query7="UPDATE contact SET ";
    $query7.="adress='$address',";
    $query7.="email='$email',";
    $query7.="number='$number' Where id=1";
    $run7=mysqli_query($db,$query7);
        if($run7){
        header("Location: ../admin/index.php?contactsetting=true");
    }
}



if(isset($_POST["update-background"])){
    $imagename=time().$_FILES["background"]["name"];
    $imgtemp=$_FILES["background"]["tmp_name"];
    if($imgtemp==''){
        $q="Select * from background";
        $r=mysqli_query($db,$q);
        $d=mysqli_fetch_array($r);
        $imagename=$d["background"];
        }
   move_uploaded_file($imgtemp,"../image/$imagename");
    $query8="UPDATE background SET ";
    $query8.="background='$imagename' Where id=1";
    $run8=mysqli_query($db,$query8);
        if($run8){
        header("Location: ../admin/index.php?backgroundsetting=true");
    }}



if(isset($_POST["update-seo"])){
    $title=$_POST["title"];
    $keywords=$_POST["keywords"];
    $description=$_POST["description"];
    $imagename=time().$_FILES["icon"]["name"];
    $imgtemp=$_FILES["icon"]["tmp_name"];
    if($imgtemp==''){
        $q="Select * from seo";
        $r=mysqli_query($db,$q);
        $d=mysqli_fetch_array($r);
        $imagename=$d["siteicon"];
        }
   move_uploaded_file($imgtemp,"../image/$imagename");
    $query9="UPDATE seo SET ";
    $query9.="page_title='$title',";
    $query9.="keywords='$keywords',";
    $query9.="description='$description',";
    $query9.="siteicon='$imagename' Where id=1";
    $run9=mysqli_query($db,$query9);
        if($run9){
        header("Location: ../admin/index.php?seosetting=true");
    }
}



print_r($_POST);
if(isset($_POST["update-account"])){
    $fullname=mysqli_real_escape_string($db,$_POST["fullname"]);
    $email=mysqli_real_escape_string($db,$_POST["email"]);
    $password=mysqli_real_escape_string($db,$_POST["password"]);
    $imagename=time().$_FILES["admin_image"]["name"];
    $imgtemp=$_FILES["admin_image"]["tmp_name"];
    if($imgtemp==''){
        $q="Select * from admin";
        $r=mysqli_query($db,$q);
        $d=mysqli_fetch_array($r);
        $imagename=$d["profile_pic"];
        }
   move_uploaded_file($imgtemp,"../image/$imagename");
    $query10="UPDATE admin SET ";
    $query10.="fullname='$fullname',";
    $query10.="email='$email',";
    $query10.="password='$password',";
    $query10.="profile_pic='$imagename' Where id=1";
    $run10=mysqli_query($db,$query10);
        if($run10){
        header("Location: ../admin/index.php?accountsetting=true");
    }
}


if(isset($_POST["update-social-media"])){
    $twitter=$_POST["twitter"];
    $facebook=$_POST["facebook"];
    $instagram=$_POST["instagram"];
    $linkedin=$_POST["linkedin"];
    $query11="UPDATE social_media SET ";
    $query11.="twitter='$twitter',";
    $query11.="facebook='$facebook',";
    $query11.="instagram='$instagram',";
    $query11.="linkedin='$linkedin' Where id=1";
    $run11=mysqli_query($db,$query11);
        if($run11){
        header("Location: ../admin/index.php?accountsetting=true#social_media");
    }
}

if(isset($_POST["update-personal-info"])){
    $id=$_POST["id"];
    $label10=$_POST["label10"];
    $value10=$_POST["value10"];
    $query11="UPDATE personal_info SET ";
    $query11.="label='$label10',";
    $query11.="value='$value10' Where id=$id";
    $run11=mysqli_query($db,$query11);
        if($run11){
        header("Location: ../admin/index.php?about=true");
    }
}
?>