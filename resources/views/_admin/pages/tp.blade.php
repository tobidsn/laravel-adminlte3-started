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
<section class="content">
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-12">
               <div class="card card-primary">
                   <div class="card-header">
                       <h3 class="card-title">Terms & Policy Information</h3>
                   </div>
                   <form role="form" action="{{ url('magic/terms_policy') }}" method="post" accept-charset="utf-8">
                       @csrf
                       <div class="card-body">
                            <div class="form-group">
								<label>
									 Terms Title*
								</label>
								<input type="terms_title" name="terms_title" class="form-control" value="{{ \App\Setting::find_key('terms_title') }}" required>
								<p class="help-block"></p>
							</div>
                        	
                        	<!-- Terms Content -->
							<div class="form-group">
								<label>
									 Terms Content*
								</label>
								<textarea id="editor1" name="terms_content" class="wysiwyg-simple-br" required>{{ \App\Setting::find_key('terms_content') }}</textarea>
								<p class="help-block"></p>
							</div>

							<!-- Policy Title -->
							<div class="form-group">
								<label>
									 Policy Title*
								</label>
								<input type="policy_title" name="policy_title" class="form-control" value="{{ \App\Setting::find_key('policy_title') }}" required>
								<p class="help-block"></p>
							</div>

							<!-- Policy Content -->
							<div class="form-group">
								<label>
									 Policy Content*
								</label>
								<textarea id="editor1" name="policy_content" class="wysiwyg-simple-br" required>{{ \App\Setting::find_key('policy_content') }}</textarea>
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
@section('javascript')
<!-- CK Editor -->
<script src="/dist/plugins/ckeditor/ckeditor.js"></script>
<script>
  	$(function () {

	    var allEditors = document.querySelectorAll('#editor1');
	    for (var i = 0; i < allEditors.length; ++i) {
	    	ClassicEditor
		    	.create(allEditors[i], {
		    		toolbar: [ 'heading', '|', 'bold', 'italic', 'underline', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
		    	})
		    	.then(function (editor) {
				})
	    		.catch(function (error) {
	    			console.error(error)
	    		})
		}
  	})
</script>
@endsection