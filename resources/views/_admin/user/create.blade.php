@extends("_admin.master")
@section("content")
<section class="content-header">
   <div class="container-fluid">
       <div class="row mb-2">
           <div class="col-sm-6">
               <h1>{{ $title }}</h1>
           </div>
           <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                   <li class="breadcrumb-item"><a href="#">Home</a></li>
                   <li class="breadcrumb-item active">{{ $title }}</li>
               </ol>
           </div>
       </div>
   </div>
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Create New User</h3>
                    </div> 
                    <div class="card-body table-responsive no-padding">
                        <form action="{{ url('magic/users') }}" method="post" accept-charset="utf-8">
                             @csrf
                            <div class="box-body">
                                <!-- Name -->
                                <div class="form-group ">
                                    <label>
                                         Name
                                    </label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    <p class="help-block"></p>
                                </div>

                                <!-- Email -->
                                <div class="form-group ">
                                    <label>
                                         Email*
                                    </label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    <p class="help-block"></p>
                                </div>

                                <!-- Password -->
                                <div class="form-group ">
                                    <label>
                                         Password*
                                    </label>
                                    <input type="password" name="password" class="form-control">
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    <p class="help-block"></p>
                                </div>

                                <div class="form-group ">
                                    <label>
                                         Confirm Password*
                                    </label>
                                    <input type="password" name="password_confirmation" class="form-control">
                                    <p class="help-block"></p>
                                </div>

                                <!-- Group -->
                                <div class="form-group ">
                                    <label>
                                         Group*
                                     </label>
                                     <select name="group" class="form-control">
                                        <option value="">--Select Group--</option>
                                        <option value="admin" {{ old('group') == 'admin' ? 'selected' : '' }}>Admin</option>
                                        <option value="editor" {{ old('group') == 'editor' ? 'selected' : '' }}>Editor</option>
                                        {{-- <option value="member" {{ old('group') == 'member' ? 'selected' : '' }}>Member</option> --}}
                                    </select>
                                    <span class="text-danger">{{ $errors->first('group') }}</span>
                                    <p class="help-block"></p>
                                </div>
                            </div>

                            <div class="box-footer">
                                <input type="submit" name="submit" class="btn btn-primary" value="Create User">
                                &nbsp;
                                <a href="{{ url('magic/users') }}" class="btn btn-default">
                                    Cancel
                                </a>
                            </div>
                        </form>
                    </div> 
                </div> 
            </div> 
        </div>
    </div>
</section> 

@endsection