<!--Edit details modal-->
<div id="editDetailModal_{{ $borangpemetaan->id }}" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><i class="fa fa-edit"></i>EDIT BORANG</h4>
			</div>
			<div class="modal-body dash-form">
				<form action="{{ route('edit-borangpemetaan', $borangpemetaan->id) }}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="col-sm-3">
						<label class="clear-top-margin">Akademik / Fakulti / Pusat:</label>
						<select id="faculty" name="faculty">
						  	<option value="empty">Select</option>
						    <option value="Pendidikan" {{ $borangpemetaan->faculty === "Pendidikan" ? "selected" : null}}>Pendidikan</option>
							<!--    <option value="Session 2020/20210">Session 2020/2021</option>-->
						</select>
					</div>
					<div class="col-sm-3">
						<label class="clear-top-margin">Session</label>
						<select id="session" name="session">
							<option value="empty">Select</option>
						 <option value="Session 2019/2020" {{ $borangpemetaan->session === "Session 2019/2020" ? "selected" : ""}}>Session 2019/2020</option>
							<option value="Session 2020/2021" {{ $borangpemetaan->session === "Session 2020/2021" ? "selected" : ""}}>Session 2020/2021</option>
						 </select>
					</div>
					<div class="col-sm-3">
						<label class="clear-top-margin">Semester</label>
						<select id="semester" name="semester">
							<option value="empty">Select</option>
						 <option value="Semester 1" {{ $borangpemetaan->semester === "Semester 1" ? "selected" : ""}}>Semester 1</option>
							<option value="Semester 2" {{ $borangpemetaan->semester === "Semester 2" ? "selected" : ""}}>Semester 2</option>
						 </select>
					</div>
					<div class="col-sm-3">
						<label class="clear-top-margin">Jabatan</label>
						<input type="text" name="jabatan" value="{{ $borangpemetaan->jabatan }}">
					</div>
					<div class="clearfix"></div>
					<div class="col-sm-3">
						<label>Course</label>
						<input type="text" name="course" value="{{ $borangpemetaan->course }}">
					</div>
					<div class="col-sm-3">
						<label>Enter description</label>
						<input type="text" name="description" value="{{ $borangpemetaan->description }}">
					</div>
					<div class="col-sm-6">
						 <label for="borangfile">Select file to upload: <strong>{{ $borangpemetaan->borangfile_name }}</strong></label>
						 <input type="file" name="borangfile" id="borangfile">
					</div>
					<div class="clearfix"></div>
			</div>
			<div class="modal-footer">
				<div class="table-action-box">
   					<input type="submit" value="Edit" name="submit" class="btn btn-success">
   					<input type="submit" value="Cancel" name="submit" class="btn btn-danger" data-dismiss="modal">
				</div>
			</div>
			</form>
		</div>
	</div>
</div>