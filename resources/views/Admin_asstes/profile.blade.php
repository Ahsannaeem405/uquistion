@extends('Admin_asstes.layouts.main')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">


@section('content')

        <div class="card">


            <div class="card-content">
                <form action="{{url('admin/updateprofile')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                 <div class="row p-3">

                    {{-- <div class="col-lg-12 col-12 mt-2">
                        <input name="file" type="file" data-default-file="{{asset('upload/admin_profile/'.$user->image)}}" class="dropify" data-height="100" />
                    </div> --}}
                     <div class="col-lg-6 col-12 mt-2">
                         <label for=""><b>Name:</b></label>
                         <input type="text" value="{{$user->name}}" name="name" class="form-control" placeholder="Name">
                     </div>

                    <div class="col-lg-6 col-12 mt-2">
                        <label for=""><b>Number:</b></label>

                        <input type="text" value="{{$user->number}}" name="number" class="form-control" placeholder="Number" >
                    </div>
                    <div class="col-lg-6 col-12 mt-2">
                        <label for=""><b>Email:</b></label>

                        <input type="email" value="{{$user->email}}" name="email"  class="form-control" placeholder="Email" required>
                    </div>
                    <div class="col-lg-6 col-12 mt-2">
                        <label for=""><b>Old Password:</b></label>

                        <input type="password" name="oldpassword" class="form-control" placeholder="Old Password">
                    </div>
                    <div class="col-lg-6 col-12 mt-2">
                        <label for=""><b>New Password:</b></label>

                        <input type="password" name="newpassword" class="form-control" placeholder="New Password">
                    </div>
                    <div class="col-lg-6 col-12 mt-2">
                        <label for=""><b>Confirm Password:</b></label>

                        <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
                    </div>
                    {{-- <div class="col-lg-6 col-12 mt-2">
                        <input type="password" class="form-control" placeholder="Confirm Password">
                    </div> --}}
                    <div class="col-lg-12 col-12 mt-2">
                        <button class="btn btn-dark" type="submit" style="float: right;">Update</button>
                    </div>

                 </div>
                </form>

            </div>
        </div>






<script>
    $('.dropify').dropify();
</script>
@endsection
