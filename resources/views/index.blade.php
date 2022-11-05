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
                    <form action="/tasks/edit/{{$task->id}}" method="POST" class="todo-input-edit-form hide">
                        @csrf
                        @method("PUT")
                        <input class="todo-input-edit-field" type="text" value="{{$task->title}}" name="title">
                        <button class="todo-input-edit-btn" type="submit">Edit</button>
                    </form>
                    <p class="todo-task-item-title">{{$task->title}}</p>
                    <div class="todo-task-item-actions-wrap">
                        @auth
                        <form action="/tasks/{{$task->id}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button class="todo-task-item-btn todo-task-item-btn-delete" type="submit">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                        <button class="todo-task-item-btn todo-task-item-btn-edit" type="button">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        @endauth
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>