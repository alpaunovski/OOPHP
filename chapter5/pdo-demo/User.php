<?php

namespace App\Models;

class User
{
    private $id;
    private $name;
    private $email;
    private \DateTime $created_at;
}

public function getId(): int
{
    return $this->id;
}

public function setId (int $id): void
{
    $this->id = $id;
}

public function getName(): string
{
    return $this->name;
}

public function setName(string $name): void
{
    $this->name = $name;
}

public function getEmail(): string
{
    return $this->email;
}

public function setName(string $email): void
{
    $this->email = $email;
}

public function getCreatedAt(): \DateTime
{
    return $this->created_at;
}

public function setCreatedAt(\DateTime $created_at): void
{
    $this->created_at = $created_at;
}