<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إضافة مهمة جديدة</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
            color: #333;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"], textarea {
            width: calc(100% - 22px);
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            padding: 10px 15px;
            margin: 10px 0;
            background-color: #28a745;
            border: none;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .links {
            margin-top: 20px;
        }
        .links a {
            text-decoration: none;
            color: #007bff;
            margin: 10px;
            display: inline-block;
        }
        .links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>اضف مهمة </h1>
        <form action="<?php echo e(route('tasks.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="text" name="title" placeholder="عنوان المهمة" required><br>
            <textarea name="description" placeholder="وصف المهمة"></textarea><br>
            <button type="submit">إضافة المهمة</button>
        </form>
        <div class="links">
            <a href="<?php echo e(route('tasks.completed')); ?>">عرض المهام المنجزة</a>
            <a href="<?php echo e(route('tasks.incomplete')); ?>">عرض المهام غير المنجزة</a>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\todo-list\resources\views/tasks/create.blade.php ENDPATH**/ ?>