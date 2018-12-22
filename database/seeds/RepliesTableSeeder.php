<?php

use Illuminate\Database\Seeder;
use App\Reply;
class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r1 = [
        	'user_id'	=>	1,
        		'discussion_id'	=>	1,
        			'content'	=>	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed metus lacus'
        ];
        $r2 = [
        	'user_id'	=>	2,
        		'discussion_id'	=>	2,
        			'content'	=>	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed metus lacus'
        ];
        $r3 = [
        	'user_id'	=>	1,
        		'discussion_id'	=>	3,
        			'content'	=>	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed metus lacus'
        ];
        $r4 = [
        	'user_id'	=>	2,
        		'discussion_id'	=>	4,
        			'content'	=>	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed metus lacus'
        ];
        Reply::create($r1);
        Reply::create($r2);
        Reply::create($r3);
        Reply::create($r4);
    }
}
