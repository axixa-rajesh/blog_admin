<div class="container border">
    <div class="bg-dark text-white p-2 ">
        <h3 class="h3 text-center">New Article</h3>
        <div class="text-center "> (<span class="text-danger">*</span>) Fields are Mandantory</div>
    </div>
    <?php if ($e = Session::get('error')) {
        if (is_array($e)) {
            foreach ($e as $err) {
    ?>
                <div class="alert alert-danger">
                    <?= $err; ?>
                </div>
            <?php
            }
        } else {
            ?>
            <div class="alert alert-danger">
                <?= $e; ?>
            </div>
    <?php
        }
        Session::delete('error');
    }
    ?>
    <form method="post" action="<?= ROOT; ?>/author/store">
        <div class="mb-3">
            <label for="uid" class="form-label">Select User <span class="text-danger">*</span> : </label>
            <select name="uid" class="form-select" id="uid" required>
                <option value="">Select User</option>
                <?php
                foreach ($udata as $uinfo) {
                ?>
                    <option value="<?= $uinfo['id']; ?>">
                        <?= $uinfo['fullname'] . " (username : $uinfo[username])"; ?>
                    </option>
                <?php
                }
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Enter blog titles <span class="text-danger">*</span> : </label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Enter Description <span class="text-danger">*</span> : </label>
            <div class="form-control" style="display: flex;">
                <textarea type="text" name="mobile" id="mobile" style="border:0 ; outline:0; width:100%" placeholder="Enter Description" title="You can Only enter alphanumeric value with _ and @" required></textarea>
            </div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Enter Email : </label>
            <input type="email" name="email" id="email" placeholder="Enter Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Enter Gender : </label>
            <div class="form-control">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" checked id="ml" name="gender" value="male">
                    <label class="form-check-label" for="ml">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="fm" name="gender" value="female">
                    <label class="form-check-label" for="fm">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="tg" name="gender" value="tg">
                    <label class="form-check-label" for="tg">Trans-gender</label>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <div class="form-control">
                <button class="form-control btn btn-success">Save</button>
            </div>
        </div>
    </form>
</div>