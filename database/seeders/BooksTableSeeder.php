<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'title' => "Cat's Cradle",
                'description' => 'Cat\'s Cradle (1963) is a satirical science fiction novel by Kurt Vonnegut that explores themes of science, technology, and religion. The story follows the narrator, John, as he researches the late Felix Hoenikker, a fictional co-creator of the atomic bomb, and discovers a substance called "ice-nine," which has the potential to destroy all life on Earth. Through this narrative, Vonnegut critiques the human propensity for self-destruction and the dangers of scientific advancement without ethical considerations.',
                'author' => 'Kurt Vonnegut',
            ],
            [
                'title' => "Slaughterhouse-Five",
                'description' => 'Slaughterhouse-Five (1969) is a semi-autobiographical science fiction novel by Kurt Vonnegut that tells the story of Billy Pilgrim, an American soldier who becomes "unstuck in time" after surviving the firebombing of Dresden during World War II. The novel explores themes of fate, free will, the destructiveness of war, and the nature of time, with a blend of dark humor, vivid imagery, and poignant moments.',
                'author' => 'Kurt Vonnegut',
            ],
            [
                'title' => "Breakfast of Champions",
                'description' => 'Breakfast of Champions (1973) is a satirical novel by Kurt Vonnegut that follows the intersecting lives of a struggling science fiction writer named Kilgore Trout and a wealthy car dealer named Dwayne Hoover. The novel examines themes of mental illness, free will, and the consequences of artistic creation while critiquing American society and its values through Vonnegut\'s signature blend of humor and absurdity.',
                'author' => 'Kurt Vonnegut',
            ],
            [
                'title' => "The Lord of the Rings",
                'description' => 'The Lord of the Rings (1954-1955) is an epic high-fantasy novel by J.R.R. Tolkien, divided into three volumes: The Fellowship of the Ring, The Two Towers, and The Return of the King. Set in the fictional world of Middle-earth, the story follows the quest of a young hobbit named Frodo Baggins and his companions to destroy the One Ring, a powerful artifact created by the dark lord Sauron. The novel is renowned for its richly detailed world-building, memorable characters, and exploration of themes such as heroism, friendship, and the battle between good and evil.',
                'author' => 'J.R.R. Tolkien',
            ],
            [
                'title' => "Don Quixote",
                'description' => 'Don Quixote, or The Ingenious Gentleman Don Quixote of La Mancha (1605, 1615), is a two-part novel by Miguel de Cervantes that tells the story of a middle-aged man named Alonso Quixano, who becomes so enamored with chivalric romances that he loses his sanity and sets out to revive chivalry and protect the helpless under the guise of the knight-errant, Don Quixote. Accompanied by his loyal squire, Sancho Panza, Don Quixote embarks on a series of adventures, battling imaginary giants (which are actually windmills), and performing acts of chivalry, all the while maintaining his unwavering belief in the chivalric ideal.',
                'author' => 'Miguel de Cervantes',
            ],
        ];

        foreach ($books as $book) {
            $author = Author::where('name', $book['author'])->first();
            if ($author) {
                Book::create([
                    'title' => $book['title'],
                    'description' => $book['description'],
                    'author_id' => $author->id,
                ]);
            }
        }
    }
}
