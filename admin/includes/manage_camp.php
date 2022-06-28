

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Manage Campus</a>
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse float-right" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item ml-5">
        <button type="button" class="btn btn-primary btn-sm rounded" data-toggle="modal" data-target="#add-camp">Add New Campus</button>
      </li>
    </ul>
  </div> -->
</nav>
<div class="container mt-2 mb-5">

<div class="mb-3 float-right mt-5 mr-2">
    <button type="button" class="btn btn-primary btn-sm rounded d-flex flex-row" data-toggle="modal" data-target="#add-camp" style="font-size: 16px;"><i class='bx bx-plus-circle bx-sm mr-2'></i>Add New Campus</button>
</div>

  <table id="manage-camp" class="table table-borderless" style="width:100%">
        <thead>
            <tr>
                <th>Campus</th>
                <th>Administrator</th>
                <th>Username</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Bicol University Polangui Campus</td>
                <td>John Jared Guadines</td>
                <td>username@bicol-u.edu.ph</td>
                <td>
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#update-camp">Update</button>
                  <button type="button" class="btn btn-primary btn-sm">Disable</button>
                </td>
            </tr>
            <tr>
                <td>Bicol University Tabaco Campus</td>
                <td>Prince Sun Lloyd</td>
                <td>username@bicol-u.edu.ph</td>
                <td></td>
            </tr>
            <tr>
                <td>College of Engineering</td>
                <td>Cedric Joss Magaan</td>
                <td>username@bicol-u.edu.ph</td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>