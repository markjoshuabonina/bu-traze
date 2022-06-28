

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Generate Report</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item ml-3">
        <button type="button" class="btn btn-primary btn-sm rounded">Download CSV</button>
      </li>
      <li class="nav-item ml-3">
        <button type="button" class="btn btn-primary btn-sm rounded">Download PDF</button>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-5 mb-5">

<div class="mt-5 mr-2">
    <div class="dropdown mb-3 float-right mr-3 d-flex flex-column">
      <label>Select Course</label>
      <button class="btn btn-secondary dropdown-toggle btn-dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Courses
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">BSIT</a>
        <a class="dropdown-item" href="#">BSIS</a>
        <a class="dropdown-item" href="#">Nursing</a>
      </div>
    </div>

    <div class="dropdown mb-3 float-right mr-3 d-flex flex-column">
        <label>Select Department</label>
      <button class="btn btn-secondary dropdown-toggle btn-dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Departments
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Computer Studies Department</a>
        <a class="dropdown-item" href="#">Engineering Deprtment</a>
        <a class="dropdown-item" href="#">Nursing Department</a>
      </div>
    </div>

    <div class="dropdown mb-3 float-right mr-3 d-flex flex-column">
      <label>Select Campus</label>
      <button class="btn btn-secondary dropdown-toggle btn-dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Campuses
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Bicol University Polangui Campus</a>
        <a class="dropdown-item" href="#">Bicol University Tabaco Campus</a>
        <a class="dropdown-item" href="#">College of Engineering</a>
      </div>
    </div>

    <div class="mb-3 float-left ml-3 d-flex flex-column">
        <label>Start Date</label>
        <input class="bg-secondary text-light rounded p-1" type="date" name="">
    </div>
    <div class="mb-3 float-left ml-3 d-flex flex-column">
        <label>End Date</label>
        <input class="bg-secondary text-light rounded p-1" type="date" name="">
    </div>
    <div class="mb-3 float-left ml-3 d-flex flex-column">
    <label>Filter Now</label>
    <button type="button" class="btn btn-primary btn-sm rounded">Enter</button>
    </div>
</div>

  <table id="generate-report" class="table table-borderless" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Campus</th>
                <th>Department</th>
                <th>Course</th>
                <th>Date</th>
                <th>Time</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John Jared Guadines</td>
                <td>Bicol University Polangui Campus</td>
                <td>Computer Studies Department</td>
                <td>BSIT</td>
                <td>June 15, 2022</td>
                <td>9:00</td>
            </tr>
            <tr>
                <td>John Jared Guadines</td>
                <td>Bicol University Polangui Campus</td>
                <td>Computer Studies Department</td>
                <td>BSIT</td>
                <td>June 15, 2022</td>
                <td>10:35</td>
            </tr>
            <tr>
                <td>Prince Sun Lloyd</td>
                <td>Bicol University Tabaco Campus</td>
                <td>Engineering</td>
                <td>BSIS</td>
                <td>June 15, 2022</td>
                <td>9:00</td>
            </tr>
            <tr>
                <td>Prince Sun Lloyd</td>
                <td>Bicol University Tabaco Campus</td>
                <td>Engineering</td>
                <td>BSIS</td>
                <td>June 15, 2022</td>
                <td>10:35</td>
            </tr>
            <tr>
                <td>Prince Sun Lloyd</td>
                <td>Bicol University Tabaco Campus</td>
                <td>Engineering</td>
                <td>BSIS</td>
                <td>June 15, 2022</td>
                <td>11:15</td>
            </tr>
        </tbody>
    </table>
</div>