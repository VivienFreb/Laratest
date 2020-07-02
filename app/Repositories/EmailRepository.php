<?php

namespace App\Repositories;

use App\Email;

class EmailRepository implements IEmailRepository
{

    protected $email;

    public function __construct(Email $email)
    {
        $this->email = $email;
    }

    public function save($mail)
    {
        $this->email->email = $mail;
        $this->email->save();
    }

}
