<?php

namespace App\classes;
class Blog
{
    public $blogs = [];
    public $result = [];

    public function __construct()
    {
        $this->blogs = [
            0 => [
                'id' => 1,
                'category_id' => 2,
                'title' => 'How to get a Kitten to Sleep Through',
                'description' => 'Your new kittens ever faced. Not to worry, here are a few tips and tricks on how to get a kitten to sleep through her first night.',
                'image' => '1.jpg'
            ],
            1 => [
                'id' => 2,
                'category_id' => 2,
                'title' => 'Christmas & Holiday Cat Treat Gifts',
                'description' => 'As a cat owner you may be familiar with the of finding a dead bird, mouse or other small creature around your house. While it may be the thought that counts, many pet owners are often left bewildered by cat behavior and wondering—among other things—if maybe there’s a way to get off their cat’s gift list.',
                'image' => '2.jpg'
            ],
            2 => [
                'id' => 3,
                'category_id' => 1,
                'title' => 'Creative Cat Enrichment Ideas',
                'description' => 'As working from home becomes more common, some people will find that adjusting to a new routine may be difficult at first. Cats may also need some time to get used to having their humans home all day, every day. One way to help them adjust is to create a new routine that includes designated time together.  ',
                'image' => '3.jpg'
            ],
            3 => [
                'id' => 4,
                'category_id' => 4,
                'title' => 'How Long Are Cats Pregnant?',
                'description' => 'Recognizing if your cat is pregnant and knowing what to do at each pregnancy stage can be tricky. Visit Purina to learn about the signs, gestation period, and more.',
                'image' => '4.jpg'
            ],
            4 => [
                'id' => 5,
                'category_id' => 3,
                'title' => 'Understanding the Body Language of Your Cat',
                'description' => 'Fortunately, when it comes to the body language of a cat, one of the most helpful indicators is also one of a cat’s most prominent features: its tail. There are times where just by looking at which way a cat’s tail is pointing or how it’s moving, you’ll get an excellent idea if they want to play, cuddle or just want some space to themself. ',
                'image' => '5.jpg'
            ],
            5 => [
                'id' => 6,
                'category_id' => 4,
                'title' => 'How Much Wet Food Should You Feed a Cat?',
                'description' => 'You can feed your cat wet food daily. If you’re wondering, “how much wet food should I feed my cat?” check the can or consult your veterinarian for feeding recommendations. In general, you can feed an average-sized adult cat one 3-ounce can per 3 to 3½ pounds of body weight daily.You should adjust this amount depending on whether you also feed your cat dry kibble. Your veterinarian may also recommend feeding more or less wet food depending on your cat’s weight, health and other factors.',
                'image' => '6.jpg'
            ],
            6 => [
                'id' => 7,
                'category_id' => 5,
                'title' => 'Do Cats Drink Water? Cat Hydration ',
                'description' => 'Water, however, is as vital to a cat’s survival as it is to that of humans. 60-70% of their body weight is water. Despite being good for them, many cats don’t like drinking water, especially if it’s still or standing water. This dislike for water can lead to a dehydrated cat, so it’s important to monitor your cat’s water intake. ',
                'image' => '7.jpg'
            ],
        ];
    }

    public function getAllBlogs()
    {
        return $this->blogs;
    }

	public function getfirstFourBlog()
	{
		sort($this->blogs);
		foreach ($this->blogs as $key => $blog)
		{
			if ($key <= 3)
			{
						array_push($this->result, $blog);
			}
			else break;
		}
		return $this->result;
	}

    public function getLastThreeBlog()
    {
        rsort($this->blogs);
        foreach ($this->blogs as $key => $blog)
        {
            if ($key <= 2)
            {
                array_push($this->result, $blog);
            }
           else break;
        }
        return $this->result;
    }

    public function getBlogByCategoryId($id)
    {
        foreach ($this->blogs as $blog)
        {
            if ($blog['category_id'] == $id){
                array_push($this->result, $blog);
            }
        }
        return $this->result;
    }

    public function getBlogId($id)
    {
        foreach ($this->blogs as $blog)
        {
            if ($blog['id'] == $id){
			            return $blog;
            }
        }

    }
}