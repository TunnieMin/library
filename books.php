<?php
$books = [
    "Clean Code",
    "Harry Potter",
    "Database System",
    "Web Development"
];
?>

<h2>Book List</h2>

<ul>
<?php
foreach($books as $book){
    echo "<li>$book</li>";
}
?>
</ul>

<a href="index.php">Back</a>