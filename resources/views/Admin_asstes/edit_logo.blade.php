@extends('Admin_asstes.layouts.main')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">


@section('content')

        <div class="card">


            <div class="card-content">
                <form action="{{url('admin/updatelogo')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                 <div class="row p-3">

                    {{-- <div class="col-lg-12 col-12 mt-2">
                        <input name="file" type="file" data-default-file="{{asset('upload/admin_profile/'.$user->image)}}" class="dropify" data-height="100" />
                    </div> --}}
                     <div class="col-lg-12 col-12 mt-2">
                        <input type="hidden" name="id" value="{{$header->id}}">
                        <input name="image" type="file" data-default-file="{{asset('upload/logo/'.$header->image)}}" class="dropify" data-height="100" />
                     </div>




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
