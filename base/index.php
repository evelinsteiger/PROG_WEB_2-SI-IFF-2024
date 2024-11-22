<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <link
        rel="shortcut icon"
        href="./public/images/favicon.ico"
        type="image/x-icon"
    >
    <link
        rel="stylesheet"
        href="./public/css/style.css"
    >
    <title>TodoApp</title>
</head>

<body>
    <header>
        <span class="app-name">TodoApp</span>
        <input
            type="text"
            required
            name="desc"
            id="desc"
        >
        <button id="btn-add">Add</button>
        <button
            class="dark-mode-btn"
            id="theme"
        >
            <img
                src="./public/images/dark-mode-image.svg"
                alt="Change theme image"
                title="Change Theme"
            >
        </button>
    </header>
    <main>
        <div id="todo-container">
            <h3>ToDo</h3>
            <ul id="todo"></ul>
        </div>
        <div id="done-container">
            <h3>Done</h3>
            <ul id="done"></ul>
        </div>
    </main>
    <footer>
        <span id="status">0 of 0 completed</span>
    </footer>
    <script src="./public/js/script.js"></script>
</body>

</html>