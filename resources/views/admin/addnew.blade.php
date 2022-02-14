<!DOCTYPE html>
<html>
<head>
    <title>New Faculty</title>
    <link rel="stylesheet"  href="style2.css">
    <script src="https://kit.fontawesome.com/3f89949de6.js" crossorigin="anonymous"></script>
</head>
   <body>
      <h1>New Faculty</h1>
      
      <div class="container">
      <p class=" alert-success"><?php
      $exception=Session::get('exception');

      if($exception)
       {
           echo $exception;
           Session::put('exception',null);
       }
       ?></p>
      <form method="post"  action="{{URL::to('/save_teacher')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
         <h2>Add Info Here</h2>
         <span for="">Teacher's Name:</span></br>
         <input type="text" placeholder="Enter Teacher's Name" name="teacher_name" id="teacher_name" ></br></br>
         <span for="">Teacher's Initial:</span></br>
         <input type="text" placeholder="Enter Teacher's Initial" name="teacher_initial" id="teacher_initial" ></br></br>
         <span for="">Teacher's Email:</span></br>
         <input type="email" placeholder="Enter Teacher's Email" name="teacher_email" id="teacher_email" ></br></br>
         <span for="">Teacher's Phone:</span></br>
         <input type="number" placeholder="Enter Teacher's Phone" name="teacher_phone" id="teacher_phone" ></br></br>
         <span for="">Teacher's Workfield:</span></br>
         <input type="text" placeholder="Enter Teacher's Workfield" name="teacher_workfield" id="teacher_workfield" size="48"   ></br></br>
         
         <span for="">Select Image:</span></br>
         <input type="file" name="teacher_image" id="teacher_image" ></br></br>
         
         
         <button type="submit" value="Submit" id="sub" >Submit</button>
         <button type="reset" value="Reset" id="res">Reset</button>
         </form>
      </br></br>
      <form action="{{URL::to('/admin_dashboard')}}">

<button style="background:black;color:white;height:40px; width:90px;"  ><i class="fas fa-arrow-left "></i></i></button>
        </form>
      </div>
    </body>
</htm>