<?php

namespace App\Models;

class User
{
    private $id;
    private $name;
    private $email;
    private string $created_at;

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


public function getCreatedAt(): string
{
    return $this->created_at;
}

public function setCreatedAt(string $created_at): void
{
    $this->created_at = $created_at;
}
}

