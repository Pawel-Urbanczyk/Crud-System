<div class="container">
    <div class="row" style="text-align: center;">
        <h3>Crud System User Sign Up</h3>
    </div>

    <div class="row">
        <p>This is a system that aloows users to create, read, updtae and delete information.</p>
    </div>

    <div class="row">
        <div class="row">
            <h3>Welcome, please sign up!</h3>
        </div>

        <form action="" method="post" class="form-horizontal">
            <!--Email-->
            <div class="row">
                <label for="email" class="col-sm-2">Email: </label>
                <div class="col-sm-10 form-group">
                    <input type="email" name="email" id="email" class="form-control">
                </div>
            </div>

            <!--First name-->
            <div class="row">
                <label for="firstname" class="col-sm-2">First name: </label>
                <div class="col-sm-10 form-group">
                    <input type="text" name="firstname" id="firstname" class="form-control">
                </div>
            </div>

            <!--Last name-->
            <div class="row">
                <label for="lastname" class="col-sm-2">Last name: </label>
                <div class="col-sm-10 form-group">
                    <input type="text" name="lastname" id="lastname" class="form-control">
                </div>
            </div>

            <!--Password-->
            <div class="row">
                <label for="password" class="col-sm-2">Password: </label>
                <div class="col-sm-10 form-group">
                    <input type="password" name="password" id="password" class="form-control">
                </div>
            </div>

            <!--Submit-->
            <div class="col-xs-12 form-group">
                <input type="submit" name="submit" id="submit" class="form-control" value="Send">
            </div>
        </form>
    </div>
</div>