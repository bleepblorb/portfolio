let schema = {
  phases : [
    {
      id : 'about',
      title : "About",
      steps : [
        {
          id : "intro",
          intro : "About Me",
          question : "Every good story has a lovable protagonist.",
          desc : "Let's pull together a captivating overview.",
          type : "intro",
          imageUrl : "/img/editor-about.png",
        },
        {
          id : "introStyle",
          intro : "First impressions",
          question : "You only get to pick one",
          desc : "Choose an introduction style that will make a splash.",
          type : "radial-group",
          options : [
            {
              label : "Standard",
              value : "standard"
            },
            {
              label : "Minimal",
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
          question : "A quick way to be interesting and relatable",
          desc : "Add some generic hobbies.",
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
          intro : "Build character",
          question : "Go deeper with some thoughts on design / life",
          desc : "Select some agreeable opinions.",
          type : "checkbox-group",
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
          question : "Looking good isn\'t important, but it can\'t hurt",
          desc : "Craft a look that says \"employable\".",
          type : "intro",
          imageUrl : "/img/editor-portrait.png",
        },
        {
          id : "expression",
          intro : "Expression",
          question : "Set the right tone with the perfect facial expression",
          desc : "Select the appropriate level of excitement.",
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
              label : "Good Mood",
              value : "smile-2"
            },
            {
              label : "Happy Go Lucky",
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
          intro : "Facial hair",
          question : "Put some fuzz on this peach",
          desc : "Select your preferred facial fur style.",
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
              label : "Teen Stache",
              value : "stache"
            },
            {
              label : "Scruffy",
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
          intro : "Dress for success",
          question : "Dress me for the job I want, not the job I don't have",
          desc : "Select fitting attire for your office environment.",
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
              label : "Playing a Ukulele",
              value : "uke"
            },
            {
              label : "Supporting Local Sports Team",
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
          intro : "Backdrop",
          question : "Location, location, location",
          desc : "Select an appropriate backdrop.",
          type : "radial-group",
          options : [
            {
              label : "Hip Studio",
              value : "studio"
            },
            {
              label : "Nature",
              value : "camping"
            },
            {
              label : "The Streets",
              value : "street"
            },
            {
              label : "Home",
              value : "couch"
            },
            {
              label : "Artsy",
              value : "artsy"
            },

            {
              label : "K.I.S.S.",
              value : "white"
            },
          ]
        },
        // {
        //   id : "filter",
        //   intro : "Filter",
        //   question : "Get creative with a trendy filter",
        //   desc : "You know, like all those other apps.",
        //   type : "radial-group",
        //   options : [
        //     {
        //       label : "B & W",
        //       value : "bw"
        //     },
        //     {
        //       label : "insta-cool",
        //       value : "retro"
        //     },
        //     {
        //       label : "LSD",
        //       value : "lsd"
        //     },
        //     {
        //       label : "#nofilter",
        //       value : "nada"
        //     },
        //     {
        //       label : "Ice Ice Baby",
        //       value : "ice"
        //     },
        //     {
        //       label : "Gloss",
        //       value : "gloss"
        //     },
        //   ]
        // }
      ]
    },
    {
      id : 'experience',
      title : "Skills / Experience",
      steps : [
       {
          id : "intro",
          intro : "Skills & Experience",
          question : "The important stuff to justify asking for all that money",
          desc : "Prove I've got what it takes to get the job done.",
          type : "intro",
          imageUrl : "/img/editor-skills.png",
        },
        {
          id : "skills",
          intro : "Skillz",
          question : "No time for modesty, show 'em what I got",
          desc : "Select the skills you are looking for.",
          type : "checkbox-group",
          options : [
            {
              label : "Print",
              value : "print"
            },
            {
              label : "Digital",
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
          question : "You can't change the past– just how you share it",
          desc : "Select your preferred presentation style.",
          type : "radial-group",
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
          question : "You've just created the perfect resume",
          desc : "There's still plenty to discover, so please take a read through your creation.",
          type : "intro",
          imageUrl : "/img/editor-finish.png",
        },
      ]
    }
  ]
}

export { schema };
