<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $text = "<p>Damn Kai, you going crazy</p>

        <p><br />
        I be in the loop, she be in a group (yeah)<br />
        Brodie want her friend, throw &#39;em alley-oop (yeah)<br />
        Turned somethin&#39; to nothin&#39;, bruh, I&#39;m livin&#39; proof<br />
        How can I lose when we the who&#39;s who&#39;s?<br />
        Still runnin&#39; &#39;round with Mohawk, jet ready, pack the Goyard<br />
        People probably think I show off, I ain&#39;t even give it yet<br />
        Runnin&#39; up a silly check, stayin&#39; off the internet<br />
        Share the stage with Billie Eilish, turnt at any given time</p>
        
        <p><br />
        Personal partners pillow talkin&#39; &#39;cause I got rich without &#39;em<br />
        Only thing they should be sayin&#39; is, &quot;Baby keep it solid&quot;<br />
        We ain&#39;t even deep as we used to be, this shit slick, divided<br />
        Bruh ain&#39;t got no hustle or nothin&#39;, so he gon&#39; stick to violence<br />
        I be known to run down, I&#39;m dialed in, so I can&#39;t speak about it<br />
        She know I&#39;m a gangster, she love me, I bring the freak up out her<br />
        Can&#39;t play with me, you know I come trim, I&#39;m in a different league<br />
        I&#39;m tired of showin&#39; what I can get done, what you gon&#39; do for me?</p>
        
        <p><br />
        40 thousand miles up in the air, only time I get some Z&#39;s<br />
        Full-court press, foot on they neck and I can&#39;t let &#39;em breathe<br />
        Blood, sweat, and tears come with this check, it ain&#39;t nowhere near easy<br />
        Had to fall back, you know how that go, we only speakin&#39; briefly<br />
        Hope I&#39;m not too much to handle, city nigga from Atlanta<br />
        I spent my last check on ammo, this is not a regular Lambo<br />
        Hundred thousand dollars kit could&#39;ve put down on another Lambo<br />
        Don&#39;t be in the mix, I built this shit forever havin&#39; say so</p>
        
        <p><br />
        This shit gon&#39; get serious about my money, this ain&#39;t no fuckin&#39; Play-Doh<br />
        Brodie down for double homicide, I try to tell him, &quot;Lay low&quot;<br />
        C don&#39;t like to drive, but he spin good, I&#39;m on the way to Clayco<br />
        AK-47s in the spots before they made the Draco</p>
        
        <p><br />
        I&#39;m just tryna ball and live, hundred mill&#39;, I&#39;m calling dibs<br />
        I&#39;m the boss, pay all the bills, I&#39;m the golden child for real<br />
        Go off in this bitch, I will, I been on my grind for years<br />
        And I&#39;m out here grinding still, I need equity to sign the deal<br />
        I&#39;m just tryna ball and live, hundred mill&#39;, I&#39;m calling dibs<br />
        I&#39;m the boss, pay all the bills, I&#39;m the golden child for real<br />
        Go off in this bitch, I will, I been on my grind for years<br />
        And I&#39;m out here grinding still, I need equity to sign the deal</p>
        
        <p><br />
        Overbuying cars, I snatch the Brabus just for motivation<br />
        Shootout at the spot today, tomorrow, we in a new location<br />
        Free all of the guys, I hope y&#39;all beat the case or get probation<br />
        Stash it at my mama house, four hundred bands in the ventilation<br />
        Now look how I&#39;m living, I bought a house for the money to stay at<br />
        Right when niggas think that I got soft, I&#39;ma pull up and spray at<br />
        Living like a don, might smoke a blunt in the back of the Maybach<br />
        Pull up like your mama with the switch, why the fuck would you say that?</p>
        
        <p><br />
        You can do it first, I&#39;ma do it worse, gotta double the payback<br />
        Never take it personal, show no mercy, bruh taught me that way back<br />
        Condo to get off, I was always taught, &quot;Don&#39;t tell hoes where you stay at&quot;<br />
        Keep a stash house, you can&#39;t take nothing to the spot where you lay at<br />
        Never be a bother, if you off me, no problem, just say that<br />
        Never runnin&#39; off, so if I owe you, I got you, I&#39;ll pay that<br />
        Give this shit my all, so when I&#39;m old I can chill and just lay back<br />
        Really from the bottom so the trenches is where I feel safe at</p>
        
        <p><br />
        I&#39;m just tryna ball and live, hundred mill&#39;, I&#39;m calling dibs<br />
        I&#39;m the boss, pay all the bills, I&#39;m the golden child for real<br />
        Go off in this bitch, I will, I been on my grind for years<br />
        And I&#39;m out here grinding still, I need equity to sign the deal<br />
        I&#39;m just tryna ball and live, hundred mill&#39;, I&#39;m calling dibs<br />
        I&#39;m the boss, pay all the bills, I&#39;m the golden child for real<br />
        Go off in this bitch, I will, I been on my grind for years<br />
        And I&#39;m out here grinding still, I need equity to sign the deal</p>
        ";


        \App\Models\Song::factory()->create([
            'name' => 'Hail Mary',
            'category_id' => \App\Models\Category::all()->random()->id,
            'time' => '3:20',
            'cover' => 'Hail_Mary.jpg',
            'text' => $text
        ]);
        \App\Models\Song::factory()->create([
            'name' => 'Lose Yourself',
            'category_id' => \App\Models\Category::all()->random()->id,
            'time' => '3:20',
            'cover' => 'Lose_Yourself.jpg',
            'text' => $text
        ]);
        \App\Models\Song::factory()->create([
            'name' => 'Live From The Gutter',
            'category_id' => \App\Models\Category::all()->random()->id,
            'time' => '3:20',
            'cover' => 'Live_From_The_Gutter.jpg',
            'text' => $text
        ]);
        \App\Models\Song::factory()->create([
            'name' => 'First Class',
            'category_id' => \App\Models\Category::all()->random()->id,
            'time' => '3:20',
            'cover' => 'First_Class.jpg',
            'text' => $text
        ]);
        \App\Models\Song::factory()->create([
            'name' => 'In A Minute',
            'category_id' => \App\Models\Category::all()->random()->id,
            'time' => '3:20',
            'cover' => 'In_A_Minute.jpg',
            'text' => $text
        ]);
        \App\Models\Song::factory()->create([
            'name' => 'Lili',
            'category_id' => \App\Models\Category::all()->random()->id,
            'time' => '3:20',
            'cover' => 'Lili.jpg',
            'text' => $text
        ]);
        \App\Models\Song::factory()->create([
            'name' => 'Sum 2 Prove',
            'category_id' => \App\Models\Category::all()->random()->id,
            'time' => '3:20',
            'cover' => 'Sum_2_Prove.jpg',
            'text' => $text
        ]);
        \App\Models\Song::factory()->create([
            'name' => 'Over Heated',
            'category_id' => \App\Models\Category::all()->random()->id,
            'time' => '3:20',
            'cover' => 'Over_Heated.jpg',
            'text' => $text
        ]);
        \App\Models\Song::factory()->create([
            'name' => 'Cant You See',
            'category_id' => \App\Models\Category::all()->random()->id,
            'time' => '3:20',
            'cover' => 'Cant_You_See.jpg',
            'text' => $text
        ]);
        \App\Models\Song::factory()->create([
            'name' => 'Free',
            'category_id' => \App\Models\Category::all()->random()->id,
            'time' => '3:20',
            'cover' => 'Free.jpg',
            'text' => $text
        ]);
    }
}
