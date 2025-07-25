<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Signup Form</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f7f8;
      color: #333;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .form-container {
      background-color: #fff;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 500px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #4CAF50;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: 500;
    }

    input[type="text"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 15px;
    }

    textarea {
      resize: vertical;
    }

    .gender-options {
      margin-bottom: 15px;
    }

    .gender-options label {
      display: inline-block;
      margin-right: 15px;
      font-weight: normal;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      width: 100%;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h2>Signup Form</h2>
    <form method="post" action="submit.php">
      <label for="id">ID</label>
      <input type="text" name="id" id="id" required>

      <label for="name">Name</label>
      <input type="text" name="name" id="name" required>

      <label for="email">Email</label>
      <input type="text" name="email" id="email" required>

      <label for="website">Website</label>
      <input type="text" name="website" id="website">

      <label for="comment">Comment</label>
      <textarea name="comment" id="comment" rows="4"></textarea>

      <label>Gender</label>
      <div class="gender-options">
        <label><input type="radio" name="gender" value="female" required> Female</label>
        <label><input type="radio" name="gender" value="male"> Male</label>
        <label><input type="radio" name="gender" value="other"> Other</label>
      </div>

      <input type="submit" name="submit" value="Submit">
    </form>
  </div>

</body>
</html>
