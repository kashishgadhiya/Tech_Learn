<!-- Registration form -->
<div class=" modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="stuRegModalCenterLabel">Student Registration</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">

                        <label for="stuname">Name</label>
                        <input type="text" class="form-control mb-2 " placeholder="Enter Your name" name="stuname" id="stuname">



                        <label for="stuemail">Email address</label>
                        <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" name="stuemail" id="stuemail">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="stupassword"> New Password</label>
                        <input type="password" class="form-control" id="stupassword" name="stupassword" placeholder="Password">
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="addstudent()">Sign Up</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>