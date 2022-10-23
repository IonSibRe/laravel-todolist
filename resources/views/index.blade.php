<x-layout>
    <div class="main-container">
        <h1 class="main-title">
            Todo List
        </h1>

        <div class="todo-input-wrap">
            <h3 class="todo-input-title">Enter Task</h3>
            <form class="todo-input-form" method="POST" action="/tasks">
                @csrf
                <input type="text" name="title" class="todo-input-input">
                <button type="submit" class="todo-input-btn">Submit</button>
            </form>
        </div>

        <div class="todo-task-list">
            @foreach ($tasks as $task)
            <div class="todo-task-item">
                <div class="todo-task-item-text-wrap">
                    <p class="todo-task-item-title">{{$task->title}}</p>
                    <div class="todo-task-item-actions-wrap">
                        <button class="todo-task-item-btn todo-task-item-btn-delete">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                        <button class="todo-task-item-btn todo-task-item-btn-edit">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>