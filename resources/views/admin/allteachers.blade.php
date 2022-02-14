<!DOCTYPE html>
<html>
<head>
<style>

table {
  font-family: Times, "Times New Roman", Georgia;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #20b2aa;
}
tr:nth-child(odd) {
  background-color: #008080;
}

a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #04AA6D;
  color: white;
}

.round {
  border-radius: 50%;
}
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
<title>Faculty List</title>
<script src="https://kit.fontawesome.com/3f89949de6.js" crossorigin="anonymous"></script>

</head>

<body>
<form action="{{URL::to('/admin_dashboard')}}">

<button style="background:black;color:white;height:40px; width:90px;"  ><i class="fas fa-arrow-left "></i></i></button>
        
</form> 
<h2>Faculty List</h2>



<table>


  <thead>
            <tr>
                <th>SL No</th>
                <th>Teachers Name</th>
                <th>Teacher's Initial</th>
                <th>Email Address</th>
                <th>Contact Number</th>
                <th>Profile Photo</th>
                <th>Workfield</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
  </thead>
        <tbody>
            
            @foreach ($teachersinfo as $teachersinfo)
            <tr>
                <td>{{$teachersinfo->teacher_id}}</td>
                <td>{{$teachersinfo->teacher_name}}</td>
                <td>{{$teachersinfo->teacher_initial}}</td>
                <td>{{$teachersinfo->teacher_email}}</td>
                <td>{{$teachersinfo->teacher_phone}}</td>
                <td><img src="{{URL::to($teachersinfo->teacher_image)}}" height="80" width="100" style="border-radius: 15%";></td>
                <td>{{$teachersinfo->teacher_workfield}}</td>
                <td></td>
              
              
                <td>
                   
                      
                      
                      <button>Edit</button>
                      <a href="{{URL::to('/teacher_delete/'.$teachersinfo->teacher_id)}}" ><button class="btn btn-outline-danger" >Delete</button></a>

                </td>
            </tr>
            @endforeach
        </tbody>
        
</table></br></br>


</body>
</html>

