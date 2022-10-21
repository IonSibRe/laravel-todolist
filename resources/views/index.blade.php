<x-layout>
    <div class="main-container">
        <h1 class="main-title">
            Todo List
        </h1>

        <div class="todo-input-wrap">
            <h3 class="todo-input-title">Enter Task</h2>
                <form class="todo-input-form">
                    @csrf
                    <input type="text" name="text" class="todo-input-input">
                    <button type="submit" class="todo-input-btn">Submit</button>
                </form>
        </div>
    </div>
</x-layout>