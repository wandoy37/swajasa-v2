@foreach ($message as $item)
<div class="modal fade" id="showMessage-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-envelope"></i> Message</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
                <form action="{{ url("/admin/message/$item->id") }}" method="post">
                    @csrf
                    @method('patch')
                    <input type="text" name="status" value="confirm" hidden>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary text-light" id="basic-addon1">Name</span>
                            </div>
                            <span class="form-control">{{ $item->name }}</span>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary text-light" id="basic-addon1">Email</span>
                            </div>
                            <span class="form-control">{{ $item->email }}</span>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary text-light" id="basic-addon1">Phone Number</span>
                            </div>
                            <span class="form-control">{{ $item->phone_number }}</span>
                        </div>
                        <div class="input-group mb-3">
                            <label class="me-2">Pesan</label>
                            <div>
                                <span class="form-control">{{ $item->pesan }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group float-right">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success round">
                            <i class="fas fa-check-circle me-2"></i>
                            Confirm
                        </button>
                    </div>
                </form>
			</div>
		</div>
	</div>
</div>
@endforeach
