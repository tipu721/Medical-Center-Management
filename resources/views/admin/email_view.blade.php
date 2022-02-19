

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
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


            <form action="{{url('sendemail',$data->id)}}" method="POST">
                @csrf
             <div style="padding:15px;">
                <lebel>Greeting</lebel>
                <input type="text" style="color:black" name="greeting">
             </div>

             <div style="padding:15px;">
                <lebel>Body</lebel>
                <input type="text" style="color:black" name="body">
             </div>

             

             <div style="padding:15px;">
                <lebel>Action Text</lebel>
                <input type="text" style="color:black" name="actiontext" >
             </div>

             <div style="padding:15px;">
                <lebel>Action Url</lebel>
                <input type="text" style="color:black" name="actionurl" >
             </div>

             <div style="padding:15px;">
                <lebel>End Part</lebel>
                <input type="text" style="color:black" name="endpart" >
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
