<?php

class ApplicantModel
{

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getApplicants(): array
    {
        $this->db->query('SELECT * FROM `applicant`');
        return $this->db->resultSet();
    }

    public function getApplicantById($id)
    {
        $this->db->query('SELECT * FROM `applicant` WHERE `id` = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function storeApplicant()
    {
        $this->db->query('INSERT INTO `applicant` (`FirstName`, `LastName`, `JobId`, `Email`, `Gender`, `Phone`, `BirthDate`, `Street`, `Number`, `NumberExtension`, `Zipcode`, `Place`, `Applicantkey`, `IsActive`, `Description`) VALUES (:FirstName, :LastName, :JobId, :Email, :Gender, :Phone, :BirthDate, :Street, :Number, :NumberExtension, :Zipcode, :Place, :Applicantkey, :IsActive, :Description)');
        $this->db->bind(':FirstName', $_POST['FirstName']);
        $this->db->bind(':LastName', $_POST['LastName']);
        $this->db->bind(':JobId', $_POST['JobId']);
        $this->db->bind(':Email', $_POST['Email']);
        $this->db->bind(':Gender', $_POST['Gender']);
        $this->db->bind(':Phone', $_POST['Phone']);
        $this->db->bind(':BirthDate', $_POST['BirthDate'] ?? null);
        $this->db->bind(':Street', $_POST['Street']);
        $this->db->bind(':Number', $_POST['Number']);
        $this->db->bind(':NumberExtension', $_POST['Extension'] ?? null);
        $this->db->bind(':Zipcode', $_POST['Zipcode']);
        $this->db->bind(':Place', $_POST['Place']);
        $this->db->bind(':Applicantkey', random_int(100000, 999999));
        $this->db->bind(':IsActive', 1);
        $this->db->bind(':Description', 0);
        $this->db->execute();

        header('LOCATION: /applicant');
    }

    public function updateApplicant($post)
    {
        $this->db->query('UPDATE `applicant` SET `FirstName` = :FirstName, `LastName` = :LastName, `JobId` = :JobId, `Email` = :Email, `Gender` = :Gender, `Phone` = :Phone, `BirthDate` = :BirthDate, `Street` = :Street, `Number` = :Number, `NumberExtension` = :NumberExtension, `Zipcode` = :Zipcode, `Place` = :Place, `Applicantkey` = :Applicantkey, `IsActive` = :IsActive, `Description` = :Description WHERE `id` = :id');
        $this->db->bind(':id', $_POST['id']);
        $this->db->bind(':FirstName', $_POST['FirstName']);
        $this->db->bind(':LastName', $_POST['LastName']);
        $this->db->bind(':JobId', $_POST['JobId']);
        $this->db->bind(':Email', $_POST['Email']);
        $this->db->bind('Gender', $_POST['Gender']);
        $this->db->bind(':Phone', $_POST['Phone']);
        $this->db->bind(':BirthDate', $_POST['BirthDate'] ?? null);
        $this->db->bind(':Street', $_POST['Street']);
        $this->db->bind(':Number', $_POST['Number']);
        $this->db->bind(':NumberExtension', $_POST['Extension'] ?? null);
        $this->db->bind(':Zipcode', $_POST['Zipcode']);
        $this->db->bind(':Place', $_POST['Place']);
        $this->db->bind(':Applicantkey', random_int(100000, 999999));
        $this->db->bind(':IsActive', 1);
        $this->db->bind(':Description', 0);
        $this->db->execute();

        header('LOCATION: /applicant');
    }
}