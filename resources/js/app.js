import "./bootstrap";

const todoInputEditForm = document.querySelector(".todo-input-edit-form");
const todoTaskItemTitle = document.querySelector(".todo-task-item-title");
const todoTaskItemBtnsEdit = document.querySelectorAll(
    ".todo-task-item-btn-edit"
);

todoTaskItemBtnsEdit.forEach((btn) => {
    btn.addEventListener("click", () => {
        if (todoInputEditForm.classList.contains("hide")) {
            todoInputEditForm.classList.remove("hide");
            todoTaskItemTitle.classList.add("hide");
        } else {
            todoInputEditForm.classList.add("hide");
            todoTaskItemTitle.classList.remove("hide");
        }
    });
});
