<?php
$books = ["Clean Code", "Harry Potter", "Database System", "Web Development"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: linear-gradient(to right, #4facfe, #00f2fe);">

<div class="container mt-5">

    <h2 class="text-center text-white mb-4">📖 Book List</h2>

    <div class="card shadow p-4">
        <table class="table table-striped table-hover">
            <tr>
                <th>#</th>
                <th>Book Name</th>
            </tr>

            <?php
            $i = 1;
            foreach($books as $book){
                echo "<tr><td>$i</td><td>$book</td></tr>";
                $i++;
            }
            ?>
        </table>

        <div class="text-center mt-3">
            <a href="index.php" class="btn btn-secondary">⬅ Back</a>
        </div>
    </div>

</div>

</body>
</html>