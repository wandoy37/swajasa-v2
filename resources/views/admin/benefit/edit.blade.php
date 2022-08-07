@foreach ($benefits as $benefit)
<div class="modal fade" id="editBenefit-{{ $benefit->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Benefit</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
                <form action="{{ url("admin/benefit/$benefit->id") }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label>Benefit</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Benefit.." value="{{ old('title', $benefit->title) }}">
                        @error('title')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group float-right">
                        <button type="submit" class="btn btn-primary round">Update</button>
                    </div>
                </form>
			</div>
		</div>
	</div>
</div>
@endforeach
