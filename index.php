
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Information Form</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    
</head>
<body>
    <h1>Student Information Form</h1>

    
    <form method="post"  action="student_reflector.php" >
        

        <label for="name">Name</label>
        <input type="text" id="name" name="name" >

        <label for="program">Program of study</label>
        <select id="program" name="program" required>
            <option value="">-- Select --</option>
            <option value="Computer Systems Technology" >Computer Systems Technology</option>
            <option value="Information Technology" >Information Technology</option>
            <option value="Electronics Technology" >Electronics Technology</option>
        </select>

        <label for="year">Year of study</label>
        <input type="number" id="year" name="year" >

        <label for="email">Email</label>
        <input type="email" id="email" name="email" >
        
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>
