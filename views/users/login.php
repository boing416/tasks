<form action="?controller=users&action=login" method="post">
    <div class="form-group">
        <label for="username" class="col-2 col-form-label">Username</label>
        <div class="col-9">
            <input class="form-control" type="text" value="" placeholder="username" id="username" name="username" required>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>