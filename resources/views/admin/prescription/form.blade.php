@if (count($bookings) > 0)
<!-- Modal -->
<div class="modal fade" id="exampleModal{{ $booking->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('prescription.store') }}" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Prescription</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="app">
                    <input type="hidden" name="user_id" id="user_id" value="{{ $booking->user_id }}">
                    <input type="hidden" name="doctor_id" id="doctor_id" value="{{ $booking->doctor_id }}">
                    <input type="hidden" name="date" id="date" value="{{ $booking->date }}">
                    <div class="form-group">
                        <label for="">Disease</label>
                        <input type="text" name="name_of_disease" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Symptoms</label>
                        <textarea name="symptoms" class="form-control" id="" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Medicine</label>
                        <add-button></add-button>
                    </div>
                    <div class="form-group">
                        <label for="">Procedure to use Medicine</label>
                        <textarea name="procedure_to_use_medicine" class="form-control" id="" rows="3"></textarea>

                    </div>
                    <div class="form-group">
                        <label for="">Feedback</label>
                        <textarea name="feedback" class="form-control" id="" rows="3"></textarea>

                    </div>
                    <div class="form-group">
                        <label for="">Signature</label>
                        <input type="text" name="signature" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endif
