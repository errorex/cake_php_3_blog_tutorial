<?php

use Phinx\Seed\AbstractSeed;

class UsersSeeder extends AbstractSeed
{
    public function run()
    {
        $data = array(
            array(
                'username' => 'admin',
                'password' => '$2y$10$KSCOpDooDl/ZgE/MHqU.uuhqbD.OYXpDTHivxVFzr0.pvUGBm6zZ.',
                'role' => 'admin',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ),
        );

        $users = $this->table('users');
        $users->insert($data)
              ->save();
    }
}