<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>
    <h2>Add Student</h2>
    <form action="/students" method="POST">
        @csrf
        Name:<input type="text" name="name" required><br>
        Email:<input type="email" name="email" required><br>
        Age:<input type="number" name="age" required><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>