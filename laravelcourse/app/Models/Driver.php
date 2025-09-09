<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    /**
     * DRIVER ATTRIBUTES
     * $this->attributes['id'] - int - contains the driver primary key (id)
     * $this->attributes['name'] - string - contains the driver name
     * $this->attributes['origin_city'] - string - contains the origin city
     * $this->attributes['nitrogen_level'] - int - contains the nitrogen level
     */
    protected $fillable = ['name', 'origin_city', 'nitrogen_level'];

    public $timestamps = false;

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    // Do not use this method to set the id of the driver
    // public function setId($id): void
    // {
    //     $this->attributes['id'] = $id;
    // }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName($name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getOriginCity(): string
    {
        return $this->attributes['origin_city'];
    }

    public function setOriginCity($originCity): void
    {
        $this->attributes['origin_city'] = $originCity;
    }

    public function getNitrogenLevel(): int
    {
        return (int) $this->attributes['nitrogen_level'];
    }

    public function setNitrogenLevel($nitrogenLevel): void
    {
        $this->attributes['nitrogen_level'] = $nitrogenLevel;
    }
}


