<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" value="{{ $name }}">
        {{ csrf_field() }}
        <button type="submit">Submit</button>
    </form>
</body>
</html>
