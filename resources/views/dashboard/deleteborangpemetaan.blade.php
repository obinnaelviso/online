<!--Edit details modal-->
<div id="deleteDetailModal_{{ $borangpemetaan->id }}" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->

		<form action="{{ route('deleteborangpemetaan', $borangpemetaan->id) }}" method="post" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><i class="fa fa-edit"></i>DELETE BORANG</h4>
				</div>
				<div class="modal-body dash-form">
						{{ csrf_field() }}
						<h4>Are you sure you want to delete this form?</h4>
				</div>
				<div class="modal-footer">
					<div class="table-action-box">
	   					<input type="submit" value="Delete" name="submit" class="btn btn-danger">
	   					<input type="submit" value="Cancel" name="submit" class="btn btn-default" data-dismiss="modal">
					</div>
				</div>
			</div>
		</form>
	</div>
</div>