<?php include('header.php'); ?>

<section class="signup newbanner py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 bg-white border rounded shadow p-5">
                <h1>Login</h1>
                <form method="post" action="#" id="validateform2">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email_add" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter Email Address">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="p_password" id="exampleInputPassword1"
                            placeholder="Enter Password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-common text-white">Login</button>
                    <a href="sign-up.php" class="float-right noaccount">Don't Have An Account?</a>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>


<script type="text/javascript">
$(document).ready(function() {

    $("#validateform2").validate({
        rules: {
            email_add: {
                required: true,
                email: true
            },
            p_password: {
                required: true,
                minlength: 8
            },

        },

        messages: {

            email_add: {
                required: "This field is required",
                email: "Please enter a valid email id",
            },
            p_password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 8 characters long"
            },



        }
    });
});
</script>