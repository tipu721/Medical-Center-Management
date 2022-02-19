

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <style type="text/css">
        lebel
        {
            display: inline-block;
            width:200px;
        }
    </style>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      
      @include('admin.sidebar')
      <!-- partial -->
      
      @include('admin.navbar')

        <!-- partial -->
<div class="container-fluid page-body-wrapper">
       
        
        
        <div class="container" align="center"
        style="padding-top:100px;">

        @if(session()->has('message'))

        <div class="alert alert-success">

        <button type= "button" class="close" data-dismiss= "alert" > 
            x
        </button>

        {{session()->get('message')}}

        </div>

        @endif


            <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                @csrf
             <div style="padding:15px;">
                <lebel>Doctor Name</lebel>
                <input type="text" style="color:black" name="name" 
                placeholder="Writre the name" required="">
             </div>

             <div style="padding:15px;">
                <lebel>Phone</lebel>
                <input type="number" style="color:black" name="number" 
                placeholder="Writre the number" required="">
             </div>

             <div style="padding:15px;">
                <lebel>Speciality</lebel>
                <select name="speciality" style="color: black; width: 200px">
                <option>--Select--</option>
                <option value="skin">skin</option>
                <option value="heart">heart</option>
                <option value="eye">eye</option>
                <option value="nose">nose</option>

                </select>
                
             </div>

             <div style="padding:15px;">
                <lebel>Room No</lebel>
                <input type="text" style="color:black" name="room" 
                placeholder="Writre the room number" required="">
             </div>

             <div style="padding:15px;">
                <lebel>Doctor Image</lebel>
                <input type="file" name="file" required="">
             </div>

             <div style="padding:15px;">
                <input type="submit" class="btn btn-success">
             </div>

             

            </form>
        </div>


</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
  </body>
</html>
