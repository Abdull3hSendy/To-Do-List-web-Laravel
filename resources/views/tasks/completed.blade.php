<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المهام المنجزة</title>
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
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background-color: #f9f9f9;
            margin: 5px 0;
            padding: 10px;
            border-radius: 4px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .delete-btn {
            padding: 5px 10px;
            margin-left: 5px;
            background-color: #dc3545;
            border: none;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }
        .delete-btn:hover {
            background-color: #c82333;
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
        <h1>المهام المنجزة</h1>
        <ul>
            @foreach ($tasks as $task)
                <li>
                    <span>{{ $task->title }}</span>
                    <span>{{ $task->description }}</span>
                    <div>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn">حذف</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="links">
            <a href="{{ route('tasks.create') }}">إضافة مهمة جديدة</a>
            <a href="{{ route('tasks.incomplete') }}">عرض المهام غير المكتملة</a>
        </div>
    </div>
</body>
</html>
