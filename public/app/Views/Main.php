<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        <style>
    body {
        font-family: 'Times New Roman', Times, serif;
        background-color: #00F3FF;
        margin: 0;
        padding: 0;
    }

    .container {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: flex-start;
        min-height: 100vh;
    }

    .form-container,
    .list-container {
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        padding: 20px;
        width: 48%;
    }

    .list-container h1 {
        text-align: center;
    }

    label {
        font-weight: bold;
    }

    input[type="text"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 2px solid #ccc;
        border-radius: 4px;
    }

    input[type="number"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 2px solid #ccc;
        border-radius: 4px;
    }
    input[type="submit"] {
        background-color: #00AAFF;
        color: #00F3FF;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #00F3FF;
    }
    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    ul {
    list-style-type: none;
    padding: 0;
    }

    li {
        margin-bottom: 20px;
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 5px;
        background-color: gray;
    }

    li strong {
        font-weight: bold;
    }

    li a {
        text-decoration: none;
        color: black; 
        margin-left: 10px;
    }
    </style>
    </style>
        <div class= "container">
            <div class="form-container">
    <form action="<?= base_url('save') ?>" method="post">
        <label>ID:</label>
        <input type="hidden" name="ID" value="<?= $var['ID'] ?? ''?>">
        <input type="text" name="ID" placeholder="ID" value="<?= $var['ID'] ?? ''?>">
        

        <label>Student Name:</label>
        <input type="hidden" name="ID" value="<?= $var['ID'] ?? ''?>">
        <input type="text" name="StudName" placeholder="StudName" value="<?= $var['StudName'] ?? ''?>">

        <label>Student Gender:</label>
        <input type="text" name="StudGender" placeholder="StudGender" value="<?= $var['StudGender'] ?? ''?>">

        <label>Student Course:</label>
        <input type="text" name="StudCourse" placeholder="StudCourse" value="<?= $var['StudCourse'] ?? ''?>">
        

        <label>Student Section:</label>
        <input type="text" name="StudSection" placeholder="StudSection" value="<?= $var['StudSection'] ?? ''?>">
        

        <label>Student Year:</label>
        <input type="text" name="StudYear" placeholder="StudYear" value="<?= $var['StudYear'] ?? '' ?>">         
        <input type="submit" value="save">
</form>
<div class= "list-container">
</h1> Students Information </h1>
    <ul>
            <?php foreach ($main as $mmodel): ?>
              <li>
                <td><?= $mmodel['ID'] ?></td>
                <br>
                <td><?= $mmodel['StudName'] ?></td> 
                <br>
                <td><?= $mmodel['StudGender'] ?></td>
                <br>
                <td><?= $mmodel['StudCourse'] ?></td>
                <br>
                <td><?= $mmodel['StudSection'] ?></td>
                <br>
                <td><?= $mmodel['StudYear'] ?></td>
                
                <a href="/delete/<?= $mmodel['ID'] ?>">Delete</a> 
                 <a href="/edit/<?= $mmodel['ID'] ?>">Edit</a></td> 
              </li>  
        <?php endforeach; ?>
    </ul>
    </table>
 </body>
</html>


