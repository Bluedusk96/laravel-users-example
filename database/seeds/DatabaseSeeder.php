<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
    }
    
    $article = new App\Article();
    $article->body = 'body';
    $article->title = 'title';
    $article->excerpt = 'excerpt';
    $article->save();
    
    
    
    {
        Model::unguard();

        // Clean up
        DB::table('articles')->delete();
		
		// Seed
        $this->call(ArticlesSeeder::class);

        Model::reguard();
    }
