<div class="table-container">
								<h1>To-Do List</h1>

								<ul class="todo-list">
									@foreach ($tasks as $task)
										<li class="todo-item">
											<input type="checkbox">
											<span class="task">{{ $task->todolist }}</span>
											<button wire:click="deleteTask({{ $task->id }})">Delete</button>
										</li>
									@endforeach
								</ul>

								<div class="add-task">
									<input type="text" wire:model="newTask" placeholder="Add a new task">
									<button wire:click="addTask">Add</button>
								</div>
							</div>