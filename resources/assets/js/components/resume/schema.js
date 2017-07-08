let schema = {
  phases : [
    {
      id : 'about',
      title : "About",
      steps : [
        {
          id : "intro",
          intro : "About Me",
          question : "First let's pull together a captivating overview of me.",
          type : "intro",
          imageUrl : "/img/editor-intro.png",
        },
        {
          id : "introStyle",
          intro : "First impressions",
          question : "You only get to pick one.",
          desc : "Choose your preferred introduction style.",
          type : "radial-group",
          imageUrl : "/img/editor-intro.png",
          options : [
            {
              label : "Pretty Standard",
              value : "standard"
            },
            {
              label : "Minimalism",
              value : "minimal"
            },
            {
              label : "Confident",
              value : "confident"
            },
            {
              label : "Poetic",
              value : "poetic"
            },
            {
              label : "Hard to Get",
              value : "hard"
            },
            {
              label : "Elevator Pitch",
              value : "elevator"
            },
          ]
        },
        {
          id : "personal",
          intro : "Personal Interests",
          question : "Make me interesting by picking a few fun hobbies",
          desc : "Pick as many as you'd like.",
          type : "checkbox-group",
          options : [
            {
              label : "Cooking",
              value : "cooking"
            },
            {
              label : "Hiking",
              value : "hiking"
            },
            {
              label : "Television",
              value : "television"
            },
            {
              label : "Tennis",
              value : "tennis"
            },
            {
              label : "Crafts",
              value : "crafts"
            },
            {
              label : "Learning",
              value : "learn"
            }
          ]
        },
        {
          id : "manifesto",
          intro : "Not quite manifesto",
          question : "Thoughts on design / life.",
          type : "checkbox-group",
          imageUrl : "/img/portrait-beard.png",
          options : [
            {
              label : "Craft",
              value : "craft"
            },
            {
              label : "Care",
              value : "care"
            },
            {
              label : "Purpose",
              value : "purpose"
            },
            {
              label : "Beyond",
              value : "beyond"
            },
            {
              label : "Grow",
              value : "grow"
            },
            {
              label : "Climb",
              value : "climb"
            },
            {
              label : "Balance",
              value : "balance"
            },
            {
              label : "Enjoy",
              value : "enjoy"
            },
          ]
        },
      ]
    },
    {
      id : "portrait",
      title: "Portrait",
      steps : [
        {
          id : "desc",
          intro : "Portrait",
          question : "They say you shouldn't judge a book by its cover, but that doesnt mean we cant still make it look good.",
          type : "intro",
          imageUrl : "/img/portrait-beard.png",
        },
        {
          id : "expression",
          imageUrl : "/img/portrait-beard.png",
          intro : "Expression",
          question : "Choose a face",
          type: "slider-input",
          placeholder: "Level Of Excitement",
          options : [
            {
              label : "All Business",
              value : "grump"
            },
            {
              label : "Robotic",
              value : "neutral"
            },
            {
              label : "Seemingly Normal",
              value : "smile-1"
            },
            {
              label : "Happy Go Lucky",
              value : "smile-2"
            },
            {
              label : "Joyful",
              value : "smile-3"
            },
            {
              label : "Sugar Buzz",
              value : "creepy"
            },
          ]

        },
        {
          id : "facialHair",
          imageUrl : "/img/portrait-beard.png",
          intro : "Facial hair",
          question : "Put some fuzz on this peach",
          type : "radial-group",
          options : [
            {
              label : "Beardo weirdo",
              value : "beard"
            },
            {
              label : "Friendly Chops",
              value : "chops"
            },
            {
              label : "Goatee",
              value : "goatee"
            },
            {
              label : "Simple Stache",
              value : "stache"
            },
            {
              label : "Scruff",
              value : "scruff"
            },
            {
              label : "No Thanks",
              value : "clean"
            }
          ]
        },
        {
          id : "attire",
          imageUrl : "/img/portrait-beard.png",
          intro : "Dress for success",
          question : "Dress me for the job I want, not the job I don't have",
          type : "radial-group",
          options : [
            {
              label : "Casual",
              value : "casual"
            },
            {
              label : "Everyday",
              value : "everyday"
            },
            {
              label : "Business",
              value : "business"
            },
            {
              label : "Outdoorsy",
              value : "outdoors"
            },
            {
              label : "Sunday Best",
              value : "sweater"
            },
            {
              label : "Work from Home",
              value : "home"
            },
          ]
        },
        {
          id : "hands",
          intro : "Strike a pose",
          question : "I've got one hand in my pocket, and the other one is...",
          type : "multiselect",
          options : [
            {
              label : "Giving a Thumbs Up",
              value : "thumbs-up"
            },
            {
              label : "Holding a Spot of Tea",
              value : "tea"
            },
            {
              label : "Grabbing a Craft Brew",
              value : "beer"
            },
            {
              label : "Baking Some Brownies",
              value : "baking"
            },
            {
              label : "Playing a Ukelele",
              value : "uke"
            },
            {
              label : "Suporting Local Sports Team",
              value : "sports"
            },
            {
              label : "Also in My Pocket",
              value : "default"
            }
          ]
        },
        {
          id : "background",
          intro : "Setting",
          question : "Pick a backdrop.",
          type : "radial-group",
          options : [
            {
              label : "K.I.S.S.",
              value : "white"
            },
            {
              label : "Camping",
              value : "camping"
            }
          ]
        }
      ]
    },
    {
      id : 'experience',
      title : "Skills / Experience",
      steps : [
        {
          id : "skills",
          intro : "Skills / Experience",
          question : "Choose the skills you are looking for",
          type : "checkbox-group",
          imageUrl : "/img/portrait-beard.png",
          options : [
            {
              label : "Print / Environmental",
              value : "print"
            },
            {
              label : "Digital Design",
              value : "digital"
            },
            {
              label : "Development",
              value : "development"
            },
            {
              label : "Other",
              value : "other"
            },
          ]
        },
        {
          id : "past",
          intro : "Past experience",
          question : "You can't change the past. Just how you choose to tell it.",
          type : "radial-group",
          imageUrl : "/img/portrait-beard.png",
          options : [
            {
              label : "Detailed",
              value : "detail"
            },
            {
              label : "Nutshell",
              value : "nutshell"
            }
          ]
        },
        {
          id : "finish",
          intro : "Congrats!",
          question : "You've created one purdy resume. Now go give it a read through and hire this guy!",
          type : "intro",
          imageUrl : "/img/portrait-beard.png",
        },
      ]
    }
  ]
}

export { schema };
