<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Create Blog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #333;
            padding: 10px 20px;
            display: flex;
            gap: 20px;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 8px 12px;
        }
        .navbar a:hover {
            background-color: #555;
            border-radius: 4px;
        }
        .container {
            max-width: 600px;
            background-color: white;
            margin: 40px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="file"], textarea, input[type="text"], button {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        textarea {
            height: 150px;
            resize: vertical;
        }
        .image-preview {
            margin-top: 10px;
            max-height: 200px;
        }
        button {
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 20px;
        }
        button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

<?php include'header.php' ?>  
<!-- Blog Form -->
    <div class="container">
        <h2>Create Blog Post</h2>
        <form>
            <label for="title">Blog Title</label>
            <input type="text" id="title" name="title" placeholder="Enter blog title" required>

            <label for="image">Choose Image</label>
            <input type="file" id="image" name="image" accept="image/*" onchange="previewImage(event)" required>
            <img id="imagePreview" class="image-preview" src="#" alt="Image Preview" style="display:none;">

            <label for="description">Description</label>
            <textarea id="description" name="description" placeholder="Write your blog description here..." required></textarea>

            <button type="submit">Submit Blog</button>
        </form>
    </div>

    <script>
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('imagePreview');
                output.src = reader.result;
                output.style.display = 'block';
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

</body>
</html>
<?php include 'footer.php'; ?>
