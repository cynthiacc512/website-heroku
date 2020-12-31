<?php
namespace App\Domain\Testimoni\Dao;

use App\Domain\Testimoni\Entity\Testimoni;

class TestimoniDao {
    public function findAllTable() {
        return Table::all();
    }
}

?>