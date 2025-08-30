
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add user</title>
    
    
    


    
    <div class="form">

        <form action="db.php" method="POST" enctype="multipart/form-data">
            <div>
                <h1>ADD EMPLOYEE NOW</h1>
            </div>
            <div>
                <label for="name">USER</label>
                <input type="text" id="name" name="name">
            </div>
            <div>
                <label for="date">order date</label>
                <input type="date" id="date" name="date">
            </div>
            <div>
                <label for="location">Location</label>
                <input type="text" id="location" name="location">
            </div>
             
            
            <input type="hidden" name="create" value="1">
            <div>
                <button type="submit">add order</button>

            </div>

        </form>
    </div>
    
</div>

    
</body>
</html>