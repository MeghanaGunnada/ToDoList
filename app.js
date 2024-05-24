document.addEventListener("DOMContentLoaded", function() {
  const taskForm = document.getElementById("task-form");
  const taskList = document.getElementById("task-list");

  taskForm.addEventListener("submit", function(event) {
    event.preventDefault();

    const title = document.getElementById("task-title").value;
    const description = document.getElementById("task-description").value;
    const priority = document.getElementById("task-priority").value;
    const dueDate = document.getElementById("task-due-date").value;

    if (title.trim() !== "") {
      addTask(title, description, priority, dueDate);
      taskForm.reset();
    }
  });

  function addTask(title, description, priority, dueDate) {
    const taskItem = document.createElement("li");
    taskItem.className = "task";

    const taskContent = `
      <span>${title}</span>
      <span>${description}</span>
      <span>${priority}</span>
      <span>${dueDate}</span>
      <button onclick="deleteTask(this)">Delete</button>
    `;

    taskItem.innerHTML = taskContent;
    taskList.appendChild(taskItem);
  }

  window.deleteTask = function(button) {
    const taskItem = button.closest(".task");
    taskList.removeChild(taskItem);
  };
});
