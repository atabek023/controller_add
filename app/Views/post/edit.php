<!DOCTYPE html>
<html>

<head>
    <title>Edit Post</title>
</head>

<body>
    <h1>Edit Post</h1>
    <form action="/post/update?id=<?= $post['id']; ?>" method="post">
        <input type="text" name="title" value="<?= $post['title']; ?>" required><br>
        <textarea name="description"><?= $post['description']; ?></textarea><br>
        <button type="submit">Update Post</button>
    </form>
</body>

</html>