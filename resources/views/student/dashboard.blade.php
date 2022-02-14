<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
   <meta charset="utf-8">
   <title>Student Dashboard </title>
   <link rel="stylesheet" href="style1.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
 
   <body>
     <input type="checkbox" id="check">
    <header>

        <label for="check">
             <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
       <div class="left_area">
          <h3>Student <span>Dashboard</span></h3>
        </div>
       
       <div class="right_area">
          <a href="{{URL::to('/stdn_logout')}}" class="logout_btn">Logout</a>
         </div>
    </header>
       
      <div class="sidebar">
       <center>
         <img src="1.png" class="profile_image" alt="">
         <h4></h4>
       </center>
        <a href="{{URL::to('/facultylist')}}" ><i class="fas fa-chalkboard-teacher"></i><span>Faculty List</span></a>
        <a href="{{URL::to('/selectedstudents')}}" ><i class="fas fa-chalkboard-teacher"></i><span>Selected Students</span></a>
      </div> 

     <div class="content">
</div>
  </body>
</html>