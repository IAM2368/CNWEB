<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .completed {
            text-decoration: line-through;
            color: gray;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1>The list of tasks</h1>
    <a href="create.blade.php" class="text-primary fw-bold">Add Task!</a>
    <ul class="list-unstyled mt-3">
        <li class="completed">Unde architecto aut enim ducimus dolor laboriosam.</li>
        <li class="completed">Consequatur aut quisquam magnam et.</li>
        <li>Maxime minus qui inventore ducimus recusandae et.</li>
        <li class="completed">Deleniti amet quibusdam sint suscipit consequatur aliquid eveniet.</li>
        <li>Nulla sit quas labore ex quia eum qui.</li>
        <li>A minima dignissimos similique assumenda voluptas nesciunt.</li>
        <li class="completed">Minima adipisci illo aut enim.</li>
        <li>Unde inventore fuga eaque.</li>
        <li class="completed">Asperiores dolor consequuntur ipsam natus quia nemo.</li>
        <li>Totam excepturi molestiae doloremque cumque necessitatibus odit ipsa.</li>
    </ul>
    <div class="d-flex justify-content-between">
        <div>Showing 1 to <b>10</b> of <b>20</b> results</div>
        <nav>
            <ul class="pagination mb-0">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">&laquo;</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">&raquo;</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
