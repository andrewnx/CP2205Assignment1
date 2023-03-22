<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            [
                'name' => 'Kurt Vonnegut',
                'bio' => 'Kurt Vonnegut was an American writer known for his blend of satire, black comedy, and science fiction. He was a prolific author, with 14 novels, three short story collections, five plays, and five works of non-fiction. His unique writing style, wit, and humanist themes earned him a devoted following, and he is considered one of the most important and influential writers of the 20th century.',
            ],
            [
                'name' => 'J.R.R. Tolkien',
                'bio' => 'John Ronald Reuel Tolkien was an English writer, poet, philologist, and academic, best known as the author of the high-fantasy works The Hobbit, The Lord of the Rings, and The Silmarillion. His extensive knowledge of languages and mythology greatly influenced his writing, and his creation of Middle-earth, a richly detailed fictional world, has had a profound impact on the genre of fantasy literature.',
            ],
            [
                'name' => 'Miguel de Cervantes',
                'bio' => 'Miguel de Cervantes Saavedra was a Spanish writer, playwright, and poet, best known as the creator of the literary masterpiece, Don Quixote. Born in Alcalá de Henares, Spain, Cervantes led a life marked by various adventures and hardships. He served in the Spanish navy during the Battle of Lepanto, where he was injured and lost the use of his left hand. He was later captured by Barbary pirates and endured five years of captivity before being ransomed and returned to Spain.',
            ],
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
