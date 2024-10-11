<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Content Block Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
    .heading{
        text-align:center;
    }
</style>
</head>
<body>
    <h2 class="heading">Add Content Block Form</h2>
    <div class="container">
<form action="{{ route('pages.addContentBlock', $page->id) }}" method="POST">
    @csrf
    <div class="mb-3 mt-3">
        <label class="form-label" for="type">Block Type</label>
        <select class="form-control" name="type" id="type">
            <option value="text">Text</option>
            <option value="image">Image</option>
        </select>
    </div>
    
    <div class="mb-3 mt-3">
        <label class="form-label" for="content">Content</label>
        <textarea class="form-control" name="content" id="content" rows="3"></textarea>
    </div>

    <button class="btn btn-primary" type="submit">Add Content Block</button>
</form>

<hr>

<h3>Content Blocks</h3>
<ul>
    @foreach($page->contentBlocks as $block)
        <li>
            <strong>{{ $block->type }}:</strong> {{ $block->content }}
        </li>
    @endforeach
</ul>
</div>
</body>
</html>