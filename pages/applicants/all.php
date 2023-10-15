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
          <th>Date of Birth</th>
          <th>Course</th>
          <th>School</th>
          <th>Address</th>
          <th>Last Update</th>
          <th>Action</th>
        </thead>
        <tbody>

          <?php

          foreach ($model->getAll() as $applicant) {

                     

            echo '<tr>';
            echo '  <td>1</td>';
            //echo '  <td>'.$applicant['id'].'</td>';
            echo '  <td>'.$applicant['fname'].'</td>';
            echo '  <td>'.$applicant['mname'].'</td>';
            echo '  <td>'.$applicant['lname'].'</td>';
            echo '  <td>'.$applicant['birthdate'].'</td>';
            echo '  <td>'.$applicant['course'].'</td>';
            echo '  <td>'.$applicant['school'].'</td>';
            echo '  <td>'.$applicant['address'].'</td>';
            //echo '  <td>'.$applicant['resume'].'</td>';
            echo '  <td>'.$applicant['datemodified'].'</td>';
            echo '  <td>';
            echo '    <div class="btn-group">';
            echo '      <a href="/applicants/view" class="btn btn-sm btn-primary"><i class="fas fa-regular fa-eye"></i></a>';
            echo '      <a href="/applicants/update" class="btn btn-sm btn-secondary"><i class="fas fa-regular fa-pen-to-square"></i></a>';
            echo '      <a href="/applicants/delete" class="btn btn-sm btn-danger"><i class="fas fa-regular fa-trash"></i></a>';
            echo '    </div>';
            echo '  </td>';
            echo '</tr>';
          }

          ?>

        </tbody>
      </table>
    </div>
  </section>
</main>