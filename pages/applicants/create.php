<main>
  <section>
    <div class="container-fluid" style="width: 800px;">
      <h2>Add Applicant</h2>
      <form action="#" method="post">
        <div class="row">
          <div class="col">
            <label for="name" class="form-label">First Name</label>
            <input required type="text" id="name" name="name" class="form-control border-black" />
          </div>
          <div class="col">
            <label for="mname" class="form-label">Middle Name</label>
            <input required type="text" id="mname" name="mname" class="form-control border-black" />
          </div>
          <div class="col">
            <label for="lname" class="form-label">Last Name</label>
            <input required type="text" id="lname" name="lname" class="form-control border-black" />
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="user" class="form-label">Username</label>
            <input required type="text" id="user" name="user" class="form-control border-black" />
          </div>
          <div class="col">
            <label for="pass" class="form-label">Password</label>
            <input required type="password" id="pass" name="pass" class="form-control border-black" />
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="address" class="form-label">Address</label>
            <input required type="text" id="address" name="address" class="form-control border-black" />
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="school" class="form-label">School</label>
            <input required type="text" id="school" name="school" class="form-control border-black" />
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="Course" class="form-label">Course</label>
            <input required type="text" id="Course" name="Course" class="form-control border-black" />
          </div>
          <div class="col">
            <label for="dob" class="form-label">Date of Birth</label>
            <input required type="date" id="dob" name="dob" class="form-control border-black" />
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="resume" class="form-label">Resume</label>
            <input required type="file" id="resume" name="resume" class="form-control border-black" />
          </div>
        </div>

        <div class="row mt-3">
          <div class="col">
            <a href="/applicants" class="btn btn-danger w-100">Cancel</a>
          </div>
          <div class="col">
            <input type="submit" name="APPLICANTS_ADD" value="Submit" class="btn btn-success w-100" />
          </div>
        </div>

      </form>
    </div>
  </section>
</main>