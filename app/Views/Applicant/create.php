<?php
$data = $data ?? [];
require_once APPROOT . '/Views/Includes/header.php';
?>
<form method="post" action="/applicant/store">
<div class="mt-4 ml-4">
    <div>
        <label for="full_name">Full Name</label>
        <input id="full_name" type="text" name="FirstName" placeholder="John">
        <input id="full_name" type="text" name="LastName" placeholder="Doe">
    </div>
    <div class="mt-2">
        <label for="job_select">Application Form</label>
        <select id="job_select" name="JobId">
            <option selected disabled>Choose a Job</option>
            <option value="1">Job 1</option>
        </select>
    </div>
        <div class="mt-2">
            <label for="email">Email</label>
            <input id="email" type="email" name="Email" placeholder="example@gmail.com">
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
            <input id="phone" type="tel" name="Phone" placeholder="06 123456789">
        </div>
        <div class="mt-2">
            <label for="birthday">Birthday</label>
            <input id="birthday" type="date" name="BirthDate">
        </div>
        <div class="mt-2">
            <label for="address">Address</label>

            <div>
                <input id="address" type="text" name="Street" placeholder="Street">
                <input id="address" type="number" name="Number" placeholder="10">
                <input id="address" type="text" name="NumberExtension" placeholder="A">
                <br>
                <input id="address" type="text" name="Zipcode" placeholder="1234 AB">
                <input id="address" type="text" name="Place" placeholder="Deil">
            </div>
        </div>
        <div class="mt-2">
            <button type="submit" name="submit" value="submit">Submit</button>
        </div>
    </div>
</form>