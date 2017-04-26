@extends('master')
@section('page', 'Unfriend')
@section('page-content')
	<div id="unfriend" class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Auto Unfriend</h3>
				</div>
				<div class="box-body">
					<form action="unfriend" class="form-group" method="post">
						<h4>You choose <span class="label label-success" id="count-checkbox-unfriend">0</span> of <span class="label label-warning" id="all_friends">0</span> friends to Unfriend</h4><br />
						<table class="table table-striped table-bordered table-hover" id="dataTables-unfriend">
							<thead>
								<tr>
									<th style="width:30px;"><input type="checkbox" id="check_all"></th>
									<th>Name</th>
									<th>Image</th>
									<th>Link</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><input type="checkbox" name="unfriend[]" function="unfriend"></td>
									<td>BinPC</td>
									<td><img src="{{ asset('images/a.jpg') }}" alt="Image" class="image"></td>
									<td><a href="#" class="btn btn-primary">Link to Facebook</a></td>
								</tr>
								<tr>
									<td><input type="checkbox" name="unfriend[]" function="unfriend"></td>
									<td>nongnguyen</td>
									<td><img src="{{ asset('images/a.jpg') }}" alt="Image" class="image"></td>
									<td><a href="#" class="btn btn-primary">Link to Facebook</a></td>
								</tr>
							</tbody>
						</table>
						<div class="pull-right">
							<button type="submit" class="btn btn-info btn-lg">Gửi</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection

@push('scripts')
	<script>
		checkbox('unfriend');
	</script>
@endpush