<div class="modal fade" id="exampleModalCenter{{ $user->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog model-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterLabel">Doctor Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p><img src="{{ asset('upload').'/'.$user->image }}" alt="user Image" class="table-user-thumb" alt=""
                        width="200px"></p>
                <p class="badge badge-pill badge-dark">Role: {{ $user->role->name }}</p>
                <p>Name: {{ $user->gender }}</p>
                <p>Name: {{ $user->name }}</p>
                <p>Email: {{ $user->email }}</p>
                <p>Address: {{ $user->address }}</p>
                <p>Phone Number: {{ $user->phone_number }}</p>
                <p>Department: {{ $user->department }}</p>
                <p>Education: {{ $user->education }}</p>
                <p>About: {{ $user->description }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
