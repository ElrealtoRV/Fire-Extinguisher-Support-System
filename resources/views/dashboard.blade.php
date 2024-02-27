
@if(auth()->user()->hasRole('admin'))

<x-app-layout>

    <div class="content">

        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="good-morning-blk">
            <div class="row">   
                <div class="col-md-6">
                    <div class="morning-user">
                        <h2>
                            @if ($time < 1) Good Morning, @elseif ($time < 12) Good Afternoon, @else Good Evening, @endif <span class="text-capitalize">
                                {{ auth()->user()->first_name }}
                                {{ auth()->user()->last_name }}
                                </span>
                        </h2>
                        <p>Have a nice day at work</p>
                    </div>
                </div>
                <div class="col-md-6 position-blk">
                    <div class="morning-img">
                        <img src="assets/img/morning-img-01.png" alt>
                    </div>
                </div>
            </div>
        </div>
        <div class="head-title">
				<div class="left">
        <ul class="box-info">
				<li>
					<i class="fas fa-fire-extinguisher"></i>
					<span class="text">
						<h3>234</h3>
						<p>Fire Extinguisher</p>
					</span>
				</li>
					<li>
					
						<i class='bx bxs-group'></i>
					<span class="text">
					@if($users == 0)
						<h3>{{ $users }}</h3>
						<p>User</p>
					@else
						<h3>{{ $users }}</h3>
						<p>User{{ $users != 1 ? 's' : '' }}</p>
					@endif
					</span>
				
					</li>
					<li>
				@php
					$employeeCount = \App\Models\EmployeeList::count();
				@endphp
				
				<i class='fas fa-briefcase'></i>
				<span class="text">
					@if($employeeCount == 0)
						<h3>{{ $employeeCount }}</h3>
						<p>Employee</p>
					@else
						<h3>{{ $employeeCount }}</h3>
						<p>Employee{{ $employeeCount != 1 ? 's' : '' }}</p>
					@endif
				</span>
			</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>2543</h3>
						<p>Expired Fire Extinguisher</p>
					</span>
				</li>
			</ul> 
    </div>
	</div>
	
	<div class="flex-container">
	<div class="container">
	<div class="table-data">
				<div class="order">
					<div class="user-list">
						<h1>Lists of Users & Employee</h1>
						<form method="get" action="/dashboard">
						<input type="text" id="searchInput" placeholder="Search...">
						<i class='bx bx-search search-icon' ></i>
						<label for="filterDropdown"></label>
						<select id="filterDropdown" name="users_filter">
							
						<option id="user"value="user"><i class="fas fa-user"></i> Users</option>
    					<option id="employee" for="head" value="HEAD"><i class="fas fa-briefcase"></i> HEAD</option>
    					<option id="employee" for="maintenance personnel"value="MAINTENANCE PERSONNEL"><i class="fas fa-briefcase"></i> MAINTENANCE PERSONNEL</option>
						</select>
						</form>
						</div>
					<table>
						<thead>
							<tr>
								<th>Name</th>
								<th>Role</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>

						@forelse ($userlist as $userlists)
							<tr data-type="user">
								<td>
									
									<p>{{ $userlists->first_name }} {{ $userlists->last_name }}</p>
								</td>
								<td>{{ $userlists->position_id }}</td>
								<td>
								
									<span class="status {{ $userlists->status == 1 ? 'active' : 'inactive' }}">
										{{ $userlists->status == 1 ? 'Active' : 'Inactive' }}
									</span>
								</td>
							</tr>
							@empty
							<tr>
								<td colspan="3">No users found</td>
							</tr>
						@endforelse
						</tbody>
					</table>
					</div>
					</div>
					</div>
					
					
		<div class="table-container">
       	 <h1>To-Do List</h1>

        <ul class="todo-list">
            <li class="todo-item">
                <input type="checkbox">
                <span class="task">Complete assignment</span>
                <button>Delete</button>
            </li>
            <li class="todo-item">
                <input type="checkbox">
                <span class="task">Read a book</span>
                <button>Delete</button>
            </li>
            <!-- Add more items as needed -->
        </ul>

        <div class="add-task">
            <input type="text" placeholder="Add a new task">
            <button>Add</button>
        </div>
    </div>
    

</x-app-layout>
@endif