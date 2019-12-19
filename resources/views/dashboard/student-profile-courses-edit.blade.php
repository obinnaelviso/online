<!--Edit details modal-->
<div id="editDetailModal_{{ $course->id }}" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><i class="fa fa-edit"></i>EDIT COURSE</h4>
			</div>
			<div class="modal-body">
				<form action="{{ route('student.profile.course.edit', $course->id) }}" method="post">
					@csrf @method('put')
					<div class="col-md-6 mb-4">
						<label for="course">Course Name</label>
						<input type="text" name="course" id="course" class="form-control" required max="255" value="{{ $course->course }}">
					</div>
					<div class="col-md-12 mb-4">
						<div class="input-group">
							<input type="checkbox" name="semester1" value="yes" @if($course->semester1) checked @endif> Semester 1 
							<input type="checkbox" name="semester2" value="yes" @if($course->semester2) checked @endif> Semester 2
						</div>
					</div>
					<div class="col-md-12 mb-4">
						<button type="submit" class="btn btn-warning">Edit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>