<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tools_create_process.php" method="post">

        <div class="form-group">
            <label for="tool_name">Naam gereedschap</label>
            <input type="text" name="tool_name" id="tool_name">            
        </div>
        <div class="form-group">
            <label for="tool_category">Categorie</label>
            <input type="text" name="tool_category" id="tool_category">            
        </div>
        <div class="form-group">
            <label for="tool_brand">Merk</label>
            <input type="text" name="tool_brand" id="tool_brand">            
        </div>
        <div class="form-group">
            <label for="tool_price">Prijs</label>
            <input type="text" name="tool_price" id="tool_price">            
        </div>
        <button type="submit">Sla tool op!</button>
    </form>
</body>
</html>