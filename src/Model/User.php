<?php

namespace App\Model;

use DateTime;

class User
{

    private String $pseudo;
    private String $email;
    private String $password;
    private String $same_password;
    private DateTime $date_added;
    private DateTime $date_uploaded;

    /**
     * @param String $pseudo
     * @param String $email
     * @param String $password
     * @param String $same_password
     * @param DateTime $date_added
     * @param DateTime $date_uploaded
     */
    public function __construct(string $pseudo, string $email, string $password, string $same_password, DateTime $date_added, DateTime $date_uploaded)
    {
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->password = $password;
        $this->same_password = $same_password;
        $this->date_added = $date_added;
        $this->date_uploaded = $date_uploaded;
    }

    /**
     * @return string
     */
    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    /**
     * @param string $pseudo
     */
    public function setPseudo(string $pseudo): void
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getSamePassword(): string
    {
        return $this->same_password;
    }

    /**
     * @param string $same_password
     */
    public function setSamePassword(string $same_password): void
    {
        $this->same_password = $same_password;
    }

    /**
     * @return DateTime
     */
    public function getDateAdded(): DateTime
    {
        return $this->date_added;
    }

    /**
     * @param DateTime $date_added
     */
    public function setDateAdded(DateTime $date_added): void
    {
        $this->date_added = $date_added;
    }

    /**
     * @return DateTime
     */
    public function getDateUploaded(): DateTime
    {
        return $this->date_uploaded;
    }

    /**
     * @param DateTime $date_uploaded
     */
    public function setDateUploaded(DateTime $date_uploaded): void
    {
        $this->date_uploaded = $date_uploaded;
    }




}