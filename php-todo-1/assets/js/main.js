document.addEventListener('DOMContentLoaded', () => {
  let tasks = getTasksFromLocalStorage();
  loadTasks(tasks);
});

document.getElementById('desc').addEventListener('keydown', (evt) => {
  if (evt.key === 'Enter') addItem();
});

document.getElementById('theme').addEventListener('click', changeTheme);
function changeTheme() {
  document.body.classList.toggle('dark-mode');
}

function addItem() {
  let input = document.getElementById('desc');
  let todo = getTodoTasks();

  if (!input.value.trim().length) {
    alert('A descrição informada não é permitida');
    return;
  }

  if (itemExists(todo, input.value)) {
    alert(`'${input.value}' já existe`);
    return;
  }

  let li = createItem(input.value);

  todo.appendChild(li);
  saveToLocalStorage({ desc: input.value, completed: false });

  input.value = '';
  input.focus();

  updateStatus(todo, getDoneTasks());
}

let btn = document.getElementById('btn-add');
btn.addEventListener('click', addItem);

function itemExists(list, text) {
  let items = Array.from(list.childNodes);
  return (
    items.filter(
      (item) =>
        item.firstChild.nextSibling.textContent.toLowerCase() ===
        text.toLowerCase()
    ).length > 0
  );
}

function createItem(text) {
  let li = document.createElement('li');
  let input = document.createElement('input');
  let btn = document.createElement('button');
  input.setAttribute('type', 'checkbox');
  btn.appendChild(document.createTextNode('X'));
  btn.addEventListener('click', deleteItem);
  input.addEventListener('click', doneTask);
  li.append(input, document.createTextNode(text), btn);
  return li;
}

function deleteItem(evt) {
  let tasks = getTasksFromLocalStorage();
  evt.target.parentNode.remove();
  let desc = evt.target.previousSibling.textContent;
  let completed = evt.target.parentNode.firstChild.checked;

  let index = tasks.findIndex((task) => {
    return task.desc === desc && task.completed === completed;
  });

  // delete one item from "index"
  tasks.splice(index, 1);
  updateTasksToLocalStorage(tasks);
  updateStatus(getTodoTasks(), getDoneTasks());
}

function formatDoneTask(item) {
  item.classList.add('task-complete');
}

function doneTask(evt) {
  let done = getDoneTasks();
  let item = evt.target.parentNode;

  // update css
  formatDoneTask(item);

  done.append(item);
  item.firstChild.setAttribute('disabled', true);

  let tasks = getTasksFromLocalStorage();
  let desc = evt.target.nextSibling.textContent;
  let index = tasks.findIndex((task) => {
    return task.desc === desc && task.completed === false;
  });

  tasks[index].completed = true;
  updateTasksToLocalStorage(tasks);
  updateStatus(getTodoTasks(), done);
}

function updateStatus(todo, done) {
  let status = document.getElementById('status');
  let x = done.childNodes.length;
  let y = todo.childNodes.length + x;
  status.textContent = `${x} of ${y} completed`;
}

function getDoneTasks() {
  return document.getElementById('done');
}

function getTodoTasks() {
  return document.getElementById('todo');
}

function getTasksFromLocalStorage() {
  return JSON.parse(localStorage.getItem('tasks')) || [];
}

function loadTasks(tasks) {
  let todo = getTodoTasks();
  let done = getDoneTasks();

  tasks.forEach((task) => {
    let li = createItem(task.desc);
    if (task.completed) {
      li.firstChild.setAttribute('checked', true);
      li.firstChild.setAttribute('disabled', true);
      done.append(li);
    } else todo.append(li);
  });
  
  updateStatus(todo, done);
}

function saveToLocalStorage(task) {
  let tasks = getTasksFromLocalStorage();
  tasks.push(task);

  updateTasksToLocalStorage(tasks);
}

function updateTasksToLocalStorage(tasks) {
  localStorage.setItem('tasks', JSON.stringify(tasks));
}
