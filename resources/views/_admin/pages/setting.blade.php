@extends('_admin.master') 
@section('content') 
<section class="content-header">
   <div class="container-fluid">
       <div class="row mb-2">
           <div class="col-sm-6">
               <h1>Settings</h1>
           </div>
           <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                   <li class="breadcrumb-item"><a href="#">Home</a></li>
                   <li class="breadcrumb-item active">Settings</li>
               </ol>
           </div>
       </div>
   </div>
</section>
<section class="content">
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-12">
               <div class="card card-primary">
                   <div class="card-header">
                       <h3 class="card-title">Site Information</h3>
                   </div>
                   <form role="form" action="{{ url('magic/settings') }}" method="post" accept-charset="utf-8">
                       @csrf
                       <div class="card-body">
                           <div class="form-group">
                               <label for="site_name">Site Name*</label>
                               <input type="text" class="form-control" id="site_name" name="site_name" value="{{ \App\Setting::find_key('site_name') }}" required>
                           </div>
                           <div class="form-group">
                               <label for="site_email">Site Email*</label>
                               <input type="email" class="form-control" id="site_email" name="site_email" value="{{ \App\Setting::find_key('site_email') }}" required>
                           </div> 

                           <hr class="hr-line-2px">
                           <div class="form-group ">
                               <label>
                                   Meta Title*
                               </label>
                               <input type="text" name="site_meta_title" class="form-control" value="{{ \App\Setting::find_key('site_meta_title') }}" required>
                               <p class="help-block"></p>
                           </div>

                           <div class="form-group ">
                               <label>
                                   Meta Description*
                               </label>
                               <input type="text" name="site_meta_description" class="form-control" value="{{ \App\Setting::find_key('site_meta_description') }}" required>
                               <p class="help-block"></p>
                           </div>

                       </div>

                       <div class="card-footer">
                           <button type="submit" class="btn btn-primary">Submit</button>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
</section> 
@endsection