

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Manage Account</a>
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item ml-5">
        <a class="nav-link add-acc text-primary" href="#" data-toggle="modal" data-target="#add-local-admin">Add New Local Admin</a>
      </li>
      <li class="nav-item ml-5">
        <a class="nav-link add-acc text-primary" href="#" data-toggle="modal" data-target="#add-new-std">Add New Student</a>
      </li>
      <li class="nav-item ml-5">
        <a class="nav-link add-acc text-primary" href="#">Add New Employee</a>
      </li>
      <li class="nav-item ml-5">
        <a class="nav-link add-acc text-primary" href="#">Add New Administratives</a>
      </li>
    </ul>
  </div> -->
</nav>

<div class="container mt-5 mb-5">
        <!-- Create the dropdown filter -->

    <style>
      select.form-control{
        display: inline;
        width: 200px;
        margin-left: 25px;
      }
    </style>

   <!-- <div class="category-filter">
      <select id="categoryFilter" class="form-control border border-primary">
        <option value="">Select Campus</option>
        <option value="Bicol University Polangui Campus">Bicol University Polangui Campus</option>
        <option value="Bicol University Tabaco Campus">Bicol University Tabaco Campus</option>
        <option value="College of Engineering">College of Engineering</option>
      </select>
    </div> -->

    <div class="dropdown mb-3 float-right mr-2">
      <button class="btn btn-secondary dropdown-toggle btn-dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Select Campus
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Bicol University Polangui Campus</a>
        <a class="dropdown-item" href="#">Bicol University Tabaco Campus</a>
        <a class="dropdown-item" href="#">College of Engineering</a>
      </div>
    </div>

    <!-- Set up the datatable -->
    <table class="table table-borderless" id="filterTable">
      <thead>
        <tr>
            <th>Name</th>
            <th>Type of User</th>
            <th>Campus</th>
            <th>Department</th>
            <th>Course</th>
            <th>ID</th>
            <th>Username</th>
        </tr>
      </thead>
      <tbody>
            <tr>
                <td>Thomas Allene B. Escoto</td>
                <td>Student</td>
                <td>Bicol University Polangui Campus</td>
                <td>CSD</td>
                <td>BSIT</td>
                <td>2018-PC-100309</td>
                <td>username@bicol-u.edu.ph</td>
            </tr>
            <tr>
                <td>Mark Joshua B. Bonina</td>
                <td>Student</td>
                <td>Bicol University Polangui Campus</td>
                <td>CSD</td>
                <td>BSIT</td>
                <td>2018-PC-100310</td>
                <td>username@bicol-u.edu.ph</td>
            </tr>
            <tr>
                <td>Ryan V. Opiana</td>
                <td>Student</td>
                <td>Bicol University Polangui Campus</td>
                <td>CSD</td>
                <td>BSIT</td>
                <td>2018-PC-100311</td>
                <td>username@bicol-u.edu.ph</td>
            </tr>
            <tr>
                <td>Arnold Platon</td>
                <td>Teaching</td>
                <td>College of Engineering</td>
                <td>CSD</td>
                <td>BSIT</td>
                <td>EMP-PC-100</td>
                <td>username@bicol-u.edu.ph</td>
            </tr>
            <tr>
                <td>test name</td>
                <td>visitor</td>
                <td>Bicol University Tabaco Campus</td>
                <td>CSD</td>
                <td>BSIS</td>
                <td>liscense-123</td>
                <td>username@gmail.com</td>
            </tr>
      </tbody>
    </table>
</div>