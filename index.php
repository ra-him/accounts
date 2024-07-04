<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Webpage</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="header-container">
            <button id="create-page-btn">Create Page</button>
            <form id="lead-form">
                <select id="lead-submit-type" name="leadSubmitType" required>
                    <option value="" disabled selected>Lead Submit Type</option>
                    <option value="type1">Type 1</option>
                    <option value="type2">Type 2</option>
                    <option value="type3">Type 3</option>
                </select>
                <input type="submit" value="Load">
            </form>
        </div>
    </header>
    <main>
        <img src="bg-image.jpg" alt="Background Image" class="main-image">
    </main>

    <script>
        document.getElementById('create-page-btn').addEventListener('click', function() {
            alert('Create Page button clicked!');
        });

        document.getElementById('lead-form').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Form submitted with Lead Submit Type: ' + document.getElementById('lead-submit-type').value);
        });
    </script>
</body>
</html>
