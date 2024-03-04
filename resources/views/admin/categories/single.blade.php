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
						<h5 class="m-0">Category</h5>
					</div>
					@can('permissions', ['categories', 'create'])
					<div class="col-sm-6 text-right">
						<a class="btn btn-warning" href="{{ route('admin::categories.index') }}">List</a>
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
						<form method="post" action="{{ route('admin::categories.store') }}" enctype="multipart/form-data">
							@csrf
							<input type="hidden" name="id" value="{{ $category->id ?? '' }}">
							<div class="row">
								<div class="col-md-12 ">
									<details open style="padding: 12px; background: aliceblue;">
										<summary>Details</summary>
										<div class="row p-3">

											<!-- Name -->
											<div class="col-md-6">
												<div class="form-group">
													<label for="name">Name <span class="text-danger">*</span></label>
													<input type="text" class="form-control slug" id="name" name="name" placeholder="Enter name" value="{{ old('name', $category->name ?? '') }}" required>
													@error('name') <div class="text-danger">{{ $message }}</div> @enderror
												</div>
											</div>
											<!-- End Name -->

											<!-- Slug -->
											<div class="col-md-6">
												<div class="form-group">
													<label for="price">Slug</label>
													<input type="text" class="form-control set-slug" id="slug" name="slug" placeholder="Enter slug" value="{{ old('slug', $category->slug ?? '') }}">
													@error('slug') <div class="text-danger">{{ $message }}</div> @enderror
												</div>
											</div>
											<!-- End Slug -->

								<div class="col-md-12 mt-4 text-center">
									<button type="submit" class="btn btn-primary">Submit</button>
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

