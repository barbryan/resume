<main>
  <section style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <div class="d-flex justify-content-between align-items-center py-2">
        <h4 class="m-0">Applicants</h4>
        <a href="/applicants/create" style="font-size: 25px;"><i class="fas fa-regular fa-user-plus"></i></a>
      </div>
    </div>
  </section>
  <section class="my-2">
    <div class="container-fluid">
      <table id="myTable" class="table table-striped">
        <thead>
          <th>#</th>
          <th>First Name</th>
          <th>Middle Name</th>
          <th>Last Name</th>
          <th>Address</th>
          <th>Date of Birth</th>
          <th>School</th>
          <th>Course</th>
          <th>Last Update</th>
          <th>Action</th>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Lorem, ipsum dolor.</td>
            <td>Lorem, ipsum dolor.</td>
            <td>Lorem, ipsum dolor.</td>
            <td>Lorem, ipsum dolor.</td>
            <td>Lorem, ipsum dolor.</td>
            <td>Lorem, ipsum dolor.</td>
            <td>Lorem, ipsum dolor.</td>
            <td>Lorem, ipsum dolor.</td>
            <td>
              <div class="btn-group">
                <a href="/applicants/view" class="btn btn-sm btn-primary"><i class="fas fa-regular fa-eye"></i></a>
                <a href="/applicants/update" class="btn btn-sm btn-secondary"><i class="fas fa-regular fa-pen-to-square"></i></a>
                <a href="/applicants/delete" class="btn btn-sm btn-danger"><i class="fas fa-regular fa-trash"></i></a>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
</main>