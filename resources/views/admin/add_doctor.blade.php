<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
    label{
      display: inline-block;
      width: 200px;
    }
    </style>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper" style="padding-top: 15%">
          <div class="container" align="center">

            @if(session()->has('message'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert">x</button>
              {{session()->get('message')}}
            </div>
            @endif

            <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
            @csrf

              <div style="padding: 15px">
                <label for="name">Doctor Name</label>
                <input type="text" name="name" placeholder="Doctor Name" style="color: black;">
              </div>

              <div style="padding: 15px">
                <label for="phone">phone</label>
                <input type="text" name="phone" placeholder="Phone Number" style="color: black;">
              </div>

              <div style="padding: 15px">
                <label for="speciality">Speciality</label>
                <select name="speciality" style="color: black; width: 200px"  id="">
                  <option value="">--select--</option>
                  <option value="skin">skin</option>
                  <option value="nose">nose</option>
                  <option value="eyes">eyes</option>
                  <option value="heart">heart</option>
                  <option value="neurologist">neurologist</option>
                </select>
              </div>

              <div style="padding: 15px">
                <label for="room">room.No</label>
                <input type="text" name="room" placeholder="room.No" style="color: black;">
              </div>

              <div style="padding: 15px">
                <label for="file">Doctor Image</label>
                <input type="file" name="file" style="color: black;">
              </div>

              <div style="padding: 15px">
                <input type="submit" class="btn btn-success" style="color: black;">
              </div>

            </form>
          </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
