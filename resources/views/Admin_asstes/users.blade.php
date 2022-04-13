@extends('Admin_asstes.layouts.main')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">


@section('content')

        <div class="row">
            {{-- <div class="col-lg-12">
                <button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#exampleModal">
                    Add Users
                  </button>
            </div> --}}
        </div>
        <div class="card mt-2">


            <div class="card-header">
                <h4>Contact Us </h4>
            </div>
            <div class="card-content p-3">
                {{-- <form action="#">

                 <div class="row p-3">

                    <div class="col-lg-12 col-12 mt-2">
                        <input name="file1" type="file" class="dropify" data-height="100" />
                    </div>
                     <div class="col-lg-10 col-12 mt-2">
                        <label><b>Header Text:</b></label><br>
                         <input type="text" class="form-control mt-1" name="text" placeholder="Header Text">
                     </div>
                     <div class="col-lg-2 col-12 mt-2">
                         <label><b> Select Color : </b></label><br>
                        <input type="color" class="mt-1"  id="favcolor" name="color" value="#ff0000">
                    </div>

                 </div>
                </form> --}}

                <div class="table-responsive">
                    <table class="table zero-configuration">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>First Name</th>
                                <th>Company Name</th>



                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $x=0;
                            @endphp
                            @foreach ($headers as $header)
                            @php
                                $x++;
                            @endphp
                            <tr>
                                <td>{{$x}}</td>
                                <td>{{$header->fname}}</td>
                                <td>{{$header->company}}</td>

                                <td>


                                    <button class="btn btn-primary ml-lg-1 ml-md-1 mt-1" data-toggle="modal" data-target="#exampleModal{{$header->id}}"><i class="feather icon-eye"></i> View</button>

                                    <a href="{{url('admin/delete_contact/'.$header->id)}}" onclick="return confirm('Are you sure you want to delete this Contact?');" class="btn btn-danger ml-lg-1 ml-md-1 mt-1"><i class="feather icon-trash-2"></i> Delete</a>


                                </td>
                            </tr>
<!-- Modal -->
<div class="modal fade" id="exampleModal{{$header->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-12 mt-5">

                <div class="contact-form text-center" id="contact-form" data-aos="zoom-in" data-aos-duration="3000">
                    <h4>Get In Touch</h4>
                    <div class="row justify-content-center">
                        <div class="col-6 mt-2">
                            <input type="text" class="form-control" name="fname" value="{{$header->fname}}" placeholder="First Name" readonly>
                        </div>
                        <div class="col-6 mt-2">
                            <input type="text" class="form-control" name="lname"  value="{{$header->lname}}" placeholder="Last Name" readonly>
                        </div>
                        <div class="col-12 mt-2">
                            <input type="text" class="form-control" name="company"  value="{{$header->company}}" placeholder="Company Name" readonly>
                        </div>
                        <div class="col-12 mt-2">
                            <input type="text" class="form-control" name="promoting"  value="{{$header->promoting}}" placeholder="What app’s are you promoting?" readonly>
                        </div>
                        <div class="col-12 mt-2">
                            <input type="text" class="form-control" name="industry"  value="{{$header->industry}}" placeholder="Industry (ecommerce, gaming, etc)" readonly>
                        </div>
                        <div class="col-12 mt-2">
                            <input type="number" class="form-control" name="budget"  value="{{$header->budget}}" placeholder="Monthly ad budge" readonly>
                        </div>

                        <div class="col-12 mt-4">
                            <p class="check-out-label">Product Interest</p>
                            <div class="form-check  d-md-flex algin-items-center justify-content-between mt-3">
                                <div class="d-flex align-items-center">
                                    <input type="checkbox" class="form-check-input" name="services" @if ($header->services=="on")
                                        checked
                                    @endif>
                                    <label class="form-check-label">Ucquisition Growth Services</label>
                                </div>
                                <div class="d-flex align-items-center mt-3 mt-md-0">
                                    <input type="checkbox" class="form-check-input" name="app" @if ($header->app=="on")
                                    checked
                                @endif>
                                    <label class="form-check-label">Ucquisition App Store Optimization</label>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>
                            @endforeach



















                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>First Name</th>
                                <th>Company Name</th>



                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>


            </div>
        </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Users</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{url('admin/adduser')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row p-3">
                    <div class="col-lg-12 col-12 mt-2">
                       <label><b>Name</b></label><br>
                        <input type="text" class="form-control mt-1" name="name" placeholder="Name" required>
                    </div>
                    <div class="col-lg-12 col-12 mt-2">
                        <label><b>Email</b></label><br>
                        <input type="email" class="form-control mt-1" name="email" placeholder="Email" required>

                     </div>

                     <div class="col-lg-12 col-12 mt-2">
                        <label><b>Password</b></label><br>
                         <input type="password" class="form-control mt-1" name="password" placeholder="Password" required>
                     </div>
                     <div class="col-lg-12 col-12 mt-2">
                        <label><b>Number</b></label><br>
                         <input type="text" class="form-control mt-1" name="number" placeholder="Number" required>
                     </div>
                     <div class="col-lg-12 col-12 mt-2">
                        <label><b>Address</b></label><br>
                         <input type="text" class="form-control mt-1" name="address" placeholder="Address" required>
                     </div>
                     <div class="col-lg-12 col-12 mt-2">
                        <label><b>Bio</b></label><br>
                       <textarea name="bio" id="" class="form-control"  rows="5" required></textarea>
                     </div>




                </div>


        </div>
        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
          <button type="submit" class="btn btn-primary">Add User</button>

        </div>
    </form>
      </div>

    </div>
  </div>




<script>
    $('.dropify').dropify();
</script>
@endsection
