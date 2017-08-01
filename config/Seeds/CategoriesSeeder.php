<?php

use Phinx\Seed\AbstractSeed;

class CategoriesSeeder extends AbstractSeed
{
    public function run()
    {
        $data = array(
            array(
                'name' => 'all_posts',
                'description' => 'All posts',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ),
        );

        $categories = $this->table('categories');
        $categories->insert($data)
              ->save();
    }
}