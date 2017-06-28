let schema = {
  phases : [
    {
      id : 'intro',
      title : "Intro",
      steps : [
        {
          id : "introStyle",
          intro : "First impressions",
          question : "You only get to pick one.",
          type : "radial-group",
          imageUrl : "/img/portrait-beard.png",
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
              value : "haiku"
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
          intro : "Make me interesting",
          question : "The spot for obligitory personal interests",
          imageUrl : "/img/portrait-beard.png",
          type : "checkbox-group",
          options : [
            {
              label : "Cooking",
              value : "making a mess in the kitchen"
            },
            {
              label : "Hiking",
              value : "pooping in the woods"
            },
            {
              label : "Cartoons",
              value : "watching cartoons"
            },
            {
              label : "Tennis",
              value : "playing tennis"
            },
            {
              label : "Pooping",
              value : "pooping"
            },
            {
              label : "Learning",
              value : "learning new skills (that killz)"
            }
          ]
        }
      ]
    },
    {
      id : "portrait",
      title: "Portrait",
      steps : [
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
          question : "I've got one hand in my pocket, the other is...",
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
          intro : "qestion 2.2",
          question : "This is Question 2.2",
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
      id : 'about',
      title : "About",
      steps : [
        {
          id : "manifesto",
          intro : "In a nutshell",
          question : "Thoughts on design / life.",
          type : "checkbox-group",
          imageUrl : "/img/portrait-beard.png",
          options : [
            {
              label : "Craft",
              value : "craft"
            },
            {
              label : "Grow",
              value : "grow"
            },
            {
              label : "Beyond",
              value : "beyond"
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
      id : 'past',
      title : "The Past",
      steps : [
        {
          id : "format",
          intro : "You can't change the past",
          question : "Just how you choose to tell it.",
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
            },
            {
              label : "timeline",
              value : "timeline"
            },
            {
              label : "?",
              value : "?"
            },
          ]
        },
      ]
    },
    {
      id : 'present',
      title : "The Present",
      steps : [
        {
          id : "skills",
          intro : "choose something...",
          question : "What skills are you looking for?",
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
      ]
    }
  ]
}

export { schema };
