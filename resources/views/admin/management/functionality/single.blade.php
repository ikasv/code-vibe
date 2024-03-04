@extends('admin.app')

@section('content')
<style>
	span.select2-selection.select2-selection--single {
		height: 37px;
		padding: 6px;
	}

	.select2-container--default .select2-selection--single .select2-selection__arrow {
		top: 5px;
		right: 5px;
	}
</style>


<!-- Main content -->
<section class="content">
	<div class="container pt-5">
		<div class="card">
			<div class="card-header bg-primary">
				<div class="row">
					<div class="col-sm-6 text-left align-self-center">
						<h5 class="m-0">Functionality</h5>
					</div>
					@can('permissions', ['functionality', 'create'] ?: [])
					<div class="col-sm-6 text-right">
						<a class="btn btn-warning" href="{{ route('admin::functionality.index') }}">List</a>
					</div>
					@endcan
				</div>
			</div>
			<div class="card-body p-4">
				@if(session()->has('back_msg'))
				{!! session()->get('back_msg') !!}
				@endif
				<div class="row">
					<!-- left column -->
					<div class="col-md-12">
						<!-- form start -->
						<form method="post" action="{{ route('admin::functionality.store') }}" enctype="multipart/form-data">
							@csrf
							<input type="hidden" name="id" value="{{ $record->id ?? '' }}">
							<div class="row">
								<div class="col-md-12">
									<details open class="my-2" style="padding: 12px; background: aliceblue;">
										<summary>Details</summary>
										<div class="row p-3">

											<!-- Parent Category -->
											<div class="col-md-4">
												<div class="form-group">
													<label for="parent_id">Category</label>
													<br>
													<select type="text" class="form-control select2" id="category_id" name="category_ids">
														<option value="0">Select Category</option>
														@foreach($categories ?? [] as $row)
														<option value="{{ $row->id }}" {{ ( isset($record) && $record->parent_id == $row->id ) ? 'selected' : '' }}>{{ $row->name }}</option>
														@endforeach
													</select>
												</div>
											</div>
											<!-- End Parent Category -->

											<!-- Language -->
											<div class="col-md-4">
												<div class="form-group">
													<label for="parent_id">Language</label>
													<br>
													<select type="text" class="form-control select2" id="language_id" name="language_ids" multiple>
														<option value="0">Select Language</option>
														@foreach(['PHP', 'Laravel', 'Jquery'] ?? [] as $row)
														<option value="{{ $row }}">{{ $row }}</option>
														@endforeach
													</select>
												</div>
											</div>
											<!-- End Language -->

											<!-- Status -->
											<div class="col-md-4">
												<div class="form-group">
													<label for="status">Status</label>
													<select type="text" class="form-control" id="status" name="status">
														<option value="1" {{ ( isset($record) && $record->status == 1 ) ? 'selected' : '' }}>Active</option>
														<option value="0" {{ ( isset($record) && $record->status == 0 ) ? 'selected' : '' }}>Deactive</option>
													</select>
												</div>
											</div>
											<!-- End Status -->
											
											<!-- Name -->
											<div class="col-md-12">
												<div class="form-group">
													<label for="name">Title <span class="text-danger">*</span></label>
													<input type="text" class="form-control slug" id="name" name="name" placeholder="Enter title" value="{{ old('name', $record->name ?? '') }}" required>
													@error('name') <div class="text-danger">{{ $message }}</div> @enderror
												</div>
											</div>
											<!-- End Name -->

											<!-- Slug -->
											<div class="col-md-12">
												<div class="form-group">
													<label for="price">Slug</label>
													<input type="text" class="form-control set-slug" id="slug" name="slug" placeholder="Enter slug" value="{{ old('slug', $record->slug ?? '') }}">
													@error('slug') <div class="text-danger">{{ $message }}</div> @enderror
												</div>
											</div>
											<!-- End Slug -->

											<!-- Requirements -->
											<div class="col-md-12">
												<div class="form-group">
													<label for="price">Requirements <small>( ex. version or library name ) </small></label>
													<textarea type="text" class="form-control" id="requirements" name="requirements" placeholder="Enter requirements">{{ old('requirements', $record->requirements ?? '') }}</textarea>
													@error('requirements') <div class="text-danger">{{ $message }}</div> @enderror
												</div>
											</div>
											<!-- End Requirements -->

											<!-- Description -->
											<div class="col-md-12">
												<div class="form-group">
													<label for="price">Description</label>
													<textarea type="text" class="form-control" id="description" name="description" placeholder="Enter description">{{ old('description', $record->description ?? '') }}</textarea>
													@error('requirements') <div class="text-danger">{{ $message }}</div> @enderror
												</div>
											</div>
											<!-- End Description -->

											<!-- Useful Links -->
											<div class="col-md-12">
												<div class="form-group">
													<label for="useful_links">Useful Links</label>
													<textarea type="text" class="form-control" id="useful_links" name="useful_links" placeholder="Enter useful links">{{ old('useful_links', $record->useful_links ?? '') }}</textarea>
													@error('requirements') <div class="text-danger">{{ $message }}</div> @enderror
												</div>
											</div>
											<!-- End Useful Links -->

											

											<!-- Tags -->
											<div class="col-md-4 d-none">
												<div class="form-group">
													<label for="tags">Tags</label>
													<select type="text" class="form-control select2" id="tags" name="tags">
														<option value="" selected disabled>Choose..</option>
														@foreach(range(1,30) as $tags)
														<option value="{{ $tags }}">{{ $tags }}</option>
														@endforeach
													</select>
													@error('slug') <div class="text-danger">{{ $message }}</div> @enderror
												</div>
											</div>
											<!--End Tags -->

										</div>
									</details>
								</div>
							
								<div class="col-md-12 mt-4">
									<button type="submit" class="btn-dm-sm btn-dm-primary btn-lg">Submit</button>
								</div>
							</div>
							<!-- /.card-body -->

						</form>
					</div>
				</div>
			</div>

		</div>
	</div><!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection

@section('script')
<script>
	$('#number_of_days, #number_of_nights').on('change', function(){
		var duration    		= "";
		var number_of_days   	= $('#number_of_days').val();
		var number_of_nights   	= $('#number_of_nights').val();

		if(number_of_days && number_of_nights){
			duration			=	`${number_of_days} day's and ${number_of_nights} night's`;
		}
		
		if(number_of_days && !number_of_nights){
			duration			=	`${number_of_days} day's `;
		}
		
		if(!number_of_days && number_of_nights){
			duration			=	`${number_of_nights} night's `;
		}

		$('#duration').val(duration);
	});
	


</script>
@endsection