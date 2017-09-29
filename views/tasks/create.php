
<form action="?controller=tasks&action=create" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="username" class="col-2 col-form-label">Username</label>
        <div class="col-9">
            <input class="form-control" type="text" value="" placeholder="username" id="username" name="username" required>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-2 col-form-label">Email</label>
        <div class="col-10">
            <input class="form-control" type="text" value="" placeholder="email" id="email" name="email" required>
        </div>
    </div>
    <div class="form-group">
        <label for="title" class="col-2 col-form-label">Title</label>
        <div class="col-10">
            <input class="form-control" type="text" value="" placeholder="title" id="title" name="title" required>
        </div>
    </div>
    <div class="form-group">
        <label for="text">Text</label>
        <textarea class="form-control" id="text" rows="3" name="text"></textarea>
    </div>
    <div class="form-group">
        <label for="file">File input</label>
        <input type="file" class="form-control-file" id="file" aria-describedby="fileHelp" name="fileToUpload">

    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>