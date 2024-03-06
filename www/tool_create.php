<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    echo "You are not logged in, please login. ";
    echo "<a href='login.php'>Login here</a>";
    exit;
}

if ($_SESSION['role'] != 'admin') {
    echo "You are not allowed to view this page, please login as admin";
    exit;
}

require 'database.php';

$sql = "SELECT * FROM categories";
$stmt = $conn->prepare($sql);
$stmt->execute();
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

require 'header.php';
?>

<main>
    <h1>Nieuw Gereedschap</h1>
    <div class="container">
        <form action="tool_create_process.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="name">Naam:</label>
                <input type="text" id="name" name="name">
            </div>
            <div>
                <label for="category">Categorie:</label>
                <select name="category" id="">
                    <?php foreach ($categories as $category) : ?>
                        <option value="<?php echo $category['category_id'] ?>"><?php echo $category['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <label for="price">Prijs:</label>
                <input type="number" id="price" name="price">
            </div>
            <div>
                <label for="brand">Merk:</label>
                <input type="brand" id="brand" name="brand">
            </div>
            <div>
                <label for="image">Afbeelding:</label>
                <input type="file" id="image" name="image">
            </div>
            <button type="submit" name="submit" class="btn btn-success">Toevoegen</button>
        </form>
    </div>
</main>
<?php require 'footer.php' ?>