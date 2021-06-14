<?php include 'includes/header.php' ?>

<form role="form">
    <div class="form-group">
        <label>Topic Title</label>
        <input type="text" class="form-control" name="title_topic">
    </div>
    <div class="form-group">
        <label>Category</label>
        <select class="form-control">
            <option>Design</option>
            <option>Development</option>
            <option>Business & Marketing</option>
            <option>Search Engines</option>
            <option>Cloud & Hosting</option>
        </select>
    </div>
    <div class="form-group">
        <label>Topic Body</label>
        <textarea class="" id="body" cols="80" rows="10">

        </textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>

<?php include 'includes/footer.php' ?>