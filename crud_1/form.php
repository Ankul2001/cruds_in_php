<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    
    h1 {
      text-align: center;
    }
    
    .form-container {
      max-width: 500px;
      margin: 0 auto;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    
    input[type="text"],
    input[type="email"],
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    
    .submit-button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin-top: 10px;
      cursor: pointer;
      border-radius: 4px;
    }
    
    .submit-button:hover {
      background-color: #45a049;
    }
    
  </style>
<body>

  

  <div class="form-container">
    <h1>College Admission Form</h1>
    <form action="function.php" method="POST">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="gender">Gender:</label>
        <input type="radio" id="gender" name="gender" value="Male" required>Male
        
        <input type="radio" id="gender" name="gender" value="Female" required>Female
      </div>
      
      <div class="form-group">
        <label for="major">Major:</label>
        <select id="major" name="major" required>
          <option value="">Select a major</option>
          <option value="Computer Science">Computer Science</option>
          <option value="Engineering">Engineering</option>
          <option value="Business">Business</option>
        </select>
      </div>
      
      <div class="form-group">
        <label for="gpa">GPA:</label>
        <input type="text" id="gpa" name="gpa" required>
      </div>
      
      <div class="form-group">
        <label for="essay">Admission Essay:</label>
        <textarea id="essay" name="essay" rows="6" required></textarea>
      </div>
      <button class="submit-button" type="submit" name="btn">Submit</button>
    </form>
  </div>


</body>
</html>