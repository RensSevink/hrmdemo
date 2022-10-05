<?php
    include APPROOT . '/Views/Includes/header.php';
    $data = $data ?? [];?>

<form method="post" action="/applicant/update">
    <div class="mt-4 ml-4">
        <input type="hidden" name="id" value="<?php echo $data['applicant']->Id ?>">
        <div>
            <label for="full_name">Full Name</label>
            <input id="full_name" type="text" name="FirstName" value="<?php echo $data['applicant']->FirstName?>">
            <input id="full_name" type="text" name="LastName" value="<?php echo $data['applicant']->LastName?>">
        </div>
        <div class="mt-2">
            <label for="job_select">Application Form</label>
            <select id="job_select" name="JobId">
                <option selected disabled>Choose a Job</option>
                <option value="1">Job 1</option>
                <option value="2">Job 2</option>
            </select>
        </div>
        <div class="mt-2">
            <label for="email">Email</label>
            <input id="email" type="email" name="Email" value="<?php echo $data['applicant']->Email?>">
        </div>
        <div class="mt-2">
            <label for="gender_select">Application Form</label>
            <select id="gender_select" name="Gender">
                <option selected disabled>Choose a Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="mt-2">
            <label for="phone">Phone</label>
            <input id="phone" type="tel" name="Phone" value="<?php echo $data['applicant']->Phone?>">
        </div>
        <div class="mt-2">
            <label for="birthdate">Birthday</label>
            <input id="birthdate" type="date" name="BirthDate" value="<?php echo $data['applicant']->BirthDate?>">
        </div>
        <div class="mt-2">
            <label for="address">Address</label>

            <div>
                <input id="address" type="text" name="Street" value="<?php echo $data['applicant']->Street?>">
                <input id="address" type="number" name="Number" value="<?php echo $data['applicant']->Number?>">
                <input id="address" type="text" name="NumberExtension" value="<?php echo $data['applicant']->NumberExtension?>">
                <br>
                <input id="address" type="text" name="Zipcode" value="<?php echo $data['applicant']->ZipCode?>">
                <input id="address" type="text" name="Place" value="<?php echo $data['applicant']->Place?>">
            </div>
        </div>
        <div class="mt-2">
            <button type="submit" name="submit" value="submit">Submit</button>
        </div>
    </div>
</form>
