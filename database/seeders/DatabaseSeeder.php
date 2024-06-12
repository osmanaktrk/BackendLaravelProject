<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\FaqCategory;
use App\Models\News;
use App\Models\Question;
use App\Models\QuestionRequest;
use App\Models\UsertypeRequest;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@ehb.be',
            'password' => Hash::make('Password!321'),
            'usertype' => 'admin',
            'is_banned' => 0,
            'avatar' => 'img/avatars/admin@ehb.be.jpg',
        ]);


        User::factory()->create([
            'name' => 'writer',
            'email' => 'writer@ehb.be',
            'usertype' => 'writer',
            'is_banned' => 0,
            'avatar' => 'img/avatars/writer@ehb.be.jpg',
        ]);

        User::create()->create([
            'name' => 'user',
            'email' => 'user@ehb.be',
            'usertype' => 'user',
            'is_banned' => 0,
            'avatar' => 'img/avatars/user@ehb.be.jpg',
        ]);


        User::factory(10)->create();



        News::factory()->for(User::factory()->state([
            'usertype' => ['admin', 'writer'],
        ]))->create([
            'title' => "Gaza ceasefire plan in balance as US says Hamas proposed 'changes'",
            'cover' =>  "img/news/news0.webp",
            'content' => "US Secretary of State Antony Blinken says Hamas has proposed numerous changes to a US-backed plan for a Gaza ceasefire and hostage release deal, which currently hangs in the balance. He told reporters in Doha that some of the changes were workable and others were not, but that the US and mediators Qatar and Egypt would try to close this deal. Hamas said on Tuesday that it was ready to “deal positively” with the process but stressed the need for Israel to agree to a permanent ceasefire. Israels government has not commented, but an anonymous Israeli official said the Palestinian armed groups response amounted to a rejection. On Tuesday, Mr Blinken said Israeli Prime Minister Benjamin Netanyahu had reaffirmed his commitment to the ceasefire proposal and that only Hamas stood in the way of progress. However, Mr Netanyahu has not publicly endorsed the plan, which US President Joe Biden said had been offered by Israel when he outlined it 12 days ago. The UN Security Council on Monday passed a resolution supporting the proposal, adding to the diplomatic pressure the US is exerting.",
        ]);


        News::factory()->for(User::factory()->state([
            'usertype' => ['admin', 'writer'],
        ]))->create([
            'title' => 'Explorer Shackletons last ship found on ocean floor',
            'cover' => "img/news/news1.webp",
            'content' => "Wreck hunters have found the ship on which the famous polar explorer Ernest Shackleton made his final voyage. The vessel, called Quest, has been located on the seafloor off the coast of Newfoundland, Canada. Shackleton suffered a fatal heart attack on board on 5 January 1922 while trying to reach the Antarctic. And although Quest continued in service until it sank in 1962, the earlier link with the explorer gives it great historic significance. The British-Irish adventurer is celebrated for his exploits in Antarctica at a time when very few people had visited the frozen wilderness. His final voyage kind of ended that Heroic Age of Exploration, of polar exploration, certainly in the south, said renowned shipwreck hunter David Mearns, who directed the successful search operation. Afterwards, it was what you would call the scientific age. In the pantheon of polar ships, Quest is definitely an icon, he told BBC News.",
        ]);


        News::factory()->for(User::factory()->state([
            'usertype' => ['admin', 'writer'],
        ]))->create([
            'title' => "Russian warships arrive in Cuba in show of force",
            'cover' => "img/news/news2.webp",
            'content' => "Four Russian naval vessels - including a nuclear-powered submarine and a frigate - have arrived in Cuba, in what is seen as a show of force amid tensions with the West over the war in Ukraine. The vessels are anchored at the Havana Bay - some 90 miles (145km) from the US state of Florida. Russia's defence ministry says the Admiral Gorshkov frigate and the Kazan submarine are both carriers of advanced weapons, including hypersonic missiles Zircon. They earlier conducted missile drills in the Atlantic. But Cuba's foreign ministry says none of the vessels has nuclear arms on board, and their five-day visit does not pose a threat to the region. US officials say they are closely monitoring the visit. The US Navy also used sea drones to shadow the Russian vessels as they got close to Cuba, BBC's US partner CBS reports.",
        ]);


        News::factory()->for(User::factory()->state([
            'usertype' => ['admin', 'writer'],
        ]))->create([
            'title' => "Swiss parliament defies ECHR on climate women's case",
            'cover' => "img/news/news3.webp",
            'content' => "Swiss women who won a historic ruling on climate change at the European Court of Human Rights say they feel shocked and betrayed by their parliament’s decision not to comply with it. The women, known as climate seniors, previously took their case to the court in Strasbourg, France, arguing the Swiss government’s inadequate response to climate change - and in particular extreme heat events linked to global warming - was damaging their right to health and life. The court agreed in April and ordered Switzerland, which has so far failed to meet is targets to reduce greenhouse gas emissions, to do more. The courts rulings are binding for member states, and this decision was unprecedented. Climate activists had hoped it would send a signal to other governments that human rights law could be used to defend citizens who believe their health is being harmed by worsening environmental factors.",
        ]);


        News::factory()->for(User::factory()->state([
            'usertype' => ['admin', 'writer'],
        ]))->create([
            'title' => "Iconic French singer Françoise Hardy dies aged 80",
            'cover' => "img/news/news4.webp",
            'content' => "One of France's best-loved singer-songwriters, Françoise Hardy, has died at the age of 80. Mum is gone, her son, Thomas Dutronc, who is also a musician, wrote on social media. Hardy burst on to the music scene in 1962 and became a cultural icon who inspired the likes of Mick Jagger and Bob Dylan. Known for her melancholy ballads, she symbolised France's Yé-yé (yeah yeah) pop movement, so-called because of its nod to English music. Her most famous songs included All the Girls and Boys (Tous les garçons et les filles), It Hurts to Say Goodbye (Comment te dire adieu) and My Friend the Rose (Mon amie la rose). Her biggest UK hit was All Over The World, an English-language version of her song Dans le monde entier, which reached number 16 in the charts in June 1965. Hardy was born in Nazi-occupied Paris in 1944 and raised by her mother. Like many girls at the time, she grew up listening to Elvis Presley, Cliff Richard and other American and British stars on Radio Luxembourg and she signed her first record deal at just 17.",
        ]);

        News::factory(5)->for(User::factory()->state([
            'usertype' => ['admin', 'writer'],
        ]))->create();


        Comment::factory(5)->create();

       

        Category::factory()->create([
            'category' => 'General',
        ]);

        Category::factory()->create([
            'category' => 'Politic',
        ]);

        Category::factory()->create([
            'category' => 'Technology',
        ]);

        Category::factory()->create([
            'category' => 'Sport',
        ]);

        Category::factory()->create([
            'category' => 'Business',
        ]);

        Category::factory()->create([
            'category' => 'Culture',
        ]);

        Category::factory()->create([
            'category' => 'Travel',
        ]);


        

        Contact::factory(5)->create();

        Question::factory(8)->create();

        FaqCategory::factory()->create([
            'category' => 'Register',
        ]);

        FaqCategory::factory()->create([
            'category' => 'News',
        ]);

        FaqCategory::factory()->create([
            'category' => 'Comment',
        ]);

        FaqCategory::factory()->create([
            'category' => 'Contact',
        ]);

        FaqCategory::factory()->create([
            'category' => 'FAQ',
        ]);

        FaqCategory::factory()->create([
            'category' => 'General',
        ]);

        FaqCategory::factory()->create([
            'category' => 'Profile',
        ]);




        QuestionRequest::factory(5)->create();


        UsertypeRequest::factory(5)->create();




    }
}
