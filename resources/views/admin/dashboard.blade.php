<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
   <meta charset="utf-8">
   <title>Admin Dashboard </title>
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
          <h3>Admin <span>Dashboard</span></h3>
        </div>
       
       <div class="right_area">
          <a href="{{URL::to('/logout')}}" class="logout_btn">Logout</a>
         </div>
    </header>
       
      <div class="sidebar">
       <center>
         <img src="1.png" class="profile_image" alt="">
         <h4></h4>
       </center>
        <a href="{{URL::to('/allteachers')}}" ><i class="fas fa-chalkboard-teacher"></i><span>All Teachers</span></a>
        <a href="{{URL::to('/addnew')}}" ><i class="fas fa-plus-square"></i><span>Add New Teacher</span></a>
        <a href="{{URL::to('/pendingproposals')}}" ><i class="fas fa-bell"></i></i><span>Pending Proposals</span></a>
        <a href="{{URL::to('/approvedstudents')}}" ><i class="fas fa-handshake"></i></i><span>Approved Students</span></a>
      </div> 

     <div class="content">
</div>
  </body>
</html>