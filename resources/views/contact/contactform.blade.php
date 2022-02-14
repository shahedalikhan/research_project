<title>Contact Form</title>
<form method="post" action="{{URL::to('#')}}">   
{{ csrf_field() }}   
  <input name="teacher_name" type="text" class="feedback-input" placeholder="Teacher Name" />
  <input name="student_name" type="text" class="feedback-input" placeholder="Student Name" />
  <input name="email" type="text" class="feedback-input" placeholder="Student Email" />
  <input name="student_id" type="number" class="feedback-input" placeholder="Student ID" /> 
  <input name="student_batch" type="text" class="feedback-input" placeholder="Student Batch" />      
  
  <textarea name="text" class="feedback-input" placeholder="Research Idea"></textarea>
  <input type="submit" value="SUBMIT"/>
</form>

<style>
@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

body { background:rgb(30,30,40); }
form { max-width:420px; margin:50px auto; }

.feedback-input {
  color:white;
  font-family: Helvetica, Arial, sans-serif;
  font-weight:500;
  font-size: 18px;
  border-radius: 5px;
  line-height: 22px;
  background-color: transparent;
  border:2px solid #CC6666;
  transition: all 0.3s;
  padding: 13px;
  margin-bottom: 15px;
  width:100%;
  box-sizing: border-box;
  outline:0;
}

.feedback-input:focus { border:2px solid #CC4949; }

textarea {
  height: 150px;
  line-height: 150%;
  resize:vertical;
}

[type="submit"] {
  font-family: 'Montserrat', Arial, Helvetica, sans-serif;
  width: 100%;
  background:#CC6666;
  border-radius:5px;
  border:0;
  cursor:pointer;
  color:white;
  font-size:24px;
  padding-top:10px;
  padding-bottom:10px;
  transition: all 0.3s;
  margin-top:-4px;
  font-weight:700;
}
[type="submit"]:hover { background:#CC4949; }
</style>