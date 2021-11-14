
	<!-- navigation-sidebar -->
	<aside id="navigation-sidebar" class="bg-white is-radius is-drop-shadow">
		<nav class="navbar-light px-4 py-4 h-100">
			<ul class="navbar-nav flex-column">
				<li class="nav-item mb-2">
					<a class="nav-link" href="{{route('dashboard.index')}}">
						<i class="bi bi-speedometer2 fs-5"></i>
						<span class="nav-text text-nowrap">Dashboard</span>
					</a>
				</li>
				<li class="nav-item mb-2 dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
						aria-expanded="false">
						<i class="bi bi-people fs-5"></i>
						<span class="nav-text text-nowrap">Voter</span>
					</a>
					<ul class="dropdown-menu ms-2 px-3 border-0 border-start mt-2">
						<li><a class="dropdown-item rounded" href="{{route('importexport.index')}}">Import Data</a></li>
						<li><a class="dropdown-item rounded" href="{{route('dashboard.voterlist')}}">Voter List</a></li>
						<li><a class="dropdown-item rounded" href="{{route('dashboard.deletevoterlist')}}">Deleted Voter List</a></li>
					</ul>
				</li>
				<li class="nav-item mb-2 dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
						aria-expanded="false">
						<i class="bi bi-app-indicator fs-5"></i>
						<span class="nav-text text-nowrap">Online Application</span>
					</a>
					<ul class="dropdown-menu ms-2 px-3 border-0 border-start mt-2">
						<li><a class="dropdown-item rounded" href="application-form.html">Application Form</a></li>
						<li><a class="dropdown-item rounded" href="submission.html">Submission</a></li>
						<li><a class="dropdown-item rounded" href="online-voter-list.html">Online Voter List</a></li>
					</ul>
				</li>
				<li class="nav-item mb-2 dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
						aria-expanded="false">
						<i class="bi bi-archive fs-5"></i>
						<span class="nav-text text-nowrap">Online Vote</span>
					</a>
					<ul class="dropdown-menu ms-2 px-3 border-0 border-start mt-2">
						<li><a class="dropdown-item rounded" href="voting-schedule.html">Voting Schedule</a></li>
						<li><a class="dropdown-item rounded" href="create-ballots.html">Create Ballots</a></li>
						<li><a class="dropdown-item rounded" href="ballots-paper.html">Ballots Paper</a></li>
					</ul>
				</li>
				<li class="nav-item mb-2 dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
						aria-expanded="false">
						<i class="bi bi-archive-fill fs-5"></i>
						<span class="nav-text text-nowrap">Offline Vote</span>
					</a>
					<ul class="dropdown-menu ms-2 px-3 border-0 border-start mt-2">
						<li><a class="dropdown-item rounded" href="offline-voter-list.html">Voter List</a></li>
						<li><a class="dropdown-item rounded" href="qr-codes.html">QR Codes</a></li>
						<li><a class="dropdown-item rounded" href="voter-checkIn.html">Voter CheckIn</a></li>
						<li><a class="dropdown-item rounded" href="voter-checkedIn.html">Voter CheckedIn</a></li>
					</ul>
				</li>
				<li class="nav-item mb-2 dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
						aria-expanded="false">
						<i class="bi bi-person fs-5"></i>
						<span class="nav-text text-nowrap">Users</span>
					</a>
					<ul class="dropdown-menu ms-2 px-3 border-0 border-start mt-2">
						<li><a class="dropdown-item rounded" href="add-user.html">Add User</a></li>
						<li><a class="dropdown-item rounded" href="user-list.html">User List</a></li>
					</ul>
				</li>
				<li class="nav-item mb-2">
					<a class="nav-link" href="result.html">
						<i class="bi bi-award fs-5"></i>
						<span class="nav-text text-nowrap">Result</span>
					</a>
				</li>
			</ul>
		</nav>
	</aside>
	<!-- navigation-sidebar -->
